<?php	
session_start();		
	if (isset($_SESSION['search_results'])) {

		  foreach ($_SESSION['search_results'] as $result) {
			$link = $result['link'];
			$title = $result['title'];
			$content = $result['content'];
			echo ("
				  <a class='search-card' target='_blank' href='$link'>
					<div class='search-card__title'>$title</div>
					<p class='search-card__body'>$content</p>
				  </a>
				  ");
		  }
		}
		
		echo(" 
	  </div>
	</div>
	");
	unset($_SESSION['search_results']);
	?>