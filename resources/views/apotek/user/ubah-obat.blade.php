@extends('layouts.user_type.auth')

@section('content')

<style>
    .image-upload > input
{
    display: none;
}
</style>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Profile Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{url('detail-obat/'.$obat->id)}}" enctype="multipart/form-data" method="POST" role="form text-left">
                    @csrf
                    @method('put')
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode-obat" class="form-control-label">{{ __('Kode Obat') }}</label>
                                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                    <input class="form-control" value="{{ $obat->kode_obat }}" type="text" placeholder="Kode" id="kode-obat" name="kode_obat">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama-obat" class="form-control-label">Nama Obat</label>
                                <div class="@error('user.name') border border-danger rounded-3 @enderror"">
                                    <input class="form-control" value="{{ $obat->nama_obat }}" type="text" placeholder="Nama Obat" id="nama-obat" name="nama_obat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('Merk') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Merk" id="number" name="merk" value="{{ $obat->merk }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.location" class="form-control-label">{{ __('Jenis Obat') }}</label>
                                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Jenis Obat" id="jenis-obat" name="jenis" value="{{ $obat->jenis }}">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('Satuan') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="tel" placeholder="Satuan" id="satuan" name="satuan" value="{{ $obat->satuan }}">
                                        @error('phone')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.location" class="form-control-label">{{ __('Golongan') }}</label>
                                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Golongan" id="golongan" name="golongan" value="{{ $obat->golongan }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kemasan">{{ 'Kemasan' }}</label>
                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" id="kemasan" rows="2" placeholder="Deskripsikan kemasan obat" name="kemasan">{{ $obat->kemasan }}</textarea>
                        </div>
                    </div>
                                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('Harga') }}</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="harga" id="harga" name="harga_jual" value="{{ $obat->harga_jual }}">
                                        @error('phone')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.location" class="form-control-label">{{ __('Stok') }}</label>
                                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Stok" id="stok" name="stok" value="{{ $obat->stok }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                

            </div>
        </div>
    </div>
            <div class="col-12 col-xl-4 ">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-1">Gambar</h6>
            </div>
            <div class="card-body p-3 ">
              <div class="row">
                 <div class="col-auto">
                    <div class="card card-blog card-plain">
                        <div class="image-upload ">
                        <img src="{{url('img').'/'.$obat->gambar}}" class="w-100 border-radius-lg">
                            
                                <label for="file-input">
                                    <a class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                     <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                                    </a>
                                    </label>
                                <input id="file-input" name="gambar" type="file"/>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      {{-- @include('layouts.footers.auth.footer') --}}
</div>

@endsection

