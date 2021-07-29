<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\PostsModel;
use App\Models\CategoriesModel;
use App\Models\NewsLetterModel;

class Home extends BaseController
{
	function __construct()
    {
        //$this->load->database();
    }
	public function index()
	{
		/* $model = new PostsModel();
		$model->insert([
			"banner"=>"img1.png",
			"title"=>"My first post",
			"intro"=>"Hello this is me",
			"content"=>"lorem ipsum",
			"category"=>"1",
			"tags"=>"sports",
			"created_at"=>date("Y-m-d"),
			"created_by"=>"1"
		]); */
		return view("index");
		
		//$this->loadViews("index");
	}

	public function add_newsletter(){
		if($_POST['email']){
			$newslettermodel = new NewsLetterModel();
			$newslettermodel->insert($_POST);
		}
		return view("index");
	}

	public function uploadPost(){
		//load categories
		
		$model = new CategoriesModel();
		$categories = $model->findAll();
		$data["categories"] = $categories;
		 
		$postmodel = new PostsModel();
		/* $categories = $this->db->query("SELECT * FROM categories")->result();
		$data["categories"] = $categories; */
		
		/*$builder = $db->table('categories');
		$query   = $builder->get();  // Produces: SELECT * FROM mytable
		$query = $builder->get(10, 20);
		$data["categories"] = $query; */
		
		helper(["url", "form"]);
		$validation = \Config\Services::validation();
		$validation->setRules([
			'title'=>'required',
			'intro'=>'required',
			'content'=>'required|min_length[50]',
			'category'=>'required'
		],
		[
			'title'=>[
				'required'=>'The is required, please check it'
			],
			'intro'=>[
				'required'=>'The is required, please check it'
			],
			'content'=>[
				'required'=>'The is required, please check it',
				'min_length'=>'Min 50 characters please'
			],
			'category'=>[
				'required'=>'The is required, please check it'
			],
		]);
		/*
		,
			'banner'=>'max_dims[200, 200]'
		*/
		if($_POST){
			
			if($validation->withRequest($this->request)->run()){
				//form valitation error
				$errors = $validation->getErrors();
				$data['error'] = true;
				print_r($errors);
			}else{
				//form validation success
				//echo "FORM SENT!";
				$file = $this->request->getFile('banner');
				$filename = $file->getRandomName();
				if($file->isValid()){
					//dentro de la carpeta writable
					//$file->move(WRITEPATH."uploads", $filename);
					$file->move(ROOTPATH."public/uploads", $filename);
					$_POST['banner'] = $filename;
					$_POST['slug'] = url_title($_POST['title']);
					$_POST['created_at'] = date('Y-m-d');
					$postmodel->insert($_POST);
				}else{
					echo "Not valid";
				}
				
			}

			
		} 
		return view("uploadPost", $data);
	}

	public function user()
	{
		$model = new UsersModel();
		$id = $model->insert([
			"name"=>"David",
			"username"=>"davidnavarro26",
			"password"=>"12345",
			"role"=>1
		]);
	}

	public function category(){
		return view("categories");
	}

	//no me funciona
	public function loadViews($view=null)
	{
		echo view("includes/header");
		//return view('welcome_message');
		echo view($view);
		echo view("includes/footer.php");
		
	}
	public function template(){
		$parser = \Config\Services::parser();
		$data=[
			'title' => 'My website title',
			'content' => 'lorem ipsum blablabla eiwoiwoer',
			'footer' => 'goodbye!!'
		];
		echo $parser->setData($data)->render('template');
	}
}
