@extends('template.index')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/compiled/css/table-datatable.css')}}" />
<script src="{{ asset('assets/static/js/initTheme.js')}}"></script>

@endsection

@section('main')

<section class="section">
    <div class="card">
        {{-- Alert Success --}}
                {{-- buat manggil alert --}}
                @if(Session::get('Sukses')) 
                <div class="alert alert-success alert-dismissible show fade">
                    {{-- buat manggil pesan alert --}}
                    {{ Session::get('Sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                {{-- End Alert Success --}}
         {{-- Alert Delete --}}
         @if(Session::get('Delete')) 
         <div class="alert alert-danger alert-dismissible show fade">
             {{ Session::get('Delete') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
         {{-- End Alert Delete --}}
        <div class="card-header">
            <h5 class="card-title">
                Artikel
            </h5>
            <a href="{{ route('form.artikel') }}" class="btn btn-outline-light rounded-pill ">+ Artikel</a>
        </div>
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sumber</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Link</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->sumber }}</td>
                            <td>{{ $row->judul }}</td>
                            <td>{{ $row->kategori }}</td>
                            <td>{{ $row->link }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$row->img) }}" width="50px">
                              </td>
                            <td>
                                {{-- <span class="badge bg-success">Status</span> --}}
                                <a href="{{ route('edit.artikel', $row->id) }}" class="badge bg-warning" > Edit</a>
                                <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $row->id }}"> Hapus</a>

                                <!--Modal Hapus-->
<div class="modal fade text-left" id="hapus{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">Hapus Artikel
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('delete.artikel', $row->id) }}" method="POST">
            <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $row->id }}">
                Yakin mau hapus artikel <strong style="color: red">{{ $row->judul }}</strong> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" class="btn btn-danger ms-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Hapus</span>
                </button>
            </div>
        </form>
        </div>
        </div>
    </div>
    {{-- End Modal Hapus --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
@endsection
@section('script')
<script src="{{asset('assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
<script src="{{asset('assets/static/js/pages/simple-datatables.js')}}"></script>
<script src="{{asset('assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}} "></script>
<script src="{{asset('assets/compiled/js/app.js')}}"></script>
@endsection    