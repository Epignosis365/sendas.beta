<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	//$search = $_POST['search'];
	$conn =new mysqli('localhost', 'root', 'Senda2015' , 'sendaDB_29_01_2017');

	$sql = $conn->prepare("SELECT * FROM tbl_country WHERE country_name LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["country_name"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

