<?php
   
   class User{

       private $id;
       private $nom;
       private $type_user;
       private $matricule;
       private $password; 


       public function __construct($i, $n, $m, $pass){
        $this->id = $i;
        $this->nom = $n;
        $this->matricule = $m;
        $this->password = $pass;
      }

      public function setId($t){
          $this->type_user = $t;
      }

      public function getType(){
          return $this->type_user;
      }

       public function getId(){
           return $this->id;
       } 
       public function getNom(){
           return $this->nom;
       }
       public function get(){
        return $this->prenom;
       }

       public function getTelephone(){
        return $this->telephone;
       }

       public function getEmail(){
        return $this->email;
       }
       public function getPassword(){
        return $this->password;
       }

   }

?>