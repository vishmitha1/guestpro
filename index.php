<?php
// Include necessary files
include('includes/header.php');
include('includes/database.php');

// Check the requested page and include it
if(isset($_GET['page'])) {
    $page = $_GET['page'];
    if(file_exists('pages/' . $page . '.php')) {
        include('pages/' . $page . '.php');
    } else {
        echo 'Page not found.';
    }
} else {
    // Default to the home page
    include('pages/home.php');
}

// Include the footer
include('includes/footer.php');
?>
