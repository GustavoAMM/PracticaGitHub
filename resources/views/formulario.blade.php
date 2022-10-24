
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upq</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

   


    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
        <div class="container-fluid">
          <a class="navbar-brand" @disabled(true)>UPQ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Formulario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tabla">Tabla</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @if (session()->has('success'))
      {!! "<script>Swal.fire(
          'Success',
          'Información correcta',
          'success'
      )</script>" !!}
  @endif

    {{-- Formulario --}}

    <div class="bg-light m-0 vh-100 row justify-content-center align-items-center">
        <div class="card-body">
            <form method="POST" action="guardarFormulario">
            @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp" name="inputEmail">
                  <p class="text-danger fst-italic">   {{$errors->first('inputEmail')}} </p>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control"  name="inputPass">
                  <p class="text-danger fst-italic">  {{$errors->first('inputPass')}}</p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>