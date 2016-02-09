# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)



listings
ip addresses
events/when things got listed

add ip
delist-ip




CREATE TABLE IF NOT EXISTS `bad_ips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) COLLATE utf8_bin NOT NULL,
  `port` int(5) NOT NULL DEFAULT '0',
  `type` int(3) NOT NULL DEFAULT '4',
  `reason` varchar(3000) COLLATE utf8_bin NOT NULL DEFAULT 'This IP address is listed in IncrediBL. For more information and removal, please visit https://www.incredibl.org/lookup.php',
  `date_added` int(20) NOT NULL,
  `user` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;










--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `dataset`) VALUES
(1, 'Test Data', 'test'),
(2, 'Experimental', 'experimental'),
(3, 'Unknown', 'unknown'),
(4, 'IRC Drone', 'irc'),
(5, 'TOR Exit Node', 'tor'),
(6, 'Open SOCKS Proxy', 'socks');




CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `salt` varchar(5) COLLATE utf8_bin NOT NULL,
  `date_created` int(20) NOT NULL,
  `last_activity` int(20) NOT NULL,
  `last_ip` varchar(39) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;



whitelist




IPs belong to a zone
Entries belong to an IP address