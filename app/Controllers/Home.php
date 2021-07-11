<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\PostsModel;
use App\Models\CategoriesModel;


class Home extends BaseController
{
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

	public function uploadPost(){
		if($_POST){
			$file = $this->request->getFile('banner');
			$filename = $file->getRandomName();
			if($file->isValid()){
				//dentro de la carpeta writable
				$file->move(WRITEPATH."uploads", $filename);
			}else{
				echo "Not valid";
			}
		}
		return view("uploadPost");
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
