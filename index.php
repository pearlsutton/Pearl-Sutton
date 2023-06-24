<?php
include 'top.php';
?>

    <main class="box-1">
        <h1>Home</h1>

        <section class="box2">
            <h2>Welcome!</h2>
            <p>This website is a digital portfolio of the artistic works that I have completed in the past couple years. It is divided into the different branches of art that I have worked in: photography, painting, drawing, and digital programs. 
            </p>
        </section>

        <section class="box3">
            <h2>Interests</h2>
                <p>
                In the future, I would like to continue working in each medium, improving and refining my technical skills. I have found that exposing myself to a variety of different art forms allows me greater knowledge and understanding of techniques and approaches, as well as the emotional perspectives. One particular field that I would love to dive deeper into is filmmaking. Video making and directing have been something that I have recently become more interested in to explore.
                </p>
        </section>

        <section class="box4">
            <h2>What to Expect</h2>
            <p> As I mentioned, this a digital presentation of the work I have created in the past couple of years. They are works that I feel best display my present skills and self. 
            </p>
            <table>
                <caption><strong>Specific Mediums Used in My Pieces</strong></caption>
                <tr>
                    <th>Digital Art</th>
                    <th>Drawing</th>
                    <th>Painting</th>
                    <th>Photography</th>
                </tr>

                <?php
                $sql = 'SELECT fldDigitalArt, fldDrawing, fldPainting, fldPhotography FROM tblMediumsUsed';

                $statement = $pdo->prepare($sql);
                $statement->execute();

                $records = $statement->fetchAll();

                foreach($records as $record) {
                    print '<tr>'; 
                    print '<td>' . $record['fldDigitalArt'] . '</td>';
                    print '<td>' . $record['fldDrawing'] . '</td>';
                    print '<td>' . $record['fldPainting'] . '</td>';
                    print '<td>' . $record['fldPhotography'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>
            </table>
        </section>


        <section class="box5">
            <h2>Goals</h2>
            <p>As well, I would also like to continue updating this site to reflect my current work and skills. I would also find it fortunate if it could connect with others that share the same interests and ideas. 
                </p>
        </section>

    </main>
<?php
include 'footer.php'
?> 