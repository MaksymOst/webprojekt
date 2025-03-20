
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Head-->

<?php

include "../page-elements/head.php"

?>

<body data-bs-theme="dark">


 <!-- header -->

 <?php

include "../page-elements/header.php"

?>


<!-- Navigation -->

<?php


include "../page-elements/navigation.php";



?>

<?php

// Am Anfang alle Variablen auf leer setzen
$page_index_active = "";
$page_fertigeprojekte_active = "";
$page_workInProgress_active = "";
$page_geschichte_active = "";
$page_mitarbeiter_active = "";
$page_raetsel_active = "";
$page_tictactoe_active = "";

// Dann je nach Seite aktiv setzen
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    $_SESSION['page'] = $page;

    switch ($page) {
        case "index":
            $page_index_active = "active";
            require_once "../pages/page-index.php";
            break;
        case "fertigeprojekte":
            $page_fertigeprojekte_active = "active";
            require_once "../pages/fertigeprojekte.php";
            break;
        case "workInProgress":
            $page_workInProgress_active = "active";
            require_once "../pages/workInProgress.php";
            break;
        case "geschichte":
            $page_geschichte_active = "active";
            require_once "../pages/geschichte.php";
            break;
        case "mitarbeiter":
            $page_mitarbeiter_active = "active";
            require_once "../pages/mitarbeiter.php";
            break;
        case "raetsel":
            $page_raetsel_active = "active";
            require_once "../pages/raetsel.php";
            break;
        case "tictactoe":
            $page_tictactoe_active = "active";
            require_once "../pages/tictactoe.php";
            break;
        default:
            require_once "../pages/error_page.php";
            break;
    }
} else {
    $page_index_active = "active"; // Standardmäßig auf "Home"
    require_once "../pages/page-index.php";
}


?>


<!-- footer -->

<?php

include "../page-elements/footer.php"

?>





</body>




</html>