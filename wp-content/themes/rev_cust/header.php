<?php include("rev_start.php");  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <style>
         #header-main {
         position: fixed !important;
         top: 0 !important;
         left: 0 !important;
         z-index: 999 !important;
         width: 100% !important;
         height: 0 !important;
         padding-bottom: 10px !important;
         background-color: #FFF !important;
         }
         .tapper-rev {
         padding-top: 50px;
         }
         /* Dropdown Button */
         .dropbtn {
         background-color: #FFF;
         color: inherit;
         padding: 16px;
         padding-top: 16px;
         font-size: inherit;
         border: none;
         cursor: pointer;
         }
         /* Dropdown button on hover & focus */
         .dropbtn:hover, .dropbtn:focus {
         background-color: #3e8e41;
         }
         /* The container 
         <div>
         - needed to position the dropdown content */
         .dropdown {
         position: relative;
         display: inline-block;
         }
         /* Dropdown Content (Hidden by Default) */
         .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f9f9f9;
         min-width: 360px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
         }
         /* Links inside the dropdown */
         .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
         }
         /* Change color of dropdown links on hover */
         .dropdown-content a:hover {background-color: #f1f1f1}
         /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
         .show {display:block;}
         .menu li a:hover {
         }
         #header-main .dropdown-menu li {
         background: #FFF !important;
         min-width: 355px;
         }
         <--logged in-->
         .main-container{
         margin-top: 23px;
         }
         <--logged out-->
         .main-container{
         margin-top: 155px;
         }
         li {list-style-type: none !important;}
      </style>
      <?php wp_head(); ?>
      <?php include( get_stylesheet_directory() . '/js_includes.php' ); ?>
   </head>
   <body <?php body_class(); ?>>
      <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>
      <header id="header-main" class="site-header" role="banner">
         <div class="nav-container">
            <nav id="site-navigation" class="main-navigation" role="navigation">
               <div class="container nav-bar">
                  <div class="row">
                     <div class="module left site-title-container">
                        <?php shapely_get_header_logo(); ?>
                     </div>
                     <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="fa fa-bars"></i>
                     </div>
                     <div class="module-group right">
                        <div class="module left">
                           <?php shapely_header_menu(); // main navigation ?>
                        </div>
                        <!--end of menu module-->
                        <div class="module widget-handle search-widget-handle left hidden-xs hidden-sm">
                           <div class="search">
                              <i class="fa fa-search"></i>
                              <span class="title"><?php esc_html_e( "Site Search", 'shapely' ); ?></span>
                           </div>
                           <div class="function"><?php
                              get_search_form(); ?>
                           </div>
                        </div>
                     </div>
                     <!--end of module group-->
                  </div>
               </div>
            </nav>
            <!-- #site-navigation -->
         </div>
      </header>
      <?PHP if( is_home() ) { ?>
      <!-- HEADER -->
      <div class="header-wrap">
         <!-- SLIDER -->
         <div class="slider-wrap">
            <?php include("includes/slider.php"); ?>
         </div>
      </div>
      <?PHP } ?>
      <!-- #masthead -->
      <div id="content" class="main-container">
      <?php if ( ! is_page_template( 'page-templates/template-home.php' ) ): ?>
      <div class="header-callout">
      </div>
      <?php endif; ?>
      <div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) ) ? 'container' : ''; ?>"
         role="main">