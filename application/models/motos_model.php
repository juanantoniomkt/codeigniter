<?php

class motos_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
        //llamo o incluyo el modelo

        $this->load->database();
    }

    public function ver()
    {
        $consulta=$this->db->query("SELECT * FROM motos;");
    
        return $consulta->result();
    }

    public function mod(
        $id_moto,
        $modificar="NULL",
        $modelo="NULL",$descripcion="NULL",
        $entrada="NULL",$precio="NULL")
    {
        if($modificar=="NULL")
        {
            $consulta=$this->db->query("SELECT * FROM motos WHERE id_moto=$id_moto");
            return $consulta->result();
        }else
        {
          $consulta=$this->db->query("
              UPDATE motos SET modelo='$modelo', precio='$precio',
              entrada='$entrada', descripcion='$descripcion' WHERE id_moto=$id_moto;
                  ");
          if($consulta==true)
          {
              return true;
          }else
          {
              return false;
          }
        }
    }



}

?>