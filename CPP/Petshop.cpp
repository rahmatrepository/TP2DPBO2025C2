#include <iostream>
#include <string>

using namespace std;

class PetShop {
protected:
    int id;
    string nama_produk;
    int harga_produk;
    int stok_produk;
    string foto_produk;

public:
    PetShop(int id, string nama_produk, int harga_produk, int stok_produk, string foto_produk)
        : id(id), nama_produk(nama_produk), harga_produk(harga_produk), stok_produk(stok_produk), foto_produk(foto_produk) {}

    void displayPetShop() {
        cout << "ID: " << id << endl;
        cout << "Nama Produk: " << nama_produk << endl;
        cout << "Harga Produk: Rp " << harga_produk << endl;
        cout << "Stok: " << stok_produk << endl;
        cout << "Foto Produk: " << foto_produk << endl;
    }
};