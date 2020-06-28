<h1>PAGES NEWS</h1>
<?php

while( $row = mysqli_fetch_array($data["Teo"]) ){
    echo $row["hoten"];
    echo "<br/>";
}

?>