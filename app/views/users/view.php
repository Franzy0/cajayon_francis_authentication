<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            margin: 0; 
            font-family: Arial, Helvetica, sans-serif; 
            background: #121212; /* Dark background */
            color: #fff; 
        }

        .container { max-width: 1080px; margin: 40px auto; padding: 0 16px; }

        .card { 
            background: #181818; 
            border-radius: 14px; 
            box-shadow: 0 10px 30px rgba(0,0,0,.7); 
            overflow: hidden; 
            animation: fadeIn .6s ease-out forwards; 
        }

        .card-header { 
            display: flex; 
            align-items: center; 
            justify-content: space-between; 
            flex-wrap: wrap; 
            gap: 12px; 
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

        .actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
        .left-actions { display: flex; gap: 10px; flex-wrap: wrap; }

        .search-box { display: flex; gap: 8px; }
        .search-input { 
            padding: 10px 14px; 
            border-radius: 8px; 
            border: none; 
            background: #282828; 
            color: #fff; 
            font-size: 14px; 
            min-width: 220px;
        }
        .search-input:focus { outline: 2px solid #1db954; }

        .btn { 
            display: inline-block; 
            padding: 10px 16px; 
            border-radius: 25px; 
            font-size: 14px; 
            font-weight: bold; 
            cursor: pointer; 
            border: none; 
            transition: transform .2s ease, background-color .2s ease; 
            text-decoration: none; 
        }
        .btn:hover { transform: scale(1.05); }

        .btn-primary { background: #1db954; color: white; }
        .btn-primary:hover { background: #1ed760; }

        .btn-edit { background: #333; color: #fff; }
        .btn-edit:hover { background: #444; }

        .btn-delete { background: #e53935; color: #fff; }
        .btn-delete:hover { background: #f44336; }

        .btn-logout { background: #555; color: #fff; }
        .btn-logout:hover { background: #777; }

        .table-wrapper { overflow-x: auto; animation: fadeIn .6s ease .15s both; background: #181818; }
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 14px 16px; text-align: left; border-bottom: 1px solid #333; }
        th { background: #282828; color: #bbb; }
        td { color: #eee; }
        tr:hover td { background: #222; }

        .empty { padding: 24px; text-align: center; color: #bbb; font-style: italic; }

        .action-buttons { display: flex; gap: 8px; }

        .pagination { 
            list-style: none; 
            display: flex; 
            justify-content: center; 
            gap: 6px; 
            margin: 20px 0; 
            padding: 0; 
        }
        .pagination li a { 
            display: block; 
            padding: 8px 14px; 
            border-radius: 8px; 
            text-decoration: none; 
            font-weight: bold; 
            color: #fff; 
            background: #282828; 
            transition: background .2s ease; 
        }
        .pagination li a:hover { background: #333; }
        .pagination li.active a { background: #1db954; color: white; }
        .pagination li.disabled a { color: #555; background: #222; pointer-events: none; }

        @keyframes fadeIn { 
            from { opacity: 0; transform: translateY(10px);} 
            to { opacity: 1; transform: translateY(0);} 
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="title">Users</h1>
            <div class="actions">
                <div class="left-actions">
                    <form method="get" action="<?= site_url('users/view') ?>" class="search-box">
                        <input type="text" name="q" class="search-input" placeholder="Search users..."
                               value="<?= isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <?php if (!empty($_GET['q'])): ?>
                        <a href="<?= site_url('users/view') ?>" class="btn btn-primary">Back</a>
                    <?php else: ?>
                        <a href="<?= site_url('users/create') ?>" class="btn btn-primary">Create User</a>
                    <?php endif; ?>
                </div>

                <!-- Logout button -->
                <a href="<?= site_url('auth/logout') ?>" class="btn btn-logout">Logout</a>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php if (!empty($users)): ?>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= site_url('users/update/' . $user['id']) ?>" class="btn btn-edit">Edit</a>
                                    <a href="<?= site_url('users/delete/' . $user['id']) ?>" class="btn btn-delete">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="empty">No users found.</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>

        <!-- Pagination -->
        <?php if (!empty($page)): ?>
            <ul class="pagination">
                <?= $page; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
