<?php
Class Student extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('StudentModel');
    }
    
    function data1() {
        $table = 'student';
        $primaryKey = 'nik';
        $columns = array(
            array(
                'db' => 'photo', 
                'dt' => 'photo',
                'formatter' => function($d) {
                    return "<img src='http://www.cliptheme.com/preview/cliponeV2/Admin/clip-one-template/clip-one/assets/images/avatar-1-small.jpg'/>";
                } 
            ),
            array('db' => 'nik', 'dt' => 'nik'),
            array('db' => 'fullname', 'dt' => 'fullname'),
            array('db' => 'address', 'dt' => 'address'),
            array('db' => 'phone', 'dt' => 'phone'),
            array(
                'db' => 'nik', 
                'dt' => 'aksi',
                'formatter' => function($d) {
                    return "<a href='edit.php?nik=$d'>EDIT</a>";
                } 
            )
        );
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
        
        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
    
    function data() {
        $table = 'tbl_siswa';
        $primaryKey = 'nim';
        $columns = array(
            array(
                'db' => 'foto', 
                'dt' => 'foto',
                'formatter' => function($d) {
                    return "<img src='http://www.cliptheme.com/preview/cliponeV2/Admin/clip-one-template/clip-one/assets/images/avatar-1-small.jpg'/>";
                } 
            ),
            array('db' => 'nim', 'dt' => 'nim'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tempat_lahir', 'dt' => 'tempat_lahir'),
            array('db' => 'tanggal_lahir', 'dt' => 'tanggal_lahir'),
            array(
                'db' => 'nim', 
                'dt' => 'aksi',
                'formatter' => function($d) {
                    return "<a href='edit.php?nim=$d'>EDIT</a>";
                } 
            )
        );
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
        
        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
    
    function index(){
        $this->template->load('template', 'student/list');
    }
    
    function add(){
        if(isset($_POST['submit'])){
            $config['upload_path']      = './uploads/';
            $config['allowed_types']    = 'jpeg|jpg|png';
            $config['max_size']         = 1024;
            $this->load->library('upload', $config);
            //Proses upload
            $this->upload->do_upload('foto');
            $upload = $this->upload->data();
//            echo $upload['file_name'];
//            print_r($upload);
//            die;
            $this->StudentModel->save($upload['file_name']);
            redirect('student');
        } else {
            $this->template->load('template', 'student/add');
        }
    }
}