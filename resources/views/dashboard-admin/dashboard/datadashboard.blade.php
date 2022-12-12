@extends('template/dashboard')
@section('content')
     <div id="container">
        <div class="sidebar">
            <header><i class="fa-regular fa-circle-user"></i> ADMIN USER</header>
            <ul>
              <li style="background-color: rgb(245, 245, 245)">
                <a style="display: flex;align-items: center;color: black" href="{{'/'}}"><iconify-icon style="margin-right: 10px" icon="lucide:layout-dashboard" width="25" height="25"></iconify-icon>Dashboard</a>
              </li>
                <li >
                    <a  href="{{'/siswa'}}"><i class="fa-solid fa-users"></i>Data Siswa</a>
                </li>
                <li>
                  <a style="display: flex;align-items: center;" href="{{'/guru'}}"><iconify-icon style="margin-right: 10px" icon="ph:chalkboard-teacher" width="27" height="27"></iconify-icon>Data Guru</a>
                </li>
                <li >
                  <a style="display: flex;align-items: center;" href="{{'/point'}}"><iconify-icon style="margin-right: 10px" icon="jam:triangle-danger" width="27" height="27"></iconify-icon>Data Pelanggaran</a>
                </li>
                <li  >
                  <a style="display: flex;align-items: center;" href="{{'/kelas'}}"><iconify-icon style="margin-right: 10px" icon="teenyicons:school-outline" width="27" height="27"></iconify-icon>Data Kelas</a>
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
                      <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                      
                    </ul>
                  </div>
            </nav>
            <div id="isi">
                  <div>
                  <h4 class="title">Data Laporan</h4>
                </div>
                  <button id="tambah"  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span style="font-size: 13px">Tambah data </span><iconify-icon icon="material-symbols:add" width="20" height="20"></iconify-icon>
                  </button>
                  <div id="ctable">
                    <table  id="table" class="table table-striped">
                      <tr style="border-top: 1px solid rgb(170, 170, 170);text-align: center">
                        <td style="width: 2%;">No</td>
                        <td style="width: 20%;">Siswa</td>
                        <td style="width: 15%;">Kelas</td>
                        <td style="width: 20%;">Pelanggaran</td>
                        <td style="width: 20%;">Tanggal</td>
                        <td style="width: 10%;">Point</td>
                        <td style="width: 15%;">Opsi</td>
                      </tr>
                      @php $no = 1 @endphp
                      @foreach ($dash as $itemdash)
                      @foreach ($itemdash->RelasiToSiswaFromDash as $itemdash2)
                      @foreach ($itemdash->RelasiToPelanggaranFromDash as $p)
                          
                      
                      <tr style="text-align: center;border-bottom: 1px solid rgb(170, 170, 170)">
                          <td style="width: 2%;">{{$no++}}</td>
                          <td style="width: 20%;">{{$itemdash2->nama}}</td>
                          <td style="width: 15%;">{{$itemdash2->kelas->nama_kelas}}</td>
                          <td style="width: 20%;">{{$p->pelanggaran}}</td>
                          <td style="width: 20%;">{{$itemdash->tanggal}}</td>
                          <td style="width: 10%;">{{$p->point}}</td>
                          
                          <td>
                            <div style="display: flex;justify-content: center;gap: 10px;">
                              <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px"  type="button" class="btn btn-primary" data-id="{{$itemdash->id}}" data-nama='{{$itemdash2->nama}}' data-nisn='{{$itemdash2->nisn}}' data-kelas="{{$itemdash2->kelas->nama_kelas}}" data-jurusan='{{$itemdash2->jurusan}}' data-pelanggaran='{{$p->pelanggaran}}' data-sanksi='{{$p->sanksi}}' data-jenis='{{$itemdash2->jenis_kelamin}}' data-point='{{$p->point}}' data-no='{{$itemdash2->no_telepon}}' data-tanggal="{{$itemdash->tanggal}}" data-email='{{$itemdash2->email}}'data-bs-toggle="modal"   data-bs-target="#view">
                                <span style="font-size: 13px">View</span>
                              </button>
                              <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px"  type="button" class="btn btn-danger" data-idsiswa='{{$itemdash2->id}}' data-id="{{$itemdash->id}}" data-nama='{{$itemdash2->nama}}' data-nisn='{{$itemdash2->nisn}}' data-kelas="{{$itemdash2->kelas->nama_kelas}}" data-jurusan='{{$itemdash2->jurusan}}' data-pelanggaran='{{$p->pelanggaran}}' data-sanksi='{{$p->sanksi}}' data-jenis='{{$itemdash2->jenis_kelamin}}' data-point='{{$p->point}}' data-no='{{$itemdash2->no_telepon}}' data-tanggal="{{$itemdash->tanggal}}" data-email='{{$itemdash2->email}}'data-bs-toggle="modal" data-pel='{{$p->id}}'   data-bs-target="#hapus">
                                <span style="font-size: 13px">Hapus</span>
                              </button>
  
                            
                           
                              </button>
                              </button>
                            </div>
                          </td>
                        </tr>  
                        @endforeach
                        @endforeach
                        @endforeach 
                       
                    </table>
                  </div>
                  
                  <!-- Modal -->
                  <form method="post" action="/tambahpelanggaran/store">
                    @csrf
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          @include('dashboard-admin/dashboard/form')
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

               

              {{-- delete --}}
              <form method="post" action="{{route('hapusdash')}}">
                @csrf
              <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @include('dashboard-admin/dashboard/formhapus')
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              {{-- view --}}
              <form method="post" action="{{route('hapuspoint')}}">
                @csrf
              <div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @include('dashboard-admin/dashboard/view')
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Back</button>
            
                    </div>
                  </div>
                </div>
              </div>
            </form>

            </div>
           
        </div>
    </div>
    <script>
     
     $('#edit').on('show.bs.modal',function(event){
                    var button = $(event.relatedTarget)
                    var nama = button.data('pelanggaran')
                    var nisn = button.data('sanksi')
                    var kelas = button.data('point')
                  
                    var id = button.data('id')
                    
                    var modal = $(this)
                    modal.find('#pelanggaran').val(nama)
                    modal.find('#sanksi').val(nisn)
                    modal.find('#point').val(kelas)
                  
                    modal.find('#id').val(id)
                  }) 
                  
                  $('#hapus').on('show.bs.modal',function(event){
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var pelanggaran = button.data('pelanggaran')
                    var point = button.data('point')
                    var nama = button.data('nama')
                    var idsiswa = button.data('idsiswa')
                    var pel = button.data('pel')
                  
                  
                    
                    var modal = $(this)
                    modal.find('#siswa').val(id)
                    modal.find('#pelanggaran').val(pelanggaran)
                    modal.find('#point').val(point)
                    modal.find('#id').val(id)
                    modal.find('#nama').val(nama)
                    modal.find('#siswa').val(idsiswa)
                    modal.find('#pel').val(pel)
                  
                  }) 
                  $('#view').on('show.bs.modal',function(event){
                    var button = $(event.relatedTarget)
                    var nisn = button.data('nisn')
                    var kelas = button.data('kelas')
                    var jurusan = button.data('jurusan')
                    var jenis = button.data('jenis')
                    var pelanggaran = button.data('pelanggaran')
                    var sanksi = button.data('sanksi')
                    var no = button.data('no')
                    var point = button.data('point')
                    var pass = button.data('pass')
                    var nama = button.data('nama')
                    var tanggal = button.data('tanggal')
                  
                    var modal = $(this)
                    modal.find('#namaview').text(nama)
                    modal.find('#nisnview').text(nisn)
                    modal.find('#kelasview').text(kelas)
                    modal.find('#jurusanview').text(jurusan)
                    modal.find('#jenisview').text(jenis)
                    modal.find('#nomerview').text(no)
                    modal.find('#pelanggaran').text(pelanggaran)
                    modal.find('#sanksi').text(sanksi)
                    modal.find('#point').text(point)
                    modal.find('#tanggal').text(tanggal)
                    modal.find('#id').val(id)
                  })
  
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection