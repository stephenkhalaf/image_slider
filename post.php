<style>
    .post {
        width: 250px;
        margin: 10px;
        display: inline-block;
        border: 1px solid black;
        padding: 5px;
    }

    .post img {
        width: 100%;
        height: 250px;
        object-fit: cover;

    }

    .post .date {
        opacity: 0.5;
        font-size: 12px;
    }

    .post h3 {
        color: #156a84
    }
</style>
<div class="post">
    <h3>
        <?php echo $row->title; ?>
    </h3>
    <a href="index.php?q=single&slag=<?php echo $row->slag  ?>">
        <div>
            <?php
            $images = json_decode($row->files);
            $image = $images[0];

            ?>

            <img src="<?php echo $image ?>" alt="">
            <div class="date"> <?= date('jS M Y', strtotime($row->date)); ?></div>
        </div>
    </a>
</div>