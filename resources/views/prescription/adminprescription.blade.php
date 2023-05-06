<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <table class="table my-5 table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">DoctorName </th>
            <th scope="col">PatientNAme</th>
            <th scope="col">Date</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($prescription as $p)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$p->Doctorprescription->name}}</td>
                <td>{{$p->Userprescription->name}}</td>
                <td>{{$p->date}}</td>
                <td>
                    <a href="{{url('viewprescription',$p->id)}}">prescription </a>
                </td>
            </tr>

            @endforeach



        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
