<div class="mx-auto col-md-10">

      <div class="row my-2 justify-content-center">

        <?php  

          $limit = 10;
          $offset = ($PAGE['page_number'] - 1) * $limit;
          $user_id = user('id');
          $query = "select posts.*, comments.comment from posts join comments on comments.post_id = posts.id where comments.user_id = $user_id order by id desc limit $limit offset $offset";
          $rows = query($query);
          if($rows)
          {
            foreach ($rows as $row) {
              include '../app/pages/includes/comment.php';
            }

          }else{
            echo "No items found!";
          }

        ?>

      </div>


  <div class="col-md-12 mb-4">
    <a href="<?=$PAGE['first_link']?>">
      <button class="btn btn-primary">First Page</button>
    </a>
    <a href="<?=$PAGE['prev_link']?>">
      <button class="btn btn-primary">Prev Page</button>
    </a>
    <a href="<?=$PAGE['next_link']?>">
      <button class="btn btn-primary float-end">Next Page</button>
    </a>
  </div>
</div>