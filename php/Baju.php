<?php
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
