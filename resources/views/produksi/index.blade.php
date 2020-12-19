@extends('layouts.app')

@section('content')

<div class="content">
    <div class="card">
        <div class='card-header'>
            <a href="{!! route('produksi.create') !!}" class="btn btn-info">Buat Data</a>
        </div>
        <div class="card-body">
        @include('produksi.table')
        </div>
    </div>
</div>
@endsection