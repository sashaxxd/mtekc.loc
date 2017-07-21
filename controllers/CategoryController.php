<?php


namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex(){

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $sale = Product::find()->where(['sale' => '1'])->limit(6)->all();
         return $this->render('index',[
                   'hits' => $hits,
                    'sale' => $sale,
         ]);
    }

    public function actionView($id){

          $id = Yii::$app->request->get('id');
          $products = Product::find()->where(['category_id' => $id])->all();
//        Debug($id);die;
          return $this->render('view',[
                   'products' => $products,
          ]);
    }
    
}