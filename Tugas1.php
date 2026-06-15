<?php
session_start();

// Data User disimpan dalam Array (Charlie diperbaiki e-nya agar sesuai soal)
$users = [
    ["username" => "Ali", "password" => "password1"],
    ["username" => "Bona", "password" => "password2"],
    ["username" => "Charlie", "password" => "password3"],
    ["username" => "Dede", "password" => "password4"],
    ["username" => "Emon", "password" => "password5"]
];

// Fitur Logout
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: Tugas1.php");
    exit();
}

$error_message = "";

// Logika Validasi Login
if (isset($_POST['Login'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $login_sukses = false;

    foreach ($users as $user) {
        if ($user['username'] === $input_username && $user['password'] === $input_password) {
            $login_sukses = true;
            break;
        }
    }

    if ($login_sukses) {
        // Nama session disamakan dengan pengecekan di bawah
        $_SESSION['login'] = $input_username; 
    } else {
        $error_message = "Username atau Password salah!";
    }
}

// Memanggil Header Modul
include 'header.php';
?>

<div class="container my-4">

    <?php if (isset($_SESSION['login'])) : ?>
        


        <nav class="navbar navbar-expand nav-custom rounded shadow-sm mb-4">
            <div class="container-fluid justify-content-center">
                <ul class="navbar-nav gap-4 fw-bold">
                    <li class="nav-item"><a class="nav-link text-primary" href="menu1.php">Link 1</a></li>
                    <li class="nav-item"><a class="nav-link text-primary" href="menu2.php">Link 2</a></li>
                    <li class="nav-item"><a class="nav-link text-primary" href="menu3.php">Link 3</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="Tugas1.php?action=logout">Logout</a></li>
                </ul>
                <h2 class="text-success fw-bold">Anda telah berhasil login</h2>
            </div>
        </nav>

        <div class="card shadow border-0 p-5 text-center">

    <?php else : ?>
        
        <div class="card login-card shadow border-0">
            <div class="card-body p-4">
                <h3 class="text-center fw-bold mb-4 text-secondary">Silahkan Login</h3>
                
                <?php if (!empty($error_message)) : ?>
                    <div class="alert alert-danger text-center py-2" style="font-size: 14px;">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" name="Login" class="btn btn-primary w-100 py-2 fw-bold">[Submit]</button>
                </form>
            </div>
        </div>

    <?php endif; ?>

</div>

<?php 
// Memanggil Footer Modul
include 'footer.php'; 
?>