#! /bin/bash
php drop_db.php > /dev/null
php create_db.php > /dev/null
php create_tables.php
exit 0
