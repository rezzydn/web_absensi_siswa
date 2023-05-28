<?php
class M_admin extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function get_semua_siswa() {
        return $this->db->get('siswa');
    }
 
	public function get_10a() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X A'");
		
		return $data->result();
	}

	public function get_10b() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X B'");
		
		return $data->result();
	}

	public function get_10c() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X C'");
		
		return $data->result();
	}

	public function get_10d() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X D'");
		
		return $data->result();
	}

	public function get_10e() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X E'");
		
		return $data->result();
	}

	public function get_10f() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='X F'");
		
		return $data->result();
	}

	public function get_mipa_1() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI MIPA 1'");
		
		return $data->result();
	}

	public function get_mipa_2() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI MIPA 2'");
		
		return $data->result();
	}

	public function get_mipa_3() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI MIPA 3'");
		
		return $data->result();
	}

	public function get_mipa_4() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI MIPA 4'");
		
		return $data->result();
	}

	public function get_ips_1() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI IPS 1'");
		
		return $data->result();
	}

	public function get_ips_2() {
		
		$data = $this->db->query("SELECT * from siswa WHERE kelas='XI IPS 2'");
		
		return $data->result();
	}

	
}