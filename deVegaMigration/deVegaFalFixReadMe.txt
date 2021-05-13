1. Set proper DB Connection -
 Update file dbConnection.php with DB Name, Passsword and User.

2. Set PID in files  below -
in line no 16
toolBilderextras.php [no error]
toolLayoutkontur.php
toolWerteliste.php
toolProdukt.php

3. Execute these Following Commands for FAL relations -
$ php toolBilderextras.php
$ php toolLayoutkontur.php
$ php toolWerteliste.php
$ php toolProdukt.php

======================================
$ php toolBilderextras.php 
[no error]
$ php toolLayoutkontur.php
[no error]
$ php toolWerteliste.php
[no error]
$ php toolProdukt.php
[no error]
======================================
TO clean up database -

DELETE FROM sys_file WHERE pid = 40 AND tstamp = 123456789;

tx_kbks_bilderextras:
DELETE FROM sys_file_reference WHERE pid = 40 AND sorting = 8888;

tx_kbks_produkt:
DELETE FROM sys_file_reference WHERE pid = 40 AND sorting = 8885;

tx_kbks_werteliste:
DELETE FROM sys_file_reference WHERE pid = 40 AND sorting = 8886;

tx_kbks_layoutkontur:
DELETE FROM sys_file_reference WHERE pid = 40 AND sorting = 8887;