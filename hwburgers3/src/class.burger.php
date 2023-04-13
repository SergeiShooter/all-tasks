<?php
class Burger
{

    public function getUserByEmail(string $email)
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM users WHERE email = :email";
        return $db->fetchOne($query, __METHOD__, [':email' => $email]);
    }

    public function createUser(string $email, string $name)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO users(email, `name`) VALUES (:email, :name)";
        $result = $db->exec($query, __METHOD__, [
            ':email' => $email,
            ':name' => $name
        ]);
        if (!$result){
            return false;
        }
        return $db->lastInsertId();
    }


    public function addOrder($userId, array $data)
    {
        $db = Db::getInstance();
        $query = "INSERT INTO orders(user_id, address, created_at) VALUES (:user_id, :address, :created_at)";
        $result = $db->exec(
            $query,
            __METHOD__,
            [':user_id' => $userId,
<<<<<<< HEAD
                ':address' => $data['address'],
=======
              ':address' => $data['address'],
>>>>>>> 47491d078a0ce672f8d0236e08623a6dafd635f5
                ':created_at' => date('Y-m-d H:i:s'),

            ]
        );
        if (!$result) {
            return false;
        }

        return $db->lastInsertId();
    }

    public function incOrders(int $userId)
    {
        $db = Db::getInstance();
        $query = "UPDATE users SET orders_count = orders_count +1 WHERE id = $userId";
        return $db->exec($query, __METHOD__);
    }


}
<<<<<<< HEAD
=======

>>>>>>> 47491d078a0ce672f8d0236e08623a6dafd635f5
