<?php
class saw extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('m_alternatif');
        $this->load->model('m_kriteria');
        $this->load->model('m_nilai');
    }

    public function index() {
        $data['alternatif'] = $this->m_alternatif->getAlternatif();
        $data['kriteria'] = $this->m_kriteria->getKriteria();
        $data['nilai'] = $this->m_nilai->getNilai();

        $data['saw'] = $this->m_nilai->getNilaiSAW();
        $data['ranking'] = $this->m_nilai->getNilaiRangking();

        $this->load->view('v_saw', $data);
    }


}?>