<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
</head>
<body>
    <h1>Yönetim Paneli</h1>
    <p>Hoş geldiniz, <strong><?php echo $_SESSION['user']; ?></strong>! | <a href="logout.php">Çıkış Yap</a></p>

    <hr>

    <h2>Duyurular</h2>
    <p><a href="#">+ Yeni Duyuru Ekle</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Başlık</th>
                <th>Durum</th>
                <th>Yayın Tarihi</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sistem Bakımı Duyurusu</td>
                <td>Yayında</td>
                <td>2026-11-10</td>
                <td>
                    <a href="#">Düzenle</a> | 
                    <a href="#">Sil</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Yeni Özellikler Yayında</td>
                <td>Taslak</td>
                <td>2026-11-12</td>
                <td>
                    <a href="#">Düzenle</a> | 
                    <a href="#">Sil</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
