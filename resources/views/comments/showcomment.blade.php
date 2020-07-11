@extends('layout')
@section('content')
@foreach($comment as $com)
<div class="container-md btn-outline-dark bg-dark">
    <div class="row">
        <div class="col-12 col-md-5 mt-4">
            <div class="card mb-3">
                <div class="card-body">
                        <p class="card-text">{{ $com ->com_content}}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endforeach
@endsection
