<?php
$host = "213.159.210.74:3306";
$user = "frontUser";
$password = "pIBWqDqsKoUrrs1LoTIW";
$database = "simki24" ;
$conn = @mysqli_connect($host, $user, $password, $database) or die ('Ошибка соединения с БД');
mysqli_set_charset($conn, "utf8") or die ('Не установлена кодировка');



/*$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result) {
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Id</th><th>country</th><th>operator</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 10 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);*/
//SELECT * FROM simCountV1 WHERE operator='any'


$sql ="SELECT * FROM simCountV1 WHERE id IN (3, 10, 11, 31, 80, 20)";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        if ($row["country"] == "russia"){
            $_POST[0] = $row["vk"];
            $_POST[1] = $row["ok"];
            $_POST[2] = $row["wa"];
            $_POST[3] = $row["vi"];
            $_POST[4] = $row["tg"];
            $_POST[5] = $row["wb"];
            $_POST[6] = $row["go"];
            $_POST[7] = $row["fb"];
            $_POST[8] = $row["av"];
            $_POST[9] = $row["tw"];
       }
        if ($row["country"] == "kazakhstan"){
            $_POST[11] = $row["vk"];
            $_POST[12] = $row["ok"];
            $_POST[13] = $row["wa"];
            $_POST[14] = $row["vi"];
            $_POST[15] = $row["tg"];
            $_POST[16] = $row["wb"];
            $_POST[17] = $row["go"];
            $_POST[18] = $row["fb"];
            $_POST[19] = $row["av"];
            $_POST[20] = $row["tw"];
        }

    }
}
