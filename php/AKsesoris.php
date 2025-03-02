<?php
require_once "PetShop.php";

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

    public function getDetail() {
        return parent::getDetail() . "
            <p>Jenis: {$this->jenis}</p>
            <p>Bahan: {$this->bahan}</p>
            <p>Warna: {$this->warna}</p>
            <hr>
        ";
    }
}
?>
