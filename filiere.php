<?php
    require_once 'database.php';

    class filiereDB{

        private $bd;
        public function __construct(){
            $this->bd= new database();
        }
        public function create($libelle, $code){
            $sql="INSERT INTO filiere set libelle=?, code=?";
            $params= array($libelle, $code);
            $this->bd->request($sql, $params);
        }
        public function readall(){
            $sql="SELECT * FROM filiere ORDER BY id_filiere DESC";
            $req= $this->bd->request($sql);
            $datas=$this->bd->recover($req, false);
            return $datas;
        }

        public function readfiliere($idfiliere){
            $sql="SELECT * FROM filiere WHERE id_filiere=?";
            $params= array($idfiliere);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readlibelle($libelle){
            $sql="SELECT * FROM filiere WHERE libelle=?";
            $params= array($libelle);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }
         public function readcode($code){
            $sql="SELECT * FROM filiere WHERE code=?";
            $params= array($code);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }


        public function update($libelle, $code, $idfiliere){
            $sql="UPDATE filiere SET libelle=?, code=? WHERE id_filiere=?";
            $params= array($libelle, $code, $idfiliere);
            $this->bd->request($sql, $params);
        }

        public function delete($idfiliere){
            $sql="DELETE FROM filiere WHERE id_filiere=?";
            $params= array($idfiliere);
            $this->bd->request($sql, $params);
        }
    }

//     $test= new filiereDB();
//     $test->create("hotelerie et restauration","HR");
 ?>