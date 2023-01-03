<?php include '../app/pages/includes/header.php'; ?>

<?php
  $action   = $url[2] ?? 'view';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo ROOT?>/assets/css/style.css" />
  </head>
  <body>
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="<?php echo ROOT?>/assets/images/pp1.jpg" alt="" />
            <span></span>
          </div>
          <h2><?=user('username')?></h2>

          <ul class="about">
            <li><span>10</span>Saved images</li>
          </ul>

          <div class="Bio">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
              erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
              ligula egestas nulla.
            </p>

            <ul>
              <li><i class="fab fa-twitter"></i></li>
              <i class="fab fa-pinterest"></i>
              <i class="fab fa-facebook"></i>
              <i class="fab fa-dribbble"></i>
            </ul>
            </div>


            </div>
    </div>
          
     
    <form method="post">
        <input  class="btn btn-link" type="submit" name="saveds"
                value="saveds"/>
         
        <input  class="btn btn-link" type="submit" name="comments"
                value="comments"/>
    </form>

    <?php
        if(isset($_POST['saveds'])) {
          include '../app/pages/profile/saveds.php';
                }
        if(isset($_POST['comments'])) {
          include '../app/pages/profile/comments.php';     
           }
    ?>
    
        </div>
  </body>
</html>

<?php include '../app/pages/includes/footer.php'; ?>
