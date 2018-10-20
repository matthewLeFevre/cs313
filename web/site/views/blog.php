<?php

// require_once '../src/standard/article/article_model.php';
// require_once '../src/utilities/db_connect.php';
require_once './head.php';
$indexHead = new Head('Blog');
// $articles = get_articles();

?>
<!DOCTYPE html>
<html lang="en">
<?php echo($indexHead->add()); ?>
<body>
  <main class="grid">
    <section class="col--12 col--sml--8" >
    </section>
    <aside class="col--12 col--sml--4">
      <form class="form" method="" action="">
        <fieldset class="form__field">
          <h3>Search Articles</h3>
        </fieldset>
        <fieldset class="form__field">
          <label class="fomr__lable side">Search</label>
          <input type="text" class="input--text">
        </fieldset>
      </form>
    </aside>
  </main>
</body>
</html>