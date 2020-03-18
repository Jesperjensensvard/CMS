<?php 
function page_header()
{
   //return include_once('../theme/header.php');
    ob_start();
    include( dirname ( __FILE__ ) . '/header.php' );
    return ob_get_clean();
     
}
function page_footer()
{
    if(file_exists('../theme/footer.php')){
        return include_once('../theme/footer.php'); 
    }else {
        return "No footer.php";
    }
}
function Site_title()
{
    // get site tile from admin;

}
function page_title()
{
 // get it from post 
}