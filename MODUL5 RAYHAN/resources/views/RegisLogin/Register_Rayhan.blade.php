<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-between align-items-center" style="height: 100vh;">
        @include('layout.gambar_awal')
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="/register" method="post" style="width:50%;margin: 10px 50px">
            @csrf
            <h1 style="padding-bottom:20px;">Register</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email" aria-describedby="emailHelp" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNama" class="form-label">Nama</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" aria-describedby="namalengkap" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputnohp" value="{{ old('no_hp') }}" class="form-label">Nomor Handphone </label>
                <input type="text" class="form-control @error('no_hp') is-invalid 
                @enderror" name="no_hp" aria-describedby="nomorhp" placeholder="Nomor HP"required>
                @error('no_hp')
                    <div class="text-danger">
                        Nomor HP tidak sesuai
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" placeholder="password"required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control @error('konfirmasipassword') is-invalid 
                @enderror" name="konfirmasipassword" placeholder="konfirmasi password" required>
                @error('konfirmasipassword')
                    <div class="text-danger">
                        Kata sandi tidak sesuai
                    </div>
                @enderror
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Daftar</button>
            <p class="mb-4" style="text-align: left,">Anda sudah punya akun? <a href="login">Login</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>