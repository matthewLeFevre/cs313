<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://raw.githack.com/matthewLeFevre/css-patterns/feature_grid/dist/main.css">
  <link rel="stylesheet" href="index.css">
  <title>Matthew LeFevre</title>
</head>
<body class="grid">
<?php include $_SERVER['DOCUMENT_ROOT'] . 'header.php' ?>
  <main class="col--12 home">
    <section class="page__section class="page__section__heading"">
      <h2 class="page__section__heading">About Me</h2>
      <p>My name is Matthew I am a web developer. I really enjoy building websites and gaming on my computer. I have a really cute little family with my wife and little baby girl that just turned 1 a few months ago. If you would like to know more about me there are plenty of other places on the internet to go. I have listed a few places down below.</p>
    </section>
    <section class="page__section class="page__section__heading"">
      <h2 class="page__section__heading">Other places you can learn more about me</h2>
      <?= $_SERVER['DOCUMENT_ROOT']; ?>
      <div class="card__container">
        <a href="http://matthew-lefevre.com/" target="_blank" class="tab">
          <h3 class="tab__header">
            Personal Website
          </h3>
          <div class="tab__body">
            <p class="tab__text">
              I have my portfolio as well as an outline of my expereince and education. There are also links to my professional linkedin account and github.
            </p>
          </div>
        </a>
        <a href="https://www.facebook.com/matthew.lefevre.90" target="_blank" class="tab">
          <h3 class="tab__header">
            Facebook
          </h3>
          <div class="tab__body">
            <p class="tab__text">
              If you would like to see some pictures of my family you can visit facebook by clicking on this card.
            </p>
          </div>
        </a>
      </div>
    </section>
  </main>
  <footer class="col--12">
    <span>Matthew LeFevre &copy; <?php echo date("Y"); ?></span>
  </footer>
</body>
</html>