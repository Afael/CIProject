<?php

class StudentModel extends CI_Model {
    public $table = 'tbl_siswa';
            function save ($foto){
        $data = array(
            'nim'             => $this->input->post('nim', TRUE)
            //,'kd_agama'       => $this->input->post('kd_agama', TRUE)
            ,'nama'           => $this->input->post('nama', TRUE)
            ,'tanggal_lahir'     => $this->input->post('tanggal_lahir', TRUE)
            ,'tempat_lahir'   => $this->input->post('tempat_lahir', TRUE)
            //,'dob'       => $this->input->post('dob', TRUE)
            ,'gender'         => $this->input->post('gender', TRUE)
            ,'foto'           => $foto
        );
        //print_r($data);
        $this->db->insert($this->table, $data);
    }
}

