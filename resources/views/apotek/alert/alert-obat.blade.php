@if ($errors->any())
    <div class="alert alert-danger mt-1" role="alert">
        <ul>
            @foreach ($errors->all() as $alert)
                <li>{{$alert}}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- @if (Session::get('success'))
    <div class="alert alert-success mt-1" role="alert">
        {{(Session::get('success'))}}
    </div>
@endif --}}

