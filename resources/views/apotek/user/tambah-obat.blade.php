<!-- Modal -->
<div class="modal fade" id="newObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 <form method="post"  action="{{route("obat")}}" class=" px-3 rounded" enctype="multipart/form-data">
  @csrf
  <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                <label for="kode_obat" class="form-label">Kode Obat</label>
                                <input type="text" name="kode_obat" class="form-control" id="kode_obat" value="{{Session::get('kode_obat')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama_obat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" name="nama_obat" id="nama_obat"  value="{{Session::get('nama_obat')}}">
                                </div>
                            </div>
  </div>
    <div class="row">
                            <div class="col-md-6">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" id="merk"  value="{{Session::get('merk')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="jenis" class="form-label">Jenis</label>
                                <input type="text" class="form-control" name="jenis" id="jenis"  value="{{Session::get('jenis')}}">
                            </div>
    </div>
        <div class="row">
                            <div class="col-md-6">
                                <label for="satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" name="satuan" id="satuan"  value="{{Session::get('satuan')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="golongan" class="form-label">Golongan</label>
                                <input type="text" class="form-control" name="golongan" id="golongan"  value="{{Session::get('golongan')}}">
                            </div>
        </div>
                            <div class="mb-3">
                                <label for="kemasan" class="form-label">Kemasan</label>
                                <textarea type="text" class="form-control" name="kemasan" id="kemasan" rows="3">{{Session::get('kemasan')}}</textarea>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="harga_jual" class="form-label">Harga Jual</label>
                                <div class="input-group">
                                    <span class="input-group-text" for="harga_jual">Rp</span>
                                    <input type="number" class="form-control ps-2" name="harga_jual" id="harga_jual"  value="{{Session::get('harga_jual')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stok" id="stok" value="1">
                            </div>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Foto Obat</label>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                                {{-- <input type="file" class="form-control" name="gambar" id="gambar" hidden> --}}
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
  

