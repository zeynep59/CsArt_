<?php include '../app/pages/includes/header.php'; ?>


<?php
create_tables();
?>

<div class="row my-2 justify-content-center">

<?php  

  $limit = 10;
  $offset = ($PAGE['page_number'] - 1) * $limit;

  $query = "select artists.*,artists.name from artists join posts on artists.post_id = posts.id order by id desc limit $limit offset $offset";
  $rows = query($query);
  if($rows)
  {
    foreach ($rows as $row) {
      include '../app/pages/includes/artist-card.php';
    }

  }else{
    echo "No items found!";
  }

?>

</div>

<div class="col-md-12 mb-4">
    <a href="<?=$PAGE['first_link']?>">
      <button class="btn btn-secondary">First Page</button>
    </a>
    <a href="<?=$PAGE['prev_link']?>">
      <button class="btn btn-secondary">Prev Page</button>
    </a>
    <a href="<?=$PAGE['next_link']?>">
      <button class="btn btn-primary float-end">Next Page</button>
    </a>
  </div>

<?php include '../app/pages/includes/footer.php'; ?>
