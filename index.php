<?php
include 'top.php';
?>

    <main class="box1">
        <h1>Home</h1>

        <section class="box2">
            <h2>What is Pearl Productions?</h2>
            <p>Hello and welcome to Pearl Productions! This is an online portfolio and website for myself to display my 
                multimedia creative work across various fields, as well as begin a way to build a relationship between me 
                and those who may be interested in my work. Currently, my work is composed of pieces from a range of mediums,
                including photographs, drawings, paintings, digital art, and even some computer programming.
            </p>
        </section>

        <section class="box3">
            <h2>Why?</h2>
                <p>
                Building a portfolio is a great way to display one’s work for others to see. It is also a wonderful way to track 
                progress and see the improvement you have made overtime. I personally really enjoy seeing the changes and further 
                of my skills as time goes on. And I believe that placing my works into one single place, this online portfolio, 
                is the perfect opportunity to do this.

        </section>

        <section class="box4">
            <h2>Services</h2>
            <p>Currently, I am not offering any services for clients, as I am continuing to refine and build up my portfolio.
            However, this is a possibility that I would like to pursue in the future. I would like to use this time to build my skills,
            as well as my own personal style to convey messages and meanings to others.
            </p>

            <p>Some of the places that you can volunteer at are:</p><br>
            <table>
                <caption><strong>Specific Mediums I Have Used</strong></caption>
                <tr>
                    <th>Digital Art</th>
                    <th>Drawing</th>
                    <th>Painting</th>
                    <th>Photography</th>
                    <th>Computer Programming</th>
                </tr>

                <?php
                $sql = 'SELECT fldDigitalArt, fldDrawing, fldPainting, fldPhotography,
                fldComputerProgramming FROM tblMediumsUsed';

                $statement = $pdo->prepare($sql);
                $statement->execute();

                $records = $statement->fetchAll();

                foreach($records as $record) {
                    print '<tr>'; 
                    print '<td>' . $record['fldDigitalArt'] . '</td>';
                    print '<td>' . $record['fldDrawing'] . '</td>';
                    print '<td>' . $record['fldPainting'] . '</td>';
                    print '<td>' . $record['fldPhotography'] . '</td>';
                    print '<td>' . $record['fldComputerProgramming'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>

            </table>
        </section>


        <section class="box5">
            <h2>Future Projects</h2>
            <p>There are some projects and different mediums that I would like to work with in the future. The field of filmmaking is one particular 
            path I am excited to follow. Video art, script writing, planning, pre and post production, have always been something that has sparked a 
            light in my eyes. Animation, as well as storytelling are also something that I would like to try to delve into more deeply. 
            As time goes on, I will continue to put my best work out for others to see. 
                </p>
        </section>

        <section class="box6">
            <h2>Goals</h2>
            <p>My goal for this current project is to create a body of my work to be able to store and display for both an audience, whether big or small.
            I would also like for it to be a way for me to connect with others that share the same interests and ideas. 
                </p>
        </section>

    </main>
<?php
include 'footer.php'
?> 