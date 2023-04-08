<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Department</title>
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

    <form action="{{ url('prescription/storePrescription') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Add New prescription</h4>
        <div class="mb-3">
            <label for="text1" class="form-label">patient Name</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="patient_id" value="{{$patient->id}}">
            @error('patient_id')
                <span class="text-danger err-msg-patient_id" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">doctor Name</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="doctor_id" value="{{$doctor->id}}">
            @error('doctor_id')
                <span class="text-danger err-msg-doctor_id" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">diagnosis </label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="diagnosis">
            @error('diagnosis')
                <span class="text-danger err-msg-diagnosis" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">analysis </label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp" name="analysis">
        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">diagnosis </label>
            <input type="date" class="form-control" id="text1" aria-describedby="emailHelp" name="date">
        </div>
        <a class="btn btn-info" onclick="addKeywordFields()">Add a Medicine</a>
        <div id="fieldContainer"></div>

         <div id="newElementId">New inputbox goes here:</div>

        <a> <button type="submit" class="btn btn-primary"><span>Add</span></button></a>
    </form>
    <script src="{{ asset('../Javascript/index.js') }}"></script>
</body>

</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
    function addKeywordFields() {
    var mydiv = document.getElementById("fieldContainer");
    const input = document.createElement('input');
    const input2 = document.createElement('input');
    const input3 = document.createElement('input');
    input.type = 'text';
    input2.type = 'text';
    input3.type = 'text';
    input.name = 'name[]';
    input2.name = 'potion[]';
    input3.name = 'note[]';
    mydiv.appendChild(input);
    mydiv.appendChild(input2);
    mydiv.appendChild(input3);
}
    </script>
</body>

</html>
