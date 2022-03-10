<?php 

    if(isset($_GET['filter'])){
        $f = strval($_GET["carFilter"]);
        switch($f){
            case "plth":
                header("Location:http://localhost/project/views/user/cars.php?fil=plth");
                break;
            case "phtl":
                header("Location:http://localhost/project/views/user/cars.php?fil=phtl");
                break;
            case "suv":
                header("Location:http://localhost/project/views/user/cars.php?fil=suv");
                break;
            case "sedan":
                header("Location:http://localhost/project/views/user/cars.php?fil=sedan");
                break;
            case "hatchback":
                header("Location:http://localhost/project/views/user/cars.php?fil=hatchback");
                break;
            case "luxury":
                header("Location:http://localhost/project/views/user/cars.php?fil=luxury");
                break;
            case "automatic":
                header("Location:http://localhost/project/views/user/cars.php?fil=automatic");
                break;
            case "manual":
                header("Location:http://localhost/project/views/user/cars.php?fil=manual");
                break;
            case "4s":
                header("Location:http://localhost/project/views/user/cars.php?fil=4s");
                break;
            case "5s":
                header("Location:http://localhost/project/views/user/cars.php?fil=5s");
                break;
            case "7s":
                header("Location:http://localhost/project/views/user/cars.php?fil=7s");
                break;
            default:
                header("Location:http://localhost/project/views/user/cars.php");
                break;

        }
    }

    function lowtohigh(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = lth();
        return $list;
    }
    function hightolow(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = htl();
        return $list;
    }
    function suv(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getsuv();
        return $list;
    }
    function sedan(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getsedan();
        return $list;
    }
    function hatchback(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = gethatchback();
        return $list;
    }
    function luxury(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getluxury();
        return $list;
    }

    function automatic(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getauto();
        return $list;
    }

    function manual(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getmanual();
        return $list;
    }

    function fourseats(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getfourseater();
        return $list;
    }

    function fiveseats(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getfiveseater();
        return $list;
    }

    function sevenseats(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getsevenseater();
        return $list;
    }

    function getAllCar(){
        include $_SERVER['DOCUMENT_ROOT'] . '/project/models/user/cars.php';
        $list = getCars();
        return $list;
    }

?>