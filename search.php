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
		$wheres="";
		$keywords=preg_split('/[\s]+/', $keywords);
		$total_keywords = count($keywords);

	foreach ($keywords as $key => $keyword) {
		$where .= "`pname` LIKE '%$keyword%'";
		if ($key != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	foreach ($keywords as $keyw => $keywordw) {
		$wheres .= " `cat_title` LIKE '%$keywordw%'";
		if ($keyw != ($total_keywords - 1)) {
			$wheres .= " AND ";
		}
	}
	$results = "SELECT `p_id`,`pname`,`pprice`,`pimage` FROM `products` WHERE  $where";
	$cat = "SELECT `cat_id` FROM `categories` WHERE  $wheres";
	$cats = query($cat);
	$cat_id = "0";
	while($row = $cats->fetch_assoc()) {
    	$cat_id = $row["cat_id"];
	}
	$resultss = "SELECT `p_id`,`pname`,`pprice`,`pimage` FROM `products` WHERE  product_cat_id = $cat_id";
		$result = query($results);
		$cat_result = query($resultss);
		$results_num = $result->num_rows;
		$cat_results_num = $cat_result->num_rows;
	if ($result->num_rows > 0) {
    echo '<div class="row"><div class="row"><h2 class="title text-center">Your Searched Products</h2>
    	<p class="text-center">Your Search for <strong>'.$word.'</strong> returned <strong>'.$results_num.'</strong> results</p></div>';

    while($row = $result->fetch_assoc()) {
    $p_id =$row["p_id"];
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    include  "html/php/includes/searchr.php";
	}
	echo '</div>';
}
	if ($cat_result->num_rows > 0) {
    echo '<div class="row"><h2 class="title text-center">Items Related to your search</h2>
    	<p class="text-center">Your Search for <strong>'.$word.'</strong> returned <strong>'.$cat_results_num.'</strong> results</p></div>';

    while($row = $cat_result->fetch_assoc()) {
    $p_id =$row["p_id"];
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    include  "html/php/includes/searchr.php";
	}
	echo '</div>';

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
	$wheres="";

	$keywords=preg_split('/[\s]+/', $keywords);
	$total_keywords = count($keywords);

	foreach ($keywords as $key => $keyword) {
		$where .= "`pname` LIKE '%$keyword%'";
		if ($key != ($total_keywords - 1)) {
			$where .= " AND ";
		}
	}
	foreach ($keywords as $keyw => $keywordw) {
		$wheres .= " `cat_title` LIKE '%$keywordw%'";
		if ($keyw != ($total_keywords - 1)) {
			$wheres .= " AND ";
		}
	}
	$results = "SELECT `pname`,`pprice`,`pimage` FROM `products` WHERE  $where";
	$resultss = "SELECT `cat_id` FROM `categories` WHERE  $wheres";
	$results_num=($results = mysql_query($results)) ? mysql_num_rows($results): 0;
	$resultss_num=($resultss = mysql_query($resultss)) ? mysql_num_rows($resultss): 0;
	if ($results_num === 0 && $resultss_num === 0) {
    return false;
	}   
 } 




?>