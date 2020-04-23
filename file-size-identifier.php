<center>
<?php
include("nav.php");
$file_url = $_POST["url"];

function getRemoteFilesize($file_url, $formatSize = true)
{
    $head = array_change_key_case(get_headers($file_url, 1));
    // content-length of download (in bytes), read from Content-Length: field
	
    $clen = isset($head['content-length']) ? $head['content-length'] : 0;

    // cannot retrieve file size, return "-1"
    if (!$clen) {
        return -1;
    }

    if (!$formatSize) {
        return $clen; 
		// return size in bytes
    }

    $size = $clen;
    switch ($clen) {
        case $clen < 1024:
            $size = $clen .' B'; break;
        case $clen < 1048576:
            $size = round($clen / 1024, 2) .' KB'; break;
        case $clen < 1073741824:
            $size = round($clen / 1048576, 2) . ' MB'; break;
        case $clen < 1099511627776:
            $size = round($clen / 1073741824, 2) . ' GB'; break;
    }

    return $size; 
	// return formatted size
	echo getRemoteFilesize($file_url);
}
?>
<title>File Size Identifier</title>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
URL: <input type="text" name="url"><br>
<input type="submit" name="Identify"><br>
File size: <b><?php echo getRemoteFilesize($file_url); ?></b><br>
</form>
<?php include("footer.php");?>
</center>