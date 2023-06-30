<?php
include 'top.php';

$dataIsGood = false;
$message = '';

$firstName = '';
$lastName = '';
$email = '';
$subjectForm = '';
$comments = '';
$visit = 'Yes';


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
    <main class="box-1">
        <h1>Contact</h1>
            <section class = "box-2">
                <h2>Get in touch with us and provide us some feedback!</h2>
                <p id="bold"> Send us a message if you'd like to talk with us. We would also greatly appreciate any feedback you have, regarding both the artists' work and the functionality of the site.
                </p>
                <?php
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                    // Sanitize data
                    $firstName = getData('txtFirstName');
                    $lastName = getData('txtLastName');
                    $email = getData('txtEmail');
                    $subjectForm = getData('txtSubject');
                    $comments = getData('txtComments');
                    $visit = getData('radVisit');

                    // Validate form
                    $dataIsGood = true;

                    if($firstName == ''){
                        print '<p class="mistake">Please enter your first name.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your first name contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($lastName == ''){
                        print '<p class="mistake">Please enter your last name.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your last name contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($email == ''){
                        print '<p class="mistake">Please enter your email address.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your email address contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($subjectForm == ''){
                        print '<p class="mistake">Please enter the subject of your message.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your subject contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if($comments == ''){
                        print '<p class="mistake">Please type your thoughts/comments.</p>';
                        $dataIsGood = false;
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        print '<p class="mistake">Your message contains invalid characters.</p>';
                        $dataIsGood = false;
                    }

                    if ($visit != "Yes" AND $visit != "No" AND $visit != "Neutral") {
                        print '<p class="mistake">Please tell us what you thought about your visit.</p>';
                        $dataIsGood = false;
                    }

                    // save data
                    if($dataIsGood){
                        try{
                            $sql = 'INSERT INTO tblContact (fldFirstName, fldLastName, fldEmail, fldSubject, fldComments, fldVisit)
                            VALUES (?, ?, ?, ?, ?, ?)';
                            $statement = $pdo->prepare($sql);
                            $data = array($firstName, $lastName, $email, $subjectForm, $comments, $visit);

                            if($statement->execute($data)){
                                $message = '<h2>Thank you!</h2>';
                                $message .= '<p>Your information has successfully been saved.</p>';
                            } else {
                                $message = '<p>Error! Record was NOT successfully saved.</p>';
                                $dataIsGood = false;
                            }
                        } catch(PDOException $e) {
                            $message = '<p>Error! Could not insert the record, please contact us at psutton1@uvm .edu for assistance.</p>';
                            $dataIsGood = false;
                        }

                        $to = $email;
                        $from = 'Art & Film Co. Form <psutton1@uvm.edu>';
                        $subject = 'Confirmation Email';

                        $mailMessage .= '<p style="font": 12pt serif;"> Thank you so much
                        for filling out form! It is very much appreciated and we hope you
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

                    <fieldset class="newsletter">
                        <legend>Send us a message</legend>
                        <p>
                            <label for="txtFirstName">First Name:</label>
                            <input id="txtFirstName" maxlength="50" name="txtFirstName" onfocus="this.select()" tabindex="305" type="text" value="<?php print $firstName; ?>">
                        </p>
                        <p id="response1"></p>

                        <p>
                            <label for="txtLastName">Last Name:</label>
                            <input id="txtLastName" maxlength="50" name="txtLastName" onfocus="this.select()" tabindex="305" type="text" value="<?php print $lastName; ?>">
                        </p>
                        <p id="response2"></p>

                        <p>
                            <label for="txtEmail">Email:</label>
                            <input id="txtEmail" maxlength="50" name="txtEmail" onfocus="this.select()" tabindex="305" type="email" value="<?php print $email; ?>">
                        </p>
                        <p id="response3"></p>

                        <p>
                            <label for="txtSubject">Subject:</label>
                            <input id="txtSubject" maxlength="50" name="txtSubject" onfocus="this.select()" tabindex="100" type="text" value="<?php print $subjectForm; ?>">
                        </p>
                        <p id="response4"></p>

                        <p>
                            <label for="txtComments">Message:</label>
                            <textarea id="txtComments" name="txtComments" onfocus="this.select()" placeholder="Type in your message here" rows="10" cols="102"></textarea>
                        </p>
                        <p id="response5"></p>
                    </fieldset>

                    <fieldset class="radio" id="radioFieldset">
                        <legend>Were you satisfied with your visit?</legend>
                        <p>
                            <input type="radio" id="radVisitYes" name="radVisit" value="Yes" tabindex="410" <?php 
                                if($visit == "Yes") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitYes">Yes</label>
                        </p>

                        <p>
                            <input type="radio" id="radVisitNeutral" name="radVisit" value="Neutral" tabindex="410" <?php
                                if($visit == "Neutral") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitNeutral">Neutral</label>
                        </p>

                        <p>
                            <input type="radio" id="radVisitnNo" name="radVisit" value="No" tabindex="410" <?php
                                if($visit == "No") print 'checked'; ?>>
                            <label class="radio-field" for="radVisitnNo">No</label>
                        </p>
                        <p id="response6"></p>
                    </fieldset>

                    <fieldset class="buttons">
                        <input id="btnSubmit" name="btnSubmit" tabindex="900"
                        type="submit" value="Submit" onclick="validateFirstName();validateLastName();validateEmail();validateSubject();validateMessage();validateVisit()">
                    </fieldset>
                </form>
            </section>

            <section class="form-feedback">
                <h2>Update:</h2>
                <?php print $message?>
            </section>
    </main>
<script src="validation1.js" ></script>
<script src="validation2.js" ></script>
<?php
include 'footer.php';
?>
