@extends('layout.navbar_default')

@section('konten')
    <div style="padding:50px;">
        <h1>Detail Mobil</h1>
        <p>Melihat Keterangan Mobil</p>
    </div>
    
    <div class="div" style="display: flex; width: 100%; justify-content: space-around">

        <div class="mobil">
            <img src="../asset/images/.." alt="" style="width: 500px">
        </div>
        <div class="form" width="700px">
            
        <form action="../config/edit.php" method="post" enctype="multipart/form-data" style="width: 650px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="nama_mobil" value=".." disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama - NIM" name="nama_pemilik" value=".." disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="merk_mobil" value=".." disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal beli" name="tanggal_beli" value=".." disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" disabled>..</textarea>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto_mobil" value="..">
            <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Lunas" .. disabled> 
        <label class="form-check-label" for="flexRadioDefault1">
          Lunas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Belum Lunas" .. disabled > 
        <label class="form-check-label" for="flexRadioDefault2">
          Belum Lunas
        </label>
      </div>
            
            <a href="edit" type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Edit</a>    
        </form>
    </div>
</div> 
@endsection