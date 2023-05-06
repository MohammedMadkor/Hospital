<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('../Css/Department.css')}}">




<body>
    @include('layouts.navbar')

<div class="container">
    <div class="table-responsive">
        <h3 class="text-center mt-5">Prescription</h3>
        <table class="table text-center mt-3">
            <thead class="table-light">
                <tr class=" fw-bold">
                    <th scope="col" class="table-data">ID</th>
                    <th scope="col" class="table-data">Doctor Name</th>
                    <th scope="col" class="table-data">Patient Name</th>
                    <th scope="col" class="table-data">Date</th>
                    <th scope="col" class="table-data"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prescription as $p)
                <tr>
                    <th scope="row" class=" py-3">{{$loop->index + 1}}</th>
                    <td class=" py-3">{{$p->Doctorprescription->name}}</td>
                    <td class=" py-3">{{$p->Userprescription->name}}</td>
                    <td class=" py-3">{{$p->date}}</td>


    <td class=" py-3">
        <div class=" ">
            <a href="{{url('viewprescription',$p->id)}}" class="text-decoration-none "><button type="button" class="link-Prescription ">view Prescription</button></a>
        </div>

    </td>

    </tr>
    @endforeach






    </tbody>
    </table>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="../Javascript/index.js"> </script>
</body>

</html>
