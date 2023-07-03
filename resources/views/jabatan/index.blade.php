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
        <h1 class="text-center">Manajemen Jabatan</h1>
        <a href="{{ route('dashboard') }}" <button type="button" class="btn btn-secondary my-2">Kembali</button></a>
        <a href="{{ route('jabatans.create') }}" <button type="button" class="btn btn-warning my-2">Tambah Jabatan</button></a>
        <table id="tabelJabatan" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nama Jabatan</th>
                <th class="col-2">Aksi</th>
            </thead>
            <tbody>
                @foreach ($jabatans as $jabatan)
                    <tr>
                        <td>{{ $jabatan->id }}</td>
                        <td>{{ $jabatan->nama_jabatan }}</td>
                        <td>
                            <a title="Edit jabatan" class="btn btn-secondary" href="{{ route('jabatans.edit', ['jabatan' => $jabatan->id]) }}" role="button">
                                <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                            </a>
                            <form style="display: inline;" action="{{ route('jabatans.destroy', ['jabatan' => $jabatan->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button title="Hapus Jabatan" type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                </button>
                            </form>
                        </td>
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
