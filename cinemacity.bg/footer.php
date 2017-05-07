
		<footer class="container">
			<div class="row">

			<div class="col-md-3 text-center footer-left">
				<a href="#" role="button" data-toggle="modal" data-target="#login-modal">Admin</a>
				<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			    	<div class="modal-dialog">
  						<div class="modal-content">
                <div class="modal-header" align="center">
                  <img class="img-circle" id="img_logo" src="assets/images/cc_logo.png">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                  </button>
                </div>
                <div id="div-forms">
                  <form id="login-form" method="POST" action="admin/adminsubmit.php">
                    <div class="modal-body">
                      <input name="adminUsername" class="form-control" type="text" placeholder="Username">
                      <input name="adminPassword" class="form-control" type="password" placeholder="Password">
                    </div>
                  <div class="modal-footer">
                  <input type="submit" type="adminSubmit" class="btn btn-primary btn-lg btn-block" value="Влез">
                  </div>
                  </form>
                </div>
              </div>
            </div><!-- modal-dialog -->
				</div> <!-- modal fade -->
			</div><!-- class="col-md-3" -->

			<div class="col-md-3 text-center footer-center">
				<ul>
					<li><a href="contact.php" title="Contact">Свържете се с нас</a></li>
				</ul>
			</div>
			<div class="col-md-3 text-center footer-right">
				<ul>
					<li><a href="http://pl.globalcityholdings.com/" title="Cinema City International">Cinema City International</a></li>
				</ul>
			</div>
			<div class="col-md-3 text-center footer-right">
				<ul>
					<li><a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a></li>

				</ul>
			</div>										

			</div>
		</footer>

		  <!-- JavaScript
		  ================================================== -->    
		<script src="assets/js/vendor/jquery.fitvids.js"></script>
		<script src="assets/js/jquery.bxslider.min.js"></script>
		<script src="assets/js/jquery.prettyPhoto.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/scripts.js"></script>
	</body>
</html>