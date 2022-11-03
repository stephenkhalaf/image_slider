
<?php
include 'functions.php';
include 'database.php';
$file = isset($_GET['q']) ? $_GET['q'] : 'home';
$file = $file . '.php';

if (file_exists($file)) {
    include $file;
}

?>

<?php
include 'footer.php';
?>