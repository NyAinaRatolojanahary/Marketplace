<?php 
defined('BASEPATH') OR exit('No direct script acces alowed');

class Categorie extends CI_Model
{

    $id;
    $categorie; //nom categorie
    $description;
    
    public function construct(){

        parent::_construct();

        parent::_construct($id);
        setId($id);

    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCategorie($name) {
        $this->categorie = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAll() {

        $this->load->database();
    
        $query=$this->db->query('select*from categorie');
        $data=array();
        $result=$query->result_array();

        if ($query) {
            // Traitez les résultats de la requête
            foreach ($result as $results){
                array_push($data,$results);
             }
            } else {
                echo "Erreur lors de l'exécution de la requête : " . $this->db->error();
            } 
            return $data;
    }

    public function getById($id){
        $var=sprintf($id);
        $query=$this->db->query(" select*from categorie where id=$var");
        $result = $query->row_array();

        if ($query) {
            return $result;

            } else {
                echo "Erreur lors de l'exécution de la requête : " . $this->db->error();
                return null;
            } 
    }

}
