public class Bola 
{
    private String nama;
    private String negara;
    private int tahun;
    private String pelatih;

    Bola() {
        this.nama = "";
        this.negara = "";
        this.tahun = 0;
        this.pelatih = "";
    }

    public void setTim(String nama) {
        this.nama = nama;
    }
    public String getTim() {
        return this.nama;
    }

    public void setNegara(String negara) {
        this.negara = negara;
    }
    public String getNegara() {
        return this.negara;
    }

    public void setBerdiri(int tahun) {
        this.tahun = tahun;
    }
    public int getBerdiri() {
        return this.tahun;
    }

    public void setPelatih(String pelatih) {
        this.pelatih = pelatih;
    }
    public String getPelatih() {
        return this.pelatih;
    }
}