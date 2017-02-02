<?php
	
	function get_categories() {
		
		global $link;

		$sql = "SELECT * FROM illinois_table";

		$result = mysqli_query($link, $sql);

		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		return $categories;
	}

	function get_images() {
		
		global $link;

		$sql = "SELECT * FROM illinois_images";

		$result = mysqli_query($link, $sql);

		$pictures = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		return $pictures;
	}

		//if (isset($_GET['action']) && $_GET['action'] == 'delete') {
		//global $link;
		//mysqli_query($link, "
		//	DELETE FROM 'illinois_table'
		//	WHERE 'id' = ".$_GET['id']."
		//	");
		//header('Location: /illinois/');
			//}

?>