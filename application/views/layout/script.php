<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="<?=base_url()?>assets/smartadmin/js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="<?=base_url()?>assets/smartadmin/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="<?=base_url()?>assets/smartadmin/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="<?=base_url()?>assets/smartadmin/js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="<?=base_url()?>assets/smartadmin/js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="<?=base_url()?>assets/smartadmin/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/fastclick/fastclick.min.js"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only
<script src="<?=base_url()?>assets/smartadmin/js/demo.min.js"></script>-->

<!-- MAIN APP JS FILE -->
<script src="<?=base_url()?>assets/smartadmin/js/app.min.js"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin
<script src="<?=base_url()?>assets/smartadmin/js/speech/voicecommand.min.js"></script>-->

<!-- SmartChat UI : plugin -->
<script src="<?=base_url()?>assets/smartadmin/js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/smart-chat-ui/smart.chat.manager.min.js"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?=base_url()?>assets/smartadmin/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/smartadmin/js/plugin/chartjs/chart.min.js"></script>


<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {
        pageSetUp();
    })

</script>

<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function() {
	
	/* // DOM Position key index //
		
	l - Length changing (dropdown)
	f - Filtering input (search)
	t - The Table! (datatable)
	i - Information (records)
	p - Pagination (paging)
	r - pRocessing 
	< and > - div elements
	<"#id" and > - div with an id
	<"class" and > - div with a class
	<"#id.class" and > - div with an id and class
	
	Also see: http://legacy.datatables.net/usage/features
	*/	

	/* BASIC ;*/
		var responsiveHelper_dt_basic = undefined;
	
		var breakpointDefinition = {
			tablet : 1024,
			phone : 480
		};

		$('#dt_basic').dataTable({
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_dt_basic) {
					responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_dt_basic.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_dt_basic.respond();
			}
		});

	/* END BASIC */
	


})

</script>

</body>

</html>