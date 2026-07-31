<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

<h1>Tambah Product</h1>

<form action="/products" method="POST">
    @csrf

    <label>Nama Product</label><br>
    <input type="text" name="name"><br><br>

    <label>Harga</label><br>
    <input type="number" name="price"><br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>