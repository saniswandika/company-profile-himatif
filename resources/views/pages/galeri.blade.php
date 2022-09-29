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
                                    <h5 class="card-title text-uppercase text-muted mb-0">jumlah gambar</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jml_gambar}}</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">jumlah publish</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$jml_gambar}}</span>
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
                            <h2 class="mb-0">Table galeri HIMATIF</h2>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Galeri </button>

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
                                              <form action="{{ route('Galeri.store') }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                              <label for="inputEmail4">nama gambar</label>
                                                              <input type="text" name="nama_gambar" class="form-control" placeholder="Name">
                                                        </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputAddress2">dari kegiatan </label>
                                                                <select name ="kegiataan_kampus_id" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                  <option selected>masukan dari kegiatan...</option>
                                                                      @foreach($kegiatan as $k)
                                                                          <option value="{{$k->id}}">{{$k->nama_kegiatan}}</option>
                                                                      @endforeach
                                                                </select>  
                                                           </div> 
                                                        
                                                        </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="inputAddress2">Upload Gambar galeri</label>
                                                                <input type="file" name="file gambar" class="form-control" placeholder="image">
                                                           </div> 
                                                           
                                                           <div class="form-group col-md-12">
                                                              <label for="inputAddress">deskripsi gambar</label>
                                                              <textarea id="some-textarea"  class="ckeditor form-control" name="deskripsi_gambar" placeholder="Detail" ></textarea >
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
                </div>
            <!-- Table Kegiatan kampus -->
            @php
              $no = 1;
            @endphp
            <div class="table-responsive">
              <table  id="example" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="name">nama gambar</th>
                    <th scope="col" class="sort" data-sort="status">deskripsi gambar</th>
                    <th scope="col" class="sort" data-sort="status">gambar</th>
                    <th scope="col">action</th>
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
                          <span class="name mb-0 text-sm">{{$r->nama_gambar}}</span>
                        </div>
                      </div>
                    </th>
                  
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">
                          {!! $r->deskripsi_gambar !!}
                        </span>
                      </span>
                    </td>
                    
                    <td>
                      <div class="avatar-group">
                          <img  src="{{asset('/file_gambar/' . $r->file_gambar)}}" style="  border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;" alt="...">
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg{{$r->id}}">Edit Galeri </a>
                          <a class="dropdown-item" data-toggle="modal" data-target=".delete{{$r->id}}">Hapus gambar </a>
                        </div>
                      </div>
                    </td>
                  </tr>
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
                                              <form action="{{ route('Galeri.destroy',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                 @csrf 
                                                 @method('delete')
                                                  <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="inputEmail4">nama gambar</label>
                                                            <input type="text" name="nama_gambar" class="form-control" placeholder="Name" value="{{$r->nama_gambar}}">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="inputAddress">deskripsi_gambar</label>
                                                            <input type="text" class="form-control" name="deskripsi_gambar" placeholder="Detail" value="{{$r->deskripsi_gambar}}"></input>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="form-row">
                                                          <div class="form-group">
                                                              <label for="inputAddress2">Upload Gambar Kegiatan</label>
                                                              <input type="file" name="file_gambar" class="form-control" placeholder="image" value="{{$r->file_gambar}}">
                                                        </div>   
                                                    </div>     
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-primary">Hapus Gambar</button>
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
                                                  <h5 class="modal-title">Edit galeri {{$r->nama_gambar}}</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              
                                                        <div class="modal-body">
                                                          <form action="{{ route('Galeri.update',[$r->id]) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf 
                                                            @method('put')
                                                                    <div class="form-row">
                                                                          <div class="form-group col-md-6">
                                                                            <label for="inputEmail4">nama perusahaan</label>
                                                                            <input type="text" name="nama_gambar" class="form-control" placeholder="Name" value="{{$r->nama_gambar}}">
                                                                          </div>
                                                                          <div class="form-group col-md-6">
                                                                                <label for="inputAddress2">dari kegiatan </label>
                                                                                <select name ="kegiataan_kampus_id" class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                                  <option value="{{$k->id}}" selected>Ganti dari kegiatan...</option>
                                                                                      @foreach($kegiatan as $k)
                                                                                          <option value="{{$k->id}}">{{$k->nama_kegiatan}}</option>
                                                                                      @endforeach
                                                                                </select>  
                                                                          </div> 
                                                                          <div class="form-group  col-md-12">
                                                                            <label for="inputPassword4">deskripsi</label>
                                                                            <textarea id="some-textarea"  class="ckeditor form-control" name="deskripsi_gambar" placeholder="Detail" >{{$r->deskripsi_gambar}} </textarea >
                                                                        </div>
                                                                      </div>
                                                                      <div class="form-row">
                                                                          <div class="form-group">
                                                                              <label for="inputAddress2">Upload Gambar galeri</label>
                                                                                <input type="file" name="file_gambar" class="form-control" placeholder="image">
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