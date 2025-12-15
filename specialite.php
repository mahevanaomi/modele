<?php
    require_once 'database.php';

    class specialiteDB{

        private $bd;
        public function __construct(){
            $this->bd= new database();
        }
        public function create($filiere, $nom, $code){
            $sql="INSERT INTO specialite set id_filiere=?,nom=?, code=?";
            $params= array($filiere, $nom, $code);
            $this->bd->request($sql, $params);
        }
        public function readall(){
            $sql="SELECT * FROM specialite ORDER BY id_filiere DESC";
            $req= $this->bd->request($sql);
            $datas=$this->bd->recover($req, false);
            return $datas;
        }

        public function readfiliere($idfiliere){
            $sql="SELECT * FROM specialite WHERE id_filiere=?";
            $params= array($idfiliere);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }
        
        public function readspecialite($idspecialite){
            $sql="SELECT * FROM specialite WHERE id_specialite=?";
            $params= array($idspecialite);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readnom($nom){
            $sql="SELECT * FROM specialite WHERE nom=?";
            $params= array($nom);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readcode($code){
            $sql="SELECT * FROM specialite WHERE id_specialite=?";
            $params= array($code);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function update($filiere, $nom, $code, $idfiliere){
            $sql="UPDATE specialite SET id_filiere=?, nom=?, code=? WHERE id_specialite=?";
            $params= array($filiere,$nom, $code, $idfiliere);
            $this->bd->request($sql, $params);
        }

        public function delete($idfiliere){
            $sql="DELETE FROM filiere WHERE id_filiere=?";
            $params= array($idfiliere);
            $this->bd->request($sql, $params);
        }
    }

//    $test= new specialiteDB();
//    $test->create(1,"Genie Logiciel","GL");
?>