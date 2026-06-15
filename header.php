<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dengan Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-card { max-width: 400px; margin: 80px auto; }
        .nav-custom { background-color: #e3f2fd; }
    </style>
</head>
<body>
    <div class="bg-danger text-white text-center py-3 shadow-sm">
        <h1 class="h4 mb-0 fw-bold">Login</h1>
        
        <?php if (isset($_SESSION['login'])) : ?>
            <div class="mt-2 pt-2 fs-6">
                Selamat Datang, Username: <span class="fw-bold text-succes"><?php echo htmlspecialchars($_SESSION['login']); ?></span>
            </div>
        <?php endif; ?>
    </div>