<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manajemen Tugas</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  


    </head>
    <body>
        <h1 class="text-center py-4 mt-5">Manajemen Tugas</h1>
        <h2 class="text-center py-4">Kelola data tugasmu dengan lebih mudah :b</h2>
        <div class="mx-auto w-100 object-center">
            <a href="{{ route('tugas.index') }}" class="btn btn-primary w-50 position-absolute top-50 start-50 translate-middle">Kelola Data</a>
        </div>
        
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    </body>
</html>
