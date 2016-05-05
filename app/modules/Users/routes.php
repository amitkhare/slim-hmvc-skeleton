<?php
$app->get('/users', '\Users:findAll');
$app->get('/users/{id}', '\Users:findOne');