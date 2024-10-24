<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #FFFFFF;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #000;
    text-align: center;
    margin-bottom: 30px;
}

h1 img{
    color: #FFFFFF;
    text-align: center;
    border-radius: 50%;
    max-width: 150px;
}

form {
    background-color: #D3D3D3;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #000;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #FFFFFF;
    color: #000;
}

input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #000;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #FFFFFF;
    color: #000;
}

input[type="submit"] {
    width: 100%;
    background-color: #333;
    color: white;
    padding: 10px 20px;
    margin-top: 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

select[name="kelas_id"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #000;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #FFFFFF;
    color: #000;
}

input[type="submit"]:hover {
    background-color: #FFFFFF;
}

form > * {
    margin-bottom: 15px;
}

</style>
<body>
    <div class="mb-3 mt-2 m-3">
        <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
    </div>
    <h1><img src="\assets\images\Jett.jpeg"></h1>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" value="M. Fakhri Wilova" required><br>
        </div>

        <div>
            <label for="npm">NPM:</label><br>
            <input type="text" id="npm" name="npm" value="2217051104" required><br>
        </div>

        <div>
            <label for="id_kelas">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" required><br><br>
            @foreach($kelas as $kelasItem)
            <option value = "{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
            @endforeach
        </select><br><br>
        </div>

        <div>
            <label for="foto">Foto:</label><br>
            <input type="file" id="foto" name="foto" required><br>
        </div>

        <input type="submit" value="Submit">
    </form> 
</body>
</html>