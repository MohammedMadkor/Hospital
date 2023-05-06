<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="card" style="width: 18rem; ">
        <div class="card-body">
            <h5 class="card-title">{{$prescription->Userprescription->name}} </h5>
            <h5 class="card-title">{{$prescription->Doctorprescription->name}}</h5>
            <p class="card-text">{{$prescription->diagnosis}}</p>
            <p class="card-text">{{$doctor->Department->name}} </p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">potion</th>
                        <th scope="col">note</th>
                    </tr>
                    @foreach ($prescription->Medicine as $medicine)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$medicine->name}}</td>
                        <td>{{$medicine->potion}}</td>
                        <td>{{$medicine->note}}</td>

                    </tr>

                    @endforeach
                </thead>
                <tbody>




                </tbody>
            </table>
            <h5 class="card-title">{{$prescription->analysis}}</h5>
            <h5 class="card-title">{{$prescription->rays}}</h5>



        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
