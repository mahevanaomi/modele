<?php
    require_once 'database.php';

    class inscriptionDB{

        private $bd;
        public function __construct(){
            $this->bd= new database();
        }
        public function create($etudiant,$secretaire,$date, $montant){
            $sql="INSERT INTO inscription set id_etudiant=?, id_secretaire=?, date_inscription=?, montant=?";
            $params= array($etudiant, $secretaire, $date, $montant);
            $this->bd->request($sql, $params);
        }
        public function readall(){
            $sql="SELECT * FROM inscription ORDER BY id_inscription DESC";
            $req= $this->bd->request($sql);
            $datas=$this->bd->recover($req, false);
            return $datas;
        }

        public function readutilisateur($idutilisateur){
            $sql="SELECT * FROM inscription WHERE id_inscription=?";
            $params= array($idutilisateur);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function update($etudiant, $secretaire, $date, $montant, $inscription){
            $sql="UPDATE inscription SET id_etudiant=?, id_secretaire=?, date_inscription=?, montant=? WHERE id_inscription=?";
            $params= array($etudiant,$secretaire,$date,$montant,$inscription);
            $this->bd->request($sql, $params);
        }

        public function delete($inscription){
            $sql="DELETE FROM inscription WHERE id_inscription=?";
            $params= array($inscription);
            $this->bd->request($sql, $params);
        }
    }

//    $test= new inscriptionDB();
//    $test->create(2,1,"04/09/2025","15500");
?>