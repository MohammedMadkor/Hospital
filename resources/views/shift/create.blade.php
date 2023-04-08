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
    <div class="card" style="width: 18rem; margin-top: 150px; margin-left: 350px ;">
    <div class="card-body">
        <form method="POST" action="{{url('shift/store')}}">
            @csrf
         <div class="mb-3">
            <label for="name" class="form-label"> name</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
            <span class="text-danger err-msg-name" role="alert">
                <strong>
                    {{$message}}
                </strong>
            </span>
            @enderror
            </div>
         <div class="mb-3">
            <label for="start" class="form-label"> start</label>
            <input type="number" class="form-control" id="start" name="start">
            @error('start')
<span class="text-danger err-msg-start" role="alert">
    <strong>
        {{$message}}
    </strong>
</span>
@enderror
            </div>
         <div class="mb-3">
            <label for="end" class="form-label"> end</label>
            <input type="number" class="form-control" id="end" name="end">
            
            @error('end')
<span class="text-danger err-msg-end" role="alert">
    <strong>
        {{$message}}
    </strong>
</span>
@enderror

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>
