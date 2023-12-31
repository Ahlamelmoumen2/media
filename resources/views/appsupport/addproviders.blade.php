<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD PROVIDERS</title>

</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col s12">
               <h1>ADD PROVIDERS</h1>
               <form action="addprv" method="POST">
                 @csrf


                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" name="name"  >
                          <span style="color: red">@error('name'){{$message}}

                            @enderror</span>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="link">
                          <span style="color: red">@error('link'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="user" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="user">
                          <span style="color: red">@error('user'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password">
                          <span style="color: red">@error('password'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="location">
                          <span style="color: red">@error('location'){{$message}}

                            @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="comment">
                          <span style="color: red">@error('comment'){{$message}}

                            @enderror</span>
                        </div>
                    </div>

                    <button type="submit">add</button>
                    <a href="{{ url('home') }}"> <button type="button">cancel</button></a>



                </form>
                <br><br><hr>




                <h1>List PROVIDERS</h1>

                <table class="table table-success table-striped">
                    <thead>
                      <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">User</th>
                        <th scope="col">Password</th>
                        <th scope="col">Location</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Actions</th>


                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pro as $itm)
                            <tr>

                                <td scope="col">{{$itm->name}}</td>
                                <td scope="col">{{$itm->link}}</td>
                                <td scope="col">{{$itm->user}}</td>
                                <td scope="col">{{$itm->password}}</td>
                                <td scope="col">{{$itm->location}}</td>
                                <td scope="col">{{$itm->comment}}</td>

                                <td scope="col">
                                    <a href="/delete/{{$itm->id}}"><button type="button">Delete</button></a>
                                    <a href="/edit/{{$itm->id}}"><button type="button">Edit</button></a>

                                </td>


                            </tr>

                        @endforeach


                    </tbody>
                  </table>



            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
