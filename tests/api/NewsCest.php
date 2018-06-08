<?php
use app\models\News;
use Faker\Factory;

class NewsCest {

  public function AddLikes(ApiTester $I)
  {
    $faker = Factory::create();
    $news = new News();
    $news -> author =  $faker-> firstName;
    $news -> text = $faker -> text;
    $news -> likes = $faker -> randomDigit;
    $news -> dislikes = $faker -> randomDigit;
    $news -> save();
    $I -> sendGET('/news/add-like/' . $news->id);
    $I -> seeResponseCodeIs(200);
    $I -> seeResponseIsJson();
    $I -> seeResponseContainsJson([
      'likes' => $news->likes +1,
    ]);
    News::deleteAll();
  }

  public function AddDislikes(ApiTester $I)
  {
    $faker = Factory::create();
    $news = new News();
    $news -> author =  $faker-> firstName;
    $news -> text = $faker -> text;
    $news -> likes = $faker -> randomDigit;
    $news -> dislikes = $faker -> randomDigit;
    $news -> save();
    $I -> sendGET('/news/add-dislike/' . $news->id);
    $I -> seeResponseCodeIs(200);
    $I -> seeResponseIsJson();
    $I -> seeResponseContainsJson([
      'dislikes' => $news->dislikes +1,
    ]);
    News::deleteAll();
  }

  public function Show(ApiTester $I)
  {
    $faker = Factory::create();
    $news = new News();
    $news -> author =  $faker-> firstName;
    $news -> text = $faker -> text;
    $news -> likes = $faker -> randomDigit;
    $news -> dislikes = $faker -> randomDigit;
    $news -> save();
    $I -> sendGET('/news/' . $news->id);
    $I -> seeResponseCodeIs(200);
    $I -> seeResponseIsJson();
    $I -> seeResponseContainsJson([
    'id' => $news -> id,
    'author' => $news -> author,
    'text' => $news -> text,
    'likes' => $news -> likes,
    'dislikes' => $news -> dislikes
    ]);
    News::deleteAll();
  }

  public function Index(ApiTester $I)
  {
    $faker = Factory::create();
    $news = new News();
    $news -> author =  $faker-> firstName;
    $news -> text = $faker -> text;
    $news -> likes = $faker -> randomDigit;
    $news -> dislikes = $faker -> randomDigit;
    $news -> save();
    $I -> sendGET('/news');
    $I -> seeResponseCodeIs(200);
    $I -> seeResponseIsJson();
    $I -> seeResponseContainsJson([
    'id' => $news -> id,
    'author' => $news -> author,
    'text' => $news -> text,
    'likes' => $news -> likes,
    'dislikes' => $news -> dislikes
    ]);
    News::deleteAll();
  }
}
