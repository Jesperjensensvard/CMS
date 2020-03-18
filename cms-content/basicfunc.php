<?php 
function page_header()
{
    return  include( dirname ( __FILE__ ) . '/theme/header.php' );  
}
function page_footer()
{
    return  include( dirname ( __FILE__ ) . '/theme/footer.php' ); 
}
function Site_title()
{
    // get site tile from admin;

}
function page_title()
{
 // get it from post 
}
page_header();
