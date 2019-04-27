<?php

namespace escola\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Validator;
use escola\Usuario;
use Request;

class UsuariosController extends Controller {

	public function lista() {

		$data['nav_active'] = 'usuarios';

		$data['usuarios'] = Usuario::all();
		return view('painel.Usuarios.listagem', $data);
	}

	public function adicionar() {
		return view('painel.Usuarios.adicionar');
	}

	public function insert() {
		/*
		$usuario = new Usuario();
		$usuario->nome = Request::input('nome');
		$usuario->email = Request::input('email');
		$usuario->senha = Request::input('senha');

		$usuario->save();
		*/
		$params = Request::all();
		$usuario = new Usuario($params);
		$usuario->save();
		return $params;
	}

	public function editar() {

	}

	public function update() {

	}

	public function excluir() {

	}

	public function delete() {

	}
}