@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <button type="button" class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#newUser">+&nbsp; New User</button>
                    </div>
                        @if (Session::get('success'))
                    <div class="alert alert-success mt-1" role="alert">
                        {{(Session::get('success'))}}
                    </div>
                    @endif
                    @if ($errors->any())
    <div class="alert alert-danger mt-1" role="alert">
        <ul>
            @foreach ($errors->all() as $alert)
                <li>{{$alert}}</li>
            @endforeach
        </ul>
    </div>
@endif
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Active
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1
                                @endphp
                                @foreach ($user as $usr)

                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$i++}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{{$usr->name}}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$usr->email}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$usr->level}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{($usr->aktif == 0) ? 'bg-gradient-success' : 'bg-gradient-secondary'}} ">{{($usr->aktif == 0) ? 'Aktif' : 'Nonaktif'}}</span>
                      </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$usr->created_at}}</span>
                                    </td>
                                    <td class="text-center">
                                            <i class="fas fa-user-edit text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#ubahUser"></i>

                                <form action="{{url('user/'.$usr->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" style="padding: 0; border: none; background: none;" class="cursor-pointer fas fa-trash text-secondary">
                                </form>
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
    @include('apotek.user.tambah-user')
    @include('apotek.user.ubah-user')
</div>
 
@endsection