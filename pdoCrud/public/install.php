<?
require "config.php";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,
$options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>