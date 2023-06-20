<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prescription</title>
        <link rel="shortcut icon" href="../images/24hours.svg" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('../css/style.css')}}">
        <link rel="stylesheet" href="{{asset('../css/media.css')}}">
    </head>

<body>
    <!-- NavBar -->



    <h1 class=" text-center fw-bold mt-4 main-color "> lab</h1>

    <div class="container">

        <div class=" d-flex">
            <div class="appoinment w-50 p-3  m-3">
                <h5 class=" fw-bold main-color">Name : <span class=" text-black fw-light"> {{$prescription->Userprescription->name}}</span></h5>
                <h5 class=" fw-bold main-color">Date : <span class=" text-black fw-light"> {{$prescription->date}}</span></h5>
            </div>
            <div class="appoinment w-75 p-3  m-3 text-center">
                <h5 class=" fw-bold main-color">Doctor : <span class=" text-black fw-light"> {{$prescription->Doctorprescription->name}}</span></h5>
                <span class=" text-black fw-light"> {{$prescription->Doctorprescription->Department->name}} </span>
            </div>
        </div>




        <div class="container my-5">
            @if ($prescription->analysis)
            <h4 class=" fw-bold main-color text-center"> X-rays </h4>


            <div class="appoinment w-100 p-3  m-2">
                {{$prescription->analysis}}
            </div>

            @endif
            @if ($prescription->rays)
            <h4 class=" fw-bold main-color text-center"> Analysis</h4>
            <div class="appoinment w-100 p-3  m-2">
                {{$prescription->rays}}
            </div>

            @endif




        </div>

    </div>





    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>
