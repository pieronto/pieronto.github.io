<div class="menu">
			<p>
				🏠&nbsp;<a href="index.php">Accueil</a> &emsp;&emsp; 📚&nbsp;<a href="reviews.php">Reviews</a>&emsp;&emsp; 📝&nbsp;<a href="articles.php">Articles</a>&emsp;&emsp; 📹&nbsp;<a href="https://www.youtube.com/channel/UCyxzFCnQ7XpdCGrxWxQL5yQ">Youtube</a>&emsp;&emsp;🎙 &nbsp;<a href="https://anchor.fm/bonzybuddy/">Podcast</a>&emsp;&emsp;📬&nbsp;<a href="contact.php">Contact</a>
			</p>
</div>

	<button onclick="topFunction()" id="myBtn" title="Retour en haut">⬆️</button> 
		<script>
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 300px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
 				 if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    				mybutton.style.display = "block";
 				 } else {
   					 mybutton.style.display = "none";
  				}
						}
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
  			document.body.scrollTop = 0;
  			document.documentElement.scrollTop = 0;
			}
		</script>

	<button onclick="myFunction()" id="light">☀️</button>
		<script>
			function myFunction() {
   			var element = document.body;
   			element.classList.toggle("light-mode");
			}
		</script>