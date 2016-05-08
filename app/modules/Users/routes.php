<?php
$app->get('/users', '\Users:findAll');
$app->get('/users/{id:[0-9]+}', '\Users:findOne');
$app->post('/users', '\Users:store');
$app->put('/users/{id:[0-9]+}', '\Users:update');
$app->delete('/users/{id:[0-9]+}', '\Users:delete');