<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
</head>
<body>
            <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

        <!-- loading proses (prosegress bar) -->
        <div id="loadingProgress" class="modal hide loadingProgress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static" data-keyboard="false">
            <div class="progress progress-striped">
                <div class="bar" style="width: 100%;" id="labelProgressBar">sedang diproses...</div>
            </div>
        </div>
<div class="navbar navbar-fixed-top">
    <?php $this->load->view('view_navbar'); ?>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
    <?php $this->load->view('view_navbar_sub') ; ?>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
    <?php $this->load->view($page); ?>
</div>
<!-- /main --> 
<!-- /extra -->
<div class="footer">
    <?php $this->load->view('view_footer'); ?>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>/assets/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>/assets/js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>/assets/js/full-calendar/fullcalendar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.bootstrap.js"></script>
      
<script src="<?php echo base_url(); ?>/assets/js/base.js"></script> 

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/widgets.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-editable.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/select2.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-alert.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-scrollspy.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-tab.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-button.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-collapse.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-typeahead.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-affix.js"></script>
<!--            <script type="text/javascript" src="<?php //echo base_url()              ?>assets/js/nagging-menu.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.tablePagination.0.5.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-modalmanager.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.serialize-object.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.bootstrap.js"></script>
        <!-- http://datatables.net/ -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
        <!-- autosuggest input http://code.drewwilson.com/entry/autosuggest-jquery-plugin -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.autoSuggest.minified.js"></script>
        <!-- format numeral -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/numeral.js"></script>
        <!-- custom dialog -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootbox.min.js"></script>

        <!-- Jquery ui DO NOT REMOVE THIS LINE!-->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.numeric.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-sliderAccess.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.masking.min.js"></script>
        <!-- handsontable -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.handsontable.full.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/tree_multiselect.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-tooltip.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-popover.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/vscroller.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jqClock.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.fixheadertable.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.inputmask.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.inputmask.date.extensions.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.inputmask.numeric.extensions.js"></script>

        <script type="text/javascript">
            var jqValidateReq = <?php echo!empty($jqValidateReq) ? (int) $jqValidateReq : 0; ?>;
            if( jqValidateReq == true) {
                $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
            }
            servertime = parseFloat( $("input#servertime").val() ) * 1000;
            $("#clock").clock({"format":"24","langSet":"simrs","timestamp":servertime});
	
        </script>

<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }



        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->

     <script>
        function showPopOver(){
            $('.brand').popover('show');
        }
            
        function hidePopOver(){
            $('.brand').popover('hide');
        }
            
        $(document).ready(function(){
            $('.loadingProgress').modal('hide');
        });
            
        function showProgressBar(msg){
            $('#labelProgressBar').html(msg+'...');
            $('.loadingProgress').modal('show');
        }
            
        function hideProgressBar(){
            $('.loadingProgress').modal('hide');
        }
    </script>
</body>
</html>
