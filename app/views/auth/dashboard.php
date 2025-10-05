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
            background: #e8f5e9;
            text-align: center;
            padding-top: 100px;
            margin: 0;
        }
        .card {
            background: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #2e7d32;
        }
        p {
            color: #333;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #388e3c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            background: #2e7d32;
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
