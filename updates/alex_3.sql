CREATE TABLE `items_to_parts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL,
	`part_type` varchar(50) NOT NULL,
	`part_id` int(11) NOT NULL,
	`integrated` varchar(50) NOT NULL
);

ALTER TABLE `chombos` 
ADD `custom` varchar(50) NOT NULL;

ALTER TABLE `item_sensors`
DROP COLUMN `item_id`;

ALTER TABLE `item_actuators`
DROP COLUMN `item_id`;

ALTER TABLE `items`
ADD `max_parts` int(11) NOT NULL,
ADD `short_description` text NOT NULL;
