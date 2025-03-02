class PetShop:
    def __init__(self, id, nama_produk, harga_produk, stok_produk):
        self.id = id
        self.nama_produk = nama_produk
        self.harga_produk = harga_produk
        self.stok_produk = stok_produk

    def get_info(self):
        return [self.id, self.nama_produk, self.harga_produk, self.stok_produk]
