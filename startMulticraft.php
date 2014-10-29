<?php
include('sshLoginInfo/loginInformation.php');
$connection = ssh2_connect($mcipaddress, 22);
if (!$connection) {
   die("Failed to connect");
}
ssh2_auth_password($connection, $username, $password);
$stream = ssh2_exec($connection, $sMlocation);
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
echo stream_get_contents($stream_out);
?>