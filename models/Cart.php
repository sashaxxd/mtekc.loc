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
       public function addToCart($product, $qty = 1){
              echo 'Ебашит';
       }
}