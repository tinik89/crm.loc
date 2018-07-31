<?php
/**
 * Created by IDEA.
 * User: TIN
 * Date: 11.07.2018
 * Time: 18:05:40
 * To change this template use File | Settings | File Templates.
 */
namespace app\controllers;

class LoginController extends AppController {
    public $layout = 'login'; 

    public function actionIndex() {
        $this->view->title = 'Pushkin CRM!';
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'']);
        return $this->render('index');
    }
}
