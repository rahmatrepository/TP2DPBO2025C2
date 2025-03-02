from Petshop import PetShop

class Aksesoris(PetShop):
    def __init__(self, id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna):
        super().__init__(id, nama_produk, harga_produk, stok_produk)
        self.jenis = jenis
        self.bahan = bahan
        self.warna = warna

    def get_info(self):
        return super().get_info() + [self.jenis, self.bahan, self.warna]
