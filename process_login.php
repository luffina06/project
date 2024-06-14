<?php
session_start();

if(isset($_POST['idtoken'])) {
    $id_token = $_POST['idtoken'];

    // Validate ID token with Google API
    $client = new Google_Client(['client_id' => 'YOUR_CLIENT_ID.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($id_token);
    if($payload) {
        // Check if the user's email domain is from a government entity
        $user_email = $payload['email'];
        if(endsWith($user_email, '.gov')) {
            $_SESSION['user_id'] = $payload['sub']; // Unique user ID from Google
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        // Authentication failed
        echo 'error';
    }
} else {
    echo 'error';
}

// Function to check if a string ends with a specific suffix
function endsWith($string, $suffix) {
    return substr($string, -strlen($suffix)) === $suffix;
}
?>
