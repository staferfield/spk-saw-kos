<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kos extends CI_Model {

    public function getKos()
	{
        $result = $this->db->get('kos');
		return $result;
	}

	public function getKosById($id)
	{
		$result = $this->db->get_where('kos', array('id' => $id));
		return $result;
	}

	public function insertKos($kos)
	{
		$this->db->insert('kos', $kos);

		$insert_id = $this->db->insert_id();
		$result = $this->db->get_where('kos', array('id' => $insert_id));
		return $result;
	}

	public function updateKos($kos, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('kos', $kos);

		$result = $this->db->get_where('kos', array('id' => $id));
		return $result;
	}

	public function deleteKos($id)
	{
		$result = $this->db->get_where('kos', array('id' => $id));

		$this->db->where('id', $id);
		$this->db->delete('kos');

		return $result;
	}

}
?>