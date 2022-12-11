@extends('layout.navbar_default')

@section('konten')
    <div style="padding:50px; text-align: center;">
        <h1>Profile</h1>
    </div>
    <div class="div">
        <div class="form d-flex justify-content-center fs-4">
            
        <form action="../config/edit_profile.php?id=.." method="post" enctype="multipart/form-data" style="width: 650px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="email" value=".." disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama" value="..">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="no_hp" value="..">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleFormControlTextarea1"  name="konfirmasipassword" required>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Warna Navbar</label>
                <input class="form-control" type="text" id="formFile" name="foto_mobil" value="">
            </div>
            
            <button type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Selesai</button>    
        </form>
    </div>
</div>
@endsection