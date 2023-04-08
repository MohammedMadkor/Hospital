<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('../Css/Department.css') }}">
    <link rel="stylesheet" href="{{ asset('../Css/media.css') }}">



<body>
    @include('layouts.navbar')



    <h1 class=" text-center patient mt-4"> Patients </h1>
    <div class="container">
        <div class="table-responsive">
            <table class="table text-center mt-3">
                <thead class="table-light">



                    <tr class=" fw-bold">
                        <th scope="col" class="table-data">ID</th>

                        <th scope="col" class="table-data">Image</th>
                        <th scope="col" class="table-data">Name</th>
                        <th scope="col" class="table-data">National ID</th>
                        <th scope="col" class="table-data">Phone Number</th>
                        <th scope="col" class="table-data">Blood type</th>

                        <th scope="col" class="table-data">gender</th>
                        <th scope="col" class="table-data">Age</th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($patient as $p)
                    <tr>
                        <th scope="row" class=" py-3">{{$loop->index + 1}}</th>

                        <td class="py-3">

                            <img src="{{$p->image}}" alt="" class="square">

                    </td>
        <td class=" py-3">{{$p->name}}</td>
        <td class=" py-3">{{$p->national_id}}</td>
        <td class=" py-3">{{$p->phone}}</td>
        <td class=" py-3">@if ($p->blood_type == 1)
            {{'A'}}

            @elseif ($p->blood_type == 2)
            {{'B'}}
            @elseif ($p->blood_type == 3)
            {{'AB'}}
            @elseif ($p->blood_type == 4)
            {{'O'}}

            @endif</td>

        <td class=" py-3">@if ($p->gender == 1)
            {{'male'}}

            @else
            {{'female'}}

            @endif</td>
        <td class=" py-3">{{$p->age}}</td>


        </tr>
        @endforeach
        </tbody>
        </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>
