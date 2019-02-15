<?php include 'header.php' ?>

<main> 
  <div class="wrapper-main">
    <section class="section-default">
      <h1 class="text-center">Signup</h1>
      <?php 
        if(isset($_GET['error'])) {
          if($_GET['error'] == "emptyfields") {
            echo '<p>Fill in all fields</p>';
          }
        }

      ?>
      <form class="form-signup text-center" action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwd-repeat" placeholder="Repeat password"><br>
        <button type="submit" name="signup-submit">Signup</button>
      </form>
    </section>
  </div>
</main>

<?php include 'footer.php' ?>  