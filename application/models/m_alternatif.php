<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_alternatif extends CI_Model {

    public function getAlternatif()
	{
        $result = $this->db->get('alternatif');
		return $result->result();
	}


	public function getAlternatifById($id)
	{
		$result = $this->db->get_where('alternatif', array('id' => $id));
		return $result->row();
	}

	public function insertAlternatif($alternatif)
	{
		$this->db->insert('alternatif', $alternatif);

		$insert_id = $this->db->insert_id();
		$result = $this->db->get_where('alternatif', array('id' => $insert_id));
		return $result->row();
	}

	public function updateAlternatif($alternatif, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('alternatif', $alternatif);

		$result = $this->db->get_where('alternatif', array('id' => $id));
		return $result->row();
	}

	public function deleteAlternatif($id)
	{
		$result = $this->db->get_where('alternatif', array('id' => $id));

		$this->db->where('id', $id);
		$this->db->delete('alternatif');

		return $result->row();
	}

}
?>