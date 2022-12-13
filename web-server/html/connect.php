<?php 
    //dbへの接続確認用
    try {
        $dsn = 'mysql:host=db;dbname=db;charset=utf8';
        $db = new PDO($dsn, 'user', 'password');

        $sql = 'SELECT version();';
        $contact = $db->prepare($sql);
        $contact->execute();
        
        $result = $contact->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>