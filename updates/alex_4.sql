UPDATE `item_actuators` SET `name` = 'left_wheel_1' WHERE `item_actuators`.`id` = 1; 
UPDATE `item_actuators` SET `name` = 'right_wheel_1' WHERE `item_actuators`.`id` = 2; 
UPDATE `item_actuators` SET `name` = 'water_input_1' WHERE `item_actuators`.`id` = 3; 
UPDATE `item_actuators` SET `name` = 'water_output_1' WHERE `item_actuators`.`id` = 4; 
UPDATE `item_actuators` SET `name` = 'lamp_1' WHERE `item_actuators`.`id` = 5;

ALTER TABLE `item_actuators`
MODIFY COLUMN `status` varchar(20) NOT NULL default 'inactive';

INSERT into `item_actuators` (`name`,`initial_value`,`min_value`,`max_value`,`accuracy`,`model`)
values ("left_wheel_2", "0", "-20", "20", 1, "Left Wheel 2.0"),
	   ("right_wheel_2", "0", "-20", "20", 1, "Right Wheel 2.0"),
	   ("water_input_2", "0", "0", "1", 1, "Water Input 2.0"),
	   ("water_output_2", "0", "0", "1", 1, "Water Pump 2.0"),
	   ("lamp_2", "0", "0", "1", 1, "LED Lamp 2.0");

INSERT into `item_actuators` (`name`,`initial_value`,`min_value`,`max_value`,`accuracy`,`model`)
values ("left_wheel_3", "0", "-20", "20", 1, "Left Wheel 3.0"),
	   ("right_wheel_3", "0", "-20", "20", 1, "Right Wheel 3.0"),
	   ("water_input_3", "0", "0", "1", 1, "Water Input 3.0"),
	   ("water_output_3", "0", "0", "1", 1, "Water Pump 3.0"),
	   ("lamp_3", "0", "0", "1", 1, "LED Lamp 3.0");

	   
UPDATE `item_sensors` SET `name` = 'humidity_sensor_1' WHERE `item_sensors`.`id` = 1; 
UPDATE `item_sensors` SET `name` = 'light_sensor_1' WHERE `item_sensors`.`id` = 2; 
UPDATE `item_sensors` SET `name` = 'gps_1' WHERE `item_sensors`.`id` = 3; 
UPDATE `item_sensors` SET `name` = 'polution_sensor_1' WHERE `item_sensors`.`id` = 4; 

INSERT into `item_sensors` (`name`,`min_value`,`max_value`,`accuracy`,`model`)
values ("humidity_sensor_2", "10", "-80", "0.1", "HS 2.0"),
	   ("light_sensor_2", "0", "100", "0.1", "LS 2.0"),
	   ("gps_2", "NULL", "NULL", "NULL", "GPS 2.0"),
	   ("polution_sensor_2", "0", "80", "0.1", "PS 2.0");

INSERT into `item_sensors` (`name`,`min_value`,`max_value`,`accuracy`,`model`)
values ("humidity_sensor_3", "10", "-80", "0.1", "HS 3.0"),
	   ("light_sensor_3", "0", "100", "0.1", "LS 3.0"),
	   ("gps_3", "NULL", "NULL", "NULL", "GPS 3.0"),
	   ("polution_sensor_3", "0", "80", "0.1", "PS 3.0");



