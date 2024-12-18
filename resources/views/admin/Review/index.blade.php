@extends('template.index')
@section('main') 

 <!-- Basic Tables start -->
 <section class="section">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title">
              Data Respon
          </h5>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table" id="table1">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Admin</th>
                        <th>Mutabaah</th>
                        <th>Respon</th>
                        <th>Tanggal</th>
                        <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $review->admin->nama }}</td> 
                        <td>{{ $review->mutabaah->surah->surah}} ayat {{ $review->mutabaah->ayat_mulai}} - {{ $review->mutabaah->ayat_akhir}}</td>
                        <td>{{ $review->respon }}</td>
                        <td>{{ $review->created_at }}</td>
                        <td>
                            <form action="{{ route('delete.review', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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