<?php
class kriteria extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_kriteria');
        $this->load->model('m_alternatif');
        $this->load->model('m_nilai');
    }

    public function index() {
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->template->load('main', 'v_kriteria_main', $data);
    }

    public function add(){
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->template->load('main', 'v_kriteria_add', $data);
    }

    public function edit($id){
        $data['kriteria'] = $this->m_kriteria->getKriteriaById($id);
        $this->template->load('main', 'v_kriteria_edit', $data);
    }

    public function addAction(){
        $data = array(
            "nama" => $this->input->post("nama")
            ,"keterangan" => $this->input->post("keterangan")
            ,"jenis" => $this->input->post("jenis")
            ,"bobot" => $this->input->post("bobot")
            ,"max" => $this->input->post("max")
            );
        $result = $this->m_kriteria->insertKriteria($data);

        // Add dummy data to avoid error
        $alternatif = $this->m_alternatif->getAlternatif();
        foreach($alternatif as $alt){
            $data = array(
                "id_alternatif" => $alt->id
                , "id_kriteria" => $result->id
                , "nilai" => 0
            );
            $this->m_nilai->insertNilai($data);
        }

        if($this->db->affected_rows()){
            redirect('kriteria');
        } else {
            redirect('kriteria/add');
        }
    }

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


    public function delete($id){
        $this->m_kriteria->deleteKriteria($id);
        if($this->db->affected_rows()){
            redirect('kriteria');
        } else{
            echo "Data gagal dihapus";
        }
    }


}?>