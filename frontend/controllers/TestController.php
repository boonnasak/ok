<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        //echo 'Test Test Test';
        $a = 5;
        $b = 10;
        $s = $a + $b;
        $para = ['A'=>5,'B' =>$b,'C' =>$s];
        return $this->render('test1',$para);
    }
    
      public function actionTest2($name=null,$lname=null) {
        //echo 'Test Test Test';
   
       $info = "My name is ".$name.' ' .$lname;
       return $this->render('test2',['info' => $info]);
    }

}
