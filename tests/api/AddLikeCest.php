<?php


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
      $I->sendGET('/news/add-like/1');
      $I->seeResponseCodeIs(200);
      $I->seeResponseIsJson();
      $I->seeResponseContainsJson([
         'id' => 1,
         'author' => 'ivan',
         'text' => 'ivan',
         'likes' => 54,
         'dislikes' => 16
     ]);
    }
}
