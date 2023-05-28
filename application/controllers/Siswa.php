<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
        $data['siswa'] = $this->M_admin->get_semua_siswa('siswa')->result();

		$this->load->view('headers');
		$this->load->view('semua_siswa_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_a()
	{
        $data['siswa'] = $this->M_admin->get_10a();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10a_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_b()
	{
        $data['siswa'] = $this->M_admin->get_10b();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10b_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_c()
	{
        $data['siswa'] = $this->M_admin->get_10c();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10c_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_d()
	{
        $data['siswa'] = $this->M_admin->get_10d();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10d_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_e()
	{
        $data['siswa'] = $this->M_admin->get_10e();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10e_view', $data);
		$this->load->view('footers');
	}

    public function kelas_10_f()
	{
        $data['siswa'] = $this->M_admin->get_10f();

		$this->load->view('headers');
		$this->load->view('kelas_10/kelas_10f_view', $data);
		$this->load->view('footers');
	}

    public function mipa_1()
	{
        $data['siswa'] = $this->M_admin->get_mipa_1();

		$this->load->view('headers');
		$this->load->view('kelas_11_mipa/mipa_1_view', $data);
		$this->load->view('footers');
	}

    public function mipa_2()
	{
        $data['siswa'] = $this->M_admin->get_mipa_2();

		$this->load->view('headers');
		$this->load->view('kelas_11_mipa/mipa_2_view', $data);
		$this->load->view('footers');
	}

    public function mipa_3()
	{
        $data['siswa'] = $this->M_admin->get_mipa_3();

		$this->load->view('headers');
		$this->load->view('kelas_11_mipa/mipa_3_view', $data);
		$this->load->view('footers');
	}

    public function mipa_4()
	{
        $data['siswa'] = $this->M_admin->get_mipa_4();

		$this->load->view('headers');
		$this->load->view('kelas_11_mipa/mipa_4_view', $data);
		$this->load->view('footers');
	}

    public function ips_1()
	{
        $data['siswa'] = $this->M_admin->get_ips_1();

		$this->load->view('headers');
		$this->load->view('kelas_11_ips/ips_1_view', $data);
		$this->load->view('footers');
	}

    public function ips_2()
	{
        $data['siswa'] = $this->M_admin->get_ips_2();

		$this->load->view('headers');
		$this->load->view('kelas_11_ips/ips_2_view', $data);
		$this->load->view('footers');
	}

}
