<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CS 145 Pearl Website</title>
        <meta name="author" content="Pearl Sutton">
        <meta name="description" content="Site map for CS 145.">

        <style>
            figure{
                float: left; 
                text-align: center; 
                width: 20%;    
            }
            
            img{
                max-width: 100%;
            }

            body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            } 
            /* Setting up a grid layout for the main inded page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }
        </style>
    </head>


    <body>
        <figure class="right small">
            <img alt="Pearl Sutton UVM Summer 2023" src="images/aboutme.png">
            <figcaption>Summer 2023.</figcaption>
        </figure>

        <h1>CS 145-<em>OL1</em> Summer 2023</h1>
        <h2>Pearl Sutton - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
        <p><a href="ADMIN/table-viewer.php?getDatabase=">Database Viewer</a></p>

        <section class="grid-layout">
            <h2>Final Project.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final/index.php">Home Page</a></p> 
                <p><a href="final/photography.php">Photography Page</a></p>  
                <p><a href="final/painting.php">Painting Page</a></p> 
                <p><a href="final/drawing.php">Drawing Page</a></p> 
                <p><a href="final/digital.php">Digital Page</a></p> 
                <p><a href="final/about.php">About Page</a></p>  
                <p><a href="final/contact.php">Contact Page</a></p> 
                  
            </section>
            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="final/connect-DB.php">connect-DB.php</a></p>
                <p><a href="final/header.php">header.php</a></p> 
                <p><a href="final/nav.php">nav.php</a></p> 
                <p><a href="final/top.php">top.php</a></p> 
                <p><a href="final/footer.php">footer.php</a></p> 
                <p><a href="final/sql.php">sql.php</a></p> 
                <p><a href="final/css/custom.css">custom.css</a></p> 
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a></p> 
                <p><a href="final/css/custom-phone.css">custom-phone.css</a></p> 
                <p><a href="final/slideshow.js">slideshow.js</a></p> 
                <p><a href="final/validation1.js">validation1.js</a></p> 
                <p><a href="final/validation2.js">validation2.js</a></p> 
                <p><a href="final/ajax.js">ajax.js</a></p> 
                <p><a href="final/photographyFilterArray.js">photographyFilterArray.js</a></p> 
                <p><a href="final/paintingFilterArray.js">paintingFilterArray.js</a></p> 
                <p><a href="final/drawingFilterArray.js">drawingFilterArray.js</a></p> 
                <p><a href="final/digitalFilterArray.js">digitalFilterArray.js</a></p> 
                <p><a href="final/images/wireframe1.jpg">wireframe1.jpg</a></p> 
                <p></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p>CS008 Website Comparison: https://psutton1.w3.uvm.edu/cs008/final/index.php</p>  
                <p>Commits: https://github.com/pearlsutton/Pearl-Sutton/tree/cs145</p>
                <p>I used JavaScript to work with all of my main images for each page, to click on them, and open a mini window to click through each one individually.</p>

                
            </section>
        </section>

        <section class="grid-layout">
            <h2>Week 4</h2>
            <section class="public-files">
                <h3>Learn By Doing</h3>
                <p></p>   
                   
            </section>
            <section class="supporting-files">
                <h3>Additional Challenges</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Week 3</h2>
            <section class="public-files">
                <h3>Learn By Doing</h3>
                <p><a href="final/w3.php">w3.php</a></p> 
                <p><a href="final/zipcode.php">zipcode.php</a></p>
                <p><a href="final/zipcodeValidate.js">zipcodeValidate.js</a></p>
                <p><a href="final/moreAbout.php">moreAbout.php</a></p>
                <p><a href="final/ajax2.js">ajax2.js</a></p>

                <p></p>   
                   
            </section>
            <section class="supporting-files">
                <h3>Additional Challenges</h3>
                <p><p>
            </section>

            <section class="grader-notes">
                <h3>Notes</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Week 2</h2>
            <section class="public-files">
                <h3>Learn By Doing</h3>
                <p><a href="week2/htmlprac.php">htmlprac.php</a><p>
                <p><a href="week2/jsprac.js">jsprac.js</a><p>
                <p></p>   
                   
            </section>
            <section class="supporting-files">
                <h3>Additional Challenges</h3>
            </section>

            <section class="grader-notes">
                <h3>Notes</h3>
                <p></p>
            </section>
        </section>

        <section class="grid-layout">
            <h2>Week 1</h2>
            <section class="public-files">
                <h3>Learn By Doing</h3>
                <p><a href="week1/payroll.php">payroll.php</a></p>   
                   
            </section>
            <section class="supporting-files">
                <h3>Additional Challenges</h3>
                <p><a href="week1/payroll1.php">payroll1.php</a><p>
                <p><a href="week1/payroll2.php">payroll2.php</a><p>
                <p><a href="week1/payroll3.php">payroll3.php</a><p>
                <p><a href="week1/payroll4.php">payroll4.php</a><p>
            </section>

            <section class="grader-notes">
                <h3>Notes</h3>
                <p></p>
            </section>
        </section>



        <footer>
            <p> <p>
            <p><a href="../sitemap.php">Site map (Main Index)</a></p>
            <p> <p>
        </footer>
    </body>
</html>