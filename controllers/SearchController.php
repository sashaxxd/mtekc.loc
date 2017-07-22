<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 22.07.2017
 * Time: 15:45
 */

namespace app\controllers;

use app\models\Product;
use Yii;
use yii\data\Pagination;

class SearchController extends AppController
{
    public  function actionIndex()
    {
        $q = Yii::$app->request->get('q');
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $products  = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            'products' => $products,
            'pages' => $pages,
            'q' => $q,

        ]);
    }

}