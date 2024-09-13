<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="M. Fakhri Wilova"><br>
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="2217051104"><br>
        <label for="npm">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas" value="A"><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>