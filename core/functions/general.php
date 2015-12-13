<?php
function sanitize($data){
	return mysql_real_escape_string($data);
}

function output_errors($errors){
	return '<ul><li>'.implode('</li><li><p class="lead">', $errors).'</p></li></ul>';

}


?>