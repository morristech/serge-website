<?php
    function menuSel($menu_page) {
        global $page;
        return ($page == $menu_page) ? ' class="selected"' : '';
    }
?>
<html>
<head>
    <title><?php echo isset($title) ? $title.' | Serge' : 'Serge — Free, Open-Source Solution for Continuous Localization' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/docsearch.js/1/docsearch.min.css" />
    <link rel="stylesheet" href="/media/vendor/google/google-fonts.css" type="text/css" />
    <link rel="stylesheet" href="/media/main.css?3" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php echo $head ?>
</head>
<body class="page-<?php echo $page ?> subpage-<?php echo $subpage ?>">
    <div class="wrapper">
        <div class="header-bg"></div>
        <div class="header">
            <a class="logo" href="/"><img src="/media/logo.svg" />Serge</a>

            <ul class="menu<?php echo $subselection ? ' subselection' : '' ?>">
                <li><a href="/"<?php echo menuSel('index') ?>>Home</a></li>
                <li><a href="/download/"<?php echo menuSel('download') ?>>Download</a></li>
                <li><a href="/docs/"<?php echo menuSel('documentation') ?>>Documentation</a></li>
                <li><a href="/contact/"<?php echo menuSel('contact') ?>>Contact Us</a></li>
                <li class="extra"><input id="search" placeholder="Search the docs..."/></li>
            </ul>
        </div>

        <div class="content">

