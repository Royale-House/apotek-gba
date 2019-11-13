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

<!-- PAGE script -->
<?php 
    $this->load->view('layout/script');
?>
<!-- END PAGE script -->