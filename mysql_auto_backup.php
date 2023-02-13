<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/11/2022
 * Time: 3:14 PM
 */

$databases = ['billing'];
$user = "waterdistrict";
$pass = "buenawaters";
// $host = "192.168.1.30";
$host = "DESKTOP-V042ABA";
date_default_timezone_set("Asia/Singapore");

if(!file_exists("D:/PublicFiles/db_backups/billingDB")){
    mkdir("D:/PublicFiles/db_backups/billingDB");
}

foreach($databases as $database) {
    if(!file_exists("D:/PublicFiles/db_backups/billingDB/$database"))
    {
        mkdir("D:/PublicFiles/db_backups/billingDB/$database");

    }


    $filename = $database."_".date("F_d_Y")."@".date("g_ia").uniqid("_", false);
    $folder = "D:/PublicFiles/db_backups/billingDB/$database/".$filename.".sql";

    exec("C:/xampp/mysql/bin/mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$folder}", $output);
}

//print_r($output);
