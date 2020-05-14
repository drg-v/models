<?php
require "header.php";
$page = $_GET['page'];
$page = strip_tags($page);
require "$page.php";
require "footer.php";