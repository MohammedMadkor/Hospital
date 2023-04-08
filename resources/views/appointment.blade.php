<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body>
    <div class="card" style="width: 18rem; margin-top: 100px; margin-left: 100px; ">
        <div class="card-body">
            <form method="post" action="{{url('appointment/store')}}" >
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



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <script src="assets/js/bootstrap.bundle.min.js"
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
                    model.append("<option value=''>لا يوجد مواعيد متاحه</option>");
                } else {
                    model.append("<option value='' disabled selected>اختر المعاد</option>");
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
