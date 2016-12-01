CREATE TABLE `shouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
);
 
INSERT INTO `shouts` (`id`,`name`,`message`)
VALUES
  (1,'saikat','Hello, World!'),
  (2,'saikatharryc','message is going!'),
  (3,'techpool','what is chronological order??');
