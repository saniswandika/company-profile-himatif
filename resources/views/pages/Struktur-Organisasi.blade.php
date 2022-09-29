@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">jumlah Anggota</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_pengurus}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="card-title text-uppercase text-muted mb-0">periode kepengurusan</h6>
                                    <span class="h2 font-weight-bold mb-0">{{$periode}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
          <div class="card-header border-0">
            <div class="row">
                        <div class="col">
                            <h2 class="mb-0">Table Struktur Organisasi</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">masukan anggota</button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('tambah-jabatan') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <label for="">jabatan</label>
                                                        <input type="text" name="jabatan" class="form-control" id="" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                        <label for="inputPassword4">periode</label>
                                                        <input type="value" name="periode" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    </div>
                                                 <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Light table -->
           

            
             @php
              $no = 1;
            @endphp
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="name">nama</th>
                    <th scope="col" class="sort" data-sort="budget">jabatan</th>
                    <th scope="col" class="sort" data-sort="status">alamat anggota</th>
                    <th scope="col" class="sort" data-sort="completion">angkatan</th>
                    <th scope="col" class="sort" data-sort="completion">action</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
            @foreach($pengurus as $r)
                  
                  <tr>
                  <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $no++ }} </span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$r->nama_anggota}}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">

                        {{$r->jabatan}}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                           {{$r->alamat_anggota}}
                        <span class="status"></span>
                      </span>
                    </td>
                    <td class="budget">
                      {!! date('Y', strtotime($r->angkatan)) !!}
                      
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg{{$r->id}}">Edit Jabatan </a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".delete{{$r->id}}">Hapus Dari Struktur </a>
                        </div>
                      </div>
                    </td>
                    <!-- delete postingan kegiatan -->
                    <div class="modal fade delete{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Hapus jabatan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              <form action="{{ route('struktur_organisasi.destroy',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('put')
                                                     
                                               
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Hapus jabatan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                    
                                              </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    <!-- end Edit postingan kegiatan -->
                    <!-- edit kegiatan -->
                    <div class="modal fade bd-example-modal-lg{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <div class="col-xl-4 order-xl-2 mb-10 mb-xl-0">
                                                    <div class="card card-profile shadow">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-3 order-lg-2">
                                                                <div class="card-profile-image">
                                                                    <a href="#">
                                                                        <img  src="{{asset('/profil-anggota/' . $r->gambar)}}" class="rounded-circle">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-5">
                                                          
                                                        </div>
                                                        <div class="card-body pt-10 pt-md-4">
                                                            <div class="text-center">
                                                                <div class="h3 mt-4">
                                                                    <i class="ni business_briefcase-24 mr-2"></i><br>{{$r->nama_anggota}}
                                                                </div>
                                                                <div>
                                                                    <i class="ni education_hat mr-2"></i>{{$r->alamat_anggota}}
                                                                </div>
                                                                <hr class="my-4" />
                                                                <p>{{$r->nama_anggota}} adalah anggota himatif angkatan ke- {{$r->angkatan}}</p>
                                                                <a href="#">{{ __('Show more') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 order-xl-1">
                                                    <div class="card bg-secondary shadow">
                                                        <div class="card-header bg-white border-0">
                                                            <div class="row align-items-center">
                                                                <h3 class="mb-0">{{ __('Edit Anggota kepengurusan') }}</h3>
                                                            </div>
                                                        </div>
                                                            <div class="card-body">
                                                                <form method="post" action="{{ route('struktur_organisasi.update',[$r->id]) }}"  enctype="multipart/form-data" autocomplete="off">
                                                                    @csrf
                                                                    @method('put')                                                                
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('masuk-jabatan',[$r->id]) }}" method="POST">
                                                                            @csrf 
                                                                            @method('put') 
                                                                                <div class="input-group">
                                                                                    <select name ="Jabatan" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                                        <option selected>masukan jabatan...</option>
                                                                                            @foreach($jabatan as $jbt)
                                                                                                <option value="{{$jbt->jabatan}}">{{$jbt->jabatan}}</option>
                                                                                            @endforeach
                                                                                    </select>
                                                                                </div>     
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary" type="submit">Save changes</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>   
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- end edit kegiatan -->
              
                  </tr>
            @endforeach
                </tbody>
              </table>
            </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush