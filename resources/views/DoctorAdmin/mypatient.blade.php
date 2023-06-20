<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mypatient</title>
    <link rel="shortcut icon" href="{{ asset('../images/24hours.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('../css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/media.css') }}">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg bg-light main-nav" id="main-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-stethoscope icon-nav"><span class='Doc'>Doc</span>
                    <p class='place'>place</p>
                </i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link ms-2 text-black link-size" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 text-black" href="">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 text-black" href="">Doctors</a>
                    </li>


                    <a href="../Html/login.html" class=" text-decoration-none d-flex justify-content-center">
                        <div class="btn-group ms-3 w-100">
                            <button type="button" class="btn login ms-2">Login</button>
                        </div>
                    </a>

                    <div class="btn-group ms-3">
                        <a href="../Html/signup.html">
                            <button type="button" class="btn login ms-2"> SignUp As Patient</button>
                            </button>
                        </a>

                    </div>

                </ul>


            </div>
        </div>
    </nav>



    <div class="main-background">
        <div class="container text-white ">
            <h5 class=" pt-2">Home / My patients</h5>
            <h1 class=" fw-bold pb-2"> My patients</h1>
        </div>

    </div>


    <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class=" p-3 text-center data-doctor">
                <img src="{{ $doctor->image }}" alt="" class=" rounded-circle img-doctor m-auto">
                <h4 class=" pt-2 fw-bold">{{ $doctor->name }}</h4>
                <h6 class=" text-muted fw-bold">{{ $doctor->Department->name }}</h6>
              </div>
              <a href="{{ url('DoctorAdmin/appointment') }}" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span class=" ps-2">Appoinment</span>
                </div>
            </a>
            <a href="{{ url('DoctorAdmin/mypatient') }}" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-user-group"></i>
                    <span class=" ps-2">My Patients</span>
                </div>
            </a>

            <a href="{{ url('DoctorAdmin/details') }}" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-gear"></i>
                    <span class=" ps-2">Profile Setting</span>
                </div>
            </a>
            <a href="{{ route('signout') }}" class=" text-decoration-none">
                <div class="appoinment p-3 text-muted">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class=" ps-2">Logout</span>
                </div>
            </a>
            </div>

            <div class="col-md-9 d-flex flex-wrap ">
                @foreach ($users as $user)
              <div class="w-50  data-patient data-doctor p-3  text-center mb-3">
                <img src="{{ $user->image }}" class="img-patient" alt="">
                <h4 class=" pt-2 fw-bold">{{ $user->name }}</h4>
                <p class=" text-muted ">Patient ID: #1000</p>
                <hr class=" text-muted">

                <div class=" d-flex  justify-content-center">
                  <h6 class=" fw-semibold">Phone :</h6>
                  <p class="ps-2 text-muted">  {{ $user->phone }}</p>
                  <br />
                </div>
                <div class=" d-flex  justify-content-center">
                  <h6 class=" fw-semibold">Age: :</h6>
                  <p class="ps-2 text-muted"> {{ $user->age }}</p>
                  <br />
                </div>
                <div class=" d-flex  justify-content-center">
                  <h6 class=" fw-semibold">Blood Group: :</h6>
                  <p class="ps-2 text-muted">
                    @if ($user->blood_type == 1)
                    {{ 'A' }}
                @elseif ($user->blood_type == 2)
                    {{ 'B' }}
                @elseif ($user->blood_type == 3)
                    {{ 'AB' }}
                @elseif ($user->blood_type == 4)
                    {{ 'O' }}
                @endif
                  </p>
                  <br />
                </div>
              </div>
              @endforeach






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
                        <p>Located in the heart of New Cairo, we are here to fill in the widening gap within the health
                            care sector. Our facilities, equipment, and physicians are of the highest standards.</p>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="100%" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=جامعة طنطا كلية الحاسبات &t=&z=10&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                            <img src="../images/24hours.svg " alt="">
                            <h5 class=' ms-2'>24 hours services</h5>
                        </div>

                        <h2 class=' fw-bolder fs-1'>Visiting hours</h2>
                        <h5 class=' ms-4'>Fri-Sun: 13:00-14:00</h5>






                    </div>
                </div>
            </div>


        </div>
    </footer>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>
