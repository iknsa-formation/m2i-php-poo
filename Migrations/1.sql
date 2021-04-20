CREATE TABLE IF NOT EXISTS `article` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `titre` VARCHAR(255) NOT NULL,
    `auteur` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    UNIQUE `article_id_unique` (`id`)
) ENGINE = InnoDB;
