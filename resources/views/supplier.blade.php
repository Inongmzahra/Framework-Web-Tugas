<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
</head>
<body>

    <h1>Tambah Supplier</h1>

    <form action="/suppliers/store" method="POST">

        @csrf

        <label>Nama Supplier</label><br>
        <input type="text" name="nama_supplier" placeholder="Masukkan nama supplier">
        <br><br>

        <label>Telepon</label><br>
        <input type="text" name="telepon" placeholder="Masukkan nomor telepon">
        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" placeholder="Masukkan alamat"></textarea>
        <br><br>

        <button type="submit">Simpan</button>

    </form>

</body>
</html>