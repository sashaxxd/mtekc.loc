<?php


namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
    public function actionIndex()
    {

        $this->setMeta('Магазин Мтекс');

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $sale = Product::find()->where(['sale' => '1'])->limit(6)->all();

        return $this->render('index', [
            'hits' => $hits,
            'sale' => $sale,
        ]);
    }

    public function actionView($id)
    {

        $category = Category::findOne($id);

        $this->setMeta('Магазин Мтекс | ' . $category->name, $category->keywords, $category->description);

        $id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $products  = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('view', [
            'products' => $products,
            'category' => $category,
        ]);
    }

}