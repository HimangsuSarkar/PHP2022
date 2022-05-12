<?php

session_start();

session_destroy();

header('Location: /php2022/13_sessions.php');