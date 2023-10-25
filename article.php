<?php

/* 
 * This file is edited by STUDENT NAME for the work on Assignment 2.
 */

	require_once "includes/header.php";
	/* 
 	* Redirection to home page.
 	*/
	 if(isset($_GET["a-id"])){
		
	 }
	else{
		header("Location: index.php");
		die();
	}

		
?>
	<!-- Main content (or content of focus/importance) of the web page -->
	
	<main id="articlepg-main-content">
		<article class="full-article">
		<?php
				if (isset($_GET["a-id"])) {
					$resultmessage = $_GET["a-id"];
					$sql = "SELECT * FROM jediarticles WHERE art_id = $resultmessage";
					$result = $dbconn -> query($sql);
					while ($row = $result->fetch_assoc()) {
						echo "<section>
							<h1 style='text-transform:uppercase'>$row[art_title]</h1>
							<h5 style='font-style:italic'>$row[art_author]</h5>
							<p>$row[art_text]</p>
							</section>";
					}	
				}
			?> 
		</article>
	</main>

<?php
	require_once "includes/footer.php";
?>