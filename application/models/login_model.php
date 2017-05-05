<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function student_id(){
        $query=$this->db->query("select * from student where id=1 ");
        if($query->num_rows() > 0){

            return $query->result();
//            echo "<pre>";
//            var_dump($query->result());
//            echo "</pre>";
        }

    }

}


?>