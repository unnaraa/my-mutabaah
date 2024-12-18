@extends('template.index')

{{-- buat nempel kerangka --}}
@section('main')
{{-- kenapa main, karena di index ada yield namanya main --}}
{{-- ini untuk buat isi kerangkanya --}}

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ubah Artikel</h3>
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
                                <form class="form" action="{{ route('update.artikel', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mandatory">
                                                <label for="first-name-column" class="form-label">Sumber</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                value="{{ $artikel->sumber }}"
                                                name="sumber" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Judul</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $artikel->judul }}"
                                                name="judul"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Kategori</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $artikel->kategori }}"
                                                placeholder="Masukkan Kategori Artikel" name="kategori"/>
                                            </div>
                                        </div>
                                        </div>
                                    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Gambar Artikel</label>
                                                <input class="form-control" accept="img/*" type="file" name="img" 
                                                value="{{ $artikel->img }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6 mb-4" >
                                            <label  class="form-label">Link Artikel</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $artikel->link }}"
                                                placeholder="Masukkan link Artikel" name="link"/>
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