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
                    <h3>Masukin Video baru disini</h3>
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
                                <form class="form" data-parsley-validate action="{{route('create.video')}}" method="POST" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Judul</label>
                                                <input type="text" id="last-name-column" class="form-control @error('judul') is-invalid @enderror"
                                                value="{{ old('judul') }}"
                                                placeholder="Masukkan Judul Artikel" name="judul"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Link <br>
                                                    <span style="font-size: 12px">Example : https://www.youtube.com/embed/Fj8GQ2wenqI?si=OuwwOJu7uKnWP18k
                                                        <br> Ambil dari bagikan->sematkan
                                                    </span>
                                                </label>
                                                <input type="text" id="last-name-column" class="form-control @error('link') is-invalid @enderror"
                                                value="{{ old('link') }}"
                                                placeholder="Masukkan link Video" name="link"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Img Embed <br>
                                                    <span style="font-size: 12px">Example : https://img.youtube.com/vi/<span style="color: red">Fj8GQ2wenqI</span>/hqdefault.jpg
                                                        <br> <span style="color: red">Fj8GQ2wenqI = Kode Video</span>
                                                    </span>
                                                </label>
                                                <input type="text" id="last-name-column" class="form-control @error('img') is-invalid @enderror"
                                                value="{{ old('img') }}"
                                                placeholder="Masukkan img Video" name="img"/>
                                            </div>
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