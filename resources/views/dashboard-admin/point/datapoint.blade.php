@extends('template/dashboard')
@section('content')
     <div id="container">
        <div class="sidebar">
            <header><i class="fa-regular fa-circle-user"></i> ADMIN USER</header>
            <ul>
              <li>
                <a style="display: flex;align-items: center;" href="{{'/'}}"><iconify-icon style="margin-right: 10px" icon="lucide:layout-dashboard" width="25" height="25"></iconify-icon>Dashboard</a>
              </li>
                <li >
                    <a  href="{{'/siswa'}}"><i class="fa-solid fa-users"></i>Data Siswa</a>
                </li>
                <li>
                  <a style="display: flex;align-items: center;" href="{{'/guru'}}"><iconify-icon style="margin-right: 10px" icon="ph:chalkboard-teacher" width="27" height="27"></iconify-icon>Data Guru</a>
                </li>
                <li  style="background-color: rgb(245, 245, 245)">
                  <a style="display: flex;align-items: center;color: black" href="{{'/point'}}"><iconify-icon style="margin-right: 10px" icon="jam:triangle-danger" width="27" height="27"></iconify-icon>Data Pelanggaran</a>
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
                      <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                  </div>
            </nav>
            <div id="isi">
                  <div>
                  <h4 class="title">Data Point</h4>
                </div>
                  <button id="tambah"  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span style="font-size: 13px">Tambah data </span><iconify-icon icon="material-symbols:add" width="20" height="20"></iconify-icon>
                  </button>
                  
                  <!-- Modal -->
                  <form method="post" action="/tambahpoint/store">
                    @csrf
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          @include('dashboard-admin/point/form')
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                {{-- modal edit --}}
                <form method="post" action="{{route('updatepoint')}}">
                  @csrf
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        @include('dashboard-admin/point/formedit')
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
              <form method="post" action="{{route('hapuspoint')}}">
                @csrf
              <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Point</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      @include('dashboard-admin/point/formhapus')
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

                <div id="ctable">
                  <table  id="table" class="table table-striped">
                    <tr style="border-top: 1px solid rgb(170, 170, 170);text-align: center">
                      <td style="width: 2%;">No</td>
                      <td style="width: 25%;">pelanggaran</td>
                      <td style="width: 10%;">Sanksi</td>
                      <td style="width: 20%;">Point</td>
                      <td style="width: 10%;">Opsi</td>
                    </tr>
                    @php $no = 1 @endphp
                    @foreach ($point as $itempoint)
                    <tr style="text-align: center;border-bottom: 1px solid rgb(170, 170, 170)">
                        <td style="width: 2%;">{{$no++}}</td>
                        <td style="width: 25%;">{{$itempoint->pelanggaran}}</td>
                        <td style="width: 30%;">{{$itempoint->sanksi}}</td>
                        <td style="width: 10%;">{{$itempoint->point}}</td>
                        <td>
                          <div style="display: flex;justify-content: center;gap: 10px;">
                            <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px" data-pelanggaran='{{$itempoint->pelanggaran}}' data-sanksi='{{$itempoint->sanksi}}' data-id="{{$itempoint->id}}" data-point="{{$itempoint->point}}" type="button" class="btn btn-success" data-bs-toggle="modal"   data-bs-target="#edit">
                              <span style="font-size: 13px">Edit</span>
                            </button>
                            <button style="height: 25px;display: flex;align-items: center;width: 60px;justify-content: center;font-size: 14px" data-pelanggaran='{{$itempoint->pelanggaran}}' data-sanksi='{{$itempoint->sanksi}}' data-id="{{$itempoint->id}}" data-point="{{$itempoint->point}}" type="button" class="btn btn-danger" data-bs-toggle="modal"   data-bs-target="#delete">
                              <span style="font-size: 13px">Hapus</span>
                            </button>
                            </button>
                            </button>
                          </div>
                        </td>
                      </tr>   
                    @endforeach
                  </table>
                </div>
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

$('#delete').on('show.bs.modal',function(event){
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection