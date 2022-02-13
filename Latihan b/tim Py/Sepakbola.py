class Sepakbola():
#kelas yang digunakan untuk mengimplementasikan sebuah tipe titik
#private members

#atribut tim sepakbola
    __nama = ""     #nama tim
    __negara = ""   #negara asal tim
    __tahun = 0     #tahun berdirinya tim
    __pelatih = ""  #pelatih tim
    __pemain = ""   #pemain dan posisinya
    __stadion = ""  #stadion utama
    __liga = ""     #kompetisi tim
    
    def __init__(self, nama="", negara="", tahun =0, pelatih="", pemain="", stadion="", liga=""):
    #costructor
       self.__nama = nama
       self.__negara = negara
       self.__tahun = tahun
       self.__pelatih = pelatih
       self.__pemain = pemain
       self.__stadion = stadion
       self.__liga = liga
     
    #mengeset nilai nama
    def setnama(self, nama):
        self.__nama = nama
        
    #mengeset nilai negara
    def setnegara(self, negara):
        self.__negara = negara
    
    #mengeset nilai tahun
    def settahun(self, tahun):
        self.__tahun = tahun  
        
    #mengeset nilai pelatih
    def setpelatih(self, pelatih):
        self.__pelatih = pelatih  
        
    #mengeset nilai pemain
    def setpemain(self, pemain):
        self.__pemain = pemain   
        
    #mengeset nilai stadion
    def setstadion(self, stadion):
        self.__stadion = stadion

    #mengeset nilai liga
    def setliga(self, liga):
        self.__liga = liga
        
    
    #mengembalikan nilai nama
    def getnama(self):
        return self.__nama
        
    #mengembalikan nilai negara
    def getnegara(self):
        return self.__negara
        
    #mengembalikan nilai tahun 
    def gettahun(self):
        return self.__tahun  
        
    #mengembalikan nilai pelatih
    def getpelatih(self):
        return self.__pelatih 

    #mengembalikan nilai pemain
    def getpemain(self):
        return self.__pemain    
    
    #mengembalikan nilai stadion
    def getstadion(self):
        return self.__stadion

    #mengembalikan nilai liga
    def getliga(self):
        return self.__liga
        