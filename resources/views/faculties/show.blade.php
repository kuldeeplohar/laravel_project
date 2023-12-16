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
    <div class='col-8 mt-5 of   offset-2 '>
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


                      <tr>
                        <th scope="row">{{$post['id']}}</th>
                        <td >{{$post['title']}}</td>
                        <td>{{$post['shortcode']}}</td>
                        <td>{{$post['status']}}</td>
                        <td>

                           <Button  class='btn btn-primary btn-sm'>Edit</Button>
                           <Button class='btn btn-danger btn-sm'>Delete</Button>
                        </td>


                      </tr>

                  </tbody>
                </table>

              </div>
            </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
