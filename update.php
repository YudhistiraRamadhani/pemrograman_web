<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

// Pastikan ID kontak ada
if (isset($_GET['id'])) {
    try {
        // Ambil data kontak yang akan diperbarui
        $stmt = $pdo->prepare('SELECT * FROM tb_datacrud WHERE id = ? FOR UPDATE');
        $stmt->execute([$_GET['id']]);
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$contact) {
            exit('Contact doesn\'t exist with that ID!');
        }

        // Jika formulir dikirim, lakukan pembaruan
        if (!empty($_POST)) {
            $id = isset($_POST['id']) ? $_POST['id'] : NULL;
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
            $jenjangpendidikan = isset($_POST['jenjangpendidikan']) ? $_POST['jenjangpendidikan'] : '';
            $materipembelajaranyangdipilih = isset($_POST['materipembelajaranyangdipilih']) ? $_POST['materipembelajaranyangdipilih'] : '';
            $paketbelajaryangdipilih = isset($_POST['paketbelajaryangdipilih']) ? $_POST['paketbelajaryangdipilih'] : '';
            
            // Update rekord
            $stmt = $pdo->prepare('UPDATE tb_datacrud SET id = ?, nama = ?, alamat = ?, jenjangpendidikan = ?, materipembelajaranyangdipilih = ?, paketbelajaryangdipilih = ? WHERE id = ?');
            $stmt->execute([$id, $nama, $alamat, $jenjangpendidikan, $materipembelajaranyangdipilih, $paketbelajaryangdipilih, $_GET['id']]);
            $msg = 'Updated Successfully!';
        }
    } catch (PDOException $e) {
        exit('Update failed: ' . $e->getMessage());
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Update')?>

<div class="content update">
    <h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id" readonly>

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama">

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="<?=$contact['alamat']?>" id="alamat">

        <label for="jenjangpendidikan">Jenjang Pendidikan</label>
        <input type="text" name="jenjangpendidikan" value="<?=$contact['jenjangpendidikan']?>" id="jenjangpendidikan">

        <label for="materipembelajaranyangdipilih">Materi Pembelajaran Yang Dipilih</label>
        <input type="text" name="materipembelajaranyangdipilih" value="<?=$contact['materipembelajaranyangdipilih']?>" id="materipembelajaranyangdipilih">

        <label for="paketbelajaryangdipilih">Paket Pembelajaran Yang Dipilih</label>
        <input type="text" name="paketbelajaryangdipilih" value="<?=$contact['paketbelajaryangdipilih']?>" id="paketbelajaryangdipilih">

        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
