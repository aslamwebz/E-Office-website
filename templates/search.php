<?php

require_once('../config.php');

if (isset($_POST['submit'])) {
    $keyword = sanitize($_POST['keyword']);
    echo $keyword;
    $searchSql = "SELECT * FROM users WHERE username='$keyword'";
    $result = $db->query($searchSql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        echo $user['username'];
        echo $user['email'];
    } else {
        echo ('no result is found');
    }
}

