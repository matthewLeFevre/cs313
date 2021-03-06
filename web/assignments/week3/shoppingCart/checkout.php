<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://raw.githack.com/matthewLeFevre/css-patterns/feature_grid/dist/main.css">
  <link rel="stylesheet" href="./style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
  <title>Checkout</title>
</head>
<body class="grid">
  <header class="col--12 grid--nested header">
    <div class="logo__wrapper col--5">
      <span class="mdm">Easy Shopping</span>
    </div>
    <nav class="col--7 nav">
      <ul class="nav__list">
        <li class="nav__item" >
          <a  class="nav__link txt-blue" href="./controller.php?action=viewCart">
            <i class="fas fa-shopping-cart"></i>
            <span class="tiny">Your Cart</span>
          </a>
        </li>
        <li class="nav__item" >
          <a  class="nav__link txt-blue" href="./index.php">
            <i class="fas fa-th"></i>
            <span class="tiny">Catalog</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="col--6 product-catalog">
    <?php foreach($_SESSION['items'] as $index=>$item ) {?>
      <div class="product__wrapper cart__item">
        <p><?= $item['product']?></p>
        <p>Quantity: <?= $item['quantity']?></p>
        <p>Price: $<?= $item['cost'] ?></p>
        <form action='controller.php' method="POST">
          <input type="hidden" name="itemLocation" value=<?= $index ?> >
          <input type='hidden' name="action" value="removeItem" />
          <button type="submit" class="btn danger">Remove from cart</button>
        </form>
      </div>
    <?php }?>

    <?php 
      $totalCost = 0;
      foreach($_SESSION['items'] as $item) {
        $totalCost += (int)$item['cost'];
      }
      echo "<h2> Total: $ $totalCost</h2>"
    ?>
    
  </div>
  <div class="col--6">
    <form action="controller.php" method="POST">
      <fieldset class="form__field">
        <label class="form__label tiny" for="name">Full Name</label>
        <input class="input--text initial full" type="text" name="name">
      </fieldset>
      <fieldset class="form__field">
        <label class="form__label tiny" for="address">Full Address</label>
        <input class="input--text initial full" type="text" name="address">
      </fieldset>
      <fieldset class="form__field">
        <input type="hidden" name="action" value="confirm">
        <?php
          if(!empty($_SESSION['items'])) {
            echo "<button type='submit' class='breath btn success main'>Confirm Order</button>";
          }
        ?>
      </fieldset>
    </form>
  </div>
</body>
</html>