<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create form</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
            <div class='col-8 '>
                <div class="card w-50 offset-5" style="width: 18rem;">
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
                  <form action="{{URL::to('faculty/update')}}" method="POST">

                    @csrf
                    <input type="hidden" name='id' value="{{$ediit->id}}" class="form-control" id="id" aria-describedby="id">
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name='title' value="{{$ediit->title}}" class="form-control" id="title" aria-describedby="title">
                    </div>
                    <div class="mb-3">
                      <label for="shortcode" class="form-label">ShortCode </label>
                      <input type="text" name='shortcode' value="{{$ediit->shortcode}}" class="form-control" id="shortcode">
                    </div>
                    <div class="mb-3">
                      <label for="status" class="form-label">Status </label>
                      <input type="text" name='status' value="{{$ediit->status}}" class="form-control" id="status">
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Update</button>
                    </div>

                  </form>
                 </div>
            </div>
        </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
