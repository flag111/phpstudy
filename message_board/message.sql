create database message_borad; 

use message_borad; 

CREATE TABLE `message` ( 
`id` tinyint(1) NOT NULL auto_increment, 
`user` varchar(25) NOT NULL, 
`title` varchar(50) NOT NULL, 
`content` tinytext NOT NULL, 
`lastdate` date NOT NULL, 
PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf-8; 
