<?php

use app\models\News;
use Faker\Factory;


class NewsCest
{
  // public $modelClass = 'app\models\News';

    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function AddLikes(ApiTester $I)
    {
      $faker = Factory::create();
      $a = new News();
      $a -> author =  $faker-> firstName;
      $a -> text = $faker -> text;
      $a -> likes = $faker -> randomDigit;
      $a -> dislikes = $faker -> randomDigit;
      $a -> save();
      $I -> sendGET('/news/add-like/' . $a->id);
      $I -> seeResponseCodeIs(200);
      $I -> seeResponseIsJson();
      $I -> seeResponseContainsJson([
         'likes' => $a->likes +1,
     ]);
     News::deleteAll();
    }

    public function AddDislikes(ApiTester $I)
    {
      $faker = Factory::create();
      $a = new News();
      $a -> author =  $faker-> firstName;
      $a -> text = $faker -> text;
      $a -> likes = $faker -> randomDigit;
      $a -> dislikes = $faker -> randomDigit;
      $a -> save();
      $I -> sendGET('/news/add-dislike/' . $a->id);
      $I -> seeResponseCodeIs(200);
      $I -> seeResponseIsJson();
      $I -> seeResponseContainsJson([
         'dislikes' => $a->dislikes +1,
     ]);
     News::deleteAll();
    }

    public function Show(ApiTester $I)
    {
      $faker = Factory::create();
      $a = new News();
      $a -> author =  $faker-> firstName;
      $a -> text = $faker -> text;
      $a -> likes = $faker -> randomDigit;
      $a -> dislikes = $faker -> randomDigit;
      $a -> save();
      $I -> sendGET('/news/' . $a->id);
      $I -> seeResponseCodeIs(200);
      $I -> seeResponseIsJson();
      $I -> seeResponseContainsJson([
         'id' => $a -> id,
         'author' => $a -> author,
         'text' => $a -> text,
         'likes' => $a -> likes,
         'dislikes' => $a -> dislikes
     ]);
     News::deleteAll();
    }

    public function Index(ApiTester $I)
    {
      $faker = Factory::create();
      $a = new News();
      $a -> author =  $faker-> firstName;
      $a -> text = $faker -> text;
      $a -> likes = $faker -> randomDigit;
      $a -> dislikes = $faker -> randomDigit;
      $a -> save();
      $I -> sendGET('/news');
      $I -> seeResponseCodeIs(200);
      $I -> seeResponseIsJson();
      $I -> seeResponseContainsJson([
         'id' => $a -> id,
         'author' => $a -> author,
         'text' => $a -> text,
         'likes' => $a -> likes,
         'dislikes' => $a -> dislikes
     ]);
     News::deleteAll();
    }
}
