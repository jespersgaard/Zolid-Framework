<?php
if(!defined('CORE_PATH')){
	exit;
}
?>
		</div>

		<div id="footer">
			<div class="container">
				<p class="text-muted credit">Zolid Framework by <a href="https://twitter.com/markeliasen">@MarkEliasen</a>. Released under the <a href="http://opensource.org/licenses/mit-license.php">MIT License</a>.</p>
			</div>
		</div>

		<div class="modal fade" id="modal"></div>

		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo $this->base_url; ?>/assets/js/bootstrap.min.js"></script>
		<!-- zxcvbn / password strength -->
		<script type="text/javascript" src="<?php echo $this->base_url; ?>/assets/libs/zxcvbn/zxcvbn.js"></script>
        <!-- Password strength checker -->
		<script type="text/javascript" src="<?php echo $this->base_url; ?>/assets/js/password_check.js"></script>
		<!-- Zolid Framework scripts -->
		<script type="text/javascript" src="<?php echo $this->base_url; ?>/assets/js/zfscripts.js"></script>

		<!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
		<script type="text/javascript" src="<?php echo $this->base_url; ?>/assets/js/respond.min.js"></script>
	</body>
</html>
