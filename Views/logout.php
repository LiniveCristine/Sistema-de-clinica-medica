<?php

    defined('CONTROL') or die("acesso teste");

    session_destroy();

    header('location: ?rota=login');
?>