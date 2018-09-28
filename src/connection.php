<?php

mysqli_report(MYSQLI_REPORT_ERROR);

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME);
