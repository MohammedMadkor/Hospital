<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Prescription </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="{{ asset('../Css/prescription.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <i class="fa-sharp fa-solid fa-stethoscope ico"></i><span class="docPlace"><span
                    class="doc">Doc</span>Place</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  mx-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href=""><span>Home</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href=""><span>Services</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link  " href="Doctors.html">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Pharmacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Lab</a>
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

    <form action="{{ url('prescription/storePrescription') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Add Prescription</h4>
        <div class="mb-3">

            <input type="text" class="form-control" id="patient_id" aria-describedby="emailHelp" name="patient_id"
                value="{{ $patient->id }}" hidden>
            @error('patient_id')
                <span class="text-danger err-msg-patient_id" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror

        </div>
        <div class="mb-3">

            <input type="text" class="form-control" id="doctor_id" aria-describedby="emailHelp" name="doctor_id"
                value="{{ $doctor->id }}" hidden>
            @error('doctor_id')
                <span class="text-danger err-msg-doctor_id" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
            @enderror

        </div>

        <div class="mb-3">
            <label for="text1" class="form-label">Docter Name</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp"
                value="{{ $doctor->name }}">

        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="text1" aria-describedby="emailHelp"
                value="{{ $patient->name }}">

        </div>
        

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Diagnosis</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diagnosis"></textarea>
            @error('diagnosis')
            <span class="text-danger err-msg-diagnosis" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror

        </div>

        <div class="table-responsive">

            <div class="table-responsive">

                <table id="table" class="table caption-top table-bordered">

                   <caption>Treatment  <button class="addrow" onclick="addRow()"  type="button" id="add-row"><i style="color: #0061ae ;background-color: #fff; font-size: 16px; border: none;" class="fa-solid fa-circle-plus"></i></button></caption>

                  <thead>
                    <tr  style="background-color:#038eff60">
                        <th scope="col">Drug Name</th>
                        <th scope="col">Repetation</th>
                        <th scope="col">Note</th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td ><input type="text" name="name[]" required></td>
                      <td><input type="text" name="potion[]" ></td>
                      <td><input type="text" name="note[]" ></td>
                      <td class="remove" ><button onclick="deleteRow(this)" type="button" class="remove-row">Remove</button></td>
                    </tr>
                  </tbody>
                </table>

              </div>

        </div>
        <!-- <button type="button" class="btn btn-danger " id="add-row">add row</button> -->



        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">X-Ray</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rays"></textarea>
            @error('rays')
            <span class="text-danger err-msg-rays" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Analysis</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="analysis"></textarea>
            @error('analysis')
            <span class="text-danger err-msg-analysis" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror
        </div>







        <a> <button type="submit" class="btn btn-primary add"><span>Add</span></button></a>
    </form>
    <script>
        // Add and remove rows from the table
        function addRow() {
        var table = document.getElementById("table");
        var row = table.insertRow(-1);
        var drugCell = row.insertCell(0);
        var repeatCell = row.insertCell(1);
        var noteCell = row.insertCell(2);
        var actionCell = row.insertCell(3);
        drugCell.innerHTML = '<input type="text" required name="name[]">';
        repeatCell.innerHTML = '<input type="text"  name="potion[]">';
        noteCell.innerHTML = '<input type="text"  name="note[]">';
        actionCell.innerHTML = '<button class="remove-row" onclick="deleteRow(this)">Remove</button>';
      }

      function deleteRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
      }
    </script>
</body>

</html>
