CREATE TABLE `db_updates` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`file` varchar(50) NOT NULL,
	`updated_on` datetime NOT NULL
);

ALTER TABLE `db_updates`
	ADD PRIMARY KEY (`id`);