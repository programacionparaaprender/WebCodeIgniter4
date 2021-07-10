<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		return view('index');
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
