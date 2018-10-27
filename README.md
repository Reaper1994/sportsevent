# sportsevent
sports event manager

database name sports
==============================

category table ddl
--------
CREATE TABLE `category` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `category_name` char(50) NOT NULL,
 `del` int(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1


CREATE TABLE `event` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `cat_id` int(11) NOT NULL,
 `name` char(50) NOT NULL,
 `description` varchar(100) NOT NULL,
 `date` datetime NOT NULL,
 `path` varchar(100) NOT NULL,
 `feature` int(1) NOT NULL DEFAULT '0',
 `del` int(1) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `cat_id` (`cat_id`),
 CONSTRAINT `event_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1



event table ddl
-----------------
Db conenction
db_config.php
-----------------

Class page-
class.php

------------------
Login page 
login.php 
authenticate.php
------------------
page to add ,eit and list categores
adminindex.php

------------------
page to add , edit and list events
exentsettings.php


------------------
savecode
save.php

-----------------
image upload code
upload.php

---------------
frontend listing page containing slider and search event code to list events

index-home.php
