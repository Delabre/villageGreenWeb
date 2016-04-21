<?php 

	class Green extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->database();
			$this->load->helper('url');
		}


		public function index()
		{
			$this->accueil();
		}

		public function accueil()
		{
			$this->load->view('header');
			$this->load->view('liens/accueil');
			$this->load->view('footer');
		}

		public function catalogue()
		{
			$requete = $this->db->query('SELECT * FROM categories');
			$data["liste"]= $requete->result();

			$this->load->view('header');
			$this->load->view('liens/catalogue');
			$this->load->view('footer');
		}
	}

?>