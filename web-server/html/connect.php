<?php 

    //mysql8.0以前のクライアントは「caching_sha2_password」という認証プラグインがサポートされていない為、アクセスできません
    //mysql -h 127.0.0.1 -P 4306 -u user -ppassword db

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