<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://raw.githack.com/matthewLeFevre/css-patterns/feature_grid/dist/main.css">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body class="grid">
  <header class="col--12 bg-blue grid--nested">
    <h1 class="txt-white col--12 col--sml--6 col--mdm--4 header__logo">Matthew LeFevre</h1>
    <nav class="col--12 col--sml--6 col--mdm--8 nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a class="nav__link" href="/index.php">Home</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="/assignments.php">Assignments</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="col--12">
    <section class="page__section">
      <h2>Assignments comming soon!</h2>
    </section>
  </main>
  <footer class="col--12">
    <span>Matthew LeFevre &copy; <?php echo date("Y"); ?></span>
  </footer>
</body>
</html>