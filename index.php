<?php include 'header.php' ?>

<main> 
  <div class="wrapper-main">
    <section class="section-default">
      <?php if(isset($_SESSION['userid'])){
        echo "<h2>You are logged in!</h2>";
      } 
      else {
        echo "<h2>You are logged out!!!</h2>";
      }
      ?>
    </section>
  </div>
</main>

<?php include 'footer.php' ?>  

