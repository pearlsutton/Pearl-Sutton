<?php
include 'top.php';

$dataIsGood = false;
$message = '';

$firstName = '';
$lastName = '';

$email = '';

$visit = 'Yes';

$film = false;
$clothing = false;
$animation = false;

$favoriteMedium = 'Photo';

$comments = '';


function getData($field) {
    if(!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString) {
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

?>
    <main class="box1-form">
        <h1>Get in Touch</h1>
            <section class = "form-info">
                <h2>This page is for you to send any comissions, requests, feedback, or sign up for our newsletter.</h2>
                <?php
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                    // Sanitize data

                    
                    $firstName = getData('txtFirstName');
                    $lastName = getData('txtLastName');
                    $email = getData('txtEmail');

                    $visit = getData('radVisit');

                    $film = (int) getData('chkFilm');
                    $clothing = (int) getData('chkClothing');
                    $animation = (int) getData('chkAnimation');

                    $favoriteMedium = getData('lstFavoriteMedium');

                    $comments = getData('txtComments');

                    // Validate form
                    $dataIsGood = true;

                    if($firstName == ''){
                        print '<p class="mistake">Please type in your first name.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your first name contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($lastName == ''){
                        print '<p class="mistake">Please type in your last name.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your last name contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($email == ''){
                        print '<p class="mistake">Please type in your email address.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your email address contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if ($visit != "Yes" AND $visit != "No" AND $visit != "Neutral") {
                        print '<p class="mistake">Please tell us what you thought about your visit.</p>';
                        $dataIsGood = false;
                    }

                    $totalChecked = 0;

                    if($film != 1) $film = 0;
                    $totalChecked += $film;

                    if($clothing != 1) $clothing = 0;
                    $totalChecked += $clothing;

                    if($animation != 1) $animation = 0;
                    $totalChecked += $animation;

                    if($totalChecked == 0){
                        print '<p class="mistake">Please choose at least one checkbox that tells us which project(s) you would be intersted in seeing.</p>';
                        $dataIsGood = false;
                    }

                    if ($favoriteMedium != "Painting" AND $favoriteMedium != "Photo" AND $favoriteMedium != "Sculpture") {
                        print '<p class="mistake">Please let us know which art medium you enjoy the most.</p>';
                        $dataIsGood = false;
                    }

                    if($comments == ''){
                        print '<p class="mistake">Please type in your thoughts/comments name.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your thoughts/comments contain invalid characters.</p>';
                        $dataIsGood = false;
                    }


                    // save data
                    if($dataIsGood){
                        try{
                            $sql = 'INSERT INTO tblFeedback (fldFirstName, fldLastName, fldEmail, fldVisit, fldFilm, fldClothing, fldAnimation,
                            fldFavoriteMedium, fldComments)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
                            $statement = $pdo->prepare($sql);
                            $data = array($firstName, $lastName, $email, $visit, $film, $clothing, $animation, $favoriteMedium, $comments);

                            if($statement->execute($data)){
                                $message = '<h2>Thank you!</h2>';
                                $message .= '<p>Your information has been successfully saved.</p>';
                            } else {
                                $message = '<p>Error! Record was NOT successfully saved.</p>';
                                $dataIsGood = false;
                            }
                        } catch(PDOException $e) {
                            $message = '<p>Error! Could not insert the record, please contact us at psutton1@uvm.edu</p>';
                            $dataIsGood = false;
                        }

                        $to = $email;
                        $from = 'Pearl Productions Form <psutton1@uvm.edu>';
                        $subject = 'Feedback';

                        $mailMessage .= '<p style="font": 12pt serif;"> Thank you so much
                        for filling out the feedback form! It is very much appreciated and we hope you
                        have a great day!</p';
                        $mailMessage .= '<span style="color: lightpurple; padding-left 4em;">';
                        $mailMessage .= '<p Pearl Sutton</span></p>';
                        
                        $headers .= "From: " . $from . "\r\n";
                        $headers = "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=utf-8\r\n";
                        

                        $mailSent = mail($to, $subject, $mailMessage, $headers);

                        if($mailSent) {
                            print "<p>Confirmation of your responses have been sent to your email.</p>";
                            print $mailMessage;
                        }


                    } // data is good
                } // ends form submitted
                ?>  
            </section>

            <section class="form-it-self">
                <h3>Feedback:</h3>
                <form action="#" id="frmFeedback" method="post">

                    <fieldset class="contact">
                        <legend>Sign Up for Our Newsletter:</legend>
                        <p>
                            <label class="required" for="txtFirstName">First Name:</label>
                            <input id="txtFirstName" maxlength="50" name="txtFirstName" onfocus="this.select()" tabindex="305" type="text" value="<?php print $firstName; ?>" required>
                        </p>

                        <p>
                            <label class="required" for="txtLastName">Last Name:</label>
                            <input id="txtLastName" maxlength="50" name="txtLastName" onfocus="this.select()" tabindex="305" type="text" value="<?php print $lastName; ?>" required>
                        </p>

                        <p>
                            <label class="required" for="txtEmail">Email:</label>
                            <input id="txtEmail" maxlength="50" name="txtEmail" onfocus="this.select()" tabindex="305" type="email" value="<?php print $email; ?>" required>
                        </p>

                    </fieldset>

                    <fieldset class="radio">
                        <legend>Were you satisfied with your visit?</legend>
                        <p>
                            <input type="radio" id="radVisitYes" name="radVisit" value="Yes" tabindex="410" required <?php 
                                if($visit == "Yes") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitYes">Yes</label>
                        </p>

                        <p>
                            <input type="radio" id="radVisitNeutral" name="radVisit" value="Neutral" tabindex="410" required <?php
                                if($visit == "Neutral") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitNeutral">Neutral</label>
                        </p>

                        <p>
                            <input type="radio" id="radVisitnNo" name="radVisit" value="No" tabindex="410" required <?php
                                if($visit == "No") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitnNo">No</label>
                        </p>
                    </fieldset>

                    <fieldset class="checkbox">
                        <legend>Which future projects would you be intersted in seeing?</legend>
                        <p>
                            <input id="chkFilm" name="chkFilm" tabindex="510" type="checkbox" value="1" <?php
                                if($film) print 'checked'; ?>>
                            <label for="chkFilm">A Short Film</label>
                        </p>

                        <p>
                            <input id="chkClothing" name="chkClothing" tabindex="510" type="checkbox" value="1" <?php
                                if($clothing) print 'checked'; ?>>
                            <label for="chkClothing">Clothing</label>
                        </p>
                        
                        <p>
                            <input id="chkAnimation" name="chkAnimation" tabindex="510" type="checkbox" value="1" <?php
                                if($animation) print 'checked'; ?>>
                            <label for="chkAnimation">A Stop Motion Animation</label>
                        </p>

                    </fieldset>

                    <fieldset class="listbox">
                        <legend>What is your favorite medium to use/purchase?</legend>
                        <p>
                            <select name="lstFavoriteMedium" id="lstFavoriteMedium" size="4" required>

                                <option id="lstFavoriteMediumBlank"  value="Blank"<?php 
                                    if($FavoriteMedium == "Blank") 'checked'; ?>>Select One</option>

                                <option id="lstFavoriteMediumPainting" value="Painting"<?php 
                                    if($FavoriteMedium == "Painting") print 'Painting'; ?>>Painting</option>

                                <option id="lstFavoriteMediumPhoto" value="Photo" <?php 
                                    if($FavoriteMedium == "Photo") print 'checked'; ?>>Photo</option>

                                <option id="lstFavoriteMediumSculpture" value="Sculpture"<?php 
                                    if($FavoriteMedium == "Sculpture") print 'checked'; ?>>Sculpture</option>
                            </select>
                        </p>
                    </fieldset>

                    <fieldset class="comments">
                        <legend>Other thoughts/comments:</legend>
                        <p>
                            <label class="required" for="txtComments"></label>
                            <textarea id="txtComments" name="txtComments" placeholder="Comments/Other Thoughts" rows="6" cols="70"></textarea>
                        </p>
                    </fieldset>
    
                    <fieldset class="buttons">
                        <input id="btnSubmit" name="btnSubmit" tabindex="900"
                        type="submit" value="Submit">
                    </fieldset>

                </form>
            </section>

            <section class="form-feedback">
                <h2>Thank you!</h2>
                <?php print '<p>.$message</p><pre>'; print '</pre>';?>
            </section>

    </main>
<?php
include 'footer.php';
?>
