<?php
 $user_id = user("id");
 $date = date("M-Y");
 $data['user_id'] = $user_id;
 $data['date'] = $date;
 $query2 = "insert into logins (user_id,date) values (:user_id,:date)";
 query($query2, $data);
 ?>
   
   <?php include '../app/pages/includes/header.php'; ?>

<h3 class="mx-4">Featured</h3>

  <div class="row my-2 justify-content-center">

    <?php  

      $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
      $rows = query($query);
      if($rows)
      {
        foreach ($rows as $row) {
          include '../app/pages/includes/post-card.php';
        }

      }else{
        echo "No items found!";
      }

    ?>

  </div>

  <?php include '../app/pages/includes/footer.php'; ?>
