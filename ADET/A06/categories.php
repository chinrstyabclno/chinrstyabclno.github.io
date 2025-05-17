<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'GET':
    handleGet($pdo);
    break;
  default:
    echo json_encode(['message' => 'Invalid request method']);
    break;
}

function handleGet($pdo)
{
  // Check if the table exists
  $testQuery = "SELECT * FROM categories LIMIT 1";
  $queryResult = executeQuery($testQuery);

  if(!$queryResult){
    $createTable = "
      CREATE TABLE categories (
        categoryID INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL
      );
    ";
    $addDefaultData = "
      INSERT INTO 'categories' ('categoryID', 'name') VALUES
      (1, 'Hot'),
      (2, 'Cold Brew & Iced Coffee'),
      (3, 'Espresso-Based'),
      (4, 'Milk Based'),
      (5, 'Matcha Series'),
      (6, 'Frappes'),
      (7, 'Pastries & Snacks');
    ";

    executeQuery($createTable);
    executeQuery($addDefaultData);
  }

  $sql = "SELECT * FROM categories";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
}
?>
