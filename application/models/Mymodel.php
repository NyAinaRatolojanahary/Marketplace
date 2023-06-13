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
}
?>