<div class="col-md-6">
    <div style="display:inline-flex; "class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <h6 style="display:inline" class="mb-4 mt-4 mx-2"><?=esc($row['comment'])?></h6>
        <div style=" display:inline-block; margin-left:5rem; background-color:#fae0e4; max-width:280px;" class="row g-0 border rounded overflow-hidden flex-md-row mx-4 mb-4 shadow-sm h-md-150 position-relative">

            <div  class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?=esc($row['year'] ?? 'Unknown')?></strong>

                <a href="<?=ROOT?>/comment/<?=$row['slug']?>">
                    <a class="mb-0"><?=esc($row['artist'])?></a>
                </a>

                <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="stretched-link">Continue reading..</a>
                <h6 class="mb-0"><?=esc($row['title'])?></h6>

            </div>



        </div>


    </div>
</div>