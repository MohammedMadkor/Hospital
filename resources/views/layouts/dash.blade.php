<div class="col-md-3">
    <div class=" p-3 text-center data-patient1 mt-3">
        <img src="{{ $user->image }}" alt="" class=" rounded-circle img-patient m-auto">
        <h4 class=" pt-2 fw-bold">{{ $user->name }}</h4>

    </div>
    <a href="{{ url('patientadmin/prescriptions') }}" class=" text-decoration-none">
        <div class="appoinment p-3 text-muted">
            <i class="fa fa-history" aria-hidden="true"></i>
            <span class=" ps-2 fw-bold">My prescriptions</span>
        </div>
    </a>
    <a href="{{ url('patientadmin/history') }}" class=" text-decoration-none">
        <div class="appoinment p-3 text-muted">
            <i class="fa-solid fa-calendar"></i>
            <span class="ps-2 fw-bold">My Appointments</span>
        </div>
    </a>

    <a href="{{ url('patientadmin/details') }}" class=" text-decoration-none">
        <div class="appoinment p-3 text-muted">
            <i class="fa-solid fa-circle-user"></i>
            <span class=" ps-2 fw-bold">Persoal Details</span>
        </div>
    </a>
    <a href="{{ url('patientadmin') }}" class=" text-decoration-none">
        <div class="appoinment p-3 text-muted">
            <i class="fa-solid fa-arrow-right"></i>
            <span class=" ps-2 fw-bold">Departments</span>
        </div>
    </a>
    <a href="{{ route('signout') }}" class=" text-decoration-none">
        <div class="appoinment p-3 text-muted">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class=" ps-2 fw-bold">Logout</span>
        </div>
    </a>
</div>
