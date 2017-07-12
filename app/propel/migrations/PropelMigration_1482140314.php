<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1482140314.
 * Generated on 2016-12-19 15:23:34 by deepak
 */
class PropelMigration_1482140314
{

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `Muncha`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `ProductName` VARCHAR(50),
    `Price` VARCHAR(10),
    `OS` VARCHAR(30),
    `RAM` VARCHAR(10),
    `HDD` VARCHAR(10),
    `Processor` VARCHAR(50),
    `graphics` VARCHAR(50),
    `url` VARCHAR(500),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `Kaymu`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `ProductName` VARCHAR(50),
    `Price` VARCHAR(10),
    `OS` VARCHAR(30),
    `RAM` VARCHAR(10),
    `HDD` VARCHAR(10),
    `Processor` VARCHAR(50),
    `graphics` VARCHAR(50),
    `url` VARCHAR(500),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `Sastodeal`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `ProductName` VARCHAR(50),
    `Price` VARCHAR(10),
    `OS` VARCHAR(30),
    `RAM` VARCHAR(10),
    `HDD` VARCHAR(10),
    `Processor` VARCHAR(50),
    `graphics` VARCHAR(50),
    `url` VARCHAR(500),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `Muncha`;

DROP TABLE IF EXISTS `Kaymu`;

DROP TABLE IF EXISTS `Sastodeal`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}