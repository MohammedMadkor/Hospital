<nav class="navbar navbar-expand-lg ">
    <div class="container ">
        <i class="fa-sharp fa-solid fa-stethoscope ico"></i><span class="docPlace"><span class="doc">Doc</span>Place</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  mx-5" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="{{url('department')}}"><span >Departments</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="dep">Appointments</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{url('appointment')}}">My Appointments</a></li>
              <li><a class="dropdown-item" href="{{url('period')}}">Periods</a></li>
              <li><a class="dropdown-item" href="{{url('shift')}}">Time Of Shifts</a></li>

            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link  " href="{{url('staff')}}">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="{{url('adminpatient')}}">Patients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="{{url('AdminPrescription')}}">Prescription</a>
          </li>


        </ul>
        <div class="add ms-4 ">
          <a href="{{ route('signout') }}">
            <button class="add-new">
             <span style="color: #fff ;font-weight: bold"> LogOut</span>
            </button>
           </a>
         </div>

      </div>

    </div>

</nav>
