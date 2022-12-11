@extends('layout.navbar_default')

@section('konten')
    <div class="row row-cols-4 m-5">

    <div class="col">
        
        <div class="card" style="width: 18rem;">
            <img src="../asset/images/.." class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">..</h5>
                <p class="card-text">..</p>
                <a href="detail" class="btn btn-primary">Detail</a>
                <a href="../config/delete.php?id=.." class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
 
</div>
<div class="jumlah" style="margin-left: 50px">
    Jumlah Mobil : ..
</div>
@endsection