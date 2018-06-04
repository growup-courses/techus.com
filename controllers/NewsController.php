<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\News;

class NewsController extends ActiveController {
    public $modelClass = 'app\models\News';

    public function actionAddLike($id) {
      $news = News::findOne($id);
      $news->updateCounters(['likes'=>1]);
      return $news;
    }

    public function actionDisLike($id) {
      $news = News::findOne($id);
      $news->updateCounters(['dislikes'=>1]);
      return $news;
    }
  }
