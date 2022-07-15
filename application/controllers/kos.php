<?php
class kos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_kos');
        $this->load->model('m_kriteria');
    }

    public function index() {
        $data['kos'] = $this->m_kos->getKos()->result();
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->load->view('v_kos_main', $data);
    }

    public function add(){
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->load->view('v_kos_add', $data);
    }

    public function edit($id){
        $data['kos'] = $this->m_kos->getKosById($id)->row();
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->load->view('v_kos_edit', $data);
    }

    public function addAction(){
        $data = array(
            "nama" => $this->input->post("nama")
            ,"k1" => $this->input->post("kriteria_1")
            ,"k2" => $this->input->post("kriteria_2")
            ,"k3" => $this->input->post("kriteria_3")
            ,"k4" => $this->input->post("kriteria_4")
            ,"k5" => $this->input->post("kriteria_5")
            );
        $this->m_kos->insertKos($data);

        if($this->db->affected_rows()){
            redirect('kos');
        } else {
            redirect('kos/add');
        }
    }

    public function editAction(){
        $id=$this->input->post("id");
        $data = array(
            "nama" => $this->input->post("nama")
            ,"k1" => $this->input->post("kriteria_1")
            ,"k2" => $this->input->post("kriteria_2")
            ,"k3" => $this->input->post("kriteria_3")
            ,"k4" => $this->input->post("kriteria_4")
            ,"k5" => $this->input->post("kriteria_5")
            );
        $this->m_kos->updateKos($data, $id);

        if($this->db->affected_rows()){
            redirect('kos');
        } else {
            redirect('kos/edit/'.$id);
        }
    }


    public function delete($id){
        $this->m_kos->deleteKos($id);
        if($this->db->affected_rows()){
            redirect('kos');
        } else{
            echo "Data gagal dihapus";
        }
    }


}?>