<?php
class kriteria extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_kriteria');
    }

    public function index() {
        $data['kriteria'] = $this->m_kriteria->getKriteria()->result();
        $this->load->view('v_kriteria_main', $data);
    }

    // public function add(){
    //     $data['kriteria'] = $this->m_kriteria->getKriteria();
    //     $this->load->view('v_kriteria_add', $data);
    // }

    public function edit($id){
        $data['kriteria'] = $this->m_kriteria->getKriteriaById($id)->row();
        $this->load->view('v_kriteria_edit', $data);
    }

    // public function addAction(){
    //     $data = array(
    //         "nama" => $this->input->post("nama")
    //         ,"keterangan" => $this->input->post("keterangan")
    //         ,"jenis" => $this->input->post("jenis")
    //         ,"bobot" => $this->input->post("bobot")
    //         ,"max" => $this->input->post("max")
    //         );
    //     $this->m_kriteria->insertKriteria($data);

    //     if($this->db->affected_rows()){
    //         redirect('kriteria');
    //     } else {
    //         redirect('kriteria/add');
    //     }
    // }

    public function editAction(){
        $id=$this->input->post("id");
        $data = array(
            "nama" => $this->input->post("nama")
            ,"keterangan" => $this->input->post("keterangan")
            ,"jenis" => $this->input->post("jenis")
            ,"bobot" => $this->input->post("bobot")
            ,"max" => $this->input->post("max")
            );
        $this->m_kriteria->updateKriteria($data, $id);

        if($this->db->affected_rows()){
            redirect('kriteria');
        } else {
            redirect('kriteria/edit/'.$id);
        }
    }


    // public function delete($id){
    //     $this->m_kriteria->deleteKriteria($id);
    //     if($this->db->affected_rows()){
    //         redirect('kriteria');
    //     } else{
    //         echo "Data gagal dihapus";
    //     }
    // }


}?>