<?php $pageTitle = "Donate  | Nsuer";
include('config.php');


function total_views($conn, $page_id = null)
{
    if ($page_id === null) {
        // count total website views
        $query = "SELECT sum(total_views) as total_views FROM d_pages";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['total_views'] === null) {
                    return 0;
                } else {
                    return $row['total_views'];
                }
            }
        } else {
            return "No records found!";
        }
    } else {
        // count specific page views
        $query = "SELECT total_views FROM d_pages WHERE id='$page_id'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['total_views'] === null) {
                    return 0;
                } else {
                    return $row['total_views'];
                }
            }
        } else {
            return "No records found!";
        }
    }
}



function is_unique_view($conn, $visitor_ip, $page_id)
{
    $query = "SELECT * FROM d_page_views WHERE visitor_ip='$visitor_ip' AND page_id='$page_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        return false;
    } else {
        return true;
    }
}



function add_view($conn, $visitor_ip, $page_id)
{
    if (is_unique_view($conn, $visitor_ip, $page_id) === true) {
        // insert unique visitor record for checking whether the visit is unique or not in future.
        $query = "INSERT INTO d_page_views (visitor_ip, page_id) VALUES ('$visitor_ip', '$page_id')";

        if (mysqli_query($conn, $query)) {
            // At this point unique visitor record is created successfully. Now update total_views of specific page.
            $query = "UPDATE d_pages SET total_views = total_views + 1 WHERE id='$page_id'";

            if (!mysqli_query($conn, $query)) {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}

$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo "Donate | Nsuer ";
        } ?>
    </title>



    <link rel="icon" type="image/jpg" href="images/nsulogo.png">



    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="admin/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<style>
    .home {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        background: url(images/home-bg.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        text-align: center;
    }

    .home h1 {
        font-size: 3rem;
        color: black;
    }

    .home p {
        font-size: 2.1rem;
        color: black;
        padding: 1rem 0;
        width: 80%;
    }

    @keyframes animate {
        0% {
            background-position-x: 0rem;
        }

        100% {
            background-position-x: 100rem;
        }
    }




    @media (max-width: 768px) {
        html {
            font-size: 55%;
        }

        header #menu {
            display: block;
        }

        header .navbar {
            position: fixed;
            top: -120%;
            left: 0;
            width: 100%;
            background: #444;
        }

        header .navbar ul {
            flex-flow: column;
            padding: 2rem 0;
        }

        header .navbar ul li {
            margin: 1.5rem 0;
            text-align: center;
            width: 100%;
        }

        header .navbar ul li a {
            font-size: 2.5rem;
            display: block;
        }

        header .navbar ul li a.active,
        header .navbar ul li a:hover {
            color: #f39c12;
        }

        .fa-times {
            transform: rotate(0deg);
        }

        header .navbar.nav-toggle {
            top: 6.4rem;
        }

        .home h1 {
            font-size: 4rem;
        }

        .home p {
            width: auto;
        }

        .teacher p {
            width: auto;
        }

        .contact .row .image {
            display: none;
        }
    }

    .marquee {
        font-size: 30px;
        font-weight: 800;
        color: darkblue;
        font-family: sans-serif;
        width: 70%;
        margin-left: 7rem;
        background: aquamarine;
    }
</style>


<body>
    <header class="header-h">
        <nav>
            <a href="home.php">
                <div class="logo" style="margin-left: 2rem;">Nsuer</div>
            </a>
            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" id="btn" style="display:none;">
            <ul>
                <li> <a href="home.php"> Home</a> </li>
                <li> <a href=""> Need : 1.6k</a> </li>

                <li> <a href=""> Donation : 0.165k <sub>(updated 17 Jul) </sub></a></li>


                <li> <a href="">

                        <?php
                        $total_website_views = total_views($conn); // Returns total website views
                        echo "<strong>Total view :</strong> " . $total_website_views;
                        ?>
                    </a> </li>
                <!-- <li> <a href="" class="countdown">00 : 00 : 00 : 00 </a></li> -->
            </ul>


        </nav>
    </header>



    <section class="home" id="home">

        <marquee class="marquee"> Thank you So Much <b> &emsp;" Tawfique Hassan ♡ ♡ | Fariya | Zahid Hasan | Rifat | Mehedy </b> &emsp; " For your donation . </marquee>

        <h1>
            <!-- <img src="https://www.kindpng.com/picc/m/152-1525542_donate-png-pic-donate-clipart-transparent-png.png" alt="" style="width:60px ;height: 55px"> --> Expired in Domain and Hosting → <i class="countdown"> 00 : 00 : 00 : 00 </i>
        </h1>
        <p>

            <!-- <br>
           <img src="https://1000logos.net/wp-content/uploads/2021/02/Bkash-logo.png" alt="" style="width: 45 ;  height:35px"> Bkash (parsonal)- <b id="p1"> 01716095046 </b> &emsp; <button type=" button" class="btn btn-outline-success" onclick="copyToClipboard('#p1')">copy number</button> <br>

            <img src="https://download.logo.wine/logo/Nagad/Nagad-Logo.wine.png" alt="" style="width: 45 ;  height:35px"> Nagad (parsonal) - <b id="p1"> 01716095046 </b> &emsp;<button type=" button" class="btn btn-outline-success" onclick="copyToClipboard('#p1')">copy number</button> <br>
            <img src="https://iconape.com/wp-content/files/fy/184568/svg/184568.svg" alt="" style="width: 45 ;  height: 25px"> Rocket (parsonal) - <b id="p2"> 017160950466 </b> &emsp;<button type=" button" class="btn btn-outline-success" onclick="copyToClipboard('#p2')">copy number</button> <br> -->
        </p>
        <a href="home.php"><button style="font-size:2.2rem" type="button" class="btn btn-outline-success">Get Started</button> </a>








    </section>


</body>
<script src="js/timestamp.js"></script>

<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>

</html>