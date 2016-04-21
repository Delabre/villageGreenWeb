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
			$requete = $this->db->query('SELECT * FROM Categories');
			$data["liste"]= $requete->result();

			$requete2 = $this->db->query('SELECT * FROM Sous_Categories');
			$data["liste2"]= $requete2->result();

			$requete3 = $this->db->query('SELECT count(id_produit) as pute FROM produits');
			$data["liste3"]= $requete3->row();

			

			$this->load->view('header');
			$this->load->view('liens/catalogue', $data);
			$this->load->view('footer');
		}

		public function produit()
		{		
			$this->load->view('header');
			$this->load->view('liens/produit', $data);
			$this->load->view('footer');
		}
	}

?>