<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departments</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('../Css/Department.css') }}">
    <link rel="stylesheet" href="{{ asset('../Css/media.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>



</head>

<body>


@include('layouts.navbar')

    <div class="add mt-5 text-end me-5 ">
        <a href="{{ url('department/create') }}">
            <button class="add-new">
                <i style="color: #fff; font-size: 25px;" class="fa-solid fa-circle-plus"></i>
                <span style="color: #fff;margin-left: 10px;font-size: 22px;font-weight: bold"> Add New</span>
            </button>
        </a>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row gy-3">
            @foreach ($department as $d)
                <div class="col-md-4">
                    <div class="card p-3">

                        <img src="{{ $d->image }}" class="card-img-top" alt="...">

                        <div class="card-body text-center">
                            <h5 class="card-title "> {{ $d->name }}</h5>
                            <div class=" d-flex justify-content-evenly">
                                <a href="{{ url('department/update', $d->id) }}"><button type="button"
                                        class="btn up ">Update</button></a>
                                <a href="{{ url('department/delete', $d->id) }}"> <button type="button"
                                        class="btn del">Delete</button></a>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach















        </div>






    </div>




    {{-- <script src="{{ asset('../Javascript/index.js') }}"></script> --}}
</body>

</html>
