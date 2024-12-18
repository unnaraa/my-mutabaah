@extends('template.index')
@section('main')

<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Laporan
            </h5>
        </div>
        <div class="card-body">
            <form action="{{route('create.laporan')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">judul laporan</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="judul"
                        required></input>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">isi laporan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"
                        required></textarea>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-light-secondary me-1 mb-1">
                        kirim
                    </button>
                </div>
            </form>
        </div>
    </div>

</section>

@endsection