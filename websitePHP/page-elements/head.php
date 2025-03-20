<?php

if (isset($_GET["page"])) {

    $page = $_GET["page"];

    $page_title = "";
    $page_home_active = "";

    if ($page == "index") {

        $page_title = "Home";
        $page_index_active = "active";
    } elseif ($page == "fertigeprojekte") {

        $page_title = "Unsere Projekte";
        $page_fertigeprojekte_active = "active";
    } elseif ($page == "workInProgress") {

        $page_title = "Work in progress";
        $page_workInProgress_active = "active";
    } elseif ($page == "geschichte") {

        $page_title = "geschichte";
        $page_geschichte_active = "active";
    } elseif ($page == "mitarbeiter") {

        $page_title = "Unser Team";
        $page_mitarbeiter_active = "active";
    } elseif ($page == "raetsel") {

        $page_title = "Quiz";
        $page_raetsel_active = "active";
    } elseif ($page == "tictactoe") {

        $page_title = "TicTacToe";
        $page_tictactoe_active = "active";
    } else {
        $page_title = "Home";
        $page_index_active = "active";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cookies.css">
    <link rel="stylesheet" href="css/geschichte.css">
    <link rel="stylesheet" href="css/mitarbeiter.css">
    <link rel="stylesheet" href="css/switch.css">
    <script src="js/coockiemeldung.js" defer></script>
    <script src="js/modeswitch.js" defer></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
    <link rel="icon" type="image/x-icon" href="Site content/favicon/favicon.ico">
    <title>Home</title>
</head>