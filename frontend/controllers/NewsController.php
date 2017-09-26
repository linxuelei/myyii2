<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\News;


/**
 * News controller
 */
class NewsController extends Controller
{
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $query = News::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $News = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'News' => $News,
            'pagination' => $pagination
        ]);
    }

}
