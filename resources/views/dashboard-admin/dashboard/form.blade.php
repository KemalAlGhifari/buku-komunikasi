<div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Nama Siswa :</label><br>
    <select class="form-select" aria-label="Default select example" name="siswa" id="walas">
        <option disabled value selected>Pilih Siswa</option>
        @foreach ($siswa as $itemguru)
        <option value="{{$itemguru->id}}">{{$itemguru->nama}}</option>
        @endforeach
      </select>
  </div>
<div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Pilih Pelanggaran :</label><br>
    <select class="form-select" aria-label="Default select example" name="pelanggaran" id="walas">
        <option disabled value selected>Pilih Pelanggaran</option>
        @foreach ($point as $p)
        <option value="{{$p->id}}">{{$p->pelanggaran}}</option>
        @endforeach
      </select>
  </div>

  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Tanggal :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="datetime-local" name="tanggal" id="">
  </div>