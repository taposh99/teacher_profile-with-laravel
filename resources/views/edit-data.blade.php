<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/')}}" class="btn btn-primary">show all data</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  value="{{ $teacher->id }}" name="teacher_id">

                        <label class="">Teacher Name : </label>
                        <input type="text" class="form-control" value="{{ $teacher->name }}"  name="teacher_name" placeholder="Teacher Name"><br>

                        <label class="">Phone : </label>
                        <input type="text" class="form-control" value="{{ $teacher->number }}"  name="number" placeholder="number"><br>

                        <label class="">adress : </label>
                        <input type="text" class="form-control" value="{{ $teacher->adress }}"  name="adress" placeholder="adress"><br>


                        <label class="">deggnation : </label>
                        <input type="text" class="form-control" value="{{ $teacher->deggnation }}"  name="deggnation" placeholder="deggnation"><br>


                        <label class="">Image : </label>
                        <input type="file" class="form-control" name="image"><br>
                        <img src="{{ asset($teacher->image) }}" style="height: 50px;width: 50px" alt="">
                        <input type="submit" value="update" class="form-control btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
