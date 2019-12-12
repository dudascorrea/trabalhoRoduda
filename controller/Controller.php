<?php

include_once("model/Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke($acao = 'home') {
        $reslt = $this->model->getLogin();
        // Chama a funcao getLogin() da classe Model
        // e armazena o valor de retorno dessa funcao
        // na variavel reslt.
        switch ($acao) {
            case 'home':
                $this->showConteudoInicialView();
                break;
            case 'login':
                $this->showTelaLoginView();
                break;
            case 'telanova':
                $this->showTelaEduView();
                break;
          case 'telaroberta':
		$this->showtelaRoView();
		break;

            case 'logout':
                $this->showTelaDeLogoutView();
                break;
        }
    }
    
    private function showConteudoInicialView(){
        include 'view/conteudoInicialView.php';
    }
    
    private function showTelaLoginView(){
        include 'view/telaLoginView.php';
    }
    
    private function showTelaEduView(){
        include 'view/edu.php';
    }
private function showtelaRoView(){
	include 'view/robertaEduarda.php';
}
    
    private function showTelaDeLogoutView(){
        $custom = "ahahaha"; //mysql_
        include 'view/telaLogoutView.php';
    }
    
    
}

?>
