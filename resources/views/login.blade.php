<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  {{-- <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      height: 80vh;
      width: 100vw;
    }
  </style>
</head>
<body class="align-items-center d-flex">
  <div class="container">
    <div class="col-md-5 mx-auto shadow-sm py-3 bg-light">
        @if (session('message'))
            <div class="m-3 alert alert-danger">{{session('message')}}</div>
        @endif
      <div class="h2 border-bottom d-inline-block pb-2 mx-auto font-weight-bold">
        Admin Login
      </div>
      <form action="{{ url('cekLogin') }}" class="py-2 w-75" method="post">
        @csrf
        <input type="text" class="form-control bg-transparent mb-3" placeholder="username" name="username">
        <input type="password" class="form-control bg-transparent mb-3" placeholder="password" name="password">
        <button class="btn btn-secondary" type="submit">Sign in</button>
      </form>
    </div>
  </div>
</body>
</html>