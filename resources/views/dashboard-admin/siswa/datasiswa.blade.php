@extends('template/dashboard')
@section('content')
    

<div id="container">
  <div class="sidebar">
      <header><i class="fa-regular fa-circle-user"></i> ADMIN USER</header>
      <ul>
        <li>
          <a style="display: flex;align-items: center;" href="{{'/'}}"><iconify-icon style="margin-right: 10px" icon="lucide:layout-dashboard" width="25" height="25"></iconify-icon>Dashboard</a>
        </li>
          <li style="background-color: rgb(245, 245, 245)">
              <a style="color: black" href="{{'/siswa'}}"><i class="fa-solid fa-users"></i>Data Siswa</a>
          </li>
          <li>
            <a style="display: flex;align-items: center" href="{{'/guru'}}"><iconify-icon style="margin-right: 10px" icon="ph:chalkboard-teacher" width="27" height="27"></iconify-icon>Data Guru</a>
          </li>
          <li>
            <a style="display: flex;align-items: center" href="{{'/point'}}"><iconify-icon style="margin-right: 10px" icon="jam:triangle-danger" width="27" height="27"></iconify-icon>Data Pelanggaran</a>
          </li>
          <li>
            <a style="display: flex;align-items: center" href="{{'/kelas'}}"><iconify-icon style="margin-right: 10px" icon="teenyicons:school-outline" width="27" height="27"></iconify-icon>Data Kelas</a>
          </li>
          
      </ul>
  </div>
  <div id="content">
      <nav>
          
          <div id="users" class="btn-group">
              <button id="user" type="button" class="btn dropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <iconify-icon icon="mdi:user" width="30" height="30"></iconify-icon>
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item" href="#">Menu item</a></li>
                <li><a class="dropdown-item" href="#">Menu item</a></li>
                <li><a class="dropdown-item" href="#">Menu item</a></li>
              </ul>
            </div>
      </nav>
      <div id="isi">
            <div>
            <h4 class="title">Data Siswa</h4>
          </div>
            <button id="tambah"  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
              <span style="font-size: 13px">Tambah data </span><iconify-icon icon="material-symbols:add" width="20" height="20"></iconify-icon>
            </button>
            
            <!-- Modal -->
            <form method="POST" action="/tambahsiswa">
              @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" id="modalbody">
                    @include('/dashboard-admin/siswa/form')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
            <!-- Modal Edit -->
            <form method="POST" action="{{route('update')}}">
              @csrf
            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" >
                    @include('dashboard-admin/siswa/formedit')
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          {{-- modal hapus --}}
          <form method="POST" action="{{route('delete')}}">
            @csrf
          <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                  @include('dashboard-admin/siswa/formhapus')
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </form>

        {{-- modal view --}}
        <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div style="border-radius: 20px" class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" >
                @include('dashboard-admin/siswa/view')
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
              </div>
            </div>
          </div>
        </div>

          <div id="ctable">
            <table  id="table" class="table table-striped">
              <tr style="border-top: 1px solid rgb(170, 170, 170);text-align: center">
                <td style="width: 2%;">No</td>
                <td style="width: 20%;">Nama Siswa</td>
                <td style="width:12%;">Kelas</td>
                <td style="width: 12%;">Jurusan</td>
                <td style="width: 20%;">Jenis-Kelamin</td>
                <td style="width: 20%;">Point</td>
                <td style="width: 20%;">Opsi</td>
              </tr>
              @php $no = 1 @endphp
              @foreach ($test as $itemsiswa)
              <tr style="text-align: center;border-bottom: 1px solid rgb(170, 170, 170)">
                <td style="width: 2%;">{{$no++}}</td>
                <td style="width: 20%;">{{$itemsiswa->nama}}</td>
                <td style="width: 12%;">
                    @foreach ($itemsiswa->RelationTokelas as $siswaa)
                        {{$siswaa->nama_kelas}}
                    
                </td>
                <td style="width: 12%;">{{$itemsiswa->jurusan}}</td>
                <td style="width: 20%;">{{$itemsiswa->jenis_kelamin}}</td>
                <td style="width: 20%;">{{$itemsiswa->point}}</td>
                <td >
                  <div  style="display: flex;justify-content: center;gap: 10px;">
                    <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px"   type="button" class="btn btn-primary" data-bs-toggle="modal" data-point='{{$itemsiswa->point}}' data-mynama='{{$itemsiswa->nama}}' data-nisn='{{$itemsiswa->nisn}}'  data-kelas='{{$siswaa->nama_kelas}}' data-jurusan='{{$itemsiswa->jurusan}}' data-jenis='{{$itemsiswa->jenis_kelamin}}' data-alamat='{{$itemsiswa->alamat}}' data-no='0{{$itemsiswa->no_telepon}}' data-email='{{$itemsiswa->email}}' data-pass='{{$itemsiswa->password}}' data-id='{{$itemsiswa->id}}' data-bs-target="#view">
                      <span style="font-size: 13px">View</span>
                    </button>
                    <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px"   type="button" class="btn btn-success" data-bs-toggle="modal" data-mynama='{{$itemsiswa->nama}}' data-nisn='{{$itemsiswa->nisn}}'  data-kelas='{{$itemsiswa->kelas_id}}'data-jurusan='{{$itemsiswa->jurusan}}' data-jenis='{{$itemsiswa->jenis_kelamin}}' data-alamat='{{$itemsiswa->alamat}}' data-no='{{$itemsiswa->no_telepon}}' data-email='{{$itemsiswa->email}}' data-pass='{{$itemsiswa->password}}' data-id='{{$itemsiswa->id}}' data-bs-target="#edit">
                      <span style="font-size: 13px">Edit</span>
                    </button>
                 
                    <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px"   type="button" class="btn btn-danger" data-bs-toggle="modal" data-mynama='{{$itemsiswa->nama}}' data-nisn='{{$itemsiswa->nisn}}'  data-kelas='{{$itemsiswa->kelas}}' data-jurusan='{{$itemsiswa->jurusan}}' data-jenis='{{$itemsiswa->jenis_kelamin}}' data-alamat='{{$itemsiswa->alamat}}' data-no='{{$itemsiswa->no_telepon}}' data-email='{{$itemsiswa->email}}' data-pass='{{$itemsiswa->password}}' data-id='{{$itemsiswa->id}}' data-bs-target="#delete">
                      <span style="font-size: 13px">Hapus</span>
                    </button>
                </div>
                </td>
              </tr>
              @endforeach
              @endforeach
              
            </table>
          </div>
      </div>
     
  </div>
</div>


<script>
$('#edit').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var nama = button.data('mynama')
  var nisn = button.data('nisn')
  var kelas = button.data('kelas')
  var jurusan = button.data('jurusan')
  var jenis = button.data('jenis')
  var alamat = button.data('alamat')
  var no = button.data('no')
  var email = button.data('email')
  var pass = button.data('pass')
  var id = button.data('id')
  
  var modal = $(this)
  modal.find('#nama').val(nama)
  modal.find('#nisn').val(nisn)
  modal.find('#kelas').val(kelas)
  modal.find('#jurusan').val(jurusan)
  modal.find('#jeniskelamin').val(jenis)
  modal.find('#alamat').val(alamat)
  modal.find('#notelepon').val(no)
  modal.find('#email').val(email)
  modal.find('#pasword').val(pass)
  modal.find('#id').val(id)
}) 
$('#delete').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var nama = button.data('mynama')
  var nisn = button.data('nisn')
  var kelas = button.data('kelas')
  var jurusan = button.data('jurusan')
  var jenis = button.data('jenis')
  var alamat = button.data('alamat')
  var no = button.data('no')
  var email = button.data('email')
  var pass = button.data('pass')
  var id = button.data('id')
  
  var modal = $(this)
  modal.find('#nama').val(nama)
  modal.find('#nisn').val(nisn)
  modal.find('#kelas').val(kelas)
  modal.find('#jurusan').val(jurusan)
  modal.find('#jeniskelamin').val(jenis)
  modal.find('#alamat').val(alamat)
  modal.find('#notelepon').val(no)
  modal.find('#email').val(email)
  modal.find('#pasword').val(pass)
  modal.find('#id').val(id)
}) 
$('#view').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var nisn = button.data('nisn')
  var kelas = button.data('kelas')
  var jurusan = button.data('jurusan')
  var jenis = button.data('jenis')
  var alamat = button.data('alamat')
  var no = button.data('no')
  var email = button.data('email')
  var pass = button.data('pass')
  var nama = button.data('mynama')
  var point = button.data('point')

  var modal = $(this)
  modal.find('#namaview').text(nama)
  modal.find('#nisnview').text(nisn)
  modal.find('#kelasview').text(kelas)
  modal.find('#jurusanview').text(jurusan)
  modal.find('#jenisview').text(jenis)
  modal.find('#alamatview').text(alamat)
  modal.find('#nomerview').text(no)
  modal.find('#emailview').text(email)
  modal.find('#pointview').text(point)
})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection