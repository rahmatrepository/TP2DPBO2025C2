#include "Aksesoris.cpp"

class Baju : public Aksesoris {
private:
    string untuk;
    string size;
    string merk;

public:
    Baju(int id, string nama_produk, int harga_produk, int stok_produk, string foto_produk,
         string jenis, string bahan, string warna, string untuk, string size, string merk)
        : Aksesoris(id, nama_produk, harga_produk, stok_produk, foto_produk, jenis, bahan, warna),
          untuk(untuk), size(size), merk(merk) {}

    void displayBaju() {
        displayAksesoris();
        cout << "Untuk: " << untuk << endl;
        cout << "Size: " << size << endl;
        cout << "Merk: " << merk << endl;
    }
};
