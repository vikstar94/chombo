CREATE TABLE `items_to_parts` (
	`id` int(11)  NOT NULL,
	`item_id` int(11) NOT NULL,
	`part_type` varchar(50) NOT NULL,
	`part_id` int(11) NOT NULL,
	`integrated` varchar(50) NOT NULL
);

ALTER TABLE `items_to_parts`
	ADD PRIMARY KEY (`id`);

ALTER TABLE `items_to_parts`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `chombos` 
ADD `custom` varchar(50) NOT NULL;

ALTER TABLE `item_sensors`
DROP COLUMN `item_id`;

ALTER TABLE `item_actuators`
DROP COLUMN `item_id`;

ALTER TABLE `items`
ADD `max_parts` int(11) NOT NULL;

ALTER TABLE `items`
ADD `short_description` text NOT NULL;
