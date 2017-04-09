<html>
<head>
        <title>php is running</title>
</head>
<body>
        <h1>step</h1>
        <?php
                $name = $_POST['name'];
                $sex = $_POST['sex'];
                $birth = $_POST['birth'];
                $birthaddr = $_POST['birthaddr'];
                echo "welcome",$name,$sex,$birth,$birthaddr;
                $mysqli = new mysqli("localhost","root","gdragon","first_log");
                $mysqli->query("set names 'utf8'");
                $sql = "INSERT INTO mytable(name,sex,birth,birthaddr)
                VALUES('$name','$sex','$birth','$birthaddr')";
                if($mysqli->query($sql) == TRUE){
                        echo "success";
}else{ echo "failed";
}
$mysqli->close();
        ?>
</body>
