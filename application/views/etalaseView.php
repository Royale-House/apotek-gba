
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

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

	<!-- MAIN CONTENT -->
	<div id="content">

		
		<!-- widget grid -->
		<section id="widget-grid" class="">
		
			<!-- row -->
			<div class="row">
		
				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
		
						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"
		
						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-table"></i> </span>
							<h2>Data Etalase </h2>
		
						</header>
		
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body no-padding">
		
						        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
									<thead>			                
										<tr>
											<th data-hide="phone">Posisi Etalase</th>
											<th data-class="expand">Keterangan</th>
											<th data-hide="phone,tablet">Status</th>
											<th data-hide="phone,tablet">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td><button class="btn btn-xs btn-default" data-original-title="Edit Row" onclick="jQuery('#jqgrid').editRow('1');"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-xs btn-default" data-original-title="Save Row" onclick="jQuery('#jqgrid').saveRow('1');"><i class="fa fa-save"></i></button>
											<button class="btn btn-xs btn-default" data-original-title="Cancel" onclick="jQuery('#jqgrid').restoreRow('1');"><i class="fa fa-times"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
		
				</article>
				<!-- WIDGET END -->
		
			</div>
		
			<!-- end row -->
		
			<!-- end row -->
		
		</section>
		<!-- end widget grid -->


	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

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