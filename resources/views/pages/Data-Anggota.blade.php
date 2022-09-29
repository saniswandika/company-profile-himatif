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
                                    <h5 class="card-title text-uppercase text-muted mb-0">anggota aktif</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_anggota_aktif}}</span>
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
                                    <h6 class="card-title text-uppercase text-muted mb-0">jumlah keseluruhan</h6>
                                    <span class="h2 font-weight-bold mb-0">{{$jumlahanggota}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
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
                                    <h6 class="card-title text-uppercase text-muted mb-0">anggota kehormatan</h6>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_anggota_kehormatan}}</span>
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
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">perintis</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_anggota_perintis}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
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
              
              <div class="card-header border-0">
                    <div class="row">
                        <div class="col">
                            <h2 class="mb-0">Table Data Anggota</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data Anggota</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#importExcel">
                              Import Data Anggota
                            </button>
                            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <form method="post" action="/data/import_excel" enctype="multipart/form-data">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                    </div>
                                    <div class="modal-body">
                        
                                      {{ csrf_field() }}
                        
                                      <label>Pilih file excel</label>
                                      <div class="form-group">
                                        <input type="file" name="file" required="required">
                                      </div>
                        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                           
                            <a href="{{url('export-excel-csv-file/csv')}}" class="btn btn-success"> Export Data Anggota</a>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Tambah Data Anggota</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{ route('Data-anggota.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf 
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Nama</label>
                                                            <input type ="text" name ="nama_anggota" class="form-control" id="inputEmail4" placeholder="masukan nama anggota">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">angkatan</label>
                                                            <input type="date" name="angkatan" class="form-control" id="inputPassword4" placeholder="masukan angkatan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">status keanggotaan</label>
                                                        <input type="text" name="jenis_keanggotaan" class="form-control" id="inputAddress" placeholder="masukan keanggotaan ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">alamat anggota </label>
                                                        <input type="text" name="alamat_anggota" class="form-control" id="inputAddress2" placeholder="masukan alamat anggota">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label for="inputZip">foto </label>
                                                        <input type="file" name="gambar" class="form-control" id="inputZip">
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
                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                @endif
            <!-- Table Data-anggota -->
            @php
              $no = 1;
            @endphp
            <div class="table-responsive">
              <table id="example" class="table align-items-center display table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="name">nama</th>
                    <th scope="col" class="sort" data-sort="budget">jenis keanggota</th>
                    <th scope="col" class="sort" data-sort="status">alamat anggota</th>
                    <th scope="col" class="sort" data-sort="completion">angkatan</th>
                    <th scope="col" class="sort" data-sort="completion">action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($records as $r)
                  <tr>
                    <td scope="row">
                    
                        {{ $no++ }}
                    </td>
                    <td scope="row">
                   
                         {{$r->nama_anggota}}
                       
                    </td>
                    <td class="budget">
                        {{$r->jenis_keanggotaan}}
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
                          <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg{{$r->id}}">Edit Data Anggota </a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".lihat-postingan{{$r->id}}">Masuk kepengurusan</a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".delete{{$r->id}}">Hapus Anggota</a>
                        </div>
                      </div>
                    </td>
                    <!-- lihat postingan kegiatan -->
                            <div class="modal fade lihat-postingan{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">lihat postingan kegiatan kampus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
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
                                                          <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button">Button</button>
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
                    <!-- endlihat postingan kegiatan -->
                    <!-- delete postingan kegiatan -->
                    <div class="modal fade delete{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Hapus Kegiatan Kampus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              <form action="{{ route('Data-anggota.destroy',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('delete')
                                                     
                                                    
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Hapus anggota</button>
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
                                                    <div class="card card-profile">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-3 order-lg-2">
                                                                <div class="card-profile-image ">
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
                                                                <h3 class="mb-0">{{ __('Edit Profile Anggota') }}</h3>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <form method="post" action="{{ route('Data-anggota.update',[$r->id]) }}"  enctype="multipart/form-data" autocomplete="off">
                                                                @csrf
                                                                @method('put')

                                                                <h6 class="heading-small text-muted mb-4">{{ __('Data Anggota information') }}</h6>
                                                                
                                                                <div class="pl-lg-4">
                                                                  <!-- nama anggota -->
                                                                    <div class="form-group{{ $errors->has('nama_anggota') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label">nama anggota</label>
                                                                        <input type="text" name="nama_anggota" class="form-control form-control-alternative{{ $errors->has('nama_anggota') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('nama_anggota', $r->nama_anggota) }}" required autofocus>

                                                                        @if ($errors->has('name'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('nama_anggota') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <!-- angkatan-->
                                                                    <div class="form-group{{ $errors->has('angkatan') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label">{{ __('angkatan') }}</label>
                                                                        <input type="date" name="angkatan" class="form-control form-control-alternative{{ $errors->has('angkatan') ? ' is-invalid' : '' }}" placeholder="{{ __('angkatan') }}" value="{{ old('angkatan',  $r->angkatan ) }}">

                                                                        @if ($errors->has('name'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <!-- alamat anggota -->
                                                                    <div class="form-group{{ $errors->has('alamat_anggota') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label" >{{ __('alamat anggota') }}</label>
                                                                        <input type="text" name="alamat_anggota" class="form-control form-control-alternative{{ $errors->has('input-alamat-anggota') ? ' is-invalid' : '' }}" placeholder="{{ __('alamat_anggota') }}" value="{{ old('alamat_anggota', $r->alamat_anggota) }}" required>

                                                                        @if ($errors->has('alamat_anggota'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('alamat_anggota') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    <!-- jenis keanggoatan -->
                                                                    <div class="form-group{{ $errors->has('jenis_keanggotaan') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label">{{ __('jenis keanggotaan') }}</label>
                                                                        <input type="text" name="jenis_keanggotaan" class="form-control form-control-alternative{{ $errors->has('jenis_keanggotaan') ? ' is-invalid' : '' }}" placeholder="{{ __('jenis_keanggotaan') }}" value="{{ old('jenis_keanggotaan', $r->jenis_keanggotaan) }}" required>

                                                                        @if ($errors->has('jenis_keanggotaan'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('jenis_keanggotaan') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div> 
                                                                    <div class="form-group{{ $errors->has('gambar') ? ' has-danger' : '' }}">
                                                                        <label class="form-control-label">{{ __('Masukan Foto Profile Admin') }}</label>
                                                                        <input type="file" name="gambar" class="form-control form-control-alternative{{ $errors->has('gambar') ? ' is-invalid' : '' }}" placeholder="{{ __('gambar') }}"  value="{{ old('gambar', $r->gambar) }}">

                                                                        @if ($errors->has('gambar'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('gambar') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>                   
                                                                    <div class="text-center">
                                                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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