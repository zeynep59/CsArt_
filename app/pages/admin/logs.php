<?php if(true)?>
    <div class="header">
        <h4> Logged in Users </h4>
    </div>
    <div class="table-responsive">
    <table class="table">
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date</th>

        </tr>

        <?php
            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;
            $query = "select users.*, logins.date from logins join users on logins.user_id = users.id order by id desc limit $limit offset $offset";
            $rows = query(($query));
        ?>


        <?php if(!empty($rows)):?>
        <?php foreach($rows as $row):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=esc($row['username'])?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['role']?></td>
            <td><?=date("jS M, Y", strtotime($row['date']))?></td>


        </tr>
        <?php endforeach;?>
        <?php endif;?>

    </table>
    </div>

    <div class="col-md-12 mb-4">
        <a href="<?=$PAGE['first_link']?>">
            <button class="btn btn-primary">First Page </button>
        </a>
        <a href="<?=$PAGE['prev_link']?>">
            <button class="btn btn-primary">Prev Page </button>
        </a>
        <a href="<?=$PAGE['next_link']?>">
            <button class="btn btn-primary float-end">Next Page </button>
        </a>
    </div>
</div>



