<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 22.07.2017
 * Time: 16:46
 */

namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
       public function addToCart($product, $qty = 0.5){
             if(isset($_SESSION['cart'][$product->id])){
                 $_SESSION['cart'][$product->id]['qty'] += $qty;
             }
           else{
               $_SESSION['cart'][$product->id] =[
                   'qty' => $qty,
                   'name' => $product->name,
                   'article' => $product->article,
                   'price' => $product->price,
                   'img' => $product->img,
               ];
           }
           $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
           $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum']
               + $qty * $product->price : $qty * $product->price;

       }
}