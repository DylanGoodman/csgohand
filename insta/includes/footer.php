
<!-- Javascript -->
<script src="assets/jquery/jquery.min.js"></script>

<!-- Custom Scroll Bar -->
<script src="assets/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {

  $("html").niceScroll({cursorwidth:'10px',
                        cursorborderradius: '2px',
                        cursoropacitymin: '0.3'});

  /* Close container elements */
  $('a', '.close-box').click(function(){
    var obj = $(this);
    var box   = $(obj).parents('.box');
    var chart = $(obj).parents('.chart');

    if ($(box).length) {
      $(box).slideUp(400);
    } else if ($(chart).length) {
      $(chart).slideUp(400);
    }

    return false;
  });

  /* Close container elements */
  $('a.remove-box', '.boxed').click(function(){
    var link = $(this);
    var icon = $('i', link);
    var parent = $(this).parent().parent().parent().parent();

    if ($(parent).length) {
      $(parent).slideUp(400);
    }

    return false;
  });

  /* Delete Tasks */
  $('a.delete', '.actions').click(function(){
    var obj = $(this);
    var li = $(obj).parents('li');

    if ($(li).length) {
      $(li).slideUp(350);
    }

    return false;
  });



});
</script>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/charts/table-to-chart.js"></script>
<script src="assets/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/fullcalendar/gcal.js"></script>
<script src="assets/sidebar/min-height.js"></script>

<!-- Bootstrap Assets -->


<!-- DataTables -->
<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/jquery.dataTables.min.js"></script>

<!-- jQuery UI -->
<script src="assets/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>

<!-- Morris Charts -->
<script src="assets/morrischarts/raphael.js"></script>
<script src="assets/morrischarts/morris.js"></script>


<!-- FlotCharts  -->
<script src="assets/flotcharts/flotcharts-common.js"></script>
<script src="assets/flotcharts/jquery.flot.min.js"></script>
<script src="assets/flotcharts/jquery.flot.resize.min.js"></script>
<script src="assets/flotcharts/jquery.flot.canvas.min.js"></script>
<script src="assets/flotcharts/jquery.flot.image.min.js"></script>
<script src="assets/flotcharts/jquery.flot.categories.min.js"></script>
<script src="assets/flotcharts/jquery.flot.crosshair.min.js"></script>
<script src="assets/flotcharts/jquery.flot.errorbars.min.js"></script>
<script src="assets/flotcharts/jquery.flot.fillbetween.min.js"></script>
<script src="assets/flotcharts/jquery.flot.navigate.min.js"></script>
<script src="assets/flotcharts/jquery.flot.pie.min.js"></script>
<script src="assets/flotcharts/jquery.flot.selection.min.js"></script>
<script src="assets/flotcharts/jquery.flot.stack.min.js"></script>
<script src="assets/flotcharts/jquery.flot.symbol.min.js"></script>
<script src="assets/flotcharts/jquery.flot.threshold.min.js"></script>
<script src="assets/flotcharts/jquery.colorhelpers.min.js"></script>
<script src="assets/flotcharts/jquery.flot.time.min.js"></script>
<script src="_demo/charts/dashboard.js"></script>

<script>
  Morris.Bar({
    element: 'myfirstchart',
    data: [
      { y: 'Sun', a: 1000 },
      { y: 'Mon', a: 754 },
      { y: 'Tue', a: 824 },
      { y: 'Wed', a: 1144 },
      { y: 'Thu', a: 985 },
      { y: 'Fri', a: 1180 },
      { y: 'Sat', a: 760 }
    ],
    barColors: function (row, series, type) {
      if (type === 'bar') {
        var red = Math.ceil(234 * row.y / this.ymax);
        return 'rgb(234,' + red + ',137)';
      }
    },
    xkey: 'y',
    ykeys: ['a'],
    labels: ['Series A'],
    lineColors:['#E67A77','#79D1CF']
  });
</script>

<!-- Tocify -->
<script src="assets/tocify/tocify.js"></script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
  $(function() {
    $( ".vertical-tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( ".vertical-tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });

</script>

<?php
global $javascripts;
if (is_array($javascripts)) {
foreach ($javascripts as $key => $file) {
  echo '<script type="text/javascript" src="' . $file . '"></script>';
}
}
?>

<script type="text/javascript">

  google.load("visualization", "1", {packages:["corechart"]});
  google.load('visualization', '1', {'packages': ['geochart']});

  jQuery(document).ready(function($){

    $('.collapse-sidebar').click(function(){
      var body = $('body');
      if ($(body).hasClass('collapsed-sidebar')) {
        $(body).removeClass('collapsed-sidebar');
        $('.logo-container', body).show();
        $('.sidebar-profile', body).show();
        $('ul.menu li .menu-text, ul.menu li .notification', body).show();
      } else {
        $(body).addClass('collapsed-sidebar');
        $('.logo-container', body).hide();
        $('.sidebar-profile', body).hide();
        $('ul.menu li .menu-text, ul.menu li .notification', body).hide();
      }
      return false;
    });

    $('.responsive-menu>a').click(function(){
      var menu = $('ul.menu', '.sidebar');
      if ($(menu).is(':visible')) {
        $(menu).slideUp(800);
      } else {
        $(menu).slideDown(800);
      }
    });

    $('a.close-box', '.boxed').click(function(){
      var link = $(this);
      var icon = $('i', link);
      var parent = $(this).parent().parent().parent().parent();
      var inner = $('.inner', parent);
      if ($(inner).is(':visible')) {
        $(inner).slideUp(800);
        $(icon).removeClass('fa-chevron-up').addClass('fa-chevron-down');
      } else {
        $(inner).slideDown(800);
        $(icon).removeClass('fa-chevron-down').addClass('fa-chevron-up');
      }
    });

    $('li.parent>a', 'ul.menu').click(function(){
      var link = $(this);
      var obj = $(this).parent();
      var child = $('ul.child', obj);

      if ($(child).is(':visible')) {
        $(child).slideUp(400);
        $(link).removeClass('close-child');
      } else {
        $(child).slideDown(400);
        $(link).addClass('close-child');
      }

      return false;
    });

    $('.table-to-chart').tabletochart();

    $('.data-table').dataTable();

    $('.calendar-widget').datepicker();

    $(".tocify-nav").tocify({scrollTo:80, context:'.tocify-content',selectors:"h2,h3,h4,h5"});

    // ToolTips
    $('[data-toggle="tooltip"]').each(function(i, el) {
      var tooltip = $(el);
      $(tooltip).tooltip();
    });

    // PopOver
    $('[data-toggle="popover"]').each(function(i, el) {
      var popover = $(el);
      $(popover).popover();
      $(popover).on('shown.bs.popover',function(ev) {
        var $popover = $(popover).next();
        $popover.addClass($(popover).attr('data-popover-class'));
      });
    });

    // Collapsible Accordion
    $('.collapsible-accordion').accordion({collapsible: true});

    // Collapsible Accordion - Custom Icons
    $('.collapsible-accordion.custom-icons').accordion({icons: {header:'ui-accordion-open', activeHeader:'ui-accordion-close'}});

    // Animated Loading Progress Bar
    $('.progress.animated').each(function(index, el) {
      var obj   = $(el);
      var bar   = $('.progress-bar', obj);
      var value = $(bar).attr('aria-valuenow');
      var text  = $('.sr-only', obj);
      var percentage_size = $(obj).width()*(value/100);

      var width = 0;
      var i = setInterval(function(){
        width = $(bar).width();
        $(bar).css('width', width+35);
        if (width >= percentage_size) {
          clearInterval(i);
          $(bar).html(value + '%');
        }
      }, 250);
    });




  });
</script>
<script type="text/javascript" src="_demo/introjs/init.js"></script>
</body>
</html>