<?php
/**
 * Created by IDEA.
 * User: TIN
 * Date: 31.07.2018
 * Time: 1:23:29
 * To change this template use File | Settings | File Templates.
 */
  namespace app\controllers;

class CrmController extends AppController {
    public $layout = 'crm'; 

    public function actionIndex() {
        $this->view->title = 'Pushkin CRM';
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'']);
        return $this->render('index');
    }
}
