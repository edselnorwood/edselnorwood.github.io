<?php
    mail('youremail@example.com', $_POST['email'], $_POST['name'], $_POST['subject'], $_POST['message']);
?>