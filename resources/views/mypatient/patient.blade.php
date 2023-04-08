<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link  href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">date</th>
            <th scope="col">period_id</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
@foreach ($mypatient as $patient)
<tr>
    <th scope="row"> {{$loop->index +1}} </th>
    <td>{{$patient->User->name}}</td>
    <td>{{$patient->date}}</td>
    <td>{{$patient->Period->period_number}}</td>
    <td>
        <a href="{{url('addprescription',$patient->id)}}">
            <button type="button" class="btn btn-primary">add prescription</button>
        </a>
    </td>
  </tr>

@endforeach


        </tbody>
      </table>
    </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
