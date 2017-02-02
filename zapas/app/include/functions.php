<?php
	
	function get_categories() {
		
		global $link;

		$sql = "SELECT * FROM illinois_table";

		$result = mysqli_query($link, $sql);

		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		return $categories;
	}

	function get_posts() {
		
		global $link;

		$sql = "SELECT * FROM posts";

		$result = mysqli_query($link, $sql);

		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		return $posts;
	}

?>