<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Add Post</title>
</head>
<body>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <p>Add Post</p>
                            <a href={{"/"}} class="btn btn-primary ">All Posts</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post-created'))
                                <div class="alers alert-success" role="alert">
                                    {{Session::get('post-created')}}
                                </div>
                            @endif
                            <form action="/created-post" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter your totle here">
                                </div><br>
                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea type="text" name="body" class="form-control" rows="3" placeholder="Enter your description here"></textarea>
                                </div><br>
                                <button class="btn btn-success">Add Post</button>
                                <label for=""></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>