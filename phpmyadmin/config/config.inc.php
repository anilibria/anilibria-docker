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

$cfg['Servers'][$i]['host'] = 'db';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['socket'] = '/var/lib/mysql/mysqld.sock';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'toor';

$cfg['ServerDefault'] = 1;