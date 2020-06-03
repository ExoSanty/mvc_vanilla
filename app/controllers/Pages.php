<?php

class Pages extends Controller {
	public function __construct(){
		$this->postModel = $this->model('post');
	}

	public function index(){
		$posts = $this->postModel->getPosts();

		$data = ['title' => 'Welcome',
				'posts' => $posts];

		$this->view('Pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us'
				];
			$this->view('Pages/about', $data);
	}
}

?>