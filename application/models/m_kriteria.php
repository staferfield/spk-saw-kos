<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kriteria extends CI_Model {

    public function getKriteria()
	{
        $result = $this->db->get('kriteria');
		return $result->result();
	}

	public function getKriteriaById($id)
	{
		$result = $this->db->get_where('kriteria', array('id' => $id));
		return $result->row();
	}

	public function insertKriteria($data)
	{
		$this->db->insert('kriteria', $data);

		$insert_id = $this->db->insert_id();
		$result = $this->db->get_where('kriteria', array('id' => $insert_id));
		return $result->row();
	}

	public function updateKriteria($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('kriteria', $data);

		$result = $this->db->get_where('kriteria', array('id' => $id));
		return $result->row();
	}

	public function deleteKriteria($id)
	{
		$result = $this->db->get_where('kriteria', array('id' => $id));

		$this->db->where('id', $id);
		$this->db->delete('kriteria');

		return $result->row();
	}
}
?>