<?php
$wait = 1; // wait Timeout In Seconds
$host = 'google.com';
$ports = [
    'https' => 443,
];

foreach ($ports as $key => $port) {
    $fp = @fsockopen($host, $port, $errCode, $errStr, $wait);
    #echo "Ping $host:$port ($key) ==> ";
    if ($fp) { ?>
        <html><center><br /><br /><br /><br /><br /><br />
		<h1> Meron </h1>
	</html>
<?php
	
	fclose($fp);
    } else {  ?>
        <html><center><br /><br /><br /><br /><br /><br />
                <h1> Wala. </h1>
        </html>
<?php
	}
    echo PHP_EOL;
}
?>
