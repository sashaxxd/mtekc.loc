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
        $this->layout = false;
//        $session->destroy();
//        Debug($session['cart']);
//        Debug($session['cart.qty']);
//        Debug($session['cart.sum']);
//        Debug($product); die();
        return $this->render('cart-modal',[
           'session' => $session,
        ]);
    }

}