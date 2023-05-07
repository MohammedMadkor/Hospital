<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>


    <section class="background-form">

        <div class="container pt-5">
            <div class="d-flex justify-content-center">
                <img src="{{asset('../images/Appoinment.jpg')}}" class="appoin" alt="" />
            </div>
            <div class="Book p-5">
                <div class="card-body">
                    <form method="post" action="{{url('patientadmin/appointment/store')}}" >

                        @csrf
                <div class="mb-3">
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{$auth->id}}" hidden>
                </div>
                <div class="mb-3">
                <label for="staff_id"  class="form-label">patient name </label>
                <input type="text" class="form-control" id="user_id"  value="{{$auth->name}}"disabled>
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" id="doctor_id" name="doctor_id" value="{{$doctor->id}}" hidden>
                </div>
                <div class="mb-3">
                <label for="staff_id"  class="form-label"> doctor name test</label>
                <input type="text" class="form-control" id="doctor_id" value="{{$doctor->name}}"disabled>
                </div>
                <div class="mb-3">
                <label for="datepicker" class="form-label">date</label>
                <input type="text" class="form-control" id="datepicker" name="date">
                </div>
                <select class="form-select mb-3" id="appointments" aria-label="Default select example" name="period_id">
                </select>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mb-3">make appointment</button>

                        </div>

                    </form>

                </div>
              </div>


        </div>


      </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>




    <script>
        $( function() {
          $( "#datepicker" ).datepicker({
            onSelect: function (dateText, inst) {
                var stateUrl = "{{ route('periodByDate') }}";
                var date = $(this).val();
                $.get(stateUrl, {
                date: $(this).val(),
                doctor_id: $("#doctor_id").val()
            },
            function(data) {
                var model = $('#appointments');
                model.empty();
                if (data.length == 0) {
                    model.append("<option value=''>  select another day  </option>");
                } else {
                    model.append("<option value='' disabled selected> select appointment </option>");
                    $.each(data, function(index, element) {
                        model.append("<option value='" + element.id + "'>" + element.period_number + "</option>");
                    });
                }
            }
        );
            }
        });
        } );

        </script>

</body>

</html>
