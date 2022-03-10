<?php
    function init() {
        $array = ["SERIAL NO.",
        "RC_NO.",
        "MODEL_NAME",
        "DATE_OF_DEPARTURE"];

        return $array;
    }

    function displayOrder() {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/vendor/checkorder.php";
        // $list = getOrders();

        $list = [
        ["RC_NO." => "GA05T1234",
        "MODEL_NAME" => "SWIFT_DZIRE",
        "DATE_OF_DEPARTURE" => "16/12/2021"],
        ["RC_NO." => "GA06W2018",
        "MODEL_NAME" => "HYUNDAI_VERNA",
        "DATE_OF_DEPARTURE" => "15/12/2021"],
        ["RC_NO." => "GA072019",
        "MODEL_NAME" => "SUZUKI_ACCESS",
        "DATE_OF_DEPARTURE" => "14/12/2021"],
        ["RC_NO." => "GA072020",
        "MODEL_NAME" => "VESPA",
        "DATE_OF_DEPARTURE" => "13/12/2021"]
        ];
        return $list;
    }

?>