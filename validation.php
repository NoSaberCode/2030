<?php
$valid = false;
$val_messages = array();

function the_results()
{
    global $valid;
    global $val_messages;

    if ($valid) {
        // Output the data
        echo "<p>Your name: " . $_POST['name'] . "</p>";
        echo "<p>Your email address: " . $_POST['email'] . "</p>";
        echo "<p>Your comment: " . $_POST['comment'] . "</p>";
        echo "</div>";
    }
}

function validate()
{
    global $valid;
    global $val_messages;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate Name
        $name = $_POST['name'];
        if (empty($name)) {
            $val_messages['name'] = "Please enter your name.";
        }

        // Validate Email
        $email = $_POST['email'];
        $email_pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
        if (!preg_match($email_pattern, $email)) {
            $val_messages['email'] = "Invalid email address.";
        }

        // Validate Comment
        $comment = $_POST['comment'];
        if (empty($comment)) {
            $val_messages['comment'] = "Please enter your comment.";
        }

        // Check all fields if empty
        if (empty($val_messages['name']) && empty($val_messages['email']) && empty($val_messages['comment'])) {
            $valid = true;
        }
    }
}

function the_validation_message($type)
{
    global $val_messages;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($val_messages[$type])) {
            if ($val_messages[$type] != "") {
                echo "<p class='failure-message'>$val_messages[$type]</p>";
            }
        }
    }
}

// Call the validate function
validate();
?>
