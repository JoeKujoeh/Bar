
<?php
require "database.php";
// Initialize the session
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted using POST method

    // Prepare SQL statement
    $stmt = $_SESSION['conn']->prepare('INSERT INTO menu (name, info, price, placement) VALUES (?, ?, ?, ?)');
    
    // Bind parameters
    $stmt->bind_param('sssi', $_POST['name'], $_POST['info'], $_POST['price'], $_POST['placement']);
    
    // Execute the statement
    $stmt->execute();

    // Redirect after successful submission (if needed)
    header("Location: index.php");
    // exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">
</head>
<body>
    <a id="back" href="index.php">Back</a>
<h3>Current Menu</h3>
<?php
$sql = "SELECT * FROM menu ORDER BY category DESC";
$result = $_SESSION['conn']->query($sql);


          if ($result) {
            $groupedResults = [];
            while ($row = $result->fetch_assoc()) {
                $fixedResult[$row["category"]][] = $row;
            }
        
            foreach ($fixedResult as $category => $rows) {
                if ($category) {
                    echo "<h3>" . $category . "</h3>";
        
                    foreach ($rows as $row) {
                        echo $row["name"] . " -  Price: " . $row["price"] . "<br> <img src='./img/remove.png'>";
                    }
                } else {
                    echo "Inget finns";
                }
            }
        } else {
            echo "0 results";
        }
    ?>
<h3>Add more</h3>
<form method="post" >
    <label for="name">Dish:</label>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="info">Desc:</label>
    <input type="text" id="info" name="info"><br><br>
    
    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br><br>
    
    <input type="text" id="placement" name="placement" value="0" hidden><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>