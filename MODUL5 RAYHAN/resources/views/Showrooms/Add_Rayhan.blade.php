@extends('layout.navbar_default')

@section('konten')
    <div style="padding:50px;"> 
        <h1>Tambah Mobil</h1>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
    </div>
    <form action="/tambahmobil" method="post" enctype="multipart/form-data" style="padding-left:50px;width:60%">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="name">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama - NIM" name="owner">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Merk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="brand">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal beli" name="purchase_date">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="Lunas">
        <label class="form-check-label" for="flexRadioDefault1">
          Lunas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" value="Belum Lunas">
        <label class="form-check-label" for="flexRadioDefault2">
          Belum Lunas
        </label>
      </div>
        <button type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Selesai</button>    
      </form>
@endsection
