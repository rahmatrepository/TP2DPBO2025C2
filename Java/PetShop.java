// Parent class
public class PetShop {
    protected int id;
    protected String namaProduk;
    protected int hargaProduk;
    protected int stokProduk;

    public PetShop(int id, String namaProduk, int hargaProduk, int stokProduk) {
        this.id = id;
        this.namaProduk = namaProduk;
        this.hargaProduk = hargaProduk;
        this.stokProduk = stokProduk;
    }

    public void display() {
        System.out.printf("| %-5d | %-20s | Rp%-8d | %-5d |", id, namaProduk, hargaProduk, stokProduk);
    }
}
