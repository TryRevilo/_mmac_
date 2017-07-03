<style type="text/css">

  #header-main {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    z-index: 999 !important;
    width: 100% !important;
    height: 52px !important;
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

  /* The container <div> - needed to position the dropdown content */
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

</style>

<header id="header-main">
 <div class="container">
  <div class="navbar yamm navbar-default">
   <div class="navbar-header">
    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="." class="navbar-brand">MMAC Advocates</a>
  </div>
  <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">

    <nav class="header-navigation">
      <ul class="clearfix nav navbar-nav">
        <?php
        wp_nav_menu( array(
          'theme_location'  => 'primary-menu',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => '',
          'menu_id'         => '',
          'items_wrap'      => '%3$s',
          // 'walker'          => new Illdy_Extended_Menu_Walker(),
          'fallback_cb'     => 'Illdy_Extended_Menu_Walker::fallback',
          ) );
          ?>
        </ul><!--/.clearfix-->
      </nav><!--/.header-navigation-->

      <nav class="responsive-menu">
        <ul>
          <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary-menu',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'items_wrap'      => '%3$s',
            'walker'          => new Illdy_Extended_Menu_Walker(),
            'fallback_cb'     => 'Illdy_Extended_Menu_Walker::fallback',
            ) );
            ?>
          </ul>
        </nav><!--/.responsive-menu-->

        <?php
        if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ):
          get_template_part( 'sections/front-page', 'bottom-header' );
        else:
          get_template_part( 'sections/blog', 'bottom-header' );
        endif;
        ?>

      </div>
    </div>
  </div>
</header>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>