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
                        <a href="" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $row->id }}"> Hapus</a>

                                <!--Modal Hapus-->
<div class="modal fade text-left" id="hapus{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">Hapus User
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('hapus.user', $row->id) }}" method="POST">
            <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $row->id }}">
                Yakin mau hapus data user<strong style="color: red">{{ $row->nama }}</strong> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" class="btn btn-danger ms-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Hapus</span>
                </button>
            </div>
        </form>
        </div>
        </div>
    </div>
    {{-- End Modal Hapus --}}
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