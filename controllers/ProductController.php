<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.07.2017
 * Time: 17:45
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{

    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
//      $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); //Жадная загрузка
         return $this->render('view');
    }

}