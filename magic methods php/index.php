<?php
require_once 'Application.php';
require_once 'MysqlDb.php';
require_once 'SqliteDb.php';
require_once 'RESTDb.php';

$app = new Application(
    new RESTDb()
);

$app->db->getOrders();
$app->db->getOrdersById(id: 1);
$app->db->createOrder([]);
$app->db->updateOrder(id: 1, data: []);
$app->db->deleteOrder(id: 1);