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
            background-color: #FFFFFF;
            display: flex;
            justify-content: center;
            padding: 150px;
            height: 100vh;
            margin: 20;
        }

        .profile-container {
            background-color: #FFFFFF;
            text-align: center;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }

        .profile-details {
            margin-top: 15px;
        }

        .profile-info {
            background-color: #D3D3D3;
            padding: 12px;
            margin: 12px 0;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-info:first-child {
            color: #000;
        }

        .profile-info:nth-child(2) {
            color: #000;
        }

        .profile-info:last-child {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
            <img src="/assets/img/jett.jpeg">
        </div>

        <div class="profile-details">
            <div class="profile-info">{{ $nama }}</div>
            <div class="profile-info">{{ $kelas }}</div>
            <div class="profile-info">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>