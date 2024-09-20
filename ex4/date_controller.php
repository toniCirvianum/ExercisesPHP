<?php
$option="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['date']) && isset($_POST['option'])) {
        $datetime = new DateTime($_POST['date']);
        $option = $_POST['option'];
        switch ($option) {
            case 'Year':
                $date = $datetime->format('Y');
                echo "<p>" . $date . "</p>";
                break;
            case 'Letters':
                $date = $datetime->format('D/M/Y');
                echo "<p>" . $date . "</p>";
                break;
            case 'Days left end year':
                $endYear = new DateTime($datetime->format('Y')."-12-31");
                $diff = $datetime->diff($endYear);
                echo "<p>" . $diff->days . "</p>";
                break;
            default:
                echo "";
                break;
        }
    }
}
