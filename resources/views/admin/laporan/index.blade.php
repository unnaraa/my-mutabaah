@extends('template.index')
@section('main') 

 <!-- Basic Tables start -->
 <section class="section">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title">
              Data Laporan
          </h5>
          <a href="{{ route('form.laporan') }}" class="btn icon icon-left btn-dark mt-3"><i data-feather="file"></i> + laporan</a>
      </div>
     
      <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="table1">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>judul</th>
                      <th>isi laporan</th>
                      <th>Tanggal</th>
                      <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($laporan as $row)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $row->judul }}</td> 
                      <td>{{ $row->isi_laporan }}</td> 
                      <td> {{ date('d F Y', strtotime($row->created_at)) }}</</td> 
                      <td>
                          <form action="{{ route('laporan.destroy', $row->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus laporan ini?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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

@endsection