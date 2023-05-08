<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find Doctor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
<link href="{{asset('../Css/Navbar.css')}}" rel="stylesheet">
<link href="{{asset('../Css/Footer.css')}}" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('../css/style.css') }}"> --}}

<link rel="stylesheet" href="{{asset('../Css/FindDoctors.css')}}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



  </head>

  <body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
          <i class="fa-sharp fa-solid fa-stethoscope ico"></i><span class="docPlace"><span class="doc">Doc</span>Place</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  mx-5" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" aria-current="page" href=""><span >Home</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" aria-current="page" href=""><span >Services</span></a>
              </li>

              <li class="nav-item ">
                <a class="nav-link  " href="#">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  href="#">Pharmacy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  href="#">Lab</a>
              </li>

            </ul>
            <div class="add ms-4 ">
              <a href="../Html/AddDepartment.html">
                <button class="add-new">
                 <span style="color: #fff ;font-weight: bold"> LogOut</span>
                </button>
               </a>
             </div>

          </div>

        </div>

    </nav>



    <div class="container1">
        <a href="../Html/PatientProfile.html">
          <img  src="{{$patient->image}}">
        </a>
       <div class="text">
        <p >Hello!</p>
        <p >{{$patient->name}}</p>
       </div>
    </div>

    <div  class="container">

   <p class="doctor">Our Doctors</p>
   @foreach ($doctor as $d)
        <div class="card" >
          <img src="{{ $d->image }}" class="card-img-top" alt="...">
          <div class="card-body">
              <div class="text-section">
                 <h6 class="card-title"> {{ $d->name }}</h6>
                 <p>{{ $d->Department->name }}</p>
                 <p class="card-text price">100LE</p>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
             </div>
             <div class="sec-section">
              <a href="{{url('patientadmin/profiledoctor',$d->id)}}" class="btn   ">Profile</a>
              <a href="{{url('patientadmin/appointment',$d->id)}}" class="btn ">Booking</a>


             </div>
          </div>
        </div>
        @endforeach








    </div>


    <footer class="design-footer mt-1 pt-5 pb-3  mt-5 ">
      <div class="container">
      <div class="row g-3">
        <div class="col-md-4">
          <div class=' text-white'>
          <h2><i class="fa-solid fa-stethoscope"> Doc place</i> </h2>
       <p class="text-footer">Located in the heart of New Cairo, we are here to fill in the widening gap within the health care sector. Our facilities, equipment, and physicians are of the highest standards.</p>
       <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=جامعة طنطا كلية الحاسبات &t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <br>

        </div>
      </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class=' text-white'>
          <h2 class=' fw-bolder fs-1'>Contact Us </h2>
          <div class=' d-flex mt-4 ms-2 '>
          <i class="fa-solid fa-phone"></i>
          <h6 class=' ps-2'>+1 315 369 5943</h6>

          </div>
          <div class="social d-flex">
          <div class="square mt-4 d-flex justify-content-center align-items-center">
          <i class="fa-brands fa-square-facebook"></i>
          </div>
          <div class="square mt-4 d-flex justify-content-center align-items-center">
          <i class="fa-brands fa-twitter"></i>
          </div>
          <div class="square mt-4 d-flex justify-content-center align-items-center">
          <i class="fa-brands fa-youtube"></i>
          </div>
          <div class="square mt-4 d-flex justify-content-center align-items-center">
          <i class="fa-brands fa-linkedin-in"></i>
          </div>
          </div>



        </div>
      </div>
        <div class="col-md-4">
          <div class=' text-white'>
          <h2 class=' fw-bolder fs-1'>Times of work</h2>
          <div class=' d-flex align-items-center mb-2 hours '>
            <img src="{{asset('../images/24hours.svg')}} " alt="">
                <h5 class=' ms-2'>24 hours services</h5>
                </div>

          <h2 class=' fw-bolder fs-1'>Visiting hours</h2>
          <h5 class=' ms-4'>Fri-Sun: 13:00-14:00</h5>






        </div>
      </div>
      </div>


        </div>
        </footer>

  </body>
</html>
