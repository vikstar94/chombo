ALTER TABLE `user_to_user` CHANGE `updated` `updated` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

INSERT INTO `user_to_user` (`id`, `user_id`, `friend_id`, `created`, `updated`) 
VALUES 	(NULL, '3', '2', '2017-06-30 00:00:00', CURRENT_TIMESTAMP),
		(NULL, '3', '5', '2017-06-30 00:00:00', CURRENT_TIMESTAMP),
		(NULL, '2', '3', '2017-06-30 00:00:00', CURRENT_TIMESTAMP), 
		(NULL, '5', '3', '2017-06-30 00:00:00', CURRENT_TIMESTAMP);