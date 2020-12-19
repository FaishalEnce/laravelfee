<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
        <th>Hapus</th>
    </tr>
    </thead>
        <tbody>
            @foreach($kecamatans as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td><a href="{{ route('kecamatan.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
                <td> {!! Form::open(['route'=>['kecamatan.delete',$item->id],'method'=>'delete']) !!}
                    {!! Form::submit('hapus',['class'=>'btn btn-sm btn-danger']); !!}</td>
            </tr>
            {!! Form::close()!!}
            @endforeach
        </tbody>
</table>