<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistem Manajemen Kepegawaian</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    </head>
    <body class="mx-auto my-4 w-75">
        <h1 class="text-center">Form Jabatan</h1>
        <a class="btn btn-secondary my-2" href="{{ route('jabatans.index') }}" role="button">Kembali</a>
        <div class="card mt-1 mb-4">
        <form action=@isset($jabatan->id) "{{ route('jabatans.update', ['jabatan' => $jabatan->id]) }}" @else "{{ route('jabatans.store') }}" @endisset class="card-body" method=POST>
            @csrf
            @isset($jabatan->id) @method('PUT') @endisset
            <div class="row my-2">
                <div class="col">
                    <label for="formInputJabatan" class="form-label">Nama Jabatan</label>
                    <input name="nama_jabatan" type="text" class="form-control" id="jabatan" @isset($jabatan->nama_jabatan) value="{{ $jabatan->nama_jabatan }}" @endisset placeholder="Masukkan nama jabatan" required>
                </div>
            </div>
            <div class="mt-4 mb-2 text-center">
                <button type="submit" class="btn btn-warning w-50">Simpan</button>
            </div>
        </form>
        </div>
    </body>
</html>
