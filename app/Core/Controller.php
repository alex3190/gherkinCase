<?php
namespace Core;

class Controller 
{
    public function repository($repository) {
        require_once '../app/Repository/' . $repository .'.php';
        $repositoryNameToCall = '\Repository\\' .$repository;

        return $repositoryNameToCall::getInstance();
    }

	public function model($model) {
		require_once '../app/Model/' . $model . '.php';
		$modelNameToCall = '\Model\\' .$model;

		return new $modelNameToCall();
	}

	public function view($view, $data = NULL) {
		require_once '../app/View/' . $view  . '.html.twig';
	}

}