<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
// Connecting, selecting database
try {
date_default_timezone_set("America/New_York");
$dbconn = new PDO('pgsql:host=bcprototypes.cf0rkjcvzwtj.us-east-1.rds.amazonaws.com;port=5432;dbname=webtracking', 'tobybasallasynthelize', 'LOTRBoxSet6572!');
$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Performing SQL query
$query = 'INSERT INTO property_hit (id, hit_date_time, property_id, requested_path, host_name, host_ip_address, user_agent, referrer) values (:id, :hit_date_time, :property_id, :requested_path, :host_name, :host_ip_address, :user_agent, :referrer)';
$stmt = $dbconn->prepare($query);

$uuid_value = v4();
if(isset($_SERVER['HTTP_REFERER'])) {
    $referrer_value = $_SERVER['HTTP_REFERER'];
}
else 
{
    $referrer_value = '';
}


$stmt->bindParam(':id', $uuid_value);
$stmt->bindValue(':hit_date_time', date("Y-m-d h:i:sa"));
$stmt->bindValue(':property_id', '6fbf0997-be9e-4ac7-a9d0-bb5add1fa93f');
$stmt->bindValue(':requested_path', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$stmt->bindValue(':host_name', '');
$stmt->bindValue(':host_ip_address', $_SERVER['REMOTE_ADDR']);
$stmt->bindValue(':user_agent', $_SERVER['HTTP_USER_AGENT']);
$stmt->bindValue(':referrer', $referrer_value);

$dbconn->beginTransaction();

$stmt->execute();
$dbconn->commit();
$dbconn = null;
}
catch (Exception $e)
{
    echo 'Exception ', $e->getMessage(), "\n";
}

function v4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

      // 32 bits for "time_low"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff),

      // 16 bits for "time_mid"
      mt_rand(0, 0xffff),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand(0, 0x0fff) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand(0, 0x3fff) | 0x8000,

      // 48 bits for "node"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
  }
