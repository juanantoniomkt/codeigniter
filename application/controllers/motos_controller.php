<?php

class motos_controller extends CI_Controller
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->library(array('session'));

        $this->load->model("motos_model");

        $this->load->helper(array('url'));
    }

    public function index()
    {

        if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
        {
            redirect(site_url().'/login');
        }

        $data["motos"]=$this->motos_model->ver();

        $this->load->view('header');
        $this->load->view("motos_view", $data);
		$this->load->view('footer');
    }

    public function mod($id_moto)
    {

        if(is_numeric($id_moto))
        {


            $datos["motos"]=$this->motos_model->mod($id_moto);

            $this->load->view('header');
            $this->load->view("motos_edit", $datos);
            $this->load->view('footer');

            if($this->input->post("submit"))
            {

           
                  $motos=$this->motos_model->mod(
                          $id_moto,
                          $this->input->post("submit"),
                          $this->input->post("modelo"),
                          $this->input->post("descripcion"),
                          $this->input->post("precio"),
                          $this->input->post("entrada")
                          );
                  if($mod==true)
                  {
                      //Sesion de una sola ejecución
                      $this->session->set_flashdata('correcto', 'Moto modificado correctamente');
                  }else
                  {
                      $this->session->set_flashdata('incorrecto', 'Moto modificado correctamente');
                  }
                  redirect(base_url());
              }
          }
          else
          {
              redirect(base_url());
          }
  
  
    }
     
}

?>
