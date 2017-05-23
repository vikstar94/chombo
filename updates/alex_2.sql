ALTER TABLE `chombos` 
ADD `status` varchar(50) NOT NULL;

UPDATE `chombos` set `status` = 'inactive';