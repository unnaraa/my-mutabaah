@extends('template.index')
@section('judul', 'Create Data User Page')

{{-- buat nempel kerangka --}}
@section('main')
{{-- kenapa main, karena di index ada yield namanya main --}}
{{-- ini untuk buat isi kerangkanya --}}

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Masukin Artikel baru disini</h3>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" data-parsley-validate action="{{route('create.artikel')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- csrf untuk mengamankan form --}}
                                    {{--  kalau nambahin image harus dikasi enctype terus dikasi multipart--}}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label">Sumber</label>
                                                <input type="text" id="first-name-column" class="form-control @error('sumber') is-invalid @enderror"
                                                value="{{ old('sumber') }}"
                                                placeholder="Masukkan Sumber Artikel" name="sumber" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Judul</label>
                                                <input type="text" id="last-name-column" class="form-control @error('judul') is-invalid @enderror"
                                                value="{{ old('judul') }}"
                                                placeholder="Masukkan Judul Artikel" name="judul"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Kategori</label>
                                                <input type="text" id="last-name-column" class="form-control @error('kategori') is-invalid @enderror"
                                                value="{{ old('kategori') }}"
                                                placeholder="Masukkan Kategori Artikel" name="kategori"/>
                                            </div>
                                        </div>
                                        </div>
                                    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Gambar Artikel</label>
                                                <input class="form-control @error('img') is-invalid @enderror" accept="img/*" type="file" name="img" 
                                                value="{{ old('img') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 mb-4" >
                                            <label  class="form-label">Link Artikel</label>
                                            <input type="text" id="last-name-column" class="form-control @error('link') is-invalid @enderror"
                                                value="{{ old('link') }}"
                                                placeholder="Masukkan link Artikel" name="link"/>
                                            {{-- <textarea name="link" id="editor" class="@error('link') is-invalid @enderror">{{ old('link') }}</textarea>
                                            cara panggil ck editor itu dengan menambahkan  id editor --}}
                                        </div>
                                        
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-light-secondary me-1 mb-1">
                                                Oke
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>

</div>
@endsection

@section('script')
<script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/parsley.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script src="{{ asset('assets/static/js/pages/ckeditor.js') }}"></script>
@endsection