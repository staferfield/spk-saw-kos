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
		return $result->result();
	}

	public function getNilaiByAlternatifId($id)
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
		WHERE id_alternatif = $id
  	    ORDER BY id_alternatif, id_kriteria;
      ");
		return $result->result();
	}

	public function getNilaiSAW()
	{
        $result = $this->db->query('SELECT
		N.id id
		, A.id AS alternatif_id
		, A.nama AS alternatif_nama
		, id_kriteria AS kriteria_id
		, C.nama AS kriteria_nama
		, C.jenis AS kriteria_jenis
		, C.bobot AS kriteria_bobot
		, N.nilai
		, IF(c.jenis = "Benefit", (SELECT MAX(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria), (SELECT MIN(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria)) AS minmax
		, ROUND( IF(c.jenis = "Benefit", N.nilai/(SELECT MAX(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria), (SELECT MIN(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria)/N.nilai) ,2) AS nilai_normal
		, ROUND( (C.bobot * IF(c.jenis = "Benefit", N.nilai/(SELECT MAX(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria), (SELECT MIN(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria)/N.nilai)) / (SELECT sum(bobot) FROM kriteria) ,2) AS nilai_bobot
	  FROM nilai N
		Left JOIN alternatif A ON N.id_alternatif = A.id
		Left JOIN kriteria C ON N.id_kriteria = C.id
	  ORDER BY id_alternatif, id_kriteria;
      ');
		return $result->result();
	}

	public function getNilaiRangking()
	{
        $result = $this->db->query('SELECT
		N.id id
		, A.id AS alternatif_id
		, A.nama AS alternatif_nama
		, ROUND( SUM( (C.bobot * IF(c.jenis = "Benefit", N.nilai/(SELECT MAX(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria), (SELECT MIN(nilai) FROM nilai WHERE id_kriteria = N.id_kriteria)/N.nilai)) / (SELECT sum(bobot) FROM kriteria) ) , 2) AS total_bobot
	  FROM nilai N
		Left JOIN alternatif A ON N.id_alternatif = A.id
		Left JOIN kriteria C ON N.id_kriteria = C.id
	  GROUP BY id_alternatif
	  ORDER BY total_bobot DESC;
      ');
		return $result->result();
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
		return $result->result();
	}

	public function getNilaiById($id)
	{
		$result = $this->db->get_where('nilai', array('alternatif_id' => $id));
		return $result->result();
	}

	public function insertNilai($nilai)
	{
		$this->db->insert('nilai', $nilai);

		$insert_id = $this->db->insert_id();
		$result = $this->db->get_where('nilai', array('id' => $insert_id));
		return $result->result();
	}

	public function updateNilai($nilai, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('nilai', $nilai);

		$result = $this->db->get_where('nilai', array('id' => $id));
		return $result->result();
	}

	public function updateNilaiByAlternatifKriteria($nilai, $id_alternatif, $id_kriteria)
	{
		$this->db->where('id_alternatif', $id_alternatif);
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('nilai', $nilai);

		$result = $this->db->get_where('nilai', array('id_alternatif' => $id_alternatif, 'id_kriteria' => $id_kriteria));
		return $result->result();
	}

	public function deleteNilai($id)
	{
		$result = $this->db->get_where('nilai', array('id' => $id));

		$this->db->where('id', $id);
		$this->db->delete('nilai');

		return $result->result();
	}

}
?>