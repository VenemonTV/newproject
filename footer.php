        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
                $(".dropdown-button").dropdown();
				$('.modal').modal();
				<?php
					if(!empty($tablename)){
				?>
				<?php
					echo "
						$('#modal1').modal('open', { dismissible: false});
					";
					}
				?>
				
				<?php
					if($action == "deletedb"){
				?>
				<?php
					echo "
						$('#modal2').modal('open', { dismissible: false});
					";
					}
				?>
            });
            
            $(function() {
				$('.card').matchHeight();
			});
			
            function urlbb() {
                var link = prompt("Please enter your link:");
                
                
                if(link != null){
                    $('#body').val($('#body').val() + "[url]" + link + "[/url]"); 
                }
            };
            
            function centerbb() {
                $('#body').val("[center]" + $('#body').val() + "[/center]");
            };
            
            function leftbb() {
                $('#body').val("[left]" + $('#body').val() + "[/left]");
            };
            function rightbb() {
                $('#body').val("[right]" + $('#body').val() + "[/right]");
            };
			
			$(document).ready(function(){
				$('.collapsible').collapsible();
			});
			
			function onSubmit(token) {
				grecaptcha.execute();
			}
        </script>
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-102282174-1', 'auto');
			  ga('send', 'pageview');
		</script>
    </body>
</html>