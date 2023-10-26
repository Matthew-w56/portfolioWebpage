<?php
// Note: All DB interaction is disabled while it still is not up.  Just need to stand one up on the hosting site

function connect_to_db() {
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		return mysqli_connect('localhost', 'root', '1550', 'visit_data');
	}
	return mysqli_connect('sql211.epizy.com', 'epiz_32326890', 'jl1ihWGk5Zo8g', 'epiz_32326890_visit_data');
}

function db_mark_visit() {
	$conn = connect_to_db();
	mysqli_query($conn, 'UPDATE stats SET stat_val = stat_val + 1 WHERE stat_name="visit_count";');
	mysqli_close($conn);
}

function db_get_visit_counts() {
	$conn = connect_to_db();
	$result = mysqli_query($conn, 'SELECT stat_val FROM stats WHERE stat_name="visit_count";');
	mysqli_close($conn);
	return mysqli_fetch_array($result, MYSQLI_NUM)[0];
}

function db_inc_contact_load() {
	$conn = connect_to_db();
	mysqli_query($conn, 'UPDATE stats SET stat_val = stat_val + 1 WHERE stat_name="contact_loaded";');
	mysqli_close($conn);	
}

function db_inc_forms_filled() {
	$conn = connect_to_db();
	mysqli_query($conn, 'UPDATE stats SET stat_val = stat_val + 1 WHERE stat_name="forms_filled";');
	mysqli_close($conn);
}

?>