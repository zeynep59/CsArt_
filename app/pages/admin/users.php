<?php if($action == 'add'):?>
<div class="col-md-6 mt-5 max-auto" >
    <form method="post">
        <h1 class="h3 mb-3 fw-normal">Create Account</h1>

        <?php if (!empty($errors)):?>
        <div class="alert alert-danger">Please fix the errors below</div>
        <?php endif;?>

        <div class="form-floating">
            <input value="<?=old_value('username')?>" name="username" type="text" class="form-control mb-2"
                id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
        <?php if(!empty($errors['username'])):?>
        <div class="text-danger"><?=$errors['username']?></div>
        <?php endif;?>

        <div class="form-floating">
            <input value="<?=old_value('email')?>" name="email" type="email" class="form-control mb-2"
                id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <?php if(!empty($errors['email'])):?>
        <div class="text-danger"><?=$errors['email']?></div>
        <?php endif;?>
        

        <div class="form-floating">
            <input value="<?=old_value('password')?>" name="password" type="password" class="form-control  mb-2"
                id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <?php if(!empty($errors['password'])):?>
        <div class="text-danger"><?=$errors['password']?></div>
        <?php endif;?>

        <div class="form-floating">
            <input value="<?=old_value('retype_password')?>" name="retype_password" type="password"
                class="form-control  mb-2" id="floatingPassword" placeholder="Retype Password">
            <label for="floatingPassword">Password</label>
        </div>
  

        <button class="mt-4 w-100 btn btn-lg btn-primary" type="submit">Add User</button>
        <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("M-Y")?></p>
    </form>
</div>

<?php elseif($action == 'edit'):?>
<?php elseif($action == 'delete'):?>
<?php else:?>



<h4>Users
    <a href="<?=ROOT?>/admin/users/add">
        <button class="btn btn-primary">Add New</button>
    </a>
</h4>

<div class="table-responsive">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Date</th>
            <th>Action</th>

        </tr>

        <?php
            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;
            $query = "select * from users order by id desc limit $limit offset $offset";
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
            <td>
                <a href="<?=ROOT?>/admin/users/edit/<?=$row['id']?>">
                    <button class="btn btn-info text-white btn-sm"> <i class="bi bi-pencil-square"></i></button>
                </a>
                <a href="<?=ROOT?>/admin/users/delete/<?=$row['id']?>">
                    <button class="btn btn-danger btn-sm"> <i class="bi bi-trash-fill"></i></button>
                </a>

            </td>

        </tr>
        <?php endforeach;?>
        <?php endif;?>

    </table>
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

<?php endif;?>