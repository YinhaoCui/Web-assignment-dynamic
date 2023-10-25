<?php
    $sql = "SELECT * FROM jediarticles";
    $result = $dbconn -> query($sql);
    echo "<h3>Search Results: Showing all articles</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "<section class='search-result'>
            <h4 style='text-transform:uppercase'><a href=article.php?a-id=$row[art_id]>$row[art_title]</a></h4>
            <h5 style='font-style:italic'>$row[art_author]</h5>
            <p>$row[art_text]</p>
            </section>";
    }
?>