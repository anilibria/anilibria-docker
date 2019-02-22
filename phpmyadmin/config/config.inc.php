<?php
/**
 * Created by PhpStorm.
 * User: muslim
 * Date: 15.10.18
 * Time: 11:30
 */
$cfg['blowfish_secret'] = 'u3hf}>?1{n)=P/VE3}N4&)LACp7WWGo*';
$i=0;
$i++;

$cfg['Servers'][$i]['host'] = 'mariadb';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['socket'] = '/var/lib/mysql/mysqld.sock';
$cfg['Servers'][$i]['user'] = 'anilibria';
$cfg['Servers'][$i]['password'] = 'anilibria';

$cfg['ServerDefault'] = 1;