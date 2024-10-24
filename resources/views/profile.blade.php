<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            text-align: left;
            font-size: 18px;
        }

        table td:nth-child(1) {
            font-weight: 600;
            color: #333;
        }

        table td:nth-child(2) {
            text-align: center;
            width: 10px;
        }

        table td:nth-child(3) {
            color: #555;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            .profile-container {
                padding: 20px;
            }
            table td {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
        <img src="{{ $user->foto ? asset($user->foto) : asset('path/to/default-foto.jpg') }}" alt="Foto {{ $nama }}">
        </div>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $nama_kelas ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
