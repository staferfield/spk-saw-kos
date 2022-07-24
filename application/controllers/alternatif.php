<?php
class alternatif extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_alternatif');
        $this->load->model('m_kriteria');
        $this->load->model('m_nilai');
    }

    public function index() {
        $data['alternatif'] = $this->m_alternatif->getAlternatif();
        $data['nilai'] = $this->m_nilai->getNilai();
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->template->load('main', 'v_alternatif_main', $data);
    }

    public function add(){
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->template->load('main', 'v_alternatif_add', $data);
    }

    public function edit($id){
        $data['alternatif'] = $this->m_alternatif->getAlternatifById($id);
        $data['nilai'] = $this->m_nilai->getNilaiByAlternatifId($id);
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $this->template->load('main', 'v_alternatif_edit', $data);
    }

    public function addAction(){
        $data = array(
            "nama" => $this->input->post("nama")
        );
        $result = $this->m_alternatif->insertAlternatif($data);

        $kriteria = $this->m_kriteria->getKriteria();
        foreach($kriteria as $cr){
            $data = array(
                "id_alternatif" => $result->id
                , "id_kriteria" => $cr->id
                , "nilai" => $this->input->post($cr->id)
            );
            $this->m_nilai->insertNilai($data);
        }

        if($this->db->affected_rows()){
            redirect('alternatif');
        } else {
            redirect('alternatif/add');
        }
    }

    public function editAction(){
        $id=$this->input->post("id");
        $kriteria = $this->m_kriteria->getKriteria();
        $data = array(
            "nama" => $this->input->post("nama")
        );
        $this->m_alternatif->updateAlternatif($data, $id);

        foreach($kriteria as $cr){
            // $nilai = $this->input->post($cr->id);
            $data = array(
                "nilai" => $this->input->post($cr->id)
            );
            $this->m_nilai->updateNilaiByAlternatifKriteria($data, $id, $cr->id);
        }

        if($this->db->affected_rows()){
            redirect('alternatif');
        } else {
            redirect('alternatif/edit/'.$id);
        }
    }


    public function delete($id){
        $this->m_alternatif->deleteAlternatif($id);
        if($this->db->affected_rows()){
            redirect('alternatif');
        } else{
            echo "Data gagal dihapus";
        }
    }


}?>