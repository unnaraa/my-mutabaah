{{-- modal hapus --}}
<div class="modal fade text-left" id="edit{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white" id="myModalLabel120">
                    Update Status Pengaduan
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('data.user', $row->id) }}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <label for="" class="form-label">Update Kategori Pengaduan</label>
                    <input type="hidden" name="id" value="{{ $row->id }}" class="form-control">
                    <select name="status" class="form-select" id="">
                        <option value="{{ $row->status }}" disabled>{{ $row->status }}</option>
                        <option value="pending">pending</option>
                        <option value="in_progress">diproses</option>
                        <option value="resolve">selesai</option>
                        <option value="rejected">ditolak</option>
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="Submit" class="btn btn-primary ms-1" data-bs-dis  miss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan Perubahan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end modal hapus --}}