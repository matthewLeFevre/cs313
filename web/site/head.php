<?php
  class Head {
    public function __construct ( $title = 'new page'){
      $this->title = $title;
  }

    public function add() {
      return "<head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv='X-UA-Compatible' content='ie=edge'>
      <link rel='stylesheet' href='https://rawcdn.githack.com/matthewLeFevre/css-patterns/master/dist/main.css'>
      <title>$this->title</title>
    </head>";
    }
  }
?>