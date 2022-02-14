import java.util.Scanner;

public class Main {
    public static void main(String[] args) 
    {
        int i = 0; int n = 0;
        Scanner sc = new Scanner(System.in);
        
        System.out.print("Masukkan banyaknya tim: ");
        try {
            n = sc.nextInt();
        } catch (Exception e) {

        }

        String nama = "";
        String negara = "";
        int tahun = 0;
        String pelatih = "";

        Bola arr[] = new Bola[n];

        for (i = 0; i < n; i++) 
        {
            arr[i] = new Bola();
            System.out.println("");

            System.out.print("Masukkan Nama Tim: ");
            try{
				nama = sc.next();
			}catch(Exception e){

            }
			arr[i].setTim(nama);

            System.out.print("Masukkan Negara Asal: ");
            try{
				negara = sc.next();
			}catch(Exception e){

            }
			arr[i].setNegara(negara);
            
            
            System.out.print("Masukkan Tahun Berdiri: ");
            try{
				tahun = sc.nextInt();
			}catch(Exception e){

            }
			arr[i].setBerdiri(tahun);
            
            
            System.out.print("Masukkan nama pelatih: ");
            try{
				pelatih = sc.next();
			}catch(Exception e){

            }
			arr[i].setPelatih(pelatih);
        }

        for (i = 0; i < n; i++) 
        {
            System.out.println("\nNama tim: " + arr[i].getTim()); 
            System.out.println("Negara asal: " + arr[i].getNegara());
            System.out.println("Tahun berdiri: " + arr[i].getBerdiri());
            System.out.println("Nama pelatih: " + arr[i].getPelatih());
        }
    }
}