<?PHP

$file_handle = fopen("mymessagefile.txt", "r");

while (!feof($file_handle)) {

$line_of_text = fgets($file_handle);
print $line_of_text . "<BR>";

}

fclose($file_handle);

?>