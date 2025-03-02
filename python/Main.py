from Baju import Baju
from AKsesoris import Aksesoris

# List untuk menyimpan produk
daftar_produk = []

def tambah_produk():
    print("\nPilih Jenis Produk:")
    print("1. Aksesoris")
    print("2. Baju")
    pilihan = input("Masukkan pilihan (1/2): ")

    id_produk = input("Masukkan ID Produk: ")
    nama_produk = input("Masukkan Nama Produk: ")
    harga_produk = int(input("Masukkan Harga Produk: "))
    stok_produk = int(input("Masukkan Stok Produk: "))

    if pilihan == "1":
        jenis = input("Masukkan Jenis Aksesoris: ")
        bahan = input("Masukkan Bahan: ")
        warna = input("Masukkan Warna: ")
        produk = Aksesoris(id_produk, nama_produk, harga_produk, stok_produk, jenis, bahan, warna)
    
    elif pilihan == "2":
        jenis = "Baju"
        bahan = input("Masukkan Bahan: ")
        warna = input("Masukkan Warna: ")
        untuk = input("Untuk (Anjing/Kucing): ")
        size = input("Masukkan Ukuran (S/M/L): ")
        merk = input("Masukkan Merk: ")
        produk = Baju(id_produk, nama_produk, harga_produk, stok_produk, jenis, bahan, warna, untuk, size, merk)
    
    else:
        print("⚠️ Pilihan tidak valid!")
        return

    daftar_produk.append(produk)
    print("✅ Produk berhasil ditambahkan!")

def tampilkan_produk():
    if not daftar_produk:
        print("\n⚠️ Tidak ada produk dalam daftar.\n")
        return

    # Header tabel
    headers = ["ID", "Nama", "Harga", "Stok", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk"]
    column_widths = [10, 20, 10, 6, 10, 10, 10, 10, 6, 10]

    # Mencetak header tabel
    print("=" * sum(column_widths))
    print(" | ".join(headers[i].ljust(column_widths[i]) for i in range(len(headers))))
    print("=" * sum(column_widths))

    # Mencetak data produk
    for produk in daftar_produk:
        data = produk.get_info()
        row = " | ".join(str(data[i]).ljust(column_widths[i]) for i in range(len(data)))
        print(row)

    print("=" * sum(column_widths))

# Menu Utama
while True:
    print("\n=== PETSHOP MANAGEMENT ===")
    print("1. Tambah Produk")
    print("2. Lihat Produk")
    print("3. Keluar")

    menu = input("Pilih menu (1/2/3): ")

    if menu == "1":
        tambah_produk()
    elif menu == "2":
        tampilkan_produk()
    elif menu == "3":
        print("👋 Keluar dari program. Terima kasih!")
        break
    else:
        print("⚠️ Pilihan tidak valid!")
