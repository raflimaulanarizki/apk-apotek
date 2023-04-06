@extends('layouts.user_type.auth')
@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <div class="row">
        <div class="col-12">
          <div class="card-header pb-0">
              <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Data Distributor</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#newObat">+&nbsp; Tambah Distributor</button>
                    </div>
                    @if (Session::get('success'))
                      <div class="alert alert-success mt-1" role="alert">
                          {{(Session::get('success'))}}
                      </div>
                    @endif
                    @include('apotek.alert.alert')
                </div>
                
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Distributor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">notelpon</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1
                    @endphp
                    @foreach ($distributor as $dst)
                    <tr>
                      <td>
                        <div class="px-3">
                            <h6 class="text-xs font-weight-bold mb-0">{{$i++}}</h6>
                        </div>
                      </td>
                      <td>
                        <div class="px-3">
                            <h6 class="text-xs font-weight-bold mb-0">{{$dst->nama_distributor}}</h6>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{$dst->alamat}}</h6>
                      </td>
                      <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{$dst->notelpon}}</h6>
                      </td>
                      
                                    <td class="text-center">
                                      {{-- <div class="row"> --}}
                                          {{-- <a href="{{route("ubah-obat",$obt->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Obat"> --}}
                                            <i class="fas fa-edit text-secondary"></i>
                                        </a>
                                        @include('apotek.obat.hapus-obat')
                                        {{-- </div> --}}
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
  </main>
  


  @endsection
