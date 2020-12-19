@extends('layouts.app')

@section('content')

<div class="content">
    <div class="card">
        <div class='card-header'>
            <a href="{!! route('tenaga_kerja.create') !!}" class="btn btn-info">Buat Data</a>
        </div>
        <div class="card-body">
        @include('tenaga.table')
        </div>
    </div>
</div>
@endsection