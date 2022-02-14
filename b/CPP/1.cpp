#include<iostream>
#include<string>

using namespace std;
 
class Bola
{
    private:
        string namaTim;
        string negaraTim;
        int tahunTim;
        string pemainTim[50];
        
    public:
		Bola(){

        }

        // method untuk nama
        void setnama(string namaTim){
            this->namaTim = namaTim;
        }
        string getnama(){
            return this->namaTim;
        }

        // method untuk negara
        void setnegara(string negaraTim){
            this->negaraTim = negaraTim;
        }
        string getnegara(){
            return this->negaraTim;
        }

        // method untuk tahun
        void settahun(int tahunTim){
            this-> tahunTim = tahunTim;
        }
        int gettahun(){
            return this->tahunTim;
        }

        // method untuk pemain
        void setpemain(int i, string pemainTim){
            this-> pemainTim[i] = pemainTim;
        }
        string getpemain(int i){
            return this->pemainTim[i];
        }

        void putdata();

        ~Bola(){

		}
};
 
