<?php
//Get data from database

$sql = "SELECT * FROM menu ORDER BY category DESC";
$result = $_SESSION['conn']->query($sql);

?>
<section id="menu">
    <div>
        <h1>The Menu</h1>
        <?php
        echo "<ul>";
  
        if ($result) {
            $groupedResults = [];
            while ($row = $result->fetch_assoc()) {
                $fixedResult[$row["category"]][] = $row;
            }
        
            foreach ($fixedResult as $category => $rows) {
                if ($category) {
                    echo "<h3>" . $category . "</h3>";
        
                    foreach ($rows as $row) {
                        echo $row["name"] . "<br>Ingredienser: " . $row["info"] . "<br> Price: " . $row["price"] . "<br>";
                    }
                } else {
                    echo "Inget finns";
                }
            }
        } else {
            echo "0 results";
        }
        /*
        if ($result) {
            // output data of each row

            //$header = $result->fetch_assoc();
            //echo "<h3>" . $header["category"] . "</h3>";
            while ($row = $result->fetch_assoc()) {
                if ($row["category"]) {
                    
                    echo "<h3>" . $row["category"] . "</h3>";
                    echo $row["name"] . "<br>Ingredienser: " . $row["info"] . "<br> Price: " . $row["price"] . "<br>";
                } else {
                    echo "inget finns";
                }
            }
        } else {
            echo "0 results";
        }

        // use data form database

        
                foreach($menu as $meal){
                    echo "<li><h3>" . $meal . "</h3> . <p> . echo $row["name"];
                    
                    </li>";
                }
                echo "</ul>";
                */
        ?>
    </div>
</section>