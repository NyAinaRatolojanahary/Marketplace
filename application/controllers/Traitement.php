<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {

    public function afficherliste(){
        $this->load->model('Mymodel');
        $data['var']=$this->Mymodel->getproduit();
        $this->load->view('Liste',$data);
    }

}
?>