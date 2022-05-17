@include('layout.navbar')

<div class="card">
    <div class="card-header">
        Data Provinsi
    </div>
    <div class="card-body">
        <a href="{{route ('provinsi.create')}}" class="btn btn-primary"> Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Provinsi</th>
            <th>Active</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($provinsi as $row)
            <tr>
                <td>{{ $row->id}}</td>
                <td>{{ $row->kode}}</td>
                <td>{{ $row->nama}}</td>
                <td>{{ $row->status}}</td>
                <td>
                    <a href="{{ route('provinsi.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('provinsi.destroy',$row->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
