aaa
<?php
    try {
        # host$B$K$O!V(Bdocker-compose.yml$B!W$G;XDj$7$?%3%s%F%JL>$r5-:\(B
        $dsn = "mysql:host=web-mysql;dbname=sample;";
        $db = new PDO($dsn, 'root', 'root');

        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }



phpinfo();
exit;
