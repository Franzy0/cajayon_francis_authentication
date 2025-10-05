<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
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
            background: #181818; 
            border-radius: 14px; 
            box-shadow: 0 10px 30px rgba(0,0,0,.7); 
            width: 500px; 
            overflow: hidden;
            animation: fadeIn .6s ease-out forwards;
        }

        .card-header { 
            padding: 20px; 
            border-bottom: 2px solid #282828; 
            background: #181818;
        }

        h1 { 
            margin: 0; 
            font-size: 22px; 
            font-weight: bold; 
            color: #fff;
        }

        .card-body { 
            padding: 25px; 
            text-align: center; 
            background: #181818; 
        }

        p { 
            color: #bbb; 
            font-size: 16px; 
            margin-bottom: 25px; 
        }

        strong { color: #fff; font-weight: 600; }

        .actions { display: flex; justify-content: center; gap: 12px; }

        .btn {
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: transform .2s ease, background-color .2s ease;
        }

        .btn:hover { transform: scale(1.05); }

        .btn-confirm { background: #e53935; color: #fff; }
        .btn-confirm:hover { background: #f44336; }

        .btn-cancel { background: #282828; color: #fff; border: 1px solid #555; }
        .btn-cancel:hover { background: #333; }

        @keyframes fadeIn { 
            from { opacity: 0; transform: translateY(10px);} 
            to { opacity: 1; transform: translateY(0);} 
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Delete User</h1>
        </div>
        <div class="card-body">
            <p>Are you sure you want to delete <strong><?= $user['username'] ?></strong> (<?= $user['email'] ?>)?</p>
            <form action="<?= site_url('users/delete/' . $user['id']) ?>" method="POST">
                <div class="actions">
                    <button type="submit" class="btn btn-confirm">Yes, Delete</button>
                    <a href="<?= site_url('users/view') ?>" class="btn btn-cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
