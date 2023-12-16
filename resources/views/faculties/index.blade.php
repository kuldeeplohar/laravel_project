@extends('layout.master')
@section('content')
<div class="container">

        <div class="row mt-5">
            <div class='col-4 '>
                <div class="card" style="width: 18rem;">
                  <div class="card-header fw-bold">
                    Create Faculty
                  </div>

                  @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif
                  <form action="{{route('faculty.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name='title' class="form-control" id="title" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                      <label for="shortcode" class="form-label">Shortcode </label>
                      <input type="text" name='shortcode' class="form-control" id="shortcode">
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Save</button>
                    </div>

                  </form>
                 </div>
            </div>

                <div class='col-8 '>
                     <div class='card'>
                        <div class="card-header fw-bold">Faculty List</div>
                        <table class="table  ">
                            <thead>
                                <tr>
                                <th scope="col">id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Shortcode</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dt as $d)

                                <tr>
                                    <th scope="row">{{$d['id']}}</th>
                                    <td >{{$d['title']}}</td>
                                    <td>{{$d['shortcode']}}</td>
                                    <td>{{$d['status']}}</td>
                                    <td>

                                    <a href="{{URL::to('faculty/show/'. $d['id'])}}"  class='btn btn-primary btn-sm'>show</a>
                                    <a href="{{URL::to('faculty/edit/'. $d['id'])}}"   class='btn btn-primary btn-sm'>Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete('{{URL::to('faculty/delete/'. $d['id'])}}')">Delete</a>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer fw-bold">
                            <div class="row mt-0">
                                <div class="col-6  ">
                                    <div class="w-75 ">
                                            <form action="" method="GET" class="form-inline">
                                                <input  type="text" name="search" id="search" class="form-control" value='' placeholder="Enter search query">
                                                <button type="submit" class="btn btn-primary btn-sm ml-2">Search</button>
                                            </form>
                                        </div>
                                </div>
                                <div class="col-6 ">
                                        <div class="d-flex justify-content-end mt-2">
                                        {{ $dt->onEachSide(1)->links('vendor.pagination.tailwind') }}
                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>

            </div>
        </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


            <script>
                function confirmDelete(deleteUrl) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If confirmed, redirect to the delete URL
                            window.location.href = deleteUrl;
                        }
                    });
                }
            </script>
  @endsection

