<?php
include 'header.php';
?>

<style>
    .container {
        min-height: 400px;
        background-color: #eee;
        max-width: 800px;
        margin: auto;
        padding: 10px;
        width: 100%;
        word-wrap: break-word;
        text-align: center;
    }
</style>

<div class="container">

    <?php
    $query = 'select * from posts order by id desc';
    $statement = $DB->prepare($query);
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $row) {
        include 'post.php';
    }

    ?>

</div>

<?php
include 'footer.php';
?>