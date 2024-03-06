<?php

require '../vendor/autoload.php';

$config = [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'entra21',
            'username'  => 'root',
            'password'  => '',
        ];

        $connection = new \Pixie\Connection('mysql', $config);
        $qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);
        
        $query = $qb->table('seg_usuarios')->where('id', '=', '1');
        
        var_dump($query->get());