<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://raw.githack.com/matthewLeFevre/css-patterns/feature_grid/dist/main.css">
  <link rel="stylesheet" href="./style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
  <title>Product Catolog</title>
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
  <main class="col--12 product-catalog">
    <div class="product__wrapper">
      <div class="product__img__wrapper">
        <img class="product__img" src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=64a7f5e870e2c0286c20c3f8e5572927&auto=format&fit=crop&w=1050&q=80" alt="Pink headphones">
      </div>
      <form class="product__body" action="controller.php" method="post">
        <h2 class="main">Headphones</h2>
        <p>Price: $15</p>
        <fieldset class="form__field full">
          <label class="form__label tiny side" for="quantity">Quantity</label>
          <input type="number" value="1" name="quantity" class="input--number">
          <input type="hidden" name="product" value="headphones">
          <input type="hidden" name="cost" value="15">
          <input type="hidden" name="action" value="addItems">
        </fieldset>
        <fieldset class="form__field full">
          <button type="submit" class="btn success tiny">Add to cart</button>
        </fieldset>
      </form>
    </div>
    <div class="product__wrapper">
      <div class="product__img__wrapper">
        <img class="product__img" src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cc9d5362a04f451d12a3474bb0dc7111&auto=format&fit=crop&w=1047&q=80" alt="Computer Mouse">
      </div>
      <form class="product__body" action="controller.php" method="post">
        <h2 class="main">Mouse</h2>
        <p>Price: $9</p>
        <fieldset class="form__field full">
          <label class="form__label tiny side" for="quantity">Quantity</label>
          <input type="number" value="1" name="quantity" class="input--number">
          <input type="hidden" name="product" value="mouse">
          <input type="hidden" name="cost" value="9">
          <input type="hidden" name="action" value="addItems">
        </fieldset>
        <fieldset class="form__field full">
          <button type="submit" class="btn success tiny">Add to cart</button>
        </fieldset>
      </form>
    </div>
    <div class="product__wrapper">
      <div class="product__img__wrapper">
        <img class="product__img" src="https://images.unsplash.com/photo-1535449425-adc6f5faa71c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=07e2dc29ec2555c266c00cf232b6f6fa&auto=format&fit=crop&w=967&q=80" alt="watches">
      </div>
      <form class="product__body" action="controller.php" method="post">
        <h2 class="main">Watch</h2>
        <p>Price: $12</p>
        <fieldset class="form__field full">
          <label class="form__label tiny side" for="quantity">Quantity</label>
          <input type="number" value="1" name="quantity" class="input--number">
          <input type="hidden" name="product" value="watch">
          <input type="hidden" name="cost" value="12">
          <input type="hidden" name="action" value="addItems">
        </fieldset>
        <fieldset class="form__field full">
          <button type="submit" class="btn success tiny">Add to cart</button>
        </fieldset>
      </form>
    </div>
  </main>
</body>
</html>