<?php
include 'header.php';
?>

<?php
$arr = array();
$arr['slag'] = isset($_GET['slag']) ? $_GET['slag'] : null;
$query = 'select * from posts where slag = :slag limit 1';
$statement = $DB->prepare($query);
$statement->execute($arr);

$data = $statement->fetchAll(PDO::FETCH_OBJ);
if (is_array($data)) {
    $row = $data[0];
}

$files = json_decode($row->files);

?>

<body>
    <div class="slider_wrapper">
        <h3><?= $row->title ?></h3>
        <div class="slider_wrapper_inner">
            <div class="slider_left">
                <input type="button" value='<' id="left">
            </div>
            <div class="slider_container">
                <div class="slider_images">
                    <?php foreach ($files as $file) : ?>
                        <img src="<?php echo $file ?>" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="slider_right">
                <input type="button" value='>' id="right">
            </div>
        </div>
        <div class="slider_thumbs">
        </div>
    </div>
</body>


<?php
include 'footer.php';
?>