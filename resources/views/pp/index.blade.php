@extends('layouts.app')

@section('content')

<div class="content">
    <div class="card">
        <div class='card-header'>
            <a href="{!! route('produktifitas_perkebunan.create') !!}" class="btn btn-info">Buat Data</a>
        </div>
        <div class="card-body">
        @include('produktifitas_perkebunan.table')
        </div>
    </div>
</div>
@endsection