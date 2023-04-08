<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card" style="width: 18rem; margin-top: 150px; margin-left: 500px;">

    <div class="card-body">
        <form method="post" action="{{url('period/edit',$period->id)}}">
            @csrf
            <select class="form-select mb-3" aria-label="Default select example" name="Shift_id">
                <option disabled selected>Open shift</option>
                @foreach ($shift as $s)
                <option {{$period->Shift_id == $s->id ? 'selected': ""}} value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">period_number</label>
            <input type="text" class="form-control" id="period_number" name="period_number" value="{{$period->period_number}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
