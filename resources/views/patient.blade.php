<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link  href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">patient Name</th>
            <th scope="col">Doctor NAme</th>
            <th scope="col">date</th>
            <th scope="col">period</th>
            <th scope="col">action</th>


          </tr>
        </thead>
        <tbody>
@foreach ( $myapp as $app )
<tr>
    <th scope="row"> {{$loop->index + 1}}  </th>
    <td>{{$app->User->name}}</td>
    <td>{{$doctor->name}}</td>
    <td>{{$app->date}}</td>
    <td>{{$app->Period->period_number}}</td>
    <td>
        <a class="btn btn-primary" href="{{url('prescription/createPrescription',$app->user_id)}}">add Prescription</a>
    </td>


  </tr>

@endforeach


        </tbody>
      </table>
    </div>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
