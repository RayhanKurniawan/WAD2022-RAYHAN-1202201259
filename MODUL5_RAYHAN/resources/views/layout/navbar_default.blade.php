<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav" style="padding-left:100px">
          <li class="nav-item d-flex">
            <a class= "fs-4 nav-link {{ ($title==="Home")? 'active':'' }}" href="/home">Home</a>
            <a class= "fs-4 nav-link {{ ($title==="List Car")? 'active':'' }}" style="padding-left: 30px" href="listcar">My Car</a>
          </li>
        </ul> 
      </div>
      <a type="button" class=" btn btn-light text-primary" style="margin-right:30px;" href="add">AddCar</a>
      <div class="dropdown" style="margin-right: 50px">
        <button class=" text-primary btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
          {{ $nama }}
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-primary" href="profile">Profile</a></li>
          <li><a class="dropdown-item text-primary" href="logout">Log Out</a></li>
        </ul>
      </div>
    </nav>
    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>