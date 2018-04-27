CREATE TABLE `ca_provinces_fr` (
    `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 255 ) NOT NULL ,
    `iso` CHAR( 2 ) NOT NULL
);
 
INSERT INTO `ca_provinces_fr` (`id`, `name`, `iso`)
VALUES 
    (NULL, 'Alberta', 'AB'),
    (NULL, 'Colombie-Britannique', 'BC'),
    (NULL, 'Manitoba', 'MB'),
    (NULL, 'Nouveau-Brunswick', 'NB'),
    (NULL, 'Terre-Neuve-et-Labrador', 'NL'),
    (NULL, 'Territoires du Nord-Ouest', 'NT'),
    (NULL, 'Nouvelle-Écosse', 'NS'),
    (NULL, 'Nunavut', 'NU'),
    (NULL, 'Ontario', 'ON'),
    (NULL, 'Île-du-Prince-Édouard', 'PE'),
    (NULL, 'Quebec', 'QC'),
    (NULL, 'Saskatchewan', 'SK'),
    (NULL, 'Yukon', 'YT');

CREATE TABLE `ca_provinces_en_ca` (
    `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 255 ) NOT NULL ,
    `iso` CHAR( 2 ) NOT NULL
);
 
INSERT INTO `ca_provinces_en_ca` (`id`, `name`, `iso`)
VALUES 
    (NULL, 'Alberta', 'AB'),
    (NULL, 'British Columbia', 'BC'),
    (NULL, 'Manitoba', 'MB'),
    (NULL, 'New Brunswick', 'NB'),
    (NULL, 'Newfoundland and Labrador', 'NL'),
    (NULL, 'Northwest Territories', 'NT'),
    (NULL, 'Nova Scotia', 'NS'),
    (NULL, 'Nunavut', 'NU'),
    (NULL, 'Ontario', 'ON'),
    (NULL, 'Prince Edward Island', 'PE'),
    (NULL, 'Quebec', 'QC'),
    (NULL, 'Saskatchewan', 'SK'),
    (NULL, 'Yukon', 'YT');