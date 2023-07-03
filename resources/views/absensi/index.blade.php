<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistem Manajemen Kepegawaian</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
        <!-- datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
        <script src="https://kit.fontawesome.com/abe7da9dbb.js" crossorigin="anonymous"></script>
    </head>
    <body class="mx-auto my-4 w-75">
        <h1 class="text-center">Daftar Absensi</h1>
        <a href="{{ route('dashboard') }}" <button type="button" class="btn btn-secondary my-2">Kembali</button></a>
        <table id="tabelJabatan" class="table table-striped">
            <thead>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
                @foreach ($absensis as $absensi)
                    <tr>
                        <td>{{ $absensi->pegawai->name }}</td>
                        <td>{{ $absensi->tanggal }}</td>
                        <td>{{ $absensi->kehadiran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    <!-- jquery & datatable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('#tabelJabatan').DataTable(); // Memulai datatable
        });
</script>
</html>
