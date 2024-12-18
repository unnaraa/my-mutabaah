@extends('template.index')
@section('main') 

 <!-- Basic Tables start -->
 <section class="section">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title">
              Mutabaah {{ $biodata->nama_lengkap }}
          </h5>
      </div>
      <div class="card-body">
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