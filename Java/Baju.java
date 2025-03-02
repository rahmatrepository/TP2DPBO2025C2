// Child dari Aksesoris
public class Baju extends Aksesoris {
    private String untuk;
    private String size;
    private String merk;

    public Baju(int id, String namaProduk, int hargaProduk, int stokProduk, 
                String jenis, String bahan, String warna, 
                String untuk, String size, String merk) {
        super(id, namaProduk, hargaProduk, stokProduk, jenis, bahan, warna);
        this.untuk = untuk;
        this.size = size;
        this.merk = merk;
    }

    @Override
    public void display() {
        super.display();
        System.out.printf(" %-8s | %-4s | %-10s |\n", untuk, size, merk);
    }
}
