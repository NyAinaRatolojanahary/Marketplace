<?php 
defined('BASEPATH') OR exit('No direct script acces alowed');

class Mymodel extends CI_Model{

    public function getproduit(){

        $this->load->database();
    
        $query=$this->db->query('select*from v_product');
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

    public function recherchesimple($texte){
        $this->load->database();
    
        $query=$this->db->query("SELECT * FROM V_product WHERE nom_produit LIKE '%$texte%' ");
        $data=array();
        $result=$query->result_array();

        if ($query) {
            foreach ($result as $results){
                array_push($data,$results);
             }
            } else {
                echo "Erreur lors de l'exécution de la requête : " . $this->db->error();
            } 
            return $data;
    }

    // public function getTotalRows() {
    //     $this->load->database();
    //     $query = $this->db->get('v_product'); // Remplacez 'votre_table' par le nom de votre table dans la base de données
    
    //     return $query->num_rows(); // Retourne le nombre total d'éléments
    // }
    

    // public function getPaginatedData($limit, $offset) {
    //     $this->load->database();
    //     $this->db->limit($limit, $offset);
    //     $query = $this->db->get('v_product'); // Remplacez 'votre_table' par le nom de votre table dans la base de données
    
    //     if ($query->num_rows() > 0) {
    //         return $query->result(); // Retourne les résultats paginés sous forme d'un tableau d'objets
    //     } else {
    //         return array(); // Retourne un tableau vide si aucune donnée n'est trouvée
    //     }
    // }
}   