<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
        <th>Hapus</th>
    </tr>
    </thead>
        <tbody>
            @foreach($beritas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td><a href="{{ route('berita.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
               <td> {!! Form::open(['route'=>['berita.delete',$item->id],'method'=>'delete']) !!}
                    {!! Form::submit('hapus',['class'=>'btn btn-sm btn-danger']); !!}</td>
                     
            </tr>
            {!! Form::close()!!}
            @endforeach
        </tbody>
</table>