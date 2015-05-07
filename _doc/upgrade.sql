ALTER TABLE  `wit` ADD  `latest_version` INT NULL;
ALTER TABLE  `wit` ADD INDEX (  `latest_version` );
ALTER TABLE  `wit` ADD FOREIGN KEY (  `latest_version` ) REFERENCES  `witower`.`version` (
`id`
) ON DELETE NO ACTION ON UPDATE CASCADE ;
update wit inner join 
(
select * from 
(
select * from version order by id desc
)version_ordered
group by wit
)version_grouped
on version_grouped.wit=wit.id
set wit.latest_version=version_grouped.id;

ALTER TABLE  `version` ADD  `num` INT NOT NULL AFTER  `id`;
update wit set latest_version = null;
delete from version_comment;
delete from version;
delete from wit;
ALTER TABLE  `version` ADD  `name` VARCHAR( 255 ) NOT NULL AFTER  `wit`;
ALTER TABLE  `user` ADD  `group` VARCHAR( 255 ) NOT NULL AFTER  `email`;
ALTER TABLE  `version` ADD  `hidden` BOOLEAN NOT NULL AFTER  `score_company`;

ALTER TABLE  `version` ADD FOREIGN KEY (  `project` ) REFERENCES  `witower`.`project` (
`id`
) ON DELETE NO ACTION ON UPDATE CASCADE ;

ALTER TABLE  `wit` ADD  `deleted` BOOLEAN NOT NULL AFTER  `selected`;
ALTER TABLE  `version` CHANGE  `hidden`  `deleted` TINYINT( 1 ) NOT NULL;

CREATE TABLE IF NOT EXISTS `finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  `item` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `project` int(11) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `amount` (`amount`),
  KEY `datetime` (`datetime`),
  KEY `time` (`time`),
  KEY `user` (`user`),
  KEY `project` (`project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`project`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE  `product_tag` DROP FOREIGN KEY  `product_tag_ibfk_1` ,
ADD FOREIGN KEY (  `product` ) REFERENCES  `witower`.`product` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE  `project_tag` DROP FOREIGN KEY  `project_tag_ibfk_1` ,
ADD FOREIGN KEY (  `project` ) REFERENCES  `witower`.`project` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE ;

ALTER TABLE  `version` ADD  `comment_witower` VARCHAR( 255 ) NOT NULL DEFAULT  '' AFTER  `score_company`;
ALTER TABLE  `version` ADD  `comment_company` VARCHAR( 255 ) NOT NULL DEFAULT  '' AFTER  `comment_witower`;

ALTER TABLE  `tag` ADD UNIQUE (
`name`
);

ALTER TABLE  `witower`.`product_tag` DROP INDEX  `product` ,
ADD UNIQUE  `product-tag` (  `product` , `tag` );

ALTER TABLE  `witower`.`project_tag` DROP INDEX  `project` ,
ADD UNIQUE  `project-tag` (  `project` ,  `tag` );

ALTER TABLE  `tag` ADD  `hits` INT NOT NULL DEFAULT  '0';

UPDATE  `witower`.`user` SET  `group` =  'witower config finance company user product project wit' WHERE  `user`.`id` =1;

ALTER TABLE  `witower`.`config` DROP INDEX  `item` ,
ADD UNIQUE  `item` (  `item` );

ALTER TABLE  `project` ADD  `active` BOOLEAN NOT NULL AFTER  `vote_end`;

ALTER TABLE  `project_candidate` CHANGE  `votes`  `votes` INT( 11 ) NOT NULL DEFAULT  '0';
ALTER TABLE  `project_candidate` CHANGE  `score_witower`  `score_witower` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0';
ALTER TABLE  `project_candidate` CHANGE  `score_company`  `score_company` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0';

ALTER TABLE  `witower`.`user_config` DROP INDEX  `user` ,
ADD UNIQUE  `user-item` (  `user` ,  `item` );

ALTER TABLE  `user_config` CHANGE  `value`  `value` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE  `config` CHANGE  `value`  `value` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

CREATE TABLE captcha (
 captcha_id bigint(13) unsigned NOT NULL auto_increment,
 captcha_time int(10) unsigned NOT NULL,
 ip_address varchar(16) default '0' NOT NULL,
 word varchar(20) NOT NULL,
 PRIMARY KEY `captcha_id` (`captcha_id`),
 KEY `word` (`word`)
);

ALTER TABLE  `project` CHANGE  `summary`  `summary` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `company` ADD `certificated` BOOLEAN NOT NULL ;

ALTER TABLE `user` ADD `mute_until` DATE NOT NULL , ADD INDEX (`mute_until`) ;

CREATE TABLE IF NOT EXISTS `piece` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `files` text NOT NULL,
  `description` text NOT NULL,
  `project` int(11) DEFAULT NULL,
  `wit` int(11) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `wit` (`wit`),
  KEY `user` (`user`),
  KEY `time` (`time`),
  KEY `project` (`project`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`wit`) REFERENCES `wit` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `piece_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `piece_ibfk_3` FOREIGN KEY (`project`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `piece` CHANGE `files` `files` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL;
-- server upgraded
