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

    public function getDetail() {
        return "
            <h3>{$this->nama_produk}</h3>
            <p>Harga: Rp {$this->harga_produk}</p>
            <p>Stok: {$this->stok_produk}</p>
            <img src='uploads/{$this->foto_produk}' width='150' />
            <hr>
        ";
    }
}
?>
