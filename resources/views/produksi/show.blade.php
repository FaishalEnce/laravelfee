@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">

        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('tahun', 'Tahun'); !!}
                {!! Form::label('tahun', $produksi->tahun, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kecamatan', 'Kecamatan ID'); !!}
                {!! Form::label('kecamatan', $produksi->kecamatan_id, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('tanaman', 'Tanaman'); !!}
                {!! Form::label('tanaman', $produksi->tanaman, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('nilai', 'Nilai'); !!}
                {!! Form::label('nilai', $produksi->nilai, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('created_at', 'Waktu Tambah'); !!}
                {!! Form::label('created_at', $produksi->created_at,['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('update_at', 'Waktu Ubah'); !!}
                {!! Form::label('update_at', $produksi->update_at,['class' => 'form-control']); !!}
            </div>

            <a href="{!! route('produksi.index') !!}" class="btn btn-warning">Kembali</a>
        </div>
        </div>
    </div>
</div>
@endsection