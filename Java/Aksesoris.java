// Child dari PetShop
public class Aksesoris extends PetShop {
    protected String jenis;
    protected String bahan;
    protected String warna;

    public Aksesoris(int id, String namaProduk, int hargaProduk, int stokProduk, 
                     String jenis, String bahan, String warna) {
        super(id, namaProduk, hargaProduk, stokProduk);
        this.jenis = jenis;
        this.bahan = bahan;
        this.warna = warna;
    }

    @Override
    public void display() {
        super.display();
        System.out.printf(" %-10s | %-10s | %-10s |", jenis, bahan, warna);
    }
}
