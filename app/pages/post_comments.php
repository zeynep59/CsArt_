<div class="mx-auto col-md-10">

      <div class="row my-2 justify-content-center">

        <?php  

          $limit = 10;
          $offset = ($PAGE['page_number'] - 1) * $limit;
          $query = "select users.*, comments.comment from posts join comments on comments.post_id = users.id where comments.post_id = posts.id order by id desc limit $limit offset $offset";
          $rows = query($query);
          if($rows)
          {
            foreach ($rows as $row) {
              include '../app/pages/includes/comment_card.php';
            }

          }else{
            echo "No items found!";
          }

        ?>

      </div>