<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('../css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/media1.css') }}">
</head>

<body>
    <!-- NavBar -->

    <section class="background-form">

        <div class="container pt-5">
            <div class="row g-0">
                <div class="col-md-4 d-flex flex-column justify-content-between main-background rounded-start left-side ">
                    <div class=' d-flex justify-content-center align-items-center ps-3 fw-bold py-3 text-white'>
                        <i class="fa-solid fa-stethoscope fa-2x "></i>
                        <h1>Docplace</h1>
                    </div>

                    <img src="../images/Public Opinion Research 1200x666-removebg-preview.jpg"
                        class="w-100 rounded-bottom" alt="" />
                </div>

                <div class="col-md-8 rounded-2">
                    <div class="bg-white rounded-end">
                        <h1 class='text text-center ps-3 fw-bold py-3'>Login</h1>
                        <div class="container">
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"placeholder="National ID"
                                        name="national_id" />
                                    <label for="floatingInput">National ID</label>
                                    @error('national_id')
                                        <span class="text-danger err-msg-national_id" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Phone Number"
                                        name="phone" />
                                    <label for="floatingPassword">Phone Number</label>
                                    @error('phone')
                                        <span class="text-danger err-msg-phone" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center"> <button class="btn btn-primary text-center  m-3"
                                    type="submit">Login</button></div>

                            </form>


                            <h5 class=" text-center p-3">Don't have an account. <a class=" text-decoration-none"
                                    href="{{url('registration')}}">Signup</a> </h5>

                        </div>

                    </div>
                </div>

            </div>
        </div>


    </section>
    <footer class="design-footer mt-1 pt-5 pb-3   ">
        <div class="container">
        <div class="row g-3">
          <div class="col-md-4">
            <div class=' text-white'>
            <h2><i class="fa-solid fa-stethoscope"> Docplace</i> </h2>
         <p>Located in the heart of New Cairo, we are here to fill in the widening gap within the health care sector. Our facilities, equipment, and physicians are of the highest standards.</p>
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

    <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../js/index.js') }}"></script>
</body>

</html>
