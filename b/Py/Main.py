from Bola import Bola

# user input jumlah tim
print("Masukkan jumlah tim  : ", end = ' ')
n = int(input()) 

# membuat array sepanjang n
arr = [Bola() for i in range(n)]

# memasukkan data dengan function set
for i in range(n):
    print("Masukkan nama tim    : ", end = ' ') 
    nama = input()
    arr[i].setNama(nama)
    
    print("Masukan negara asal  : ", end = ' ') 
    negara = input()
    arr[i].setNegara(negara)
    
    print("Masukan tahun berdiri: ", end = ' ') 
    tahun = int(input())
    arr[i].setTahun(tahun)
    
    print("Masukan nama pelatih : ", end = ' ') 
    pelatih = input()
    arr[i].setPelatih(pelatih)

    
# menampilkan output array objek
for i in range(n):
    arr[i].keluaran()