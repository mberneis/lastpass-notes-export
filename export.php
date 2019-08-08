<?php
/*
 This app will convert the HTML from LastPasss Print Secure Notes Utility into the Bitwarden Format for easy import

 @author: Michael Berneis
 @data 8/8/2019

 please read Readme.md for instructions
*/

include('simple_html_dom.php');
 
$html = file_get_html("Print.htm");
$data = $html->find('div#output', 0);
$fp   = fopen("Print.csv", "w");
fwrite($fp, "folder,favorite,type,name,notes,fields,login_uri,login_username,login_password,login_totp\n");
foreach ($data->find("table.x-grid3-row-table") as $note) {
    $sections = $note->find("td.x-grid3-col");
    $name     = trim($sections[0]->find("p", 0)->innertext, '" ');
    $folder   = trim($sections[1]->find("p", 0)->innertext, '" ');
    $content  = trim($sections[2]->find("p", 0)->innertext, '" ');
    $content  = str_replace('<br>', "\n", $content);
    fputcsv($fp, [$folder,'','note',$name,$content,'','','','','']);
}
fclose($fp);
