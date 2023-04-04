@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <div class="row">
        <div class="col-12">
          <div class="card-header pb-0">
              <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Obat</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#newObat">+&nbsp; Tambah Obat</button>
                    </div>
                    @if (Session::get('success'))
                      <div class="alert alert-success mt-1" role="alert">
                          {{(Session::get('success'))}}
                      </div>
                    @endif
                    @include('apotek.alert.alert-obat')
                </div>
                
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Obat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Merk</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($obat as $obt)
                    <tr>
                      
                      <td>
                        <div class="px-3">
                            <h6 class="text-xs font-weight-bold mb-0">{{$obt->kode_obat}}</h6>
                        </div>
                      </td>
                          <td>
                        <div class="d-flex py-1">
                          <div>
                            <img src="../assets/img/apotek/betadine.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><a href="{{route("detail-obat",$obt->id)}}">{{$obt->nama_obat}}</a></h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{$obt->merk}}</h6>
                      </td>
                      <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{$obt->jenis}}</h6>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-bold mb-0">Rp{{$obt->harga_jual}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-sm font-weight-bold mb-0">{{$obt->stok}}</p>
                      </td>
                                    <td class="text-center">
                                        <a href="{{route("ubah-obat",$obt->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Obat">
                                            <i class="fas fa-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('apotek.obat.tambah-obat')
{{-- <!-- Modal -->
<div class="modal fade" id="newObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}

  </main>
  


  @endsection
