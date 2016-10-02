<header>
	<div class="offscreen1"></div> 
	<div id="head1">  
		<button onclick="DisableCss ();">View simple HTML</button>
		<button onclick="EnableCss ();">View Graphics</button>

		<script type="text/javascript">

		function DisableCss() {
			for ( i=0; i<document.styleSheets.length; i++) {
				document.styleSheets.item(i).disabled=true;
			}
		}

		function EnableCss() {
			for ( i=0; i<document.styleSheets.length; i++) {
				document.styleSheets.item(i).disabled=false;
			}
		}
		</script>
	</div>
</header>