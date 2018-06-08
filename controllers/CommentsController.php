<?php

namespace app\controllers;

use app\models\Comments;
use app\models\News;
use yii\rest\ActiveController;

class CommentsController extends ActiveController {
  public $modelClass = 'app\models\Comments';

}
