<div class="col-md-6">
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      
      <a href="<?=ROOT?>/artist/<?=$row['slug']?>">
        <h5 class="mb-0"><?=esc($row['name'])?></h5>
      </a>

      <a href="<?=ROOT?>/artist/<?=$row['slug']?>" class="stretched-link">Continue reading..</a>
      <a class="mb-0"><?=esc($row['year'])?></a>

    </div>

    <div class="col-lg-5 col-12 d-lg-block">
      <a href="<?=ROOT?>/artist/<?=$row['slug']?>">
        <img class="bd-placeholder-img w-100" width="200" height="250" style="object-fit:scale-down;" src="<?=get_image($row['image'])?>">
      </a>
    </div>

  </div>
</div>