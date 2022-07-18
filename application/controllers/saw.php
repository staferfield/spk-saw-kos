<?php
class saw extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('m_alternatif');
        $this->load->model('m_kriteria');
        $this->load->model('m_nilai');
    }

    public function index() {
        $data['alternatif'] = $this->m_alternatif->getAlternatif()->result();
        $data['kriteria'] = $this->m_kriteria->getKriteria()->result();
        $data['nilai'] = $this->m_nilai->getNilai()->result();

        $data['saw'] = $this->m_nilai->getNilaiSAW()->result();
        $data['ranking'] = $this->m_nilai->getNilaiRangking()->result();

        $this->load->view('v_saw', $data);
    }


}?>