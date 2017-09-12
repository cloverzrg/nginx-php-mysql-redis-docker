<pre>
<?php
    $mysqli = new mysqli("mysql", "root", "root", "mysql");
    if(!$mysqli)  {
        echo"database error";
    }else{
        $result = $mysqli->query('SHOW TABLES');
        while($arr = $result->fetch_assoc()){
            echo reset($arr)."\n";
        }
        mysqli_free_result($result); 
    }
    $mysqli->close();
?>
------------------------------------------------------------------
<?php
    $db = new PDO('mysql:dbname=mysql;host=mysql', 'root', 'root');
    $result = $db->query("show tables");
    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        echo $row[0]."\n";
    }
?>
</pre>