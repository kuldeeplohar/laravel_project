<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $facultyModel = new Faculties();
        

        // Call the non-static method on the instance
        $facultyData = $facultyModel->getFaculties();

     return view('faculties.index',['dt'=>$facultyData]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'title' => 'required|regex:/^[a-zA-Z ]+$/|min:3',
            'shortcode' => 'required    ',
        ]);

          Faculties::getAllFaculties($Data);

          return  redirect('faculty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showdata = Faculties::findOrFail($id);

        // Pass the post data to the view
        return view('Faculties.show', ["post" => $showdata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata = Faculties::findOrFail($id);

        // Pass the post data to the view
        return view('Faculties.edit', ["ediit" => $editdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Data = $request->validate([
            'id' => '',
            'title' => 'required|regex:/^[a-zA-Z ]+$/|min:3',
            'shortcode' => ' ',
            'status' => ' ',
        ]);

          Faculties::updateFaculties($Data);

         return  redirect('faculty');

;    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculties  $faculties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faculties::findOrFail($id)->delete();
        return  redirect('faculty');

    }
}
