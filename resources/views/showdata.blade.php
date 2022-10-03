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
            <h1 class="text-center"> </h1>
            <a href="{{url('/add-data')}}" class="btn btn-primary">Add Blog</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Teacher Name</th>
                            <th>Number</th>
                            <th>Deggnation</th>
                            <th>Adress</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>

                            @php $i=1 @endphp
                            @foreach($teachers as $teacher)
                                <tr>

                                    <td>{{ $i++ }} </td>
                                    <td>{{ $teacher->name }} </td>
                                    <td>{{ $teacher->number }} </td>
                                    <td>{{ $teacher->deggnation }} </td>
                                    <td>{{ $teacher->adress }} </td>

                                    <td>
                                        <img src="{{ asset( $teacher->image) }}" style="height: 50px;width: 50px" alt="">
                                    </td>

                                    <td>
                                        <a href="{{ url('/edit',['id'=>$teacher->id]) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{url('/delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure !!')">
                                        </form>
                                    </td>
                                </tr>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
