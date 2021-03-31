<?php

$servername = "localhost";
$username = "postgres";
$password = "Jp141999";

//$dbconn = pg_connect("host=localhost port=5432 dbname=phpapp user=postgres password=Jp141999");
//$result = pg_query($dbconn, "SELECT migration, migrated_at FROM schema_migrations");
//$data = pg_fetch_all($result);

try {
    $myPDO = new PDO("pgsql:host=$localhost; dbname=phpapp, $username, $password");
    //set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $myPDO->query("SELECT migration, migrated_at FROM schema_migrations");
    $data = $result->fetchAll();
    //$data = $pdo->query("SELECT * FROM users")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['migration']."<br />\n";
    echo $row['migrated_at']."<br />\n";
}
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>

<style>
.table-container {
  margin: 20px;
}
table {
  width: 100%;
}
table tr th {
  text-align: left;
  background-color: #D9E2EC;
}

</style>

<div class="table-container">
  <table>
    <tr>
      <th>migration</th>
      <th>migrated_at</th>
    </tr>
    <?php foreach ($data as $row) {?>
      <tr>
        <td><?php echo $row["migration"] ?></td>
        <td><?php echo $row["migrated_at"] ?></td>
      </tr>
    <?php } ?>
  </table>
</div>