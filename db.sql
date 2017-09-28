/*
SQLyog - Free MySQL GUI v5.19
Host - 5.6.17 : Database - kk_db
*********************************************************************
Server version : 5.6.17
*/

SET NAMES utf8;

SET SQL_MODE='';

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `reservation` */

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `res_id` int(5) NOT NULL AUTO_INCREMENT,
  `res_fname` varchar(250) NOT NULL,
  `res_lname` varchar(250) DEFAULT NULL,
  `res_state` varchar(250) DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_phone` varchar(100) DEFAULT NULL,
  `res_guest` varchar(50) DEFAULT NULL,
  `res_email` varchar(255) DEFAULT NULL,
  `res_subject` varchar(500) DEFAULT NULL,
  `res_addon` datetime NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservation` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert into `user` (`user_id`,`user_name`,`user_pwd`) values (1,'admin','e10adc3949ba59abbe56e057f20f883e');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
