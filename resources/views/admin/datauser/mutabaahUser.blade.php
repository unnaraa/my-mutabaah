@extends('template.index')
@section('main')

<!-- Basic Tables start -->
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Mutabaah {{ $biodata->nama }}
            </h5>
        </div>
        <div class="card-body">
            <a href="{{ route('data.review', $biodata->id) }}" class="btn icon icon-left btn-dark mb-3"><i data-feather="file"></i>Lihat Respon</a>
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Surah</th>
                            <th>Juz</th>
                            <th>Ayat Mulai</th>
                            <th>Ayat Akhir</th>
                            <th>Status</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mutabaah as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> {{ $row->tanggal }} </td>
                            <td> {{ $row->surah->surah }} </td>
                            <td> {{ $row->juz }} </td>
                            <td> {{ $row->ayat_mulai }} </td>
                            <td> {{ $row->ayat_akhir }} </td>
                            <td> {{ $row->status }} </td>
                            <td> {{ $row->desc }} </td>
                            <td>
                                <button type="button" class="badge bg-success" data-bs-toggle="modal"
                                    data-bs-target="#default">
                                    + respon
                                </button>
                                @include('Admin.Review.tambahReview')
                                <form action="{{ route('data.user.mutabaah.delete', $row->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge bg-danger" onclick="return confirm('Are you sure you want to delete this?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<!-- Basic Tables end -->

@endsection
