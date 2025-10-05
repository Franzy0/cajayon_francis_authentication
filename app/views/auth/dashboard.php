<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #121212; /* Spotify dark background */
            color: #fff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #181818; /* Dark gray card */
            width: 420px;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.7);
            text-align: center;
            animation: fadeIn .6s ease-out forwards;
        }
        h2 {
            color: #fff;
            margin-bottom: 15px;
        }
        p {
            color: #bbb;
            font-size: 15px;
            margin-bottom: 25px;
        }
        a {
            display: inline-block;
            padding: 12px 25px;
            background: #1db954; /* Spotify green */
            color: white;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s ease, background 0.3s ease;
        }
        a:hover {
            background: #1ed760;
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Welcome, <?= html_escape($username) ?> 👋</h2>
        <p>You are now logged in successfully.</p>
        <a href="<?= site_url('auth/logout') ?>">Logout</a>
    </div>
</body>
</html>
