<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }

        .join-button {
            background-color: rgb(35, 207, 0);
            padding: 10px;
            margin: 50px 50px 50px 0;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Confirmation</h1>
        <p>Dear {{ $name }},</p>
        <p>Thank you for registering with us. Your registration details:</p>
        <ul>
            <li><strong>Name:</strong> {{ $name }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
            <li><strong>NIM:</strong> {{ $nim }}</li>
            <li><strong>Jurusan:</strong> {{ $jurusan }}</li>
            <li><strong>Semester:</strong> {{ $semester }}</li>
            <li><strong>No. HP:</strong> {{ $nohp }}</li>
        </ul>
        <p>Please join disccussion group in this link below :</p>
        <p><a class="join-button" href="https://chat.whatsapp.com/CFyCvxaboF4LPeRt5NXuOf">JOIN</a></p>
    </div>
</body>
</html>
