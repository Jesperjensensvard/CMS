<?php
require_once('cms-content/functionsHandler.php');
require_once('config.php');
page_header();
if(DB_NAME == "dbname" && DB_USER == "username" && DB_PASSWORD == "password" && DB_HOST == "localhost"){
    header("location: ../CMS/setup.php");  
}else{

}
page_footer();



