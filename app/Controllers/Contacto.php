<?php

namespace App\Controllers;
use App\Models\UsersModel;


class Contacto extends BaseController
{
	public function index()
	{
		$model = new UsersModel();
		$id = $model->insert([
			"name"=>"David",
			"username"=>"davidnavarro26",
			"password"=>"12345",
			"role"=>1
		]);
	}
	public function otroindex()
	{
		//$data['nombre'] = 'Joel';
		//$this->loal->model("m_contacto");
		//$contacModel = model('App\Models\m_contacto');
		//$listado = $contacModel->findAll();
		//$listado = $this->M_Contacto->get_todos();
		/* if(empty($listado)){
			echo 'Sin contactos';
		}else{
			echo 'Tienes contactos';
		} */
		//$this->prueba("echo-slug", 123);
		$data["mydata1"] = "testing1";
		$data["mydata2"] = "testing2";
		return view('form', $data);
	}
	//protected para que sea privada
	public function prueba($slug=null, $id=null){
		//http://localhost/WebCodeIgniter4/public/Contacto/prueba/prueba-slug/123
		echo $slug."<br>";
		echo $id."<br>";
	}
}
