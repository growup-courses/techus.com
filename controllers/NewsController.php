<?php

namespace app\controllers;

use yii\rest\ActiveController;
// use app\modules\News;

class NewsController extends ActiveController {
    public $modelClass = 'app\models\News';

    public function actionAddLike($id) {
      News::findOne($id);
      $like = News::maxLike();
      return save(++$like);
    }

    public function actionDisLike($id) {
      News::findOne($id);
    }
}
