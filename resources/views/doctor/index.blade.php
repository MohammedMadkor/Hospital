<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('../Css/Department.css') }}">
    <link rel="stylesheet" href="{{ asset('../Css/media.css') }}">



<body>
    @include('layouts.navbar')

    <div class="add mt-5 text-end me-5 ">
        <a href="{{url('staff/create')}}">
            <button class="add-new">
                <i class="fa-solid fa-circle-plus icon-circle"></i>
                <span class="text-add"> Add Doctor</span>
            </button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table text-center mt-3">
            <thead class="table-light">
                <tr class=" fw-bold">
                    <th scope="col" class="table-data">ID</th>
                    <th scope="col" class="table-data">Shift ID</th>
                    <th scope="col" class="table-data">Department</th>
                    <th scope="col" class="table-data">Image</th>
                    <th scope="col" class="table-data">Name</th>
                    <th scope="col" class="table-data">National ID</th>
                    <th scope="col" class="table-data">Phone Number</th>
                    <th scope="col" class="table-data">Salary</th>
                    <th scope="col" class="table-data">Address</th>
                    <th scope="col" class="table-data">gender</th>
                    <th scope="col" class="table-data">Age</th>
                    <th scope="col" class="table-data">About</th>
                    <th scope="col" class="table-data"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctor as $d)
                <tr>
                    <th scope="row" class=" py-3">{{$loop->index + 1}}</th>
                    <td class=" py-3">{{$d->Shift->name}}</td>
                    <td class=" py-3">{{$d->Department->name}}</td>

                    <td class="py-3">

                            <img src="{{$d->image}}" alt="" class="square">

                    </td>
    <td class=" py-3">{{$d->name}}</td>
    <td class=" py-3">{{$d->national_id}}</td>
    <td class=" py-3">{{$d->phone}}</td>
    <td class=" py-3">{{$d->salary}}</td>
    <td class=" py-3">{{$d->address}}</td>
    <td class=" py-3">@if ($d->gender == 1)
        {{'male'}}

        @else
        {{'female'}}

        @endif
    </td>
    <td class=" py-3">{{$d->age}}</td>
    <td class=" py-3 px-0">{{$d->about}}</td>

    <td class=" py-3">
        <div class=" ">
            <a href="{{url('staff/update',$d->id)}}" class="text-decoration-none link-update">Update</a> <br />
            <a href="{{url('staff/delete',$d->id)}}" class="text-decoration-none text-danger">Delete</a>
        </div>

    </td>

    </tr>
    @endforeach











    </tbody>
    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    
</body>

</html>
