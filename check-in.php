<?php
include 'config.con.php';
$xtoken = '';
$xusername = '';
// $today="2022-03-04";

header('Content-Type:Application/json');
class usr
{
}

$headers = apache_request_headers();

foreach ($headers as $header => $value) {
	// echo "$header: $value <br />\n";

	if ($header == "x-token") {
		$xtoken = $value;
	}
	if ($header == "x-username") {
		$xusername = $value;
	}
}

//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));

//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);

//If json_decode failed, the JSON is invalid.
if (!is_array($decoded)) {
	throw new Exception('Received content contained invalid JSON!');
}

$kodebooking = $decoded['kodebooking'];
$waktu       = $decoded['waktu'];


$req_log = mysqli_real_escape_string($con, $content); 
$times = uniqid(); 
$method ="check-in";
$sql_log = "INSERT INTO `log_antrol` (`waktu`, `req`, `times`, method) 
            VALUES (NOW(), '$req_log',   '$times', '$method')";
mysqli_query($con, $sql_log);

function updateLogAntrol($con, $data, $times) { 
    $beauty_json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    $res_log = mysqli_real_escape_string($con, $beauty_json);

    $sql = "UPDATE `log_antrol` 
            SET `res` = '$res_log' 
            WHERE `times` = '$times' 
            ORDER BY id DESC 
            LIMIT 1";
    
    return mysqli_query($con, $sql);
}

$data = array();



$sql = "SELECT * FROM `bpjs_user` WHERE username='$xusername'";
$result       = mysqli_query($con, $sql);

$data_cek = mysqli_num_rows($result);
if ($data_cek == 0) {
	$data['metadata']['message'] = "Username tidak ditemukan.";
	$data['metadata']['code']    = 201;
} else {
	$row          = mysqli_fetch_array($result);
	$token = $row['token'];
	if ($token != $xtoken) {
		$data['metadata']['message'] = "Invalid Authenticity Token.";
		$data['metadata']['code']    = 201;
	} else {

		$sql = "UPDATE `bpjs_user` SET `tanggal` = CURDATE(),jam=CURTIME() WHERE username='$xusername' ";
		mysqli_query($con, $sql);


		$sql = "SELECT * FROM mr_bl a WHERE a.tanggal='$today' AND a.id_register=$kodebooking";
		// echo $sql;

		$result       = mysqli_query($con, $sql);
		$data_cek = mysqli_num_rows($result);
		if ($data_cek == 0) {

			$data['metadata']['message'] = "Kode booking anda tidak ditemukan";
			$data['metadata']['code']    = 201;
		} else {

			$sql="UPDATE `log_bpjs_antrol` SET `check_in` = '1' WHERE `no_reg` = '$kodebooking";

			$sql = "UPDATE `bpjs_user` SET `tanggal` = CURDATE(),jam=CURTIME() WHERE username='$xusername' ";
			mysqli_query($con, $sql);
			$data['metadata']['message'] = "OK";
			$data['metadata']['code']    = 200;
		}
	}
}

updateLogAntrol($con, $data, $times);
echo json_encode($data);
exit();
