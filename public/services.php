<?php

$container['conexao'] = $container->factory(function(\Pimple\Container $container) {
    return new SON\Conexao($container['host'], $container['dbname'], 
        $container['user'], $container['password']);
});

$container['cliente'] = $container->factory(function(\Pimple\Container $container) {
    return new \SON\Cliente($container['conexao']);
});