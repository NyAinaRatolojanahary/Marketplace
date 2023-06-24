<?php 
defined('BASEPATH') OR exit('No direct script acces alowed');

class Product extends CI_Model
{
    $id;
    $product;
    $description;
    $price;
    $sousCategorie;
    $quantity;
    $caution;

    public function construct(){
        parent::_construct();

        parent::_construct($id,$product,$description,$price,$souscateg,$quantity,$caution);
        setId($id);
        setProduct($product);
        setDescription($description);
        setPrice($price);
        setSousCategorie($souscateg);
        setQuantity($quantity);
        setCaution($caution);

    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setProduct($name) {
        $this->product = $name;
    }
    public function getProduct(){
        return $this->product;
    }

    public function setDescription($descri) {
        $this->description = $descri;
    }
    public function getDescription(){
        return $this->description;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setSousCategorie($souscateg) {
        $this->sousCategorie = $souscateg;
    }
    public function getSousCategorie(){
        return $this->sousCategorie;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function getQuantity(){
        return $this->quantity;
    }

    public function setCaution($caution){
        $this->caution = $caution;
    }
    public function getCaution(){
        return $this->caution;
    }

    public function getAll() {

        $this->load->database();
    
        $query=$this->db->query('select*from product');
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

    public function getById($id){
        $var=sprintf($id);
        $query=$this->db->query(" select*from product where id=$var ");
        $result = $query->row_array();

        if ($query) {
            return $result;

            } else {
                echo "Erreur lors de l'exécution de la requête : " . $this->db->error();
                return null;
            } 
    }
}