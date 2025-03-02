#include "PetShop.cpp"

class Aksesoris : public PetShop {
protected:
    string jenis;
    string bahan;
    string warna;

public:
    Aksesoris(int id, string nama_produk, int harga_produk, int stok_produk, string foto_produk,
          string jenis, string bahan, string warna)
        : PetShop(id, nama_produk, harga_produk, stok_produk, foto_produk), jenis(jenis), bahan(bahan), warna(warna) {}

    void displayAksesoris() {
        displayPetShop();
        cout << "Jenis: " << jenis << endl;
        cout << "Bahan: " << bahan << endl;
        cout << "Warna: " << warna << endl;
    }
};
