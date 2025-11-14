<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YouTube</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/youtube.css?ver=<?php echo date('YmdHis'); ?>" media="all" />
    </head>
    <body>
    <!-- Get started here -->
    <div id="header">
    <div class="header-inner header-left">
    <button id="hamburger">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
    <path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z">
    </path>
    </svg>
    </button>
            <img id="logo" src="/assets/youtube.svg?ver=<?php echo date('YmdHis'); ?>" />
        </div> 
            <div class="header-inner header-center">
            <form method="GET" id="search" action="https://www.youtube.com/results">
            <input type="text" name="search" placeholder="Search" />
            <input type="submit" value="Search" />
            </form>
            <button id="voice-search">
            <img src="/assets/microphone.svg"/>
            </button>
            </div>
            <div class="header-inner header-right">
            <button id="verticaldots">
            <img src="/assets/verticaldots.svg"/></button>
            <button id="user">
            <img src="assets/user.svg"/>
            <span>Sign In</span>
            </button>
            </div>
            </div>
        <!-- https://picsum.photos/530/300 -->
    </body>
</html>
<!--Hello, reader! -->