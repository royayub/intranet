<html>
<body>
    <style>
      table,
      th,
      td {
        margin: 0 auto;
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
      p {
       text-align: center 
      }
    </style>
<?php
$ip_server = $_SERVER['SERVER_ADDR'];
$username = "www";
$password = "Northumbria!1";
$database = "www";
$mysqli = new mysqli("mysql.student.co.uk", $username, $password, $database);
$query = "SELECT * FROM example";

echo '<p>'."SERVER:".$ip_server."</p>".PHP_EOL;
echo '<table>
      <tr>
          <td> <font face="Arial">ID</font> </td>
          <td> <font face="Arial">FORENAME</font> </td>
          <td> <font face="Arial">SURNAME</font> </td>
          <td> <font face="Arial">AGE</font> </td>
          <td> <font face="Arial">SEX</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["FORENAME"];
        $field3name = $row["SURNAME"];
        $field4name = $row["AGE"];
        $field5name = $row["SEX"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
              </tr>';
    }
    $result->free();
}
echo'</table>';
?>
<p style="text-align:center;"><img src="/content/index.png" alt="LOGO"></p>
</body>
</html>
