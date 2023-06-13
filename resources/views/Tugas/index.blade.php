<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>
</head>
<body>
    <h1 align="center">Manajemen Tugas</h1>
    <div class="card" style="width:70%;margin:0px auto;padding:20px;">
            <ul style="padding:0px;">
            <a href="{{ route('tugas.create') }}" ><button class="btn btn-primary">Tambah Data Tugas</button></a>
            <a href=""><button class="btn btn-primary">Lihat Semua Kamar</button></a>
            </ul>
        <div class="tabel">
        <table id="data"class="table table-striped table-bordered" width="100%" align="center">
            <thead>
                <td>ID</td>
                <td>Judul</td>
                <td>Deskripsi</td>
                <td>Status</td>
                <td>Aksi</td>
            </thead>
        
       @foreach ($tugas as $t)
           <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->judul }}</td>
                <td>{{ $t->deskripsi }}</td>
                <td>@if ($t->status) Selesai @else Belum selesai @endif</td>
                <td><a href="{{ route('tugas.edit',['tuga'=> $t->id]) }}"><button class="btn btn-success">Edit</button></a> <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus">Hapus</button></td>
            </tr>

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapus." tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus data kamar nomor  ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href=""><button type="button" class="btn btn-primary">Ya, Hapus</button></a> 
                </div>
                </div>
            </div>
            </div>
            <!-- End Modal -->
        </table>
        </div>
       @endforeach
            
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
    $('#data').DataTable();
    });
    </script>
</body>
</html>