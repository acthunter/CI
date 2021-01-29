<?php 
	
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->library('session');
			$this->load->model('ekspedisi_model');
		}

		public function index()
		{
			$data['title'] = 'Ekspedisi Outdoor Padang';
			$this->load->view('templates/header', $data);
			$this->load->view('home/index');
			$this->load->view('templates/footer');

		}

		public function form()
		{
	
			$data['title'] = 'Registration Form';
			$this->load->view('templates/header', $data);
			$this->load->view('form/index');
			$this->load->view('templates/footer');
		}

		public function form_edit($id)
		{
			$id = $id;
			$data['title'] = 'Edit Form';
			$member['member'] = $this->ekspedisi_model->info_member($id);
			$this->load->view('templates/header', $data);
			$this->load->view('admin/home/edit', $member);
			$this->load->view('templates/footer');
		}
	

		public function admin()
		{
			$data['title'] = 'Administrator Login';
			$this->load->view('templates/header2', $data);
			$this->load->view('admin/home/index');
			$this->load->view('templates/footer');
		}

		public function page()
		{
			$data['title'] = 'Administrator Home';
			$this->load->view('templates/header2', $data);
			$this->load->view('admin/home/page');
			$this->load->view('templates/footer');
		}

		public function data()
		{
			$data['title'] = 'Data Member';
			$data['member'] = $this->ekspedisi_model->ekspedisi_list();
			$this->load->view('templates/header2', $data);
			$this->load->view('admin/home/data');
			$this->load->view('templates/footer');
		}
		
		public function create()
		{
			$date = date_create($this->input->post('tanggal_lahir'));
			$date_formatted = date_format($date, "Y/m/d");
			$data = array(
				'nama' => $this->input->post('nama'),
	  			'tempat_lahir' => $this->input->post('tempat_lahir'),
	  			'tanggal_lahir' => $date_formatted,
	  			'country' => $this->input->post('country'),
	  			'provinsi' => $this->input->post('provinsi'),
	  			'kota' => $this->input->post('kota'),
	  			'alamat' => $this->input->post('alamat'),
	  			'kode_pos' => $this->input->post('kode_pos'),
	  			'email' => $this->input->post('email'),
	  			'no_hp' => $this->input->post('no_hp'),
	  			'mountain' => $this->input->post('mountain'),
	  		);

	  		// var_dump($data);
	  		// die();
			$this->ekspedisi_model->createData($data);
			redirect("");
			// $this->load->view('templates/header');
			// $this->load->view('modal',$data);
			// $this->load->view('templates/footer');
		}

		// public function insert()
		// {
		// 	$data = $this->input->post('data[]');
		// 	var_dump($data);
		// 	die();
		// 	$this->ekspedisi_model->createData($data);
		// 	redirect("");
		// }

		public function login()
		{
		 	$data = array (
		 		'username' => $this->input->post('username'),
		 		'password' => MD5($this->input->post('password')),
		 	);
		 	$result = $this->ekspedisi_model->login($data);
		 	// var_dump($result);
		 	// die();
		 	if ($result == TRUE) {
                $username = $this->input->post('username');
                $result = $this->ekspedisi_model->user_info($username);
                if ($result != false) {
                    $session_data = array(
                    	// 'id'	=> $result[0]->id_user,
                        'username' => $result[0]->username,
                        // 'email' => $result[0]->email,
                        );
                    // Add user data in session
                    $this->session->set_userdata($session_data);
                    redirect('page');
                }   
                else {
                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
                redirect('admin');
            	}
        	}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin');
		}

		public function delete($id)
		{
			// var_dump($id);
			// die();
			$this->ekspedisi_model->deleteData($id);
			redirect('data');
		}

		public function update()
		{
			$id = $this->input->post('id');
			$date = date_create($this->input->post('tanggal_lahir'));
			$date_formatted = date_format($date, "Y/m/d");
			$data = array(
				'nama' => $this->input->post('nama'),
	  			'tempat_lahir' => $this->input->post('tempat_lahir'),
	  			'tanggal_lahir' => $date_formatted,
	  			'country' => $this->input->post('country'),
	  			'provinsi' => $this->input->post('provinsi'),
	  			'kota' => $this->input->post('kota'),
	  			'alamat' => $this->input->post('alamat'),
	  			'kode_pos' => $this->input->post('kode_pos'),
	  			'email' => $this->input->post('email'),
	  			'no_hp' => $this->input->post('no_hp'),
	  			'mountain' => $this->input->post('mountain'),
	  		);

			echo "<pre>";
			// var_dump($data);
			// die();
			echo "</pre>";

			$this->ekspedisi_model->editData($data,$id);
			redirect('data');
		}

	}

 ?>