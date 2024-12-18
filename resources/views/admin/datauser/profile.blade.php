@extends('template.index')

{{-- @section('judul', 'Profile Page') --}}

@section('main')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                {{-- <h3>Profile {{ Auth::user()->nama }}</h3> --}}
            </div>
        
        </div>
    </div>

<section class="section">
    <div class="row">
        
        <div class="col-12 col-lg-12">
            <div class="card">
                @foreach ($biodata as $data)
                <div class="card-body">
                    <div class="container mt-4">
                        <h2>Profil Pengguna: {{ $data->nama_lengkap }}</h2>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $data->foto) }}" alt="Profile Picture" style="width: 120px; height: 120px; border-radius: 10%; margin-bottom: 15px;">
                                <p><strong>Alamat :</strong> {{ $data->alamat }}</p>
                                <p><strong>Tempat Lahir :</strong> {{ $data->tempat_lahir }}</p>
                                <p><strong>Tanggal Lahir :</strong> {{ $data->tanggal_lahir }}</p>
                                <p><strong>Umur :</strong> {{ $data->umur }}</p>
                                <p><strong>Nomor Telepon :</strong> {{ $data->nomor_hp }}</p>
                                <p><strong>Nama Ayah :</strong> {{ $data->nama_ayah }}</p>
                                <p><strong>Nama Ibu :</strong> {{ $data->nama_ibu }}</p>
                                <p><strong>Kelas :</strong> {{ $data->kelas }}</p>
                            </div>
                        </div>
                        @endforeach
                        <a href="{{ route('data.user') }}" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

@endsection