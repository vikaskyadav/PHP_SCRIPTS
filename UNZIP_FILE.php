/**********************
*@file - path to zip file
*@destination - destination directory for unzipped files
*/
function unzip_file($file, $destination){
	// create object
	$zip = new ZipArchive() ;
	// open archive
	if ($zip->open($file) !== TRUE) {
		die (â€™Could not open archiveâ€™);
	}
	// extract contents to destination directory
	$zip->extractTo($destination);
	// close archive
	$zip->close();
	echo 'Archive extracted to directory';
}
