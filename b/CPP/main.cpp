#include "1.cpp"

// void untuk menampilkan inputan ke layar
void Bola::putdata()
{
    cout << namaTim << " - ";
    cout << negaraTim << " - ";
    cout << tahunTim << " ";
}
 
// deklarasi program main 
int main()
{
    cout << "Masukan jumlah tim sepak bola : ";

    // deklarasi variabel n untuk masukan user   
    int n;
    cin >> n;

    // membuat kelas sebanyak n
    Bola arr[n];

    // deklarasi variabel untuk masukan 
    string namaTim;
    string negaraTim;
    int tahunTim;
    string pemainTim;

    int countPemain[n];

    int i = 0; int j = 0;
    for(i = 0; i < n; i++) 
    {
        cout << "Masukan nama tim           : ";
        cin >> namaTim;
        arr[i].setnama(namaTim);
    
        cout << "Masukan negara asal tim    : ";
        cin >> negaraTim;
        arr[i].setnegara(negaraTim);
    
        cout << "Masukan tahun tim berdiri  : ";
        cin >> tahunTim;
        arr[i].settahun(tahunTim);
    
        cout << "Masukan jumlah pemain      : ";
        cin >> countPemain[i];
        for (j = 0; j < countPemain[i]; j++)
        {
            cin >> pemainTim;
            arr[i].setpemain(j, pemainTim);
        }
    }

    cout << "Para Tim Sepak Bola: " << endl;
   
    for(i = 0; i < n; i++) 
    {
        // memanggil fungsi put data untuk menampilkan ke layar
        arr[i].putdata();
        printf("\n");
        cout << "Para pemain:\n";
        for (j = 0; j < countPemain[i]; j++)
        {
            cout << j+1 << ". " << arr[i].getpemain(j) << endl;
        }       
    }

    return 0;
}