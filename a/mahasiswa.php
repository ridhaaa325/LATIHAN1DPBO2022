<?php

    // function set untuk memasukan nilai ke dalam objek
    // function get untuk mengambil nilai dari dalam objek 
	class Mahasiswa 
    {
		private $nama = "";
        private $nim = "";
        private $prodi = "";
        private $gender = "";
        private $semester = "";

		public function __construct($nama = "", $nim = "", $prodi = "", $gender = "", $semester="")
		{
			$this->nama = $nama;
			$this->nim = $nim;
			$this->prodi = $prodi;
			$this->gender = $gender;			
			$this->semester = $semester;
		}
        // untuk nama
		public function set_nama($new_nama) { 
			$this->nama = $new_nama;  
 		}
 
   		public function get_nama() {
			return $this->nama;
		}

        // untuk nim
        public function set_nim($new_nim) { 
			$this->nim = $new_nim;  
 		}
 
   		public function get_nim() {
			return $this->nim;
		}

        // untuk prodi
        public function set_prodi($new_prodi) { 
			$this->prodi = $new_prodi;  
 		}
 
   		public function get_prodi() {
			return $this->prodi;
		}

        // untuk gender
        public function set_gender($new_gender) { 
			$this->gender = $new_gender;  
 		}
 
   		public function get_gender() {
			return $this->gender;
		}

        // untuk semester
        public function set_semester($new_semester) { 
			$this->semester = $new_semester;  
 		}
 
   		public function get_semester() {
			return $this->semester;
		}

		public function __destruct()
		{
			
		}
	} 
?>