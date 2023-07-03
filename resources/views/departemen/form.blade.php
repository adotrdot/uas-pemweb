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
        <h1 class="text-center">Form Departemen</h1>
        <a class="btn btn-secondary my-2" href="{{ route('departemens.index') }}" role="button">Kembali</a>
        <div class="card mt-1 mb-4">
        <form action=@isset($departemen->id) "{{ route('departemens.update', ['departemen' => $departemen->id]) }}" @else "{{ route('departemens.store') }}" @endisset class="card-body" method=POST>
            @csrf
            @isset($departemen->id) @method('PUT') @endisset
            <div class="row my-2">
                <div class="col">
                    <label for="formInputDepartemen" class="form-label">Nama Departemen</label>
                    <input name="nama_departemen" type="text" class="form-control" id="formInputDepartemen" @isset($departemen->nama_departemen) value="{{ $departemen->nama_departemen }}" @endisset placeholder="Masukkan nama departemen" required>
                </div>
            </div>
            <div class="mt-4 mb-2 text-center">
                <button type="submit" class="btn btn-warning w-50">Simpan</button>
            </div>
        </form>
        </div>
    </body>
</html>
