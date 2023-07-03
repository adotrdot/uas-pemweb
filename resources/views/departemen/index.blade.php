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
        <h1 class="text-center">Manajemen Departemen</h1>
        <a href="{{ route('dashboard') }}" <button type="button" class="btn btn-secondary my-2">Kembali</button></a>
        <a href="{{ route('departemens.create') }}" <button type="button" class="btn btn-warning my-2">Tambah Departemen</button></a>
        <table id="tabelDepartemen" class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nama Departemen</th>
                <th class="col-2">Aksi</th>
            </thead>
            <tbody>
                @foreach ($departemens as $departemen)
                    <tr>
                        <td>{{ $departemen->id }}</td>
                        <td>{{ $departemen->nama_departemen }}</td>
                        <td>
                            <a title="Edit Departemen" class="btn btn-secondary" href="{{ route('departemens.edit', ['departemen' => $departemen->id]) }}" role="button">
                                <i class="fa-solid fa-pen" style="color: #ffffff;"></i>
                            </a>
                            <form style="display: inline;" action="{{ route('departemens.destroy', ['departemen' => $departemen->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button title="Hapus Departemen" type="submit" class="btn btn-danger">
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
            $('#tabelDepartemen').DataTable(); // Memulai datatable
        });
</script>
</html>
