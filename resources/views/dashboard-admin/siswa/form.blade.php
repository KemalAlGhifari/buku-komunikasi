<div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Name :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="nama" id="">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">NISN :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="number" name="nisn" id="">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Kelas :</label><br>
    <select class="form-select" aria-label="Default select example" name="kelas" id="">
      <option disabled value selected>Pilih Kelas</option>
      @foreach ($sis as $itemkelas)
      <option value="{{$itemkelas->id}}">{{$itemkelas->nama_kelas}}</option>
      @endforeach
    </select>
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Jurusan :</label><br>
    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
      <option disabled value selected>Pilih Jurusan</option>
      <option value="PPLG">PPLG</option>
      <option value="ANIMASI">ANIMASI</option>
      <option value="TKJ">TKJ</option>
      <option value="BC">BC</option>
      <option value="MULTIMEDIA">MULTIMEDIA</option>
      <option value="TEI">TEI</option>
    </select>
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Jenis-Kelamin :</label><br>
    <select class="form-select" aria-label="Default select example" name="jeniskelamin" id="jeniskelamin">
      <option disabled value selected>Jenis Kelamin</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Prempuan">Prempuan</option>
    </select>
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Alamat :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="alamat" id="alamat">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">No Telepon :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="number" name="notelepon" id="notelepon">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Email :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="email" id="email">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Password :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="password" id="pasword">
  </div>
  