<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_nilai extends CI_Model {

    public function getNilai()
	{
        $result = $this->db->query("SELECT
        N.id id
        , A.id AS alternatif_id
        , A.nama AS alternatif_nama
        , id_kriteria AS kriteria_id
        , C.nama AS kriteria_nama
        , C.bobot AS kriteria_bobot
        , N.nilai
      FROM nilai N
        Left JOIN alternatif A ON N.id_alternatif = A.id
        Left JOIN kriteria C ON N.id_kriteria = C.id
      ORDER BY id_alternatif, id_kriteria;
      ");
		return $result;
	}

	public function getNilaiMinMax()
	{
        $result = $this->db->query('SELECT
		id AS id
		, nama AS kriteria_nama
		, jenis AS kriteria_jenis
		, bobot AS kriteria_bobot
		, IF(jenis = "Benefit", (SELECT MAX(nilai) FROM nilai WHERE id_kriteria = 1), (SELECT MIN(nilai) FROM nilai WHERE id_kriteria = 1)) AS minmax
	  FROM kriteria
	  ORDER BY id;
      ');
		return $result;
	}

	public function getNilaiById($id)
	{
		$result = $this->db->get_where('nilai', array('id' => $id));
		return $result;
	}

	public function insertNilai($nilai)
	{
		$this->db->insert('nilai', $nilai);

		$insert_id = $this->db->insert_id();
		$result = $this->db->get_where('nilai', array('id' => $insert_id));
		return $result;
	}

	public function updateNilai($nilai, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('nilai', $nilai);

		$result = $this->db->get_where('nilai', array('id' => $id));
		return $result;
	}

	public function deleteNilai($id)
	{
		$result = $this->db->get_where('nilai', array('id' => $id));

		$this->db->where('id', $id);
		$this->db->delete('nilai');

		return $result;
	}

}
?>