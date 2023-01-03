<div class="col-md-6 mb-4 mt-4">

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <h6 class="mb-0"><?=$row['username']?></h6>
        <a style="display:inline; text-decoration:none; text-color:gray;" class="d-inline-block mb-2 text-primary"><?=esc($row['date'] ?? 'Unknown')?></a>

    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">

            <a>
                <a style="text-decoration:none; text-color:black; background-color:#e6e8e6;"class="mb-0"><?=esc($row['comment'])?></a>
            </a>


        </div>
</div>
    </div>
</div>