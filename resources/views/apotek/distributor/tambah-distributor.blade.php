<!-- Modal -->
<div class="modal fade" id="newDistributor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 <form method="post"  action="{{url("distributor")}}" class=" px-3 rounded">
  @csrf
                            <div class="col-md-12">
                               <div class="form-group">
                                <label for="name" class="form-label">Nama Distributor</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{Session::get('name')}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="email" class="form-label">Alamat</label>
                                <textarea type="text" class="form-control" name="alamat" id="alamat" rows="2">{{Session::get('alamat')}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="notelepon" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="notelepon" id="notelepon" value="{{Session::get('notelepon')}}">
                            </div>
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </main>
  

