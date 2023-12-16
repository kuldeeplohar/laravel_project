<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    protected $table = 'Faculties';
    use HasFactory;
    public function getFaculties(){

        return $this->paginate(10);

    }
    protected $fillable = ['title','shortcode','status','id'];
    public static function getAllFaculties($data)
    {
         // dd($data->all());

           $faculty = Faculties::create($data);

           return response()->json($faculty, 201);

    }

    public static function updateFaculties($data)
    {
       // $employee = Faculties::find(1);



            Faculties::where('id',$data['id'])
            ->update([
                'id' => $data['id'],
                'title' => $data['title'],
                'shortcode' =>  $data['shortcode'],
                'status' =>  $data['status'],
            ]);

    }

}
