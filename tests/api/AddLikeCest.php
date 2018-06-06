<?php

use app\models\News;


class AddLikeCest
{

    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function AddLikes(ApiTester $I)
    {
      $a = new News();
      $a -> author = 1;
      $a -> text = text;
      $a -> save();
      $I->sendGET('/news/add-like/35');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseContainsJson([
         'id' => 35,
         'author' => 1,
         'text' => 1,
         'likes' => 1,
         'dislikes' => 0
     ]);
     News::deleteAll();
    }
}
