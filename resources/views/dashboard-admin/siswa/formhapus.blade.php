<div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Name :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="nama" id="nama">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">NISN :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="number" name="nisn" id="nisn">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Kelas :</label><br>
    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
      <option disabled value selected>Pilih Kelas</option>
      @foreach ($sis as $itemkelas)
      <option value="{{$itemkelas->id}}">{{$itemkelas->nama_kelas}}</option>
      @endforeach
    </select> 
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Jurusan :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="jurusan" id="jurusan">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Jenis-Kelamin :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text"  name="jeniskelamin" id="jeniskelamin">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Alamat :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="alamat" id="alamat">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">No Telepon :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="number" name="notelepon" id="notelepon">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Email :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="email" id="email">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Password :</label><br>
    <input disabled style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="password" id="pasword">
  </div>
  
    {{-- id --}}
    <div style="display: block;margin-bottom: 20px">
      
      <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px;display: none" type="text" name="id" id="id">
    </div>