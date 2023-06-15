<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manajemen Tugas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>
    </head>
    <body class="mx-auto my-4 w-75">
        <h1 class="text-center">Form Tugas</h1>
        <a class="btn btn-secondary my-2" href="{{ route('tugas.index') }}" role="button">Kembali</a>
        <div class="card mt-1 mb-4">
        <form action=@isset($tugas->id) "{{ route('tugas.update', ['tuga' => $tugas->id]) }}" @else "{{ route('tugas.store') }}" @endisset class="card-body" method=POST>
            @csrf
            @isset($tugas->id) @method('PUT') @endisset
            <div class="row my-2">
                <div class="col">
                    <label for="formInputTugas" class="form-label">Judul Tugas</label>
                    <input name="judul" type="text" class="form-control" id="formInputTugas" @isset($tugas->judul) value="{{ $tugas->judul }}" @endisset placeholder="Masukkan judul tugas" required>
                </div>
            </div>
            <div class="row my-2">
                <div class="col my-2">
                    <label for="formDeskripsi" class="form-label">Deskripsi Tugas</label>
                    <textarea class="form-control" name="deskripsi" id="formDeskripsi" rows="3" required>@isset($tugas->deskripsi) {{ $tugas->deskripsi }} @endisset</textarea>
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="formStatus0" value=0 @isset($tugas->status) @if (!$tugas->status) checked @endif @else checked @endisset>
                    <label class="form-check-label" for="formStatus0">
                        Belum selesai
                    </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="formStatus1" value=1 @isset($tugas->status) @if ($tugas->status) checked @endif @endisset>
                    <label class="form-check-label" for="formStatus1">
                        Selesai
                    </label>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-2">
                <button type="submit" class="btn btn-primary w-25">Simpan</button>
            </div>
        </form>
        </div>
    </body>
</html>