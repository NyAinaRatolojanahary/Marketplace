<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {

    public function afficherliste(){
        $this->load->library('pagination');

        $this->load->model('Mymodel');
        $data['var']=$this->Mymodel->getproduit();
        $this->load->view('Liste',$data);
    }

    public function afficheRecherche(){
        $this->load->library('pagination');

        $this->load->model('Mymodel');

        if ($this->input->post()) {
            $texte = $this->input->post('mot');
            
            $data['var']=$this->Mymodel->recherchesimple($texte);

        }

        $this->load->view('Liste',$data);
    }

    // public function pagi(){

    //     // $this->load->library('loader');
    //     $this->load->library('pagination');
    //     $this->load->model('Mymodel');

    //     // Configuration de la pagination
    //     $config['base_url'] = base_url('traitement/afficherliste'); 
    //     $config['total_rows'] = $this->Mymodel->getTotalRows();
    //     $config['per_page'] = 2;
    //     $config['uri_segment'] = 3;
    //     $config['num_links'] = 2;
    //     $config['use_page_numbers'] = true;
    //     $config['reuse_query_string'] = true;

    //     $this->pagination->initialize($config);

    //     // Récupération des données paginées
    //     $page = $this->uri->segment(3);
    //     $offset = ($page) * $config['per_page'];
    //     $data['results'] = $this->Mymodel->getPaginatedData($config['per_page'], $offset);

    //     // Chargement de la vue
    //     $this->load->view('Liste', $data);
    // }
}
?>