Task Scheduler -> Create Task -> MySQL Backup -> 
Trigggers->On a Schedule -> Daily Start: Time, Recurr every 1, Enabled

Actions: Program /script: C:\xampp\php\php.exe
Add arguments: -f C:\xampp\htdocs\mysql_auto_backup\mysql_auto_backup.php
//this is the file location

Conditions: Check start the task only if the computer is on AC power

Settings: check allow the task to be run on demand



