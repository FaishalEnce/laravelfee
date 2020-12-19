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
            @foreach($tanamans as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanaman }}</td>
                <td><a href="{{ route('tanaman.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
                
                <td> {!! Form::open(['route'=>['tanaman.delete',$item->id],'method'=>'delete']) !!}
                    {!! Form::submit('hapus',['class'=>'btn btn-sm btn-danger']); !!}</td>
            </tr>
            
            {!! Form::close()!!}
            @endforeach
        </tbody>
</table>