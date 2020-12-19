<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Kecamatan ID</th>
        <th>Tanaman Perkebunan ID</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>
    </thead>
        <tbody>
            @foreach($produktifitas_perkebunans as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kecamatan_id }}</td>
                <td>{{ $item->produktifitas_perkebunan_id }}</td>
                <td>{{ $item->nilai }}</td>
               
                <td><a href="{{ route('produktifitas_perkebunan.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
            </tr>
            @endforeach
        </tbody>
</table>