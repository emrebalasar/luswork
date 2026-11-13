<?php
session_start();

// Kullanıcı zaten giriş yapmışsa dashboard'a yönlendir
if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Basit kontrol (Aday veritabanı ve password_hash / password_verify ile refactor edecektir)
    if ($username === 'admin' && $password === '123456') {
        $_SESSION['user'] = 'admin';
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Kullanıcı adı veya şifre hatalı!';
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body>
    <h2>Giriş Yap</h2>

    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="login.php">
        <div>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username">
        </div>
        <br>
        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password">
        </div>
        <br>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
