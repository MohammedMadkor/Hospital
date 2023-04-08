<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Doctor</title>
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

    <form method="POST" action="{{ url('staff/store') }}" enctype="multipart/form-data">
        @csrf
        <h4>Add New Doctor</h4>
        <div class="mb-3">
            <label for="text1" class="form-label">Shift ID</label>

            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example"
                name="shift_id">

                <option selected class=" d-none"></option>
                @foreach ($shift as $s)
                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                @endforeach

            </select>
            @error('shift_id')
                <span class="text-danger err-msg-shift_id" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
        </div>

        <div class="mb-3">
            <label for="text1" class="form-label">Department</label>

            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example"
                name="department_id">

                <option selected class=" d-none"></option>
                @foreach ($department as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
            @error('department_id')
            <span class="text-danger err-msg-department_id" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <div class="rec">

                <img src="../" id="departImg">
                <label for="exampleInputPassword1" class="form-label upload"><i class="fa fa-upload"
                        aria-hidden="true"></i><br>Upload New Image</label>

                <input type="file" class="form-control file" id="exampleInputPassword1" name="image">
                @error('image')
                <span class="text-danger err-msg-image" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror

            </div>

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Name</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="name">
            @error('name')
            <span class="text-danger err-msg-name" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">National ID</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="national_id">
            @error('national_id')
                        <span class="text-danger err-msg-national_id" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                        @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="phone">
            @error('phone')
            <span class="text-danger err-msg-phone" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Gender</label>

            <select class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="gender">

                <option selected class=" d-none"></option>
                <option value="1">male</option>
                <option value="2">female</option>

            </select>
        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Age</label>
            <input type="number" class="form-control" id="text1" aria-describedby="emailHelp" name="age">
            @error('age')
                        <span class="text-danger err-msg-age" role="alert">
                            <strong>
                                {{$message}}
                            </strong>
                        </span>
                        @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Address</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="address">
            @error('address')
                <span class="text-danger err-msg-address" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Salary</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="salary">
            @error('salary')
                <span class="text-danger err-msg-salary" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">About</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="about">
            @error('about')
                <span class="text-danger err-msg-about" role="alert">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror




        </div>
        <input type="number" class="form-control" id="role" name="role" value="1" hidden>






        <a> <button type="submit" class="btn btn-primary"><span>Add</span></button></a>
    </form>
    <script src="{{asset('../Javascript/index.js')}}"></script>
</body>

</html>

