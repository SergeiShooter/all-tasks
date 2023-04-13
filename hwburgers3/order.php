<?php
include 'src/config.php';
include 'src/functions.php';
include 'src/class.db.php';
include 'src/class.burger.php';


$burger = new Burger();

$email = $_POST ['email'];
$name = $_POST ['name'];
$addressFields = ['phone', 'street', 'home', 'part', 'appt', 'floor'];
$address = '';
foreach ($_POST as $field => $value) {
    if ($value && in_array($field, $addressFields)) {
        $address .= $value . ',';
    }
}

$data = ['address' => 'address'];
$user = $burger->getUserByEmail($email);
if ($user) {
    $userId = $user['id'];
    $burger->incOrders($user['id']);
    $orderNumber = $user['orders_count'] + 1;
<<<<<<< HEAD
} else {
=======
    } else {
>>>>>>> 47491d078a0ce672f8d0236e08623a6dafd635f5
    $orderNumber = 1;
    $userId = $burger->createUser($email, $name);
}

$orderId = $burger->addOrder($userId, $data);
<<<<<<< HEAD
echo "Спасибо, ваш заказ будет доставлен по адресу: $address <br>
=======
 echo "Спасибо, ваш заказ будет доставлен по адресу: $address <br>
>>>>>>> 47491d078a0ce672f8d0236e08623a6dafd635f5
Номер вашего заказа: #$orderId <br>
Это ваш $orderNumber-й заказ!";