<?php
$url = explode('/', $_SERVER['REQUEST_URI']);
$url = end($url);

$menu_items = array();
$menu_items['index.php'] = array('icon' => 'fa-home', 'text' => 'Dashboard', 'notification' => '4', 'class' => 'lightblue');
$menu_items['layouts.php'] = array('icon' => 'fa-desktop', 'text' => 'Layouts', 'notification' => '', 'class' => 'purple');
$menu_items['layouts.php']['children']['index-fixed-sidebar.php'] = array('text' => 'Fixed Sidebar', 'notification' => '');
$menu_items['layouts.php']['children']['index-collapsed-sidebar.php'] = array('text' => 'Collapsed Sidebar', 'notification' => '');
$menu_items['layouts.php']['children']['index-fixed-header-bar.php'] = array('text' => 'Fixed Header Bar', 'notification' => '');
$menu_items['animated.php'] = array('icon' => 'fa-css3', 'text' => 'Animated Elements', 'notification' => '62', 'notification_color' => 'lightgreen', 'class' => 'orange', 'id' => 'step6');

$menu_items['pages.php'] = array('icon' => 'fa-windows', 'text' => 'Pages', 'notification' => '', 'class' => 'lightred');
$menu_items['pages.php']['children']['login.php'] = array('icon' => 'fa-lock', 'text' => 'Login Page', 'notification' => '');
$menu_items['pages.php']['children']['register.php'] = array('icon' => 'fa-lock', 'text' => 'Register Page', 'notification' => '');
$menu_items['pages.php']['children']['404.php'] = array('icon' => 'fa-lock', 'text' => '404 Error Page', 'notification' => '');
$menu_items['pages.php']['children']['500.php'] = array('icon' => 'fa-lock', 'text' => '500 Error Page', 'notification' => '');
$menu_items['pages.php']['children']['blank.php'] = array('icon' => 'fa-lock', 'text' => 'Blank Page', 'notification' => '');
$menu_items['pages.php']['children']['profile.php'] = array('icon' => 'fa-lock', 'text' => 'Profile Page', 'notification' => '');

$menu_items['ui-elements.php'] = array('icon' => 'fa-rocket', 'text' => 'UI Elements', 'notification' => '', 'class' => 'green');
$menu_items['ui-elements.php']['children']['general.php'] = array('text' => 'General', 'notification' => '');
$menu_items['ui-elements.php']['children']['buttons.php'] = array('text' => 'Buttons', 'notification' => '');
$menu_items['ui-elements.php']['children']['grid.php'] = array('text' => 'Grids', 'notification' => '');
$menu_items['ui-elements.php']['children']['calendar.php'] = array('text' => 'Calendar', 'notification' => '');
$menu_items['ui-elements.php']['children']['tocify.php'] = array('text' => 'Tocify', 'notification' => '');
$menu_items['ui-elements.php']['children']['tables.php'] = array('text' => 'Tables', 'notification' => '');
$menu_items['ui-elements.php']['children']['tooltips-and-popovers.php'] = array('text' => 'Tooltips & Popovers', 'notification' => '');
$menu_items['ui-elements.php']['children']['timeline.php'] = array('text' => 'Timeline', 'notification' => '');
$menu_items['icons.php'] = array('icon' => ' fa-asterisk', 'text' => 'Icons', 'notification' => '7', 'notification_color' => 'lightgreen', 'class' => 'blue');
$menu_items['maps.php'] = array('icon' => 'fa-map-marker', 'text' => 'Maps', 'notification' => '21', 'notification_color' => 'lightblue', 'class' => 'lightblue');
$menu_items['maps.php']['children']['google-maps.php'] = array('text' => 'Google Maps', 'notification' => '');
$menu_items['maps.php']['children']['vector-maps.php'] = array('text' => 'Vector Maps', 'notification' => '');
$menu_items['progress-bars.php'] = array('icon' => 'fa-signal', 'text' => 'Progress Bars', 'notification' => '', 'class' => 'lightorange');
$menu_items['forms.php'] = array('icon' => 'fa-book', 'text' => 'Forms', 'notification' => '', 'class' => 'lightyellow');
$menu_items['forms.php']['children']['general-forms.php'] = array('text' => 'General Form Elements');
$menu_items['forms.php']['children']['smart-forms.php'] = array('text' => 'Smart Form Elements');
$menu_items['forms.php']['children']['form-wizards.php'] = array('text' => 'Form Wizards');
$menu_items['settings.php'] = array('icon' => 'fa-cogs', 'text' => 'Settings', 'notification' => '2', 'notification_color' => 'blue', 'class' => 'pink');
$menu_items['pricing-tables.php'] = array('icon' => 'fa-table', 'text' => 'Pricing Tables', 'notification' => '2', 'notification_color' => 'green', 'class' => 'cream');
$menu_items['tabs.php'] = array('icon' => 'fa-bars', 'text' => 'Tabs & Accordions', 'notification' => '', 'class' => 'marine');
$menu_items['projects.php'] = array('icon' => 'fa-folder-open-o', 'text' => 'Projects', 'notification' => '', 'class' => 'darkblue');
$menu_items['tasks.php'] = array('icon' => 'fa-file-text-o', 'text' => 'Tasks', 'notification' => '', 'class' => 'lightyellow');
$menu_items['invoice.php'] = array('icon' => 'fa-money', 'text' => 'Invoice', 'notification' => '', 'class' => 'purple');
?>

<ul class="menu">
  <li>
      <a href="#">&nbsp;</a>
  </li>
  <?php
    foreach ($menu_items as $key => $menu_item) {
      $class = '';
      if ($url == $key || (isset($menu_item['children']) && array_key_exists($url, $menu_item['children']))) {
        $class = 'active';
      }

      $item_link = '';
      if (!isset($menu_item['children'])) {
        $item_link = $key;
      } else {
        $class .= ' parent';
      }

      if (isset($menu_item['class'])) {
        $class .= ' ' . $menu_item['class'];
      }

    $child_open = false;

    if (($url == $key || (isset($menu_item['children']) && array_key_exists($url, $menu_item['children'])))
    && isset($menu_item['children'])
    ) {
      $child_open = true;
    }


    $class = trim($class);
  ?>
    <li class="<?php echo $class; ?>">
      <a href="<?php echo $item_link; ?>">
        <span class="menu-icon"><i class="fa <?php echo $menu_item['icon']; ?>"></i></span>
      </a>

      <?php

      }
      ?>

    </li>
</ul>