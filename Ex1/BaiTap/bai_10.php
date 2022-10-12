<?php
    class Person{
        private $hoten;
        private $ngaysinh;
        private $que;

        public function getHoTen()
        {
            return $this->hoten;
        }
        public function getNgaySinh()
        {
            return $this->ngaysinh;
        }
        public function getQue()
        {
            return $this->que;
        }
        public function setHoTen($hoten)
        {
            $this->hoten = $hoten;
        }
        public function setNgaySinh($ngaysinh)
        {
            $this->ngaysinh = $ngaysinh;
        }
        public function setQue($que)
        {
            $this->que = $que;
        }
    }
    class SinhVien extends Person{
        private $lop;

        public function getLop()
        {
            return $this->lop;
        }
        public function setLop($lop)
        {
            $this->lop = $lop;
        }
    }

    $sv1 = new SinhVien();
    $sv1->setHoTen('Lê Đức Anh');
    $sv1->setNgaySinh('30/10/2001');
    $sv1->setQue('Hà Nội');
    $sv1->setLop('CNTT2');

    echo $sv1->getHoTen()."<br>";
    echo $sv1->getNgaySinh()."<br>";
    echo $sv1->getQue()."<br>";
    echo $sv1->getLop()."<br>";
?>