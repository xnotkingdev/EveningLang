<?php
$files = glob("*.ghost.html");
print_r($files);
foreach ($files as $file) {
	$program = file($file);
	$tophp = strtolower(str_replace(".ghost.html", ".php", $file));
	$ts = fopen("bin/http/".$tophp, "w+");
	fclose($ts);
	foreach ($program as $line) {
		$line = str_replace("?haunt", "<?php", $line);
		$line = str_replace("?unhaunt", "?>", $line);
		$line = str_replace("revive", "echo", $line);
		$line = str_replace("revive_arr", "print_r", $line);
		$line = str_replace("kill()", "die()", $line);
		$line = str_replace("sink ", "$", $line);
		$line = str_replace("&", "$", $line);
		$line = str_replace("eyehttp", '$_GET', $line);
		$line = str_replace("eyehttpost", '$_POST', $line);
		$line = str_replace("eyeserver", '$_SERVER', $line);
		$line = str_replace("skelheader", 'header', $line);
		$line = str_replace("deadif", 'if', $line);
		$line = str_replace("deadwhile", 'while', $line);
		$line = str_replace("deadfor", 'for', $line);
		$line = str_replace("deadelse", 'else', $line);
		$line = str_replace("deadforeach", 'foreach', $line);
		$line = str_replace("deadelseif", 'else', $line);
		$line = str_replace("skellock", 'hash', $line);
		$line = str_replace("weenlock", 'md5', $line);
		$line = str_replace("eyescheck", 'strpos', $line);
		$line = str_replace("ghostlen", 'strlen', $line);
		$line = str_replace("ghostexists", 'isset', $line);
		$line = str_replace("ghosttolower", 'strtolower', $line);
		$line = str_replace("ghosttoupper", 'strtoupper', $line);
		$line = str_replace("hauntfi", 'file_get_contents', $line);
		$line = str_replace("hauntfi_as_array", 'file', $line);
		$line = str_replace("includeghost", 'include', $line);
		$line = str_replace(".ghost.html", '.php', $line);
		$line = str_replace("readf", 'file', $line);
		if (str_starts_with($line, "func")) {
			$line = str_replace("func", 'function', $line);
		}
			
		if (strpos($line, "includeghost")) {
			$line = strtolower($line);
		}
		$line = str_replace("new GhostDB(", 'new PDO(', $line);
		$line = str_replace(">>", '->', $line);
		$line = str_replace("doclen()", 'strlen(file_get_contents(__FILE__))', $line);
		$ts = fopen("bin/http/".$tophp, "a");
		fwrite($ts, $line);
	}
}
system("php bin/web.php");
sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);sleep(999999999);
?>