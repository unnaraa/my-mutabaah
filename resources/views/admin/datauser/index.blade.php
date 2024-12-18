@extends('template.index')
@section('main') 

 <!-- Basic Tables start -->
 <section class="section">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title">
              Data User
          </h5>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table" id="table1">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Nomor Telepon</th>
                          <th>Jenis Kelamin</th>
                          {{-- <th>Status</th> --}}
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->nomor_hp }}</td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        {{-- <td>
                          @if ($row->status === 'Active')
                              <span class="badge bg-success">Active</span>
                          @else
                              <span class="badge bg-danger">Non-Active</span>
                          @endif
                      </td> --}}
                      <td>
                        <a href="{{ route('data.user.mutabaah', $row->id) }}">
                            <button type="submit" class="badge bg-success">Mutabaah</button>
                        </a>
                        <a href="{{ route('data.user.detail', $row->id) }}">
                            <button type="submit" class="badge bg-primary">Detail</button>
                        </a>
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