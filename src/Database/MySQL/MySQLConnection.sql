SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

CREATE TABLE `users`
(
    `id`            INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_name`     VARCHAR(255) NOT NULL UNIQUE,
    `email`         VARCHAR(255) NOT NULL UNIQUE,
    `user_password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `posts`
(
    `id`         INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`      VARCHAR(255) NOT NULL,
    `pic_news`   VARCHAR(255) NOT NULL,
    `short_news` TEXT DEFAULT '',
    `full_news`  TEXT         NOT NULL,
    `time_news`  DATETIME     NOT NULL,
    `user_id`    INT(11) UNSIGNED DEFAULT NULL,
    `category`   VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX        `idx_user_id` (`user_id`),
    CONSTRAINT `fk_news_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `comments`
(
    `id`      INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `comment` VARCHAR(500) NOT NULL,
    `news_id` INT(11) UNSIGNED NOT NULL,
    `user_id` INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY (`id`),
    INDEX     `idx_news_id` (`news_id`),
    INDEX     `idx_user_id` (`user_id`),
    CONSTRAINT `fk_comments_news` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `fk_comments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `likes`
(
    `id`      INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `news_id` INT(11) UNSIGNED NOT NULL,
    `user_id` INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY (`id`),
    INDEX     `idx_news_id` (`news_id`),
    INDEX     `idx_user_id` (`user_id`),
    CONSTRAINT `fk_likes_news` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `fk_likes_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;
