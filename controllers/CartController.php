<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 22.07.2017
 * Time: 16:43
 */

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends  AppController
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
         $product = Product::findOne($id);
        if(empty($product)){
            return false;
        }
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
//        Debug($product); die();
//        return $this->render('add',[
//           'id' => $id,
//        ]);
    }

}