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
        <h1 class="text-center">Sistem Manajemen Kepegawaian</h1>
        <div class="row my-4">
            <div class="col">
                <a href="{{ route('pegawais.index') }}" class="btn btn-primary w-75">Pegawai</a>
            </div>
            <div class="col">
                <a href="{{ route('departemens.index') }}" class="btn btn-primary w-75">Departemen</a>
            </div>
            <div class="col">
                <a href="{{ route('jabatans.index') }}" class="btn btn-primary w-75">Jabatan</a>
            </div>
            <div class="col">
                <a href="{{ route('absensis.index') }}" class="btn btn-primary w-75">Absensi</a>
            </div>
        </div>
        <div class="row my-4 mx-auto">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-danger w-75">Log out</a>
            </form>
        </div>
    </body>
</html>
