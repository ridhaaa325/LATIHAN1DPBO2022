class Bola():

    # atribut private
    __nama = "blank"
    __negara = "blank"
    __tahun = 0
    __pelatih = "blank"

    # konstruktor
    def __init__(self, nama="blank", negara="blank", tahun=0, pelatih="blank"):
        self.__nama = nama
        self.__negara = negara
        self.__tahun = tahun
        self.__pelatih = pelatih

    # deklarasi methods
    def setNama(self, nama):
        self.__nama = nama
        
    def getNama(self):
        return self.__nama 

    def setNegara(self, negara):
        self.__negara = negara
        
    def getNegara(self):
        return self.__negara 

    def setTahun(self, tahun):
        self.__tahun = tahun
        
    def getTahun(self):
        return self.__tahun 

    def setPelatih(self, pelatih):
        self.__pelatih = pelatih
        
    def getPelatih(self):
        return self.__pelatih 

    # untuk menampilkan hasil inputan user
    def keluaran(self):
        print ("###################################")
        print ("  Nama Tim       : %s" % (self.__nama)) 
        print ("  Negara Asal    : %s" % (self.__negara)) 
        print ("  Tahun Berdiri  : %d" % (self.__tahun)) 
        print ("  Nama Pelatih   : %s" % (self.__pelatih))
        print ("###################################") 