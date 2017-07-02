INSERT INTO `access_levels` (`name`, `description`) VALUES ('Owner', 'The owner of the Chombo');

UPDATE `user_to_chombo` 
	SET `access_level_id` = (SELECT `id` FROM `access_levels` WHERE `name` = 'Owner') 
WHERE `owner` = 1;

INSERT INTO `permissions` (`name`, `description`, `access_level_id`)
VALUES 	('edit', 'access to the chombo\'s edit page', '3'),
		('change_permissions', 'access to the Chombo\'s change permissions page', (SELECT `id` FROM `access_levels` WHERE `name` = 'Owner')),
		('view_charts', 'can monitor data charts', '1'),
		('view_camera', 'can view the camera', '1'),
		('view_characteristics', 'can see the Chmbo\s characteristics', '1'),
		('control_movement', 'can move the Chombo', '2'),
		('control_watering', 'can activate the watering', '2'),
		('control_light', 'can toggle the lights', '2');