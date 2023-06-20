<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocPlace Site</title>
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
                        <a class="nav-link ms-2 text-black link-size" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 text-black" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 text-black" href="#doctors">Doctors</a>
                    </li>


                    @if (!Auth::user())
                    <a href="{{ url('login') }}" class=" text-decoration-none d-flex justify-content-center">
                    <div class="btn-group ms-3 w-100">
                        <button type="button" class="btn login ms-2">Login</button>
                    </div>
                    </a>
                    @endif
                    @if (Auth::user())
                    <a href="{{url('profile')}}" class=" text-decoration-none d-flex justify-content-center">
                        <div class="btn-group ms-3 w-100">
                            <button type="button" class="btn login ms-2">profile</button>
                        </div>
                        </a>

                    @endif
                    @if (Auth::user())
                    <a href="{{url('signout')}}" class=" text-decoration-none d-flex justify-content-center">
                        <div class="btn-group ms-3 w-100">
                            <button type="button" class="btn login ms-2">signout</button>
                        </div>
                        </a>

                    @endif




                </ul>


            </div>
        </div>
    </nav>
    <!-- section background -->
    <div class="header" id="home">
        <div class="header-layer">
            <h1 class="desc">
                <p>More Than Care...</p>
            </h1>
        </div>
    </div>
    <!-- section About -->
    <section class="container mt-5" id="about">
        <div class="row">
            <div class="col-md-4">
                <div class="layer1">
                    <img src="../images/smile.jpg" alt="" class='smile' />
                </div>

                <div class="layer2"></div>
            </div>
            <div class="col-md-8">
                <div class=" ms-3">
                    <h1 class=' fw-bolder fs-1 mt-5'>About Us</h1>
                    <p class='about'>DocPlace Hospital is a fully-fledged facility that is classified and positioned to
                        be one of the largest private hospital in Egypt.</p>
                    <p class="about d-none" id="myparagraph"> we have a lot of services such as booking online</p>
                    <button class='btn login mb-3' id="about-desc" onclick="readMore()">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- section why choose Docplace -->

    <section class="layer-icon position-relative ">
        <h1 class=' text-center pt-5 fw-bolder'>Why Choose DocPlace!?</h1>
        <div class="container cards mt-4">
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card-choose card text-center pt-5">
                        <i class="fa-solid fa-user-doctor fa-4x icon-item"></i>
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><span class='span-custom'>Qualified</span>Doctors</h4>
                            <p class="card-text">We provide top quality customer services . We have qualified doctor in
                                15+ categories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-choose card text-center pt-5">
                        <div class=' d-flex justify-content-center'>
                            <img src="../images/24hours.svg" alt="" class='sora' />
                        </div>

                        <div class="card-body">
                            <h4 class="card-title fw-bold"><span class='span-custom'>24 Hours </span>Services</h4>
                            <p class="card-text">We provide top quality customer services . We have qualified doctor in
                                15+ categories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-choose card text-center pt-5">
                        <div class=' d-flex justify-content-center'>
                            <img src="../images/ambulance.svg" alt="" class='sora' />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title fw-bold"><span class='span-custom'>Need</span> Emergency</h4>
                            <p class="card-text">We provide top quality customer services . We have qualified doctor in
                                15+ categories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- section services -->
    <section id="services">
        <h2 class='text-center pt-5 pb-1 fw-bolder'>Our Services</h2>
        <div class="container mt-2">
            <div class="row g-3">
                @foreach ($depts as $dept)
                    <div class="col-md-4">
                        <div class="section">
                            <div class='d-flex justify-content-center align-items-center services'>
                                <a href="{{url('patientadmin/doctor',$dept->id)}}">
                                    <img src="{{ $dept->image }}" alt="" class=' service-img' />
                                </a>

                            </div>
                            <h2 class='text-center py-4 fw-bolder'> {{ $dept->name }}</h2>
                        </div>
                    </div>
                @endforeach









            </div>
        </div>

    </section>

    <!-- section category -->
    <section>
        <h2 class='text-center pt-5 mt-5 fw-bolder'>Our Categories</h2>
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide position-relative" data-bs-ride="false">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/operation.png" class="d-block w-100" alt="..." />
                        <div class="describe-category">
                            <p class=' px-3 text-white pt-2'>Operation</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/medical.png" class="d-block w-100" alt="..." />
                        <div class="describe-category">
                            <p class=' px-3 text-white pt-2'>Medical Test</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/x-ray.png" class="d-block w-100" alt="..." />
                        <div class="describe-category">
                            <p class=' px-3 text-white pt-2'>X-Rays</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

            </div>
        </div>
    </section>


    <!-- section doctors -->
    <section id="doctors">
        <h2 class='text-center pt-5 mt-5 fw-bolder'>Our Doctors</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class=" container-fluid">
                        <div class="row g-4">
                            @foreach ($Fdoctors as $Fdoctor)
                                <div class="col-md-3">
                                    <div class="card">
                                        <a href="{{url('patientadmin/appointment',$Fdoctor->id)}}">
                                            <div class=" d-flex justify-content-center align-items-center">
                                                <img src="{{$Fdoctor->image}}" class="card-img-top carsoul p-4" alt="..."/>
                                              </div>
                                        </a>

                                        <div class="card-body text-center">
                                            <h3 class="card-title fw-bold">{{ $Fdoctor->name }}</h3>
                                            <p class="card-text Doc">{{ $Fdoctor->Department->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>


                </div>
                <div class="carousel-item">
                    <div class=" container-fluid">
                        <div class="row g-4">
                            @foreach ($Ldoctors as $Ldoctor)
                                <div class="col-md-3">
                                    <div class="card">
                                        <a href="{{url('patientadmin/appointment',$Ldoctor->id)}}">
                                            <div class=" d-flex justify-content-center align-items-center">
                                                <img src="{{$Ldoctor->image}}" class="card-img-top carsoul p-4" alt="..."/>
                                              </div>
                                        </a>

                                        <div class="card-body text-center">
                                            <h3 class="card-title fw-bold">{{ $Ldoctor->name }}</h3>
                                            <p class="card-text Doc">{{ $Ldoctor->Department->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>
                </div>

            </div>
            <div class="slider">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>


    <!-- section talk about us  -->
    <section>
        <div class="layer-icon mt-5 p-5">
            <h1 class=' text-center fw-bolder'>Patient Talk About Us</h1>

            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="patient mt-5">
                            <div class=' d-flex'>
                                <div class="circle">
                                    <img src="../images/doctor1.jpg" alt="" class=' w-100' />
                                </div>
                                <div class=' ms-4'>
                                    <h2 class=' fw-bold'> saeed</h2>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class=' ms-4 mt-2'>Thank you for all the services , it is the best hospital.</p>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="patient mt-5">
                            <div class=' d-flex'>
                                <div class="circle">
                                    <img src="../images/doctor1.jpg" alt="" class=' w-100' />
                                </div>
                                <div class=' ms-4'>
                                    <h2 class=' fw-bold'> saeed</h2>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class=' ms-4 mt-2'>Thank you for all the services , it is the best hospital.</p>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="patient mt-5">
                            <div class=' d-flex'>
                                <div class="circle">
                                    <img src="../images/doctor1.jpg" alt="" class=' w-100' />
                                </div>
                                <div class=' ms-4'>
                                    <h2 class=' fw-bold'> saeed</h2>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-regular fa-star text-muted"></i>
                                </div>
                            </div>
                            <p class=' ms-4 mt-2'>Thank you for all the services , it is the best hospital.</p>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="patient mt-5">
                            <div class=' d-flex'>
                                <div class="circle">
                                    <img src="../images/doctor1.jpg" alt="" class=' w-100' />
                                </div>
                                <div class=' ms-4'>
                                    <h2 class=' fw-bold'> saeed</h2>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class=' ms-4 mt-2'>Thank you for all the services , it is the best hospital.</p>

                        </div>


                    </div>



                </div>
            </div>




        </div>
    </section>

    <!-- section expert talken -->
    <section>
        <div class=' ps-5'>
            <h2 class=' fw-bold mt-5'>Our Latest Artical</h2>
            <h6 class='text fw-bold mt-3'>Written by our experts</h6>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 parent mt-3">
                    <div class="triangle">
                        <img src="../images/health.jpg" alt="" />
                    </div>
                    <div class='triangle-desc'>
                        <h3 class=' fw-bold text'>Health Check Ups for Family</h3>
                        <p>With our subscription you can get your Family secure by full body check up for free</p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="col-md-12 parent d-flex align-items-center p-0 mt-3">
                        <div class="triangle2">
                            <img src="../images/health eat.jpeg" alt="" />
                        </div>
                        <div class='triangle2-desc'>
                            <h5 class=' fw-bold text'>Healthy Eating</h5>
                            <p>Foods, fruits diets that can help you can that great figure and you can bloom not just
                                physically but mentally too</p>

                        </div>
                    </div>
                    <div class="col-md-12 parent d-flex align-items-center p-0 mt-4">
                        <div class="triangle2">
                            <img src="../images/moderateExercise-500591410-770x553-1-650x428.jpg" alt="" />
                        </div>
                        <div class='triangle2-desc'>
                            <h5 class=' fw-bold text'>Exersise</h5>
                            <p>Workout that can help you boost your spark and help you be more active and strong from
                                the core</p>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>



    <footer class="design-footer mt-5 pt-5 pb-3 ">
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

    <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../js/index.js') }}"></script>
</body>

</html>
