import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<Baju> daftarBaju = new ArrayList<>();

        while (true) {
            System.out.println("\n=== Tambah Produk Baju ===");

            System.out.print("Masukkan ID: ");
            int id = scanner.nextInt();
            scanner.nextLine(); 

            System.out.print("Masukkan Nama Produk: ");
            String namaProduk = scanner.nextLine();

            System.out.print("Masukkan Harga: ");
            int hargaProduk = scanner.nextInt();

            System.out.print("Masukkan Stok: ");
            int stokProduk = scanner.nextInt();
            scanner.nextLine(); 

            System.out.print("Masukkan Jenis Aksesoris: ");
            String jenis = scanner.nextLine();

            System.out.print("Masukkan Bahan: ");
            String bahan = scanner.nextLine();

            System.out.print("Masukkan Warna: ");
            String warna = scanner.nextLine();

            System.out.print("Masukkan Untuk (misal: Anjing, Kucing): ");
            String untuk = scanner.nextLine();

            System.out.print("Masukkan Size (S/M/L): ");
            String size = scanner.nextLine();

            System.out.print("Masukkan Merk: ");
            String merk = scanner.nextLine();

            // Tambahkan ke daftar baju
            Baju bajuBaru = new Baju(id, namaProduk, hargaProduk, stokProduk, jenis, bahan, warna, untuk, size, merk);
            daftarBaju.add(bajuBaru);

            // Konfirmasi tambah lagi
            System.out.print("\nTambah produk lain? (y/n): ");
            String pilihan = scanner.nextLine();
            if (!pilihan.equalsIgnoreCase("y")) {
                break;
            }
        }

        // Menampilkan output dalam bentuk tabel
        System.out.println("\n=== Daftar Produk Baju ===");
        System.out.println("---------------------------------------------------------------------------------------------------------------");
        System.out.printf("| %-5s | %-20s | %-10s | %-5s | %-10s | %-10s | %-10s | %-8s | %-4s | %-10s |\n",
                          "ID", "Nama Produk", "Harga", "Stok", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk");
        System.out.println("---------------------------------------------------------------------------------------------------------------");
        for (Baju b : daftarBaju) {
            b.display();
        }
        System.out.println("---------------------------------------------------------------------------------------------------------------");

        scanner.close();
    }
}
