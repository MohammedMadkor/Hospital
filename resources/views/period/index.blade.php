<!DOCTYPE html>
<html lang="en">

<head>
    <style>

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periods</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="../Css/Appointments.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</head>

<body>
    @include('layouts.navbar')


    <div class=" container mt-5 period">

        <h3 class="text-center mb-3">Periods</h3>
        <table class="table table-hover  ">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Period</th>
                    <th scope="col" class="">Shift Name</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($period as $p)
                    <tr>
                        <th scope="row">#{{ $loop->index + 1 }}</th>
                        <td>{{ $p->period_number }}</td>
                        <td>{{ $p->Shift->name }}</td>
                    </tr>
                @endforeach














            </tbody>
        </table>
    </div>

</body>

</html>
