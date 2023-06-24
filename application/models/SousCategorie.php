<?php 
    class SousCategoire extends CI_Model
{
        public $id;
        public $sousCategorie;
        public $description;
        public $categorie;

        
        /// Encapsulation 
        public function setId($id){$this->$id = $id;}
        public function getId(){return $this->id;}
        
        public function setSousCategorie($sousCategorie){$this->$sousCategorie = $sousCategorie;}
        public function getSousCategorie(){return $this->sousCategorie;}
        
        public function setDescription($description){$this->$description = $description;}
        public function getDescription(){return $this->description;}
        
        public function setCategorie($categorie){$this->$categorie = $categorie;}
        public function getCategorie(){return $this->categorie;}
        

        /// Constructor 
        public function construct(){
            parent::_construct();
            $this-> load->database();
        }
        

        /// function 

        public function getAll(){
            $query = $this->db->query('select * from SousCategorie');
            $data = array();
            $result = $query->result_array();

            if($query){
                foreach($result as $results){
                    array_push($data,$results);
                }
            }else {
                echo "Erreur lors de l'execution de la requette :" . $this->db->error(); 
            }
            return $data;
        }
        
        public function getById($id){
            $idS = sprintf($id);
            $query = $this->db->query("select * from SousCategorie where id= $idS");
            $result = $query->row_array();

            if ($query) {
                return $result;
            } else {
                echo "Erreur lors de l'execution de la requette :" . $this->db->error(); 
                return null;
            }
        }

    }
?> 