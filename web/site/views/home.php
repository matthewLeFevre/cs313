<?php 
  include '/app/web/site/library/include.php';
  $indexHead = new Head('Home');
?>
<!DOCTYPE html>
<html lang="en">

<?php echo($indexHead->add()); ?>

<body>

  <?php include './header.php' ?>

  <main class="grid--padded">
    <section class="home__container col--12 col--sml--7 col--mdm--8 bg-blue">
      <?= test(); ?>
    </section>
    <aside class="account__container col--12 col--sml--5 col--mdm--4 bg-yellow">
      <form action="../server.php" method="POST" class="form">
        <fieldset class="form__field">
          <h3>Login</h3>
        </fieldset>
        <fieldset class="form__field">
          <label for="email" class="form__label">Email</label>
          <input type="text" name="userEmail" class="input--text">
          <label for="password" class="form__label">Password</label>
          <input type="password" name='userPassword' class="input--text">
          <input type="hidden" name='controller' value="user">
          <input type="hidden" name='action' value='loginUser'>
        </fieldset>
        <fieldset class="form__field">
          <button type="submit" class="btn primary breath">Login</button>
        </fieldset>
      </form>
      
      <form action="../server.php" method="POST" class="form">
        <fieldset class="form__field">
          <h3>Register</h3>
        </fieldset>
        <fieldset class="form__field">
        <label for="email" class="form__label">UserName</label>
          <input type="text" name="userName" class="input--text">
          <label for="email" class="form__label">Email</label>
          <input type="text" name="userEmail" class="input--text">
          <label for="password" class="form__label">Password</label>
          <input type="password" name='userPassword' class="input--text">
          <input type="hidden" name='controller' value="user">
          <input type="hidden" name='action' value='registerUser'>
        </fieldset>
        <fieldset class="form__field">
          <button type="submit" class="btn primary breath">Register</button>
        </fieldset>
      </form>
    </aside>
  </main>

  <?php include './footer.php' ?>

</body>

</html>