 <!--Basic Modal -->
 <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel1">Respon Mutabaah</h5>
                 <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <form action="{{ route('create.review') }}" method="POST">
                @csrf
                 <div class="modal-body">
                     <section class="section">
                         <div class="row">
                             <div class="col">
                                 <div class="card">
                                     <div class="card-header">
                                         Respon Mutabaah
                                     </div>
                                     <div class="card-body">
                                         <input type="hidden" name="admin_id" id="" value="{{ Auth::user()->id }}">
                                         <input type="hidden" name="mutabaah_id" id="" value="{{ $row->id }}">
                                         <div class="form-group with-title mb-3">
                                             <textarea class="form-control" name="respon"
                                                 id="exampleFormControlTextarea1" rows="3"></textarea>
                                             <label>Respon disini😊</label>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn" data-bs-dismiss="modal">
                         <i class="bx bx-x d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Close</span>
                     </button>
                     <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                         <i class="bx bx-check d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Submit</span>
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
