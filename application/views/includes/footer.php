
	<div class="container-fluid pink" style="padding-top: 20px; padding-bottom: 20px; color: #e91e63">
		<div class="row justify-content-center text-center">
			<div class="col-10">
				<a class="social">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a class="social">
					<i class="fab fa-twitter"></i>
				</a>
				<a class="social">
					<i class="fab fa-linkedin-in"></i>
				</a>
				<a class="social">
					<i class="fab fa-github"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="row justify-content-center">
			<div>
				<img id="logo" src="assets/img/logobranco.png"  style="height: 40px" class="animated">
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function(){
		$('#menu').hide();
		$('#corpo').hide();
		setTimeout(function(){
			$('#logo').removeClass("fadeIn");
			$('#logo').addClass("fadeOut 2s");
		}, 2000);
		setTimeout(function(){
			$('#fundo').removeClass("fundo1");
			$('#fundo').addClass("fundo2");
		}, 3000);
		setTimeout(function(){
			$('#fundo').addClass("fadeOut 4s");
		}, 5000);
		setTimeout(function(){	
		$('#fundo').hide();		
			$('#menu').css({ "z-index": "-1"});
			$('#menu').show();
		}, 5200);
		setTimeout(function(){
			$('#menu').css({ "z-index": "1"});
		}, 5900);
		setTimeout(function(){	
			$('#corpo').show();
		}, 6000);
	});

		$('.scroll').animate({top:'-932px', left:'-2373px'});

</script>




<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

