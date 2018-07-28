<?php

class homeController extends controller {

	public function index(){
		$u = new Usuarios();

		$dados = array(
				'nome' => $u->getUser()
			);
		$this->loadTemplate('home', $dados);
	}
}
