<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    @foreach ($prescription as $p)
        <div class="card" style="width: 18rem; ">
            <div class="card-body">
                <h5 class="card-title">{{$p->Userprescription->name}} </h5>
                <h5 class="card-title">{{$p->Doctorprescription->name}}</h5>
                <p class="card-text">{{$p->diagnosis}}</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">potion</th>
                            <th scope="col">note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p->Medicine as $m)
                        <tr>
                            <th scope="row">{{$loop->index}}</th>
                            <td>{{$m->name}}</td>
                            <td>{{$m->potion}}</td>
                            <td>{{$m->note}}</td>
                        </tr>

                        @endforeach




                    </tbody>
                </table>
                <h5 class="card-title">{{$p->analysis}}</h5>
                <h5 class="card-title">{{$p->rays}}</h5>



            </div>
        </div>
    @endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
