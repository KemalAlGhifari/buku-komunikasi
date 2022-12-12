<div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Kelas :</label><br>
    <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px" type="text" name="kelas" id="kelas">
  </div>
  <div style="display: block;margin-bottom: 20px">
    <label style="margin-bottom: 0.5%;font-weight: bold" for="">Walas :</label><br>
    <select class="form-select" aria-label="Default select example" name="walas" id="walas">
        <option disabled value selected>Pilih Walas</option>
        @foreach ($guru as $itemguru)
        <option value="{{$itemguru->id}}">{{$itemguru->nama_guru}}</option>
        @endforeach
        
        
      </select>
  </div>
  <input style="width: 100%;font-size: 15px;padding: 8px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border: 1px solid rgb(187, 187, 187);border-radius: 2px;display: none" type="text" name="id" id="id">