<?php

/* 
 * This file is edited by STUDENT NAME for the work on Assignment 2.
 */

	require_once "includes/header.php";
?>
	<!-- Main content (or content of focus/importance) of the web page -->
	<main id="homepg-main-content">
		<section id="search-section">
			<h2>Search for stuff</h2>
			<form id="search-form" method="get" action="">
				<input type="text" id="sf-keywords" name="sf-keywords-input" placeholder="What would you like to search?">
				<p>Choose search opetions in the dropdown list below (default is search all articles):<p><br>
				<select name  = "selectbar"id = "selectbar">
  					<option value="all-articles">Show all articles</option>
 					<option value="autor">Search by Author name</option>
 					<option value="title">Search by title</title></option>
  					<option value="content">Search by articles content</option>
				</select>
				<input type="submit" name="search-results" value="Search" id = "search-buttom">
			</form>

			<section id="search-content">
				<?php
				// IMPLEMENT THIS FEATURE
				// Check to see which option is selected and show corresponding results
				if (isset($_GET["selectbar"])) {
					$selectbar = $_GET["selectbar"];
					
					switch ($selectbar) {
						case "all-articles" :
							require_once "includes/all-articles.php";
							break;
						case "autor":
							require_once "includes/by-author.php";
							break;
						case "title":
							require_once "includes/by-title.php";
							break;
						case "content":
							require_once "includes/by-content.php";
							break;
					}
				}
				?>

			</section>


			<?php
			// IMPLEMENT THIS FEATURE
			// Hide this help info section below when search results are ready.
			// Show the heading otherwise.
			?>
			<div id="search-help-info">
				<h3 id="help-info-display" class="help-text">Help section: How do I use this search? (click to show/hide help info)</h3>
				<ul id="search-help">
					<li>You can use the form below to search for Jedi articles: either based on words/characters in the title, the content of the article, or by author name.</li>
					<li>Based on the keywords/characters you enter, the search engine will find articles.</li>
					<li>When you click on the article title, the article will open in article.php, showing just the article.</li>
					<li>You can also click on show all articles to see a list of all articles in the form of a table.</li>
				</ul>
			</div>
		</section>
	</main>

<?php
	require_once "includes/footer.php";
?>