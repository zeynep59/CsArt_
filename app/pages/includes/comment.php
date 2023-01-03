
<div class="col-md-6">
<a >
        <h3 class="mb-0"><?=esc($row['comment'])?></h3>
      </a>
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    
  <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-primary"><?=esc($row['year'] ?? 'Unknown')?></strong>
      
      <a href="<?=ROOT?>/comment/<?=$row['slug']?>">
        <h3 class="mb-0"><?=esc($row['artist'])?></h3>
      </a>

      <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
      <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="stretched-link">Continue reading..</a>
      <h6 class="mb-0"><?=esc($row['title'])?></h6>

    </div>

   

  

  </div>
</div>