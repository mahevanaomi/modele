<?php
    require_once 'database.php';

    class utilisateurDB{

        private $bd;
        public function __construct(){
            $this->bd= new database();
        }
        public function create($specialite, $nom, $prenom, $email, $login, $password, $statut, $role, $sexe, $date, $image, $telephone){
            $sql="INSERT INTO utilisateur set id_specialite=?, nom=?, prenom=?, email=?, login=?, password=?, statut=?, role=?, sexe=?, date_naissance=?, image=?, telephone=? ";
            $params= array($specialite, $nom, $prenom, $email, $login, $password, $statut, $role, $sexe, $date, $image, $telephone);
            $this->bd->request($sql, $params);
        }
        public function readall(){
            $sql="SELECT * FROM utilisateur ORDER BY id_utilisateur DESC";
            $req= $this->bd->request($sql);
            $datas=$this->bd->recover($req, false);
            return $datas;
        }

        public function readspecailite($idspecialite){
            $sql="SELECT * FROM utilisateur WHERE id_specialite=?";
            $params= array($idspecialite);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }
         public function readutilisateur($idutilisateur){
            $sql="SELECT * FROM utilisateur WHERE id_utilisateur=?";
            $params= array($idutilisateur);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readnom($nom){
            $sql="SELECT * FROM utilisateur WHERE nom=?";
            $params= array($nom);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }
        public function reademail($email){
            $sql="SELECT * FROM utilisateur WHERE email=?";
            $params= array($email);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readtelephone($telephone){
            $sql="SELECT * FROM utilisateur WHERE telephone=?";
            $params= array($telephone);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readlogin($login){
            $sql="SELECT * FROM utilisateur WHERE nom=?";
            $params= array($login);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function readpassword($password){
            $sql="SELECT * FROM utilisateur WHERE password=?";
            $params= array($password);
            $req= $this->bd->request($sql,$params);
            $datas=$this->bd->recover($req, true);
            return $datas;
        }

        public function update($specialite, $nom, $prenom, $email, $login, $password, $statut, $role, $sexe, $date, $image, $telephone, $idutilisateur){
            $sql="UPDATE utilisateur SET  id_specialite=?, nom=?, prenom=?, email=?, login=?, password=?, statut=?, role=?, sexe=?, date_naissance=?, image=?, telephone=? WHERE id_utilisateur=?";
            $params= array($specialite, $nom, $prenom, $email, $login, $password, $statut, $role, $sexe, $date, $image, $telephone, $idutilisateur);
            $this->bd->request($sql, $params);
        }

        public function delete($idutilisateur){
            $sql="DELETE FROM utilisateur WHERE id_utilisateur=?";
            $params= array($idfiliere);
            $this->bd->request($sql, $params);
        }
    }

//     $test= new utilisateurDB();
//     $test->create(1,"MEGNE","Ange","ange@gmail.com","princesse","2009","actif","etudiant","Feminin","02/06/2009","photo","698344710");
  ?>