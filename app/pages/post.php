
<?php include '../app/pages/includes/header.php'; ?>

<div class="mx-auto col-md-10">

      <div class="row my-2 justify-content-center">

        <?php  
 
          $slug = $url[1] ?? null;

          if($slug)
          {
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
            $row = query_row($query, ['slug'=>$slug]);
            
          }

          if(!empty($row))
          { ?>
            
            <div class="col-md-12">
            <div class="g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
              <div class="col-12 d-lg-block">
                <img class="bd-placeholder-img w-100" width="100%" style="object-fit:cover;" src="<?=get_image($row['image'])?>">
              </div>
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
                <h3 class="mb-0"><?=esc($row['title'])?></h3>
                <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                <p class="card-text mb-auto"><?=nl2br(add_root_to_images($row['content']))?></p>
              </div>

            </div>
          </div>

          <?php 
          }else{
            echo "No items found!";
          }

        ?>

      </div>

      <form method="post">
        <input  class="btn btn-info" type="submit" name="save"
                value="save post"/>
                <br/>
      <textarea placeholder="write comment" value="<?=$_GET['com'] ?? ''?>" class="form-control mb-2 my-4" id="exampleFormControlTextarea1" rows="3" name="comment_area"></textarea>
      <input  class="btn btn-success d-flex" type="submit" name="comments"
                value="submit comment"/>
     
    </form>

    <?php
        if(isset($_POST['save'])) {

          $user_id = user("id");
          $post_id = esc($row['id']);
          $data = [];
          $data['user_id'] = user("id");
          $data['post_id'] = $post_id;
          $query = "insert into saveds (user_id, post_id) values (:user_id,:post_id)";
          
          query($query, $data);
                      }
        if(isset($_POST['comments'])) {
          $find = $_GET['com'] ?? null;
          $user_id = user("id");
          $post_id = esc($row['id']);
          $data = [];
          $data['user_id'] = user("id");
          $data['post_id'] = $post_id;
          $data['comment'] = $find;
          $query = "insert into comments (user_id, post_id, comment) values (:user_id,:post_id, :com)";
          query($query, $data);

        }
    ?>

   
</div>
<?php include '../app/pages/includes/footer.php'; ?>

