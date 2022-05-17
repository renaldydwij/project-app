<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <form action="{{ route('provinsi.update', $provinsi->id) }}" method="POST">
            @csrf
            @method('PATCH')
                <div class="mb-3">
                    <label for="">Kode</label>
                    <input type="hidden" name="provinsi_id" id="id_provinsi" value="{{ $provinsi->id}}" class="form-control">
                    <input type="text" name="kode_edit" id="kode_edit" value="{{ $provinsi->kode}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Nama Provinsi</label>
                    <input type="text" name="nama" id="nama_edi" class="form-control" value="{{ $provinsi->nama}}">
                    <input type="hidden" name="status" id="status" class="form-control" value="Y">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>