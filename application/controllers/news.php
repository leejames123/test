<?php 
	class News extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->model('news_model');

			$this->load->library('parser'); //** template engine **/
			$this->load->helper('url'); //** template engine **/
		}

		public function index()
		{
			$data['news'] = $this->news_model->get_news();

			$data['title'] = 'News Archives';

			// $this->parser->parse('news/index.php', $data);

			$this->load->view('templates/header', $data);
			$this->load->view('news/index', $data);
			$this->load->view('templates/footer', $data);
		}

		public function view($slug=NULL)
		{
			$data['news_item'] = $this->news_model->get_news($slug);

			if(empty($data['news_item']))
			{
				show_404();
			}

			$data['title'] = 'News Archives';


			$this->load->view('templates/header', $data);
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer', $data);
		}
	}
?>