<?php

/**
* @file
* Default theme implementation to display a single Drupal page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.tpl.php template in this directory.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
* least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
* or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
*
* Site identity:
* - $front_page: The URL of the front page. Use this instead of $base_path,
* when linking to the front page. This includes the language domain or
* prefix.
* - $logo: The path to the logo image, as defined in theme configuration.
* - $site_name: The name of the site, empty when display has been disabled
* in theme settings.
* - $site_slogan: The slogan of the site, empty when display has been disabled
* in theme settings.
*
* Navigation:
* - $main_menu (array): An array containing the Main menu links for the
* site, if they have been configured.
* - $secondary_menu (array): An array containing the Secondary menu links for
* the site, if they have been configured.
* - $breadcrumb: The breadcrumb trail for the current page.
*
* Page content (in order of occurrence in the default page.tpl.php):
* - $title_prefix (array): An array containing additional output populated by
* modules, intended to be displayed in front of the main title tag that
* appears in the template.
* - $title: The page title, for use in the actual HTML content.
* - $title_suffix (array): An array containing additional output populated by
* modules, intended to be displayed after the main title tag that appears in
* the template.
* - $messages: HTML for status and error messages. Should be displayed
* prominently.
* - $tabs (array): Tabs linking to any sub-pages beneath the current page
* (e.g., the view and edit tabs when displaying a node).
* - $action_links (array): Actions local to the page, such as 'Add menu' on the
* menu administration interface.
* - $feed_icons: A string of all feed icons for the current page.
* - $node: The node object, if there is an automatically-loaded node
* associated with the page, and the node ID is the second argument
* in the page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*/
?>

<!-- Main Header Section Site
==================================-->
<header role="banner" class="l-header">

  <?php if ($top_bar): ?>
    <!--.top-bar -->
    <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
    <?php endif; ?>
      <nav class="top-bar"<?php print $top_bar_options; ?>>
        <ul class="title-area">
          <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
        </ul>
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php print $top_bar_secondary_menu; ?>
          <?php endif; ?>
        </section>
      </nav>
    <?php if ($top_bar_classes): ?>
    </div>
    <?php endif; ?>
  <!--/.top-bar -->
  <?php endif; ?>

  <!-- Call numbers information to clients -->
  <?php if (!empty($page['call_info'])): ?>
    <section id="contact-info" class="row">
      <?php print render($page['call_info']); ?>
    </section>
  <?php endif ?>

  <section id="navigation" class="hide-for-small">

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <div class="row <?php print $alt_header_classes; ?>">

        <div class="large-4 columns left">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name" class="element-invisible">
                <strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong>
              </div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name" class="element-invisible">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <span><?php print $site_name; ?></span>
                </a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>
        </div>

        <div class="large-8 columns right">
          <?php if ($alt_main_menu): ?>
            <nav id="main-menu" class="navigation" role="navigation">
              <?php print ($alt_main_menu); ?>
              <?php if ($alt_secondary_menu): ?>
                <?php print $alt_secondary_menu; ?>
              <?php endif; ?>
            </nav> <!-- /#main-menu -->
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?><!-- End title, slogan and menu -->

  </section>

  <!--.l-header-region -->
  <section class="l-header-region row">
    <div class="large-12 columns">
      
      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan">
          <?php print $site_slogan; ?>
        </h2>
      <?php endif; ?>
        
      <?php if (!empty($page['header'])): ?>
        <?php print render($page['header']); ?>
      <?php endif; ?>
    </div>

  </section>
  <!--/.l-header-region -->
  
</header>
<!--/.l-header -->

<!-- Featured Section Site
==================================-->
<?php if (!empty($page['featured'])): ?>
  <section id="featured">
    <div class="row">
      <?php print render($page['featured']); ?>
    </div>
  </section> 
<?php endif ?>
 
<!-- Main Content Section Site
==================================-->
<section class="content-header row">
  
  <!-- site's title -->
  <?php if ($title && !$is_front): ?>
    <?php print render($title_prefix); ?>
    <div class="large-12 columns">
      <h1 id="page-title" class="title"><?php print $title; ?></h1>
      <?php print render($title_suffix); ?>
    </div>
  <?php endif; ?>    
      
  <!-- breadcumbs -->
  <?php if ($breadcrumb): ?>
    <div class="large-12 column">
      <?php if ($breadcrumb): print $breadcrumb; endif; ?>
    </div>
  <?php endif ?>

</section>

<!-- main content -->
<main role="main" class="row l-main">
  <div class="<?php print $main_grid; ?> main columns">
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <a id="main-content"></a>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
      <section class="l-messages row">
        <div class="large-12 columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
      <section class="l-help row">
        <div class="large-12 columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
    <!--/.l-help -->
    <?php endif; ?>

    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    
    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first large-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle large-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last large-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>
    
    <?php print render($page['content']); ?>
    
  </div>
  <!--/.main region -->

  <?php if (!empty($page['sidebar_first'])): ?>
    <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
      <?php print render($page['sidebar_first']); ?>
    </aside>
  <?php endif; ?>

  <?php if (!empty($page['sidebar_second'])): ?>
    <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
      <?php print render($page['sidebar_second']); ?>
    </aside>
  <?php endif; ?>
</main>
<!--/.main-->

<!-- Clients Section
==================================-->
<?php if (!empty($page['clients'])): ?>
  <section id="clients">
    <div class="row">
      <?php print render($page['clients']); ?>
    </div>
  </section>   
<?php endif ?> 

<!-- Mapbox Section
==================================-->
<?php if (!empty($page['map'])): ?>
  <section id="map">
    <?php print render($page['map']); ?>
  </section>
<?php endif ?>

<!-- Footer Section
==================================-->
<footer class="l-footer" role="contentinfo">
    
  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="l-footer-columns row">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-4 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-4 columns">
         <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-4 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
    <?php endif; ?>
    <section class="low-footer row">
      <?php if (!empty($page['footer'])): ?>
        <div class="footer large-12 columns">
          <?php print render($page['footer']); ?>
        </div>
      <?php endif; ?>

      <?php if ($site_name) :?>
        <div class="copyright large-12 columns">
          &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </section>

</footer>
<!--/.footer-->

<?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>