@extends('template.index')

@section('main')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ubah Video</h3>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{ route('update.video', $videos->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Judul</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $videos->judul }}"
                                                name="judul"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Link</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $videos->link }}"
                                                name="link"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="last-name-column" class="form-label">Img Embed</label>
                                                <input type="text" id="last-name-column" class="form-control"
                                                value="{{ $videos->img }}"
                                                name="img"/>
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