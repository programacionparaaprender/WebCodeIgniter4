<?php

namespace App\Controllers;

class Contacto extends BaseController
{
	public function index()
	{
		//$data['nombre'] = 'Joel';
		//$this->loal->model("m_contacto");
		$contacModel = model('App\Models\m_contacto');
		$listado = $contacModel->findAll();
		//$listado = $this->M_Contacto->get_todos();
		if(empty($listado)){
			echo 'Sin contactos';
		}else{
			echo 'Tienes contactos';
		}
		//return view('contacto', $listado);
	}
}
