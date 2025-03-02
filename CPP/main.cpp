#include <iostream>
#include <vector>
#include <memory>
#include "Baju.cpp"

using namespace std;

int main() {
    Baju baju1(101, "Baju Anjing Lucu", 150000, 20, "baju_anjing.jpg",
               "Pakaian", "Katun", "Biru", "Anjing", "M", "DogFashion");

    vector<unique_ptr<Aksesoris>> daftarAksesoris;

    string inputan;
    do {
        cout << "Masukkan perintah (add/exit): ";
        cin >> inputan;
        cin.ignore();

        if (inputan == "add") {
            cout << "Masukkan nama produk aksesoris: ";
            string nama;
            getline(cin, nama);

            cout << "Masukkan jenis aksesoris: ";
            string jenis;
            getline(cin, jenis);

            cout << "Masukkan bahan aksesoris: ";
            string bahan;
            getline(cin, bahan);

            cout << "Masukkan warna aksesoris: ";
            string warna;
            getline(cin, warna);

            daftarAksesoris.push_back(make_unique<Aksesoris>(101, nama, 50000, 10, "foto.jpg", jenis, bahan, warna));
            cout << "Aksesoris berhasil ditambahkan!" << endl;
        } else if (inputan != "exit") {
            cout << "Inputan tidak valid!" << endl;
        }

    } while (inputan != "exit");

    cout << "\n===== Informasi Produk Baju =====" << endl;
    baju1.displayBaju();

    cout << "\n===== Daftar Aksesoris =====" << endl;
    for (const auto &aks : daftarAksesoris) {
        aks->displayAksesoris();
        cout << "----------------------" << endl;
    }

    return 0;
}
