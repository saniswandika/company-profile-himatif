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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Partnership</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jml}}</span>
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
                            <h2 class="mb-0">Table Partnership HIMATIF</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Partnership </button>

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
                                              <form action="{{ route('Partnership.store') }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                              <label for="inputEmail4">nama perusahaan</label>
                                                              <input type="text" name="nama_perusahaan" class="form-control" placeholder="Name">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <label for="inputAddress">mulai kerjasama</label>
                                                              <input type="date" class="form-control" name="mulai_kerjasama" placeholder="Detail"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                              <label for="inputPassword4">deskripsi</label>
                                                              <textarea id="some-textarea"  class="ckeditor form-control" name="jenis_kerjasama" placeholder="Detail"></textarea >
                                                            </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                  <label for="inputAddress">berkahirnya kerja sama</label>
                                                                  <input type="date" class="form-control" name="ex_kerjasama" placeholder="Detail"></input>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputAddress2">Upload Gambar Kegiatan</label>
                                                                <input type="file" name="logo_perusahaan" class="form-control" placeholder="image">
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
            <!-- Table Kegiatan kampus -->
            @php
              $no = 1;
            @endphp
            <div class="table-responsive">
              <table id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="name">nama Perusahaan</th>
                    <th scope="col" class="sort" data-sort="status">tanggal mulai kerjasama</th>
                    <th scope="col">Tanggal berkahirnya kerja sama</th>
                    <th scope="col" class="sort" data-sort="budget">logo perusahaan</th>
                    <th scope="col" class="sort" data-sort="completion">aksi</th>
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
                          <span class="name mb-0 text-sm">{{$r->nama_perusahaan}}</span>
                        </div>
                      </div>
                    </th>
                  
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">
                          {{$r->mulai_kerjasama}}
                        </span>
                      </span>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                           {{$r->ex_kerjasama}}     
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group">
                          <img  src="{{asset('/logo_perusahaan/' . $r->logo_perusahaan)}}" style="  border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" alt="...">
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg{{$r->id}}">Edit Partnership </a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".delete{{$r->id}}">Hapus Partnership</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                      <!-- delete postingan kegiatan -->
                            <div class="modal fade delete{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Hapus partnership</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              <form action="{{ route('Partnership.destroy',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('delete')
                                                                 <div class="form-row">
                                                                          <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">nama perusahaan</label>
                                                                            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Name" value="{{$r->nama_perusahaan}}"disabled>
                                                                          </div>
                                                                          <div class="form-group col-md-6">
                                                                            <label for="inputAddress">mulai kerjasama</label>
                                                                            <input type="date" class="form-control" name="mulai_kerjasama" placeholder="Detail" value="{{$r->mulai_kerjasama}}" disabled></input>
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                            <label for="inputPassword4">deskripsi</label>
                                                                            <textarea id="some-textarea"  class="ckeditor form-control" name="jenis_kerjasama" placeholder="Detail" disabled>{{$r->jenis_kerjasama}} </textarea >
                                                                          </div>
                                                                      <div class="form-row">
                                                                          <div class="form-group col-md-6">
                                                                                <label for="inputAddress">berkahirnya kerja sama</label>
                                                                                <input type="date" class="form-control" name="ex_kerjasama" placeholder="Detail" value="{{$r->ex_kerjasama}}"disabled></input>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="inputAddress2">Upload Gambar Kegiatan</label>
                                                                              <input type="file" name="logo_perusahaan" class="form-control" placeholder="image" disabled>
                                                                        </div>   
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
                    <!-- edit kegiatan -->
                              <div class="modal fade bd-example-modal-lg{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                                  <h5 class="modal-title">Edit perusahaan {{$r->nama_perusahaan}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              
                                                        <div class="modal-body">
                                                          <form action="{{ route('Partnership.update',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf 
                                                            @method('put')
                                                                    <div class="form-row">
                                                                          <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">nama perusahaan</label>
                                                                            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Name" value="{{$r->nama_perusahaan}}">
                                                                          </div>
                                                                          <div class="form-group col-md-6">
                                                                            <label for="inputAddress">mulai kerjasama</label>
                                                                            <input type="date" class="form-control" name="mulai_kerjasama" placeholder="Detail" value="{{$r->mulai_kerjasama}}"></input>
                                                                          </div>
                                                                      </div>
                                                                      <div class="form-group">
                                                                            <label for="inputPassword4">deskripsi</label>
                                                                            <textarea id="some-textarea"  class="ckeditor form-control" name="jenis_kerjasama" placeholder="Detail" >{{$r->jenis_kerjasama}} </textarea >
                                                                          </div>
                                                                      <div class="form-row">
                                                                          <div class="form-group col-md-6">
                                                                                <label for="inputAddress">berkahirnya kerja sama</label>
                                                                                <input type="date" class="form-control" name="ex_kerjasama" placeholder="Detail" value="{{$r->ex_kerjasama}}"  ></input>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="inputAddress2">Upload Gambar Kegiatan</label>
                                                                              <input type="file" name="logo_perusahaan" class="form-control" placeholder="image" value="{{$r->logo_perusahaan}}">
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
                    <!-- end edit kegiatan -->
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