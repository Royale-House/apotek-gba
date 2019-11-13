<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

                <span class="ribbon-button-alignment">
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"
                          rel="tooltip" data-placement="bottom"
                          data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings."
                          data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span>
                </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li><?= $menu ?></li>
            <li><?= $menuParent ?></li>
        </ol>
        <!-- end breadcrumb -->


    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="container">
            <div class="row">
                    <div style="margin-top:50px;">
                        <center>
                            <img src="<?=base_url()?>assets/smartadmin/img/coffee.jpg" width="80%">
                        </center>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<?php 
    $this->load->view('layout/footer');
?>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
        Note: These tiles are completely responsive,
        you can add as many as you like
        -->
<div id="shortcut">
    <ul>
        <li>
            <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Inbox <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>

<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->

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

</body>

</html>