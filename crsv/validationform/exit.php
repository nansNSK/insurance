<?php
    setcookie('user', $user['name'], time() + 86400, "/crsv/");
    header('Location: /crsv/');
?>