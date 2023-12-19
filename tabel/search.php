<?php
include "../konek.php";

	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$sql = mysqli_query("SELECT * FROM mahasiswa WHERE nip LIKE '%$search_param%'");
	$result = mysqli_num_rows($sql);
	if ($result > 0) {
		while($row = mysqli_fetch_array($sql)) {
		$countryResult[] = $row["nip"];
		}
		echo json_encode($countryResult);
	}

?>

