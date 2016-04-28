<?php 

	class Green extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->database();
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->helper('form');
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

			$requete3 = $this->db->query('SELECT count(id_produit) as nb FROM produits');
			$data["liste3"]= $requete3->row();

			

			$this->load->view('header');
			$this->load->view('liens/catalogue', $data);
			$this->load->view('footer');
		}

		public function produit($id)
		{
			$requete = $this->db->query('SELECT * FROM Produits WHERE Ref_Id_Sous_Categories_Prod = ? ', $id);
			$data['liste'] = $requete->result();

			$requete2 = $this->db->query('SELECT Nom_Sous_categories, Id_sous_categories FROM Sous_Categories WHERE Id_Sous_Categories = ? ', $id);
			$data["liste2"]= $requete2->row();

			$this->load->view('header');
			$this->load->view('liens/produit', $data);
			$this->load->view('footer');
		}

		public function modifier($id)
		{
			$requete = $this->db->query('SELECT * FROM produits WHERE id_produit = ?', $id);
			$data["liste"] = $requete->row();
			$requete = $this->db->query('SELECT * FROM fournisseurs');
			$data["liste2"] = $requete->result();

			$this->load->view('header');
			$this->load->view('liens/modifier', $data);
			$this->load->view('footer');
		}

		public function script_modifier()
		{

			$tab = $this->input->post();
			$id = $this->input->post("Id_Produit");

			$str = $this->db->update_string("produits", $tab, "Id_Produit=".$id);
			$this->db->query($str);

			redirect(site_url("green/catalogue"));
		}

		public function supprimer($id)
		{
			$requete = $this->db->query('SELECT * FROM produits WHERE id_produit = ?', $id);
			$data["liste"] = $requete->row();

			$this->load->view('header');
			$this->load->view('liens/supprimer', $data);
			$this->load->view('footer');
		}

		public function script_supprimer($id)
		{
			$requete = $this->db->query('DELETE FROM produits WHERE id_produit = ?', $id);
			redirect(site_url('green/catalogue'));
		}

		public function ajouter($idSsCat)
		{
			$requete = $this->db->query('SELECT Nom_Sous_categories, Id_sous_categories FROM Sous_Categories WHERE Id_sous_categories = ?', $idSsCat);
			$data["liste"] = $requete->row();

			$requete = $this->db->query('SELECT * FROM fournisseurs');
			$data["liste2"] = $requete->result();

			$this->load->view('header');
			$this->load->view('liens/ajouter', $data);
			$this->load->view('footer');
		}

		public function script_ajouter()
		{	
			$data = $this->input->post();

			$str = $this->db->insert_string('Produits',$data);
			$this->db->query($str);

			redirect(site_url('green/catalogue'));
		}

		public function inscription()
		{
			$this->load->view('header');
			$this->load->view('liens/inscription');
			$this->load->view('footer');
		}

		public function contact()
		{
			$this->load->view('header');
			$this->load->view('liens/contact');
			$this->load->view('footer');
		}

		public function envoiFormContact()
		{		

			$this->form_validation->set_rules('Nom_Contact', '"Nom"', 'trim|required|min_length[3]|max_length[40]|alpha_dash');
			$this->form_validation->set_rules('Prenom_Contact', '"Prénom"', 'trim|required|min_length[3]|max_length[40]|alpha_dash');
			$this->form_validation->set_rules('Mail_Contact', '"Prénom"', 'trim|required|min_length[3]|max_length[100]|valid_email');
			$this->form_validation->set_rules('Message_Contact', '"Message"', 'trim|required|min_length[3]|max_length[40]');

			$this->form_validation->set_message('required', 'Ce champ ne peut pas être vide');
			$this->form_validation->set_message('max_length', 'Trop de caractères');
			$this->form_validation->set_message('min_length', 'Il faut au moins 3 caractères');
			$this->form_validation->set_message('valid_email', 'Veuillez entrer une adresse mail valide');
			$this->form_validation->set_message('alpha_dash', 'Le champ ne peut contenir que des caractères alphanumériques, underscores "_" et tirets "-"');


			if ($this->form_validation->run()) 
			{
				$data = $this->input->post();

				$str = $this->db->insert_string('Contacts',$data);
				$this->db->query($str);
				
				$this->load->view('header');
				$this->load->view('liens/envoiFormContact_reussi');
				$this->load->view('footer');
			}
			else
			{	
				$this->load->view('header');
				$this->load->view('liens/contact');
				$this->load->view('footer');	
			}
		}
	}
?>