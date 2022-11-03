<?php

echo '<pre>';
if (!empty($_POST['upload']) && isset($_POST['upload'])) {
    $Error = '';
    $folder = 'uploads/';
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    $files = array();
    $allowed = array('image/jpeg');
    if (!preg_match('/^[a-zA-Z ]+$/', $_POST['title'])) {
        $Error .= 'Please, enter a valid title<br>';
    }
    $title = $_POST['title'];

    if ($Error == '') {
        foreach ($_FILES as $key => $file_arr) {
            if (($file_arr['error'] == 0) && (in_array($file_arr['type'], $allowed))) {
                $destination = $folder . get_random_string(50) . '.jpg';
                move_uploaded_file($file_arr['tmp_name'], $destination);
                $files[] = $destination;
            } else {
                $Error .= "Image key '$key' is not selected<br>";
            }
        }
    }


    if ($Error == '') {

        $arr['title'] = $title;
        $arr['files'] = json_encode($files);
        $arr['date'] = date('Y-m-d H:i:s');
        $arr['slag'] = get_random_string(50);

        $query = 'insert into posts (title,files,slag,date) values (:title,:files,:slag,:date)';
        $statement = $DB->prepare($query);
        $statement->execute($arr);
    }

    header("Location: index.php");
}


echo '</pre>';
?>

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

    }

    .error {
        color: white;
        background: red;

    }
</style>

<div class="container">
    <div class="error">
        <?php
        if (isset($Error)) {
            if ($Error != '') {
                echo "<span style='padding: 5px'>$Error</span>";
            }
        }

        ?>
    </div>
    <br><br>
    <form action="" method="post" enctype="multipart/form-data">
        Select file to upload: <br><br>
        Post title<br>
        <input type="text" name="title" required><br><br>
        <input type="file" name="file1" required><br><br>
        <input type="file" name="file2" required><br><br>
        <input type="file" name="file3" required><br><br>
        <input type="file" name="file4" required><br><br><br>

        <input type="submit" value="Upload" name="upload">

    </form>
</div>


<?php
include 'footer.php';
?>