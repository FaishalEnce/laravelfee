@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'luas.store']) !!}
        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('tahun', 'Tahun'); !!}
                {!! Form::text('tahun', '', ['class' => 'form-control','placeholder' => 'Tahun']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kecamatan', 'Kecamatan ID'); !!}
                {!! Form::text('kecamatan', '', ['class' => 'form-control','placeholder' => 'Kecamatan ID']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('tanaman', 'Tanaman Perkebunan ID'); !!}
                {!! Form::text('tanaman', '', ['class' => 'form-control','placeholder' => 'Tanaman Perkebunan ID']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('nilai', 'Nilai'); !!}
                {!! Form::text('nilai', '', ['class' => 'form-control','placeholder' => 'Nilai']); !!}
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{!! route('luas.index') !!}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection