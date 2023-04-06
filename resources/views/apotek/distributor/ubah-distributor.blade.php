<!-- Modal -->
<div class="modal fade" id="ubahDistributor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Distributor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 <form method="post"  action="{{url('distributor/'.$dst->id)}}" class=" px-3 rounded">
  @csrf
  @method('put')
                            <div class="col-md-12">
                               <div class="form-group">
                                <label for="name" class="form-label">Nama Distributor</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$dst->nama_distributor}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label for="email" class="form-label">Alamat</label>
                                <textarea type="text" class="form-control" name="alamat" id="alamat" rows="2">{{$dst->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <label for="notelepon" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="notelepon" id="notelepon" value="{{$dst->notelepon}}">
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
  

