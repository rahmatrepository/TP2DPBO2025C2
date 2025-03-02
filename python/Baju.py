from AKsesoris import Aksesoris

class Baju(Aksesoris):
    def __init__(self, id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna, untuk, size, merk):
        super().__init__(id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna)
        self.untuk = untuk
        self.size = size
        self.merk = merk

    def get_info(self):
        return super().get_info() + [self.untuk, self.size, self.merk]