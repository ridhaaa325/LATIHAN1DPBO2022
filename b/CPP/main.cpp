#include "1.cpp"

// Defining the function outside the class
// void untuk menampilkan inputan ke layar
void Bola::putdata()
{
    cout << namaTim << " - ";
    cout << negaraTim << " - ";
    cout << tahunTim << " ";
}
 
int main()
{
    cout << "Masukan jumlah tim sepak bola: ";
    
    int n;
    cin >> n;

    Bola arr[n];

    string namaTim;
    string negaraTim;
    int tahunTim;
    string pemainTim;

    int countPemain[n];

    int i = 0; int j = 0;
    for(i = 0; i < n; i++) 
    {
        cout << "Masukkan nama tim: ";
        cin >> namaTim;
        arr[i].setnama(namaTim);
    
        cout << "Masukkan negara asal tim: ";
        cin >> negaraTim;
        arr[i].setnegara(negaraTim);
    
        cout << "Masukkan tahun tim berdiri: ";
        cin >> tahunTim;
        arr[i].settahun(tahunTim);
    
        cout << "Masukkan jumlah pemain: ";
        cin >> countPemain[i];
      
        for (j = 0; j < countPemain[i]; j++)
        {
            cin >> pemainTim;
            arr[i].setpemain(j, pemainTim);
        }
    }

    cout << "Para Tim Sepak Bola: " << endl;
   
    // Accessing the function
    for(i = 0; i < n; i++) 
    {
        arr[i].putdata();
        printf("\n");
        cout << "Para pemain:\n";
        for (j = 0; j < countPemain[i]; j++)
        {
            cout << " # " << arr[i].getpemain(j) << endl;
        }       
    }
    
    return 0;
}