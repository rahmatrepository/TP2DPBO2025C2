<?php
// Class Induk: PetShop
class PetShop {
    protected $id;
    protected $nama_produk;
    protected $harga_produk;
    protected $stok_produk;
    protected $foto_produk;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk) {
        $this->id = $id;
        $this->nama_produk = $nama_produk;
        $this->harga_produk = $harga_produk;
        $this->stok_produk = $stok_produk;
        $this->foto_produk = $foto_produk;
    }

    // Getter methods
    public function getId() { return $this->id; }
    public function getNamaProduk() { return $this->nama_produk; }
    public function getHargaProduk() { return $this->harga_produk; }
    public function getStokProduk() { return $this->stok_produk; }
    public function getFotoProduk() { return $this->foto_produk; }
}

// Class Turunan: Aksesoris (Child dari PetShop)
class Aksesoris extends PetShop {
    protected $jenis;
    protected $bahan;
    protected $warna;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna) {
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    // Getter methods
    public function getJenis() { return $this->jenis; }
    public function getBahan() { return $this->bahan; }
    public function getWarna() { return $this->warna; }
}

// Class Turunan: Baju (Child dari Aksesoris)
class Baju extends Aksesoris {
    protected $untuk;
    protected $size;
    protected $merk;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna, $untuk, $size, $merk) {
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna);
        $this->untuk = $untuk;
        $this->size = $size;
        $this->merk = $merk;
    }

    // Getter methods
    public function getUntuk() { return $this->untuk; }
    public function getSize() { return $this->size; }
    public function getMerk() { return $this->merk; }
}

// Array untuk menyimpan produk
$produkList = [];

// Proses Form Tambah Produk
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama_produk = $_POST["nama_produk"];
    $harga_produk = $_POST["harga_produk"];
    $stok_produk = $_POST["stok_produk"];
    $jenis = $_POST["jenis"];
    $bahan = $_POST["bahan"];
    $warna = $_POST["warna"];
    $untuk = $_POST["untuk"];
    $size = $_POST["size"];
    $merk = $_POST["merk"];

    // Proses Upload Foto
    $foto_produk = "";
    if (!empty($_FILES["foto_produk"]["name"])) {
        $target_dir = "uploads/";
        $foto_produk = basename($_FILES["foto_produk"]["name"]);
        $target_file = $target_dir . $foto_produk;
        move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file);
    }

    // Tambahkan produk ke dalam array
    $produkList[] = new Baju($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna, $untuk, $size, $merk);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop - Produk</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4a261; color: white; }
        img { width: 100px; }
        form { width: 50%; margin: 20px auto; padding: 20px; border: 1px solid #ddd; }
    </style>
</head>
<body>

<h2>Tambah Produk</h2>
<form method="post" enctype="multipart/form-data">
    <label>ID Produk:</label>
    <input type="text" name="id" required><br><br>
    
    <label>Nama Produk:</label>
    <input type="text" name="nama_produk" required><br><br>
    
    <label>Harga Produk:</label>
    <input type="number" name="harga_produk" required><br><br>

    <label>Stok Produk:</label>
    <input type="number" name="stok_produk" required><br><br>

    <label>Jenis:</label>
    <input type="text" name="jenis" required><br><br>

    <label>Bahan:</label>
    <input type="text" name="bahan" required><br><br>

    <label>Warna:</label>
    <input type="text" name="warna" required><br><br>

    <label>Untuk:</label>
    <input type="text" name="untuk" required><br><br>

    <label>Size:</label>
    <input type="text" name="size" required><br><br>

    <label>Merk:</label>
    <input type="text" name="merk" required><br><br>

    <label>Foto Produk:</label>
    <input type="file" name="foto_produk" accept="image/*"><br><br>

    <button type="submit">Tambahkan Produk</button>
</form>

<h2>Daftar Produk</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Foto</th>
        <th>Jenis</th>
        <th>Bahan</th>
        <th>Warna</th>
        <th>Untuk</th>
        <th>Size</th>
        <th>Merk</th>
    </tr>
    <?php foreach ($produkList as $produk): ?>
        <tr>
            <td><?= $produk->getId(); ?></td>
            <td><?= $produk->getNamaProduk(); ?></td>
            <td>Rp <?= number_format($produk->getHargaProduk(), 0, ',', '.'); ?></td>
            <td><?= $produk->getStokProduk(); ?></td>
            <td>
                <?php if ($produk->getFotoProduk()): ?>
                    <img src="uploads/<?= $produk->getFotoProduk(); ?>" alt="Foto Produk">
                <?php else: ?>
                    Tidak ada foto
                <?php endif; ?>
            </td>
            <td><?= $produk->getJenis(); ?></td>
            <td><?= $produk->getBahan(); ?></td>
            <td><?= $produk->getWarna(); ?></td>
            <td><?= $produk->getUntuk(); ?></td>
            <td><?= $produk->getSize(); ?></td>
            <td><?= $produk->getMerk(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
