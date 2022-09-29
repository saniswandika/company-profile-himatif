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
                                    <h6 class="card-title text-uppercase text-muted mb-0">jumlah kegiatan HIMATIF</h6>
                                    <span class="h2 font-weight-bold mb-0">{{$seluruh_kegiatan}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
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
                                    <h6 class="card-title text-uppercase text-muted mb-0">jumlah perbulan</h6>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_program_bln}}</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">postingan tahun ini</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jmlh_program}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="ni ni-bullet-list-67"></i>
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
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <div class="card-header border-0">
                    <div class="row">
                        <div class="col">
                            <h2 class="mb-0">Table Program Himatif</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Program Himatif</button>

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
                                              <form action="{{ route('program-kerja.store') }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                              <label for="inputEmail4">nama program</label>
                                                              <input type="text" name="nama_program" class="form-control" placeholder="Name">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <label for="inputAddress">estimasi jalan program kerja</label>
                                                              <input type="date" class="form-control" name="estimasi_jalan_program" placeholder="Detail"></input>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                              <label for="inputPassword4">deskripsi program</label>
                                                              <textarea id="some-textarea"  class="ckeditor form-control" name="deskripsi_program" placeholder="Detail"></textarea >
                                                            </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Upload Gambar program kerja</label>
                                                            <input type="file" name="file_program" class="form-control" placeholder="image">
                                                        </div>      
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
            <!-- Table Kegiatan kampus -->
            @php
              $no = 1;
            @endphp
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="name">nama program</th>
                    <th scope="col">Tanggal Membuat program</th>
                    <th scope="col" class="sort" data-sort="budget">deskripsi program</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                    <th scope="col" class="sort" data-sort="completion">action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($records as $r)
                  <tr>
                  <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $no++ }}</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$r->nama_program}}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                    {!! Str::limit($r->estimasi_jalan_program, 20) !!}</td>
                    
                    <td>
                      <div class="d-flex align-items-center">
                      {!! Str::limit($r->deskripsi_program, 20) !!}
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group">
                          <img  src="{{asset('/file_program/' . $r->file_program)}}" style="  border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" alt="...">
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg{{$r->id}}">Edit program </a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".lihat-postingan{{$r->id}}">lihat program</a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".delete{{$r->id}}">Hapus program</a>
                        </div>
                      </div>
                    </td>
                    <!-- edit kegiatan -->
                            <div class="modal fade bd-example-modal-lg{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Edit Program Himatif</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              <form action="{{ route('program-kerja.update',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('put')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                              <label for="inputEmail4">Ganti Nama program</label>
                                                              <input type="text" name="nama_program" class="form-control" placeholder="Name" value="{{$r->nama_program}}"></input>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <label for="inputAddress">Ganti Estimasi Program</label>
                                                              <input type="date" class="form-control" name="estimasi_jalan_program" placeholder="Detail" value="{{$r->estimasi_jalan_program}}"></input>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                              <label >Deskripsi program</label>
                                                              <textarea class="ckeditor form-control" name="deskripsi_program" placeholder="Detail">{!! $r->deskripsi_program !!}</textarea >
                                                            </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Ganti Gambar program</label>
                                                            <input type="file" name="file_program" class="form-control" placeholder="image"  value="{{$r->estimasi_jalan_program}}">
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
                    <!-- end edit kegiatan -->
                    <!-- lihat postingan kegiatan -->
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
                                            <article>
                                                <!-- Post header-->
                                                <header class="mb-4">
                                                    <!-- Post title-->
                                                    <h1 class="fw-bolder mb-1">{{$r->nama_program}}</h1>
                                                    <!-- Post meta content-->
                                                    <div class="text-muted fst-italic mb-2">Posted on {{$r->estimasi_jalan_program}} by HIMATIF</div>
                                                    <!-- Post categories-->
                                                </header>
                                                <!-- Preview image figure-->
                                                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('file_program/'. $r->file_program ) }}" alt="..." /></figure>
                                                <!-- Post content-->
                                                <section class="mb-5">
                                                    <p class="fs-5 mb-4">{!!$r->deskripsi_program !!}</p>
                                                </section>
                                            </article>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    <!-- endlihat postingan kegiatan -->
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
                                              <form action="{{ route('program-kerja.destroy',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('delete')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                              <label for="inputEmail4">Ganti Nama program</label>
                                                              <input type="text" name="nama_program" class="form-control" placeholder="Name" value="{{$r->nama_program}}" disabled></input>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <label for="inputAddress">Ganti Estimasi Program kerja</label>
                                                              <input type="date" class="form-control" name="estimasi_jalan_program" placeholder="Detail" value="{{$r->estimasi_jalan_program}}" disabled></input>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                              <label for="inputPassword4">Deskripsi program</label>
                                                              <textarea id="some-textarea"  class="ckeditor form-control" name="deskripsi_program" placeholder="Detail" disabled>{!! $r->deskripsi_program !!}</textarea >
                                                            </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Ganti Gambar Program</label>
                                                            <input type="file" name="file_program" class="form-control" placeholder="image" disabled>
                                                        </div>      
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Hapus Postingan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                    
                                              </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    <!-- end Edit postingan kegiatan -->
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="pagination justify-content-center p-2">
                {{ $records->links() }}
            </div>
            
            
@endsection

@push('js')
 
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush