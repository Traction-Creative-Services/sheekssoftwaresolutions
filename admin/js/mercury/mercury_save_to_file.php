<?php
die(print_r($_POST));
file_put_contents('save.php',$_POST['content']);
