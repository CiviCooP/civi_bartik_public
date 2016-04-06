<div id="page-wrapper"><div id="page">

  <div class="topbar"></div>

  <div id="header" class="header <?php print $secondary_menu ? 'with-secondary-menu' : 'without-secondary-menu'; ?>"><div class="section clearfix">
    <div class="wrapper">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan): print ' class="element-invisible"'; endif; ?>>

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"<?php if ($hide_site_name): print ' class="element-invisible"'; endif; ?>>
                <strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong>
              </div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name"<?php if ($hide_site_name): print ' class="element-invisible"'; endif; ?>>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"<?php if ($hide_site_slogan): print ' class="element-invisible"'; endif; ?>>
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>

        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>

      <?php if ($main_menu): ?>
        <div id="main-menu" class="navigation">
          <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </div> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($secondary_menu): ?>
        <div id="secondary-menu" class="navigation">
          <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'id' => 'secondary-menu-links',
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Secondary menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </div> <!-- /#secondary-menu -->
      <?php endif; ?>


    </div> <!-- /.wrapper -->
  </div></div> <!-- /.section, /#header -->

  <div class="wrapper">

    <?php if ($messages): ?>
      <div id="messages"><div class="section clearfix">
        <?php print $messages; ?>
      </div></div> <!-- /.section, /#messages -->
    <?php endif; ?>

    <?php if ($page['featured']): ?>
      <div id="featured"><div class="section clearfix">
        <?php print render($page['featured']); ?>
      </div></div> <!-- /.section, /#featured -->
    <?php endif; ?>

  </div> <!-- /.wrapper -->

  <div id="main-wrapper" class="clearfix main-wrapper"><div id="main" class="clearfix">

    <div class="wrapper">

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <div class="main-content">
        
        <div id="content" class="column"><div class="section">
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="title" id="page-title">
              <?php print $title; ?>
            </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>

        </div></div> <!-- /.section, /#content -->

      </div> <!-- /.main-content -->

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
      <div id="triptych-wrapper"><div id="triptych" class="clearfix">
        <?php print render($page['triptych_first']); ?>
        <?php print render($page['triptych_middle']); ?>
        <?php print render($page['triptych_last']); ?>
      </div></div> <!-- /#triptych, /#triptych-wrapper -->
    <?php endif; ?>

    <div id="footer-wrapper"><div class="section">

      <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
        <div id="footer-columns" class="clearfix">
          <?php print render($page['footer_firstcolumn']); ?>
          <?php print render($page['footer_secondcolumn']); ?>
          <?php print render($page['footer_thirdcolumn']); ?>
          <?php print render($page['footer_fourthcolumn']); ?>
        </div> <!-- /#footer-columns -->
      <?php endif; ?>

      <?php if ($page['footer']): ?>
        <div id="footer" class="clearfix">
          <?php print render($page['footer']); ?>
        </div> <!-- /#footer -->
      <?php endif; ?>

    </div></div> <!-- /.section, /#footer-wrapper -->

  </div> <!-- /.wrapper -->
</div></div> <!-- /#page, /#page-wrapper -->
