<?php
if(!empty($_GET["id"])):
    $user = new \assignment1\User();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: ?route=users");// dieu huong tro lai trang danh sach
endif;
