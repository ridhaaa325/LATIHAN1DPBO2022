<?php

    // function set untuk memasukan nilai ke dalam objek
    // function get untuk mengambil nilai dari dalam objek 
	class TimBola 
    {
		private $namatim = "";
        private $negaratim = "";
        private $tahuntim = "";
        private $pelatih = "";
        private $pemain = array();

		public function __construct($namatim = "", $negaratim = "", $tahuntim = "", $pelatih = "", $pemain = "")
		{ 
			$this->namatim = $namatim;
			$this->negaratim = $negaratim;
			$this->tahuntim = $tahuntim;
			$this->pelatih = $pelatih;			
			$this->pemain = $pemain;
		}
        // untuk nama tim
		public function set_nama($new_namatim) { 
			$this->namatim = $new_namatim;  
 		}
 
   		public function get_nama() {
			return $this->namatim;
		}

        // untuk negara asal
        public function set_negara($new_negaratim) { 
			$this->negaratim = $new_negaratim;  
 		}
 
   		public function get_negara() {
			return $this->negaratim;
		}

        // untuk tahun tim
        public function set_tahun($new_tahuntim) { 
			$this->tahuntim = $new_tahuntim;  
 		}
 
   		public function get_tahun() {
			return $this->tahuntim;
		}

        // untuk pelatih
        public function set_pelatih($new_pelatih) { 
			$this->pelatih = $new_pelatih;  
 		}
 
   		public function get_pelatih() {
			return $this->pelatih;
		}

		/*
        // untuk pemain dalam tim
        public function set_pemain($new_pemain) { 
			$this->pemain = $new_pemain;  
 		}
 
   		public function get_pemain() {
			return $this->pemain;
		}
		*/

		public function __destruct()
		{
			
		}
	} 
?>