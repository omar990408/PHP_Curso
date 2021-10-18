<?php
session_start();
echo $_SESSION['numero'];
session_destroy();