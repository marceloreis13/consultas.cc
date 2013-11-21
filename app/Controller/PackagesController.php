<?php
/**
 * Static content controller.
 *
 * Este arquivo ira renderizar as visões contidas em views/Packages/
 *
 * PHP 5
 *
 * @copyright     Copyright 2013-2013, Nasza Produtora
 * @link          http://www.nasza.com.br/ Nasza(tm) Project
 * @package       app.Controller
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Este controlador contem regras de negócio aplicadas ao model Group
 *
 * @package       app.Controller
 * @link http://.framework.nasza.com.br/2.0/controller/Packages.html
 */
class PackagesController extends AppController {

	/**
	* Controller name
	*
	* @var string
	*/
	public $name = 'Packages';

	/**
	* Método index
	* Este método contem regras de negocios visualizar todos os registros contidos na entidade do controlador
	*
	* @override Metodo AppController.index
	* @param string $period (Periodo das movimentacoes q serao listadas)
	* @return void
	*/
	public function index($params=array()){
		//@override
		parent::index($params);
	}	

	/**
	* Método edit
	* Este método contem regras de negocios para adicionar e editar registros na base de dados
	*
	* @override Metodo AppController.edit
	* @param string $id
	* @return void
	*/
	public function edit($id=null){	
		//@override
		parent::edit($id);


		$products_active = array();
		if(isset($this->data['Product'])){
			foreach ($this->data['Product'] as $k => $v) {
				$products_active[$k] = (int)$v['id'];
			}
		}
		$this->set(compact('products_active'));
	}
}