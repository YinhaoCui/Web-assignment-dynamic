<?php
    $keyword = $_GET["sf-keywords-input"];
    $sql = "SELECT * FROM jediarticles WHERE art_title LIKE '%{$keyword}%'";
    $result = $dbconn -> query($sql);
    echo "<h3>Searching by: Showing articles based on article titles containing searched terms</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "<section class='search-result'>
            <h4 style='text-transform:uppercase'><a href=article.php?a-id=$row[art_id]>$row[art_title]</a></h4>
            <h5 style='font-style:italic'>$row[art_author]</h5>
            <p>$row[art_text]</p>
            </section>";
    }
?>