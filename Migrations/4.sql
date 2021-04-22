CREATE TABLE `product` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `price` VARCHAR(255) NOT NULL,
    `user` INT(11) UNSIGNED NOT NULL,
    `sellable` BOOL,
    UNIQUE `user_id_unique` (`id`),
    FOREIGN KEY (`user`) REFERENCES user(`id`)
) ENGINE = InnoDB;