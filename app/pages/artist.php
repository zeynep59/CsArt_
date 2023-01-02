
<?php include '../app/pages/includes/header.php'; ?>



<div class="mx-auto col-md-10">

      <div class="row my-2 justify-content-center">

        <?php  
 
          $slug = $url[1] ?? null;

          if($slug)
          {
            $query = "select artists.*,posts.title from artists join posts on artists.post_id = posts.id where artists.slug = :slug limit 1";
            $row = query_row($query, ['slug'=>$slug]);
            
          }

          if(!empty($row))
          { ?>
            
            <div class="col-md-12  d-lg-block d-inline">
            <div class="g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative  d-lg-block d-inline">
              <div class="col-5 d-lg-block d-inline">
                <img class="bd-placeholder-img w-100" width="100%" style="object-fit:scale-down;" src="<?=get_image($row['image'])?>">
              </div>
              <div class="col p-2  d-lg-block d-inline flex-row position-relative">
                <h3 class="mb-0"><?=esc($row['name'])?></h3>
                <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['year']))?></div>
                <p class="card-text mb-auto"><?=nl2br(add_root_to_images($row['info']))?></p>
              </div>

            </div>
          </div>

          <?php 
          }else{
            echo "No items found!";
          }

        ?>

      </div>


</div>


<?php include '../app/pages/includes/footer.php'; ?>

