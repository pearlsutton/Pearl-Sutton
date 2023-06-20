<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Drawing</h1>

        <section class="box-2">
            <h2>Digital</h2>
            <p>Digital Art is a growing field in the artworld and is a creative and unique way to combine one's unique 
                vision with the technology at our fingertips. The programs I utilzied for the following digital pieces include
                Adobe Illutrator, Adobe Photoshop, and Adobe Design. These works were created in the fall of 2020 at the Community
                College of Vermont.
            </p>

            <h2>Modal </h2>

            <img class="cafe1" id="card1" src="images/digital/card1.png" style="width:100%" onclick="">
            <img class="cafe2" id="card2" src="images/digital/card2.png" alt="card2" style="width:100%" onclick="">
            <img class="jess1" id="jess" src="images/digital/jess.png" alt="jess" style="width:100%" onclick="">
            <img class="flyer1" id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width:100%" onclick="">

            <div id="slideshow" class="slideshow">
            <div class="images">
                <span class="close">&times;</span>
                <p>Content in Modal..</p>
                <div class="slides">
                    <img id="card1" src="images/digital/card1.png" alt="card1" style="width:100%">
                </div>
                <div class="slides">
                    <img id="card2" src="images/digital/card2.png" alt="card2" style="width:100%">
                </div>
                <div class="slides">
                    <img id="jess" src="images/digital/jess.png" alt="jess" style="width:100%">
                </div>
                <div class="slides">
                    <img id="flyer" src="images/digital/flyer.jpg" alt="flyer" style="width:100%">
                </div>
                <a class="leftArrow" onclick="leftSlide()">prev</a>
                <a class="rightArrow" onclick="rightSlide()">next</a>
            </div>
            </div>

            <script>
            // Get the modal
            let slideshow = document.getElementById("slideshow");

            // Get the button that opens the modal
            let myImg = document.getElementById("card1");

            // Get the <span> element that closes the modal
            let span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            myImg.onclick = function() {
            slideshow.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            slideshow.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == slideshow) {
                slideshow.style.display = "none";
            }
            }
                let slideNumber = 1;
                displaySlide(slideNumber);

                function leftSlide(){
                displaySlide(slideNumber -= 1);
                }

                function rightSlide(){
                displaySlide(slideNumber += 1);
                }

                function displaySlide(n) {
                let index;
                let slides = document.getElementsByClassName("slides");

                if (n > slides.length) 
                {
                    slideNumber = 1;
                }    

                if (n < 1) 
                {
                    slideNumber = slides.length;
                }

                for (index = 0; index < slides.length; index++) {
                    slides[index].style.display = "none";  
                }
                slides[slideNumber-1].style.display = "block";  
                }
        </script>

        </section>

    </main>
<?php
include 'footer.php'
?>