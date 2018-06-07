<?php

namespace app\controllers;

use app\models\Comments;
use app\models\News;
use yii\rest\ActiveController;

class CommentsController extends ActiveController {
  public $modelClass = 'app\models\Comments';

  public function actionAddComment($id)
  {
    $comment = new Comments();
    $comment -> name = 'vanya';
    $comment -> comment_text = 'vanya';
    $comment -> news_id = $id;
    $comment -> save(false);
    // return $comment;
  }
}
