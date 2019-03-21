<?php

require_once('config.php');
include 'templates/admin-header.php';
session_start();

is_logged_in('admin', 'Please log in to view that page');?>




<?php
  include('templates/log-template.php');
 ?>




<?php include 'footer.php'; ?>
