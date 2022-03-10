<?php
    function init() {
        $array = ["SERIAL NO.",
        "USER NAME",
        "RC_NO.",
        "MODEL_NAME",
        "DATE_OF_DEPARTURE",
        "DATE_OF_RETURN",
        "AMOUNT"];

        return $array;
    }

    function displayCar() {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/vendor/checkorder.php";
        $list = getCarOrders();
        return $list;
    }

    function displayBike() {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/vendor/checkorder.php";
        $list = getBikeOrders();
        return $list;
    }

?>