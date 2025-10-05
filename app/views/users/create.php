<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            margin: 0; 
            font-family: Arial, Helvetica, sans-serif; 
            background: #121212; /* Spotify dark background */
            color: #fff; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #181818; /* Dark card */
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.7);
            overflow: hidden;
            width: 480px;
            animation: fadeIn .6s ease-out forwards;
        }

        .card-header {
            padding: 20px;
            border-bottom: 2px solid #282828;
            background: #181818;
        }

        .title {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
        }

        .card-body {
            padding: 25px;
            background: #181818;
        }

        .form-group { margin-bottom: 18px; text-align: left; }
        label { display: block; margin-bottom: 6px; font-weight: 600; color: #bbb; }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px 14px;
            border: none;
            border-radius: 8px;
            background: #282828;
            color: #fff;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: 2px solid #1db954; /* Spotify green */
        }

        .actions { display: flex; gap: 12px; margin-top: 20px; }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: transform .2s ease, background-color .2s ease;
        }

        .btn-primary {
            background: #1db954;
            color: white;
        }
        .btn-primary:hover {
            background: #1ed760;
            transform: scale(1.05);
        }

        .btn-secondary {
            background: #282828;
            color: #fff;
            border: 1px solid #555;
        }
        .btn-secondary:hover {
            background: #333;
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
        <div class="card-header">
            <h1 class="title">Create User</h1>
        </div>
        <div class="card-body">
            <form action="<?= site_url('users/create') ?>" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="actions">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="<?= site_url('users/view') ?>" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
