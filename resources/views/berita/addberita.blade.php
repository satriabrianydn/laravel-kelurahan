<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <!-- Tambahkan stylesheet atau styling sesuai kebutuhan -->
</head>
<body>
    <h2>Tambah Berita Baru</h2>
    <form action="{{ route('addberita.process') }}" method="post">
        @csrf
        <label for="judul">Judul Berita:</label>
        <input type="text" name="judul" required>

        <label for="deskripsi">Deskripsi Berita:</label>
        <textarea name="deskripsi" rows="4" required></textarea>

        <label for="gambar">URL Gambar:</label>
        <input type="text" name="gambar" required>

        <label for="pdf_link">Link PDF:</label>
        <input type="text" name="pdf_link" required>

        <input type="submit" value="Tambah Berita">
    </form>
</body>
</html>