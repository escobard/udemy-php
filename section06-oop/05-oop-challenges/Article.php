<?php

class Article
{
  public $title;
  public $content;
  private bool $published = false;

  public function __construct(string $title, string $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article('test', 'test content');
$article2 = new Article('test', 'test content');
$article2->publish();

echo $article1->isPublished() . '<br>';
echo $article2->isPublished();

// var_dump($article1);
// var_dump($article2);
