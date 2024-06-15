<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty, insert a new record
    // Set up the variables that are going to be inserted, we must check if the POST variables exist; if not, we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "nama" exists, if not, default the value to blank; basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $jenjangpendidikan = isset($_POST['jenjangpendidikan']) ? $_POST['jenjangpendidikan'] : '';
    $materipembelajaranyangdipilih = isset($_POST['materipembelajaranyangdipilih']) ? $_POST['materipembelajaranyangdipilih'] : '';
    $paketbelajaryangdipilih = isset($_POST['paketbelajaryangdipilih']) ? $_POST['paketbelajaryangdipilih'] : '';
    
    // Insert new record into the tb_datacrud table
    $stmt = $pdo->prepare('INSERT INTO tb_datacrud (id, nama, alamat, jenjangpendidikan, materipembelajaranyangdipilih, paketbelajaryangdipilih) VALUES (?, ?, ?, ?, ?, ?)');
    // Execute the prepared statement with the bound variables
    $stmt->execute([$id, $nama, $alamat, $jenjangpendidikan, $materipembelajaranyangdipilih, $paketbelajaryangdipilih]);
    // Output message
    $msg = 'Created Successfully!';
}

?>


<?=template_header('Create')?>

<div class="content update">
	<h2>PENDAFTARAN</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="auto" id="id">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <label for="jenjangpendidikan">JENJANG PENDIDIKAN</label>
        <input type="text" name="jenjangpendidikan" id="jenjangpendidikan">
        <label for="materipembelajaranyangdipilih ">Materi Pembelajaran Yangdipilih</label>
        <input type="text" name="materipembelajaranyangdipilih " id="materipembelajaranyangdipilih ">
        <label for="paketbelajaryangdipilih">Paket belajar yang dipilih</label>
        <input type="text" name="paketbelajaryangdipilih" id="paketbelajaryangdipilih">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>