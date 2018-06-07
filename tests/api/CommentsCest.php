<?php

use app\models\Comments;
use app\models\News;
use Faker\Factory;


class CommentsCest
{
  // public $modelClass = 'app\models\News';

    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function AddComments(ApiTester $I)
    {
      $faker = Factory::create();
      $news = new News();
      $news -> author =  $faker-> firstName;
      $news -> text = $faker -> text;
      $news -> likes = $faker -> randomDigit;
      $news -> dislikes = $faker -> randomDigit;
      // $news -> save();
      $comment = new Comments();
      $comment -> name =  $faker-> firstName;
      $comment -> comment_text = $faker -> text;
      $comment -> news_id = $news -> id;
      $comment -> save();
      $I -> sendPOST('/comments/add-comments/' . $news -> id);
      $I -> seeResponseCodeIs(200);
      $I -> seeResponseIsJson();
      $I -> seeResponseContainsJson([
         'id' => $comment->id,
     ]);
     News::deleteAll();
    }
}
