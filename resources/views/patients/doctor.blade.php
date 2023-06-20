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
    <link href="{{ asset('../Css/PatientProfile.css') }}" rel="stylesheet">


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
    <div class="main-background">
      <div class="container text-white ">

          <h1 class=" fw-bold p-2">Doctors </h1>
      </div>

  </div>

<section>
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-3">
                <div class=" p-3 text-center data-patient1 mt-3">
                    <img src="../IMG-20230321-WA0013.jpg" alt="" class=" rounded-circle img-patient m-auto">
                    <h4 class=" pt-2 fw-bold">Mohamed Saeed</h4>

                </div>
                <a href="../Html/HistoryPatient.html" class=" text-decoration-none">
                  <div class="appoinment p-3 text-muted">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <span class=" ps-2 fw-bold">History</span>
                </div>
                </a>
                <a href="../Html/PatientAppointments.html" class=" text-decoration-none">
                  <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="ps-2 fw-bold">My Appointments</span>
                </div>
                </a>

                <a href="../Html/Personail Details.html" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                  <i class="fa-solid fa-circle-user"></i>
                    <span class=" ps-2 fw-bold">Persoal Details</span>
                </div>
                </a>
                <a href="../Html/department-patient.html" class=" text-decoration-none">
                  <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-arrow-right"></i>
                      <span class=" ps-2 fw-bold">Departments</span>
                  </div>
                  </a>
                <a href="#" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class=" ps-2 fw-bold">Logout</span>
                </div>
                </a>
            </div> --}}
            @include('layouts.dash')



                <div class="col-md-9">
                    @foreach ($doctor as $d)
                    <div class="card" >
                        <img src="{{ $d->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-section">
                               <h6 class="card-title">{{ $d->name }}</h6>
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


        </div>

    </div>
    </div>

    </section>


<footer class="design-footer mt-1 pt-5 pb-3  mt-5 ">
  <div class="container">
  <div class="row g-3">
    <div class="col-md-4">
      <div class=' text-white'>
      <h2><i class="fa-solid fa-stethoscope"> Docplace</i> </h2>
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
        <img class="img-foot" src="{{ asset('../images/24hours.svg') }}" alt="">
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
