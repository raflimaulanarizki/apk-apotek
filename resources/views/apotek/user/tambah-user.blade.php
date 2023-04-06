<!-- Modal -->
<div class="modal fade" id="newUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 <form method="post"  action="{{url("user")}}" class=" px-3 rounded">
  @csrf

                            <div class="col-md-12">
                               <div class="form-group">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{Session::get('name')}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"  value="{{Session::get('email')}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" >
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="level" class="form-label">Level</label>
                                <select name="level" id="level" class="form-select" aria-label="Default select example">
                                    <option value="Apoteker">Apoteker</option>
                                    <option value="Gudang">Gudang</option>
                                    <option value="Kasir">Kasir</option>
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Administrator">Administrator</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="aktif" class="form-label">Aktif</label>
                                <select name="aktif" id="aktif" class="form-select" aria-label="Default select example">
                                    <option value="0">Aktif</option>
                                    <option value="1">Nonaktif</option>
                                </select>
                            </div>
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
  

