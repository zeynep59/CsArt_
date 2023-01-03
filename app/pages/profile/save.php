<?php

$user_id = user("id");
$post_id = "1";

$data = [];
$data['user_id'] = user("id");
$data['post_id']    = $_GET['id'];
$query = "insert into saveds (user_id, post_id) values (:user_id,:post_id)";

query($query, $data);
redirect('profile/save');



?>

</div>
