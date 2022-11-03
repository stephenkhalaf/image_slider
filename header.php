<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <style>
        .slider_wrapper {
            width: 500px;
            margin: auto;
            text-align: center;
        }

        .slider_wrapper_inner {
            display: flex
        }

        .slider_left {
            flex: 10%
        }

        .slider_right {
            flex: 10%
        }

        .slider_container {
            flex: 80%;
            overflow: hidden;
        }

        .slider_images {
            display: flex;
            /* transform: translateX(-800px) */
            transition: all 1s ease;
        }

        .slider_images img {
            min-width: 400px;
            max-height: 400px;
            object-fit: contain;
        }

        .slider_right,
        .slider_left {
            display: flex;
            justify-content: center;
            margin: auto;
        }

        .slider_left:hover {
            transform: translateX(-10px);
            transition: transform 0.5s
        }

        .slider_right:hover {
            transform: translateX(10px);
            transition: transform 0.5s
        }

        .slider_right input,
        .slider_left input {
            font-size: 30px;
            border-radius: 50%;
            cursor: pointer;
        }

        .slider_thumbs {
            display: flex;
            width: 80%;
            margin: auto;
            justify-content: center;
            overflow-x: auto;
        }

        .slider_thumbs img {
            width: 20%;
            flex: 0.25;
            margin: 5px;
            border: 1px solid grey;
            cursor: pointer;
            transition: opacity .5s;
        }

        .slider_thumbs img:hover {
            opacity: 0.5
        }

        header {
            background: #156a84;
            height: 30px;
            padding: 10px;
        }

        header a {
            text-decoration: none;
            display: inline-block;
            padding: 5px;
            color: white;
        }
    </style>
</head>

<header>
    <a href="index.php?q=home">Home</a>
    <a href="index.php?q=upload">Upload</a>
</header>