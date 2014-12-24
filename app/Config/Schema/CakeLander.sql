-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema CakeLander
--
-- Auto body shop landing page generator. By @c1v0.
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CakeLander` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `CakeLander` ;


-- -----------------------------------------------------
-- Table `CakeLander`.`endpoints`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakeLander`.`endpoints` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NULL COMMENT 'If none, the URL will be the title.',
  `url` VARCHAR(1000) NOT NULL COMMENT 'The address of the endpoint.',
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CakeLander`.`contents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakeLander`.`contents` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `endpoint_id` INT(11) UNSIGNED NOT NULL,
  `title` VARCHAR(255) NOT NULL COMMENT 'Content title, also rendered in the page meta.',
  `logo_href` VARCHAR(2083) NULL DEFAULT NULL,
  `slider` TEXT NULL DEFAULT NULL COMMENT 'Markup for the slider content. If left blank the default will be used.',
  `social` TEXT NULL DEFAULT NULL COMMENT 'Contents of the social pane. If none the pane will not be rendered.',
  `headline` VARCHAR(255) NOT NULL COMMENT 'Page H1 content.\n',
  `subhead` TEXT NULL DEFAULT NULL,
  `body` TEXT NOT NULL COMMENT 'All content below the headline.',
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_content_endpoint_idx` (`endpoint_id` ASC),
  CONSTRAINT `fk_content_endpoint`
    FOREIGN KEY (`endpoint_id`)
    REFERENCES `CakeLander`.`endpoints` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CakeLander`.`menus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakeLander`.`menus` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content_id` INT(11) UNSIGNED NOT NULL,
  `html` TEXT NOT NULL COMMENT 'Navigation menu markup.',
  `location` VARCHAR(1000) NULL COMMENT 'Llocation of the menu to clone.',
  `element` VARCHAR(150) NULL DEFAULT NULL COMMENT 'Menu element to clone.',
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menu_content_idx` (`content_id` ASC),
  CONSTRAINT `fk_menu_content`
    FOREIGN KEY (`content_id`)
    REFERENCES `CakeLander`.`contents` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
