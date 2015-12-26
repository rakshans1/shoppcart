<?php
if (isset($_POST['keywords'])) {
	$keywords = mysql_real_escape_string(htmlentities(trim($_POST['keywords'])));
	$word =strtoupper($_POST['keywords']);
	if (empty($keywords)) {
		$errors[]='Please Enter a search term';
	}elseif (strlen($keywords)<3) {
		$errors[]='Your search term must be three or more characters';
	} elseif (search_results($keywords)===false) {
		$errors[] = 'Your search for '.$keywords.' returned no results';
	}


/*********************************************Main Logic ******************/
	if(empty($errors)){
		$where="";
		$keywords=preg_split('/[\s]+/', $keywords);
		$total_keywords = count($keywords);

	foreach ($keywords as $key => $keyword) {
		$where .= "`pname` LIKE '%$keyword%'";
		if ($key != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	$where .= " OR ";
	foreach ($keywords as $keyw => $keywordw) {
		$where .= " `sub` LIKE '%$keywordw%'";
		if ($keyw != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	
	$results = "SELECT `pname`,`pprice`,`pimage` FROM `products` WHERE  $where";
 		$conn = mysqli_connect("localhost","root","","shoppcart") ;
		$result = $conn->query($results);
		$results_num = $result->num_rows;
	if ($result->num_rows > 0) {
    echo '<div class="row"><h2 class="title text-center">Your Searched Items</h2>
    	<p class="text-center">Your Search for <strong>'.$word.'</strong> returned <strong>'.$results_num.'</strong> results</p></div>';

    while($row = $result->fetch_assoc()) {
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    include  "html/php/includes/searchr.php";
	}


}
		
	}else  {?>
	    <div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <?php echo output_errors($errors); ?>
	</div>
	<?php }
 }




/*********************************************Function to search 0 results ******************/

function search_results($keywords){
	$where="";

	$keywords=preg_split('/[\s]+/', $keywords);
	$total_keywords = count($keywords);

	foreach ($keywords as $key => $keyword) {
		$where .= "`pname` LIKE '%$keyword%'";
		if ($key != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	$where .= " OR ";
	foreach ($keywords as $keyw => $keywordw) {
		$where .= " `sub` LIKE '%$keywordw%'";
		if ($keyw != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	$results = "SELECT `pname`,`pprice`,`pimage` FROM `products` WHERE  $where";

	$results_num=($results = mysql_query($results)) ? mysql_num_rows($results): 0;
	if ($results_num === 0) {
    return false;
	}   
 } 




?>