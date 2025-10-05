<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    * { box-sizing: border-box; }
    body { 
        margin: 0; 
        font-family: Arial, sans-serif; 
        color: #fff; 
        background: #121212; /* Spotify-like dark background */
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
    }

    /* Card container */
    .card {
        background: #181818; /* Dark gray card */
        border-radius: 14px; 
        box-shadow: 0 10px 30px rgba(0,0,0,.7); 
        padding: 40px 30px; 
        width: 360px; 
        text-align: center; 
        animation: fadeIn .6s ease-out forwards;
    }

    .card-header h2 {
        margin: 0;
        font-size: 26px;
        color: #fff;
        margin-bottom: 25px;
    }

    input {
        width: 100%; 
        padding: 12px 14px; 
        margin: 10px 0; 
        border: none; 
        border-radius: 8px; 
        font-size: 14px;
        background: #282828; 
        color: #fff;
    }

    input:focus {
        outline: 2px solid #1db954; /* Spotify green */
    }

    .btn-primary {
        width: 100%;
        padding: 12px 14px;
        background: #1db954;
        color: white;
        border: none;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.2s ease, background 0.3s ease;
        margin-top: 15px;
    }

    .btn-primary:hover {
        background: #1ed760;
        transform: scale(1.05);
    }

    .message {
        margin-top: 15px;
        font-size: 14px;
        color: #f44336;
    }

    .message.success {
        color: #4caf50;
    }

    a {
        color: #1db954; 
        text-decoration: none; 
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }

    @keyframes fadeIn { 
        from { opacity: 0; transform: translateY(10px);} 
        to { opacity: 1; transform: translateY(0);} 
    }
</style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Login</h2>
    </div>

    <?php if (!empty($flash['error'])): ?>
        <p class="message"><?= $flash['error'] ?></p>
    <?php endif; ?>
    <?php if (!empty($flash['success'])): ?>
        <p class="message success"><?= $flash['success'] ?></p>
    <?php endif; ?>

    <form method="POST" action="<?= site_url('auth/login') ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn-primary">Login</button>
    </form>

    <p class="message">
        Don’t have an account? 
        <a href="<?= site_url('auth/register') ?>">Register here</a>
    </p>
</div>
</body>
</html>
