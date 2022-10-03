<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/')}}" class="btn btn-primary">All Teacher information</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('/form')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="">Teacher Name : </label>
                        <input type="text" class="form-control" name="teacher_name" placeholder="Teacher Name"><br>
                        <label class="">Number : </label>
                        <input type="text" class="form-control" name="number" placeholder="Number"><br>
                        <label class="">Deggnation : </label>
                        <input type="text" class="form-control" name="deggnation" placeholder="Deggnation"><br>
                        <label class="">Adress : </label>
                        <textarea type="text" name="adress" class="form-control"placeholder="adress"></textarea><br>
                        <label class="">Image : </label>
                        <input type="file" class="form-control" name="image"><br>
                        <input type="submit" value="submit" class="form-control btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
