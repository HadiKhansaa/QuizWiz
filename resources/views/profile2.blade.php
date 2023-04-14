<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--==============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Profile</title>
</head>
<header>
    <div class="topnav" style="position: absolute; top:0%; left:0%; width:100%; margin-top:0%;">
        <a href="/" style="float:left; margin-left:3%; font-size:20px;"><b>QUIZ<span style="color:#fc00ff;">WIZ</span></b></a>
        <a class="active" href="profile"><b>Profile</b></a>
        <a href="leaderboard"><b>Leaderboard</b></a>
        <a href="contact"><b>Contact</b></a>
        <a href="signIn"><b>Register</b></a>
        <a  href="home"><b>Home</b></a>
      </div>
</header> 
<style>
    html{
        align-items: center;
        justify-content: center;
    }
    body {
        background-color: #f9f9fa;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card {
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
        box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
        border: none;
        margin-bottom: 30px;
    }

    .m-r-0 {
        margin-right: 0px;
    }

    .m-l-0 {
        margin-left: 0px;
    }

    .user-card-full .user-profile {
        display: flex;
        flex-direction: column;
        border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263);
    }

    .user-profile {
        padding: 20px 0;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
    }

    h6 {
        font-size: 14px;
    }

    .card .card-block p {
        line-height: 25px;
    }

    @media only screen and (min-width: 1400px){
    p {
        font-size: 14px;
    }
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .user-card-full .social-link li {
        display: inline-block;
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
</style>

<?php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    $id = session()->get('user');
    if($id != null)
    {
        $result = DB::select("select * from accounts where id = ".$id);
    }
    else {
        $result = null;
    }

    if($result !=null){
        $name = $result[0]->full_name;
        $username = $result[0]->username;
        $rating = $result[0]->rating;
    }
    else{
        $name = "not found";
        $username = "not found";
        $rating = 0;
    }
?>

<body style="background-image: url('images/bg-01.jpg'); background-repeat:no-repeat; background-size:cover;">
    <div class="page-content page-container" id="page-content" style="display: flex;flex-direction: column; transform:scale(145%); position: absolute; top: 25%;">
        <div class="padding" style="display: flex;flex-direction: column;">
            <div class="row container d-flex justify-content-center" style="display: flex;flex-direction: column;">
                <div class="col-xl-6 col-md-12" style="display: flex;flex-direction: column;">
                    <div class="card user-card-full" style="display: flex;flex-direction: column;">
                        <div class="row m-l-0 m-r-0" style="display: flex;flex-direction: row;">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600"><?php echo $name?></h6>
                                    
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8" style="background:#e0e0e0">
                                <div class="card-block" style="display: flex;flex-direction: row;">
                                    
                                    <div class="row" style="display: flex;flex-direction: column;">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600" >Email</p>
                                            <h6 class="text-muted f-w-400" style="margin-bottom: 20%"><?php echo $username?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Rating</p>
                                            <h6 class="text-muted f-w-400"><?php echo $rating?></h6>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600" style="margin-left: 45%">Badge</p>
                                            <?php
                                                
                                                if($rating <=1200)
                                                    echo "<img src='images/bronzeRank.png' style='width: 50%; height:50%; margin-left:35%; margin-top:20%;'>";
                                                else if($rating <=1500)
                                                    echo "<img src='images/silverRank.png' style='width: 50%; height:50%; margin-left:35%; margin-top:15%;'>";
                                                else if($rating <=1800)
                                                    echo "<img src='images/goldRank.png' style='width: 50%; height:50%; margin-left:35%; margin-top:10%;'>";
                                                else if ($rating>1800)
                                                    echo "<img src='images/diamondRank.png' style='width: 50%; height:50%; margin-left:35%; margin-top:15%;'>";
                                            ?>
                                            <h6 class="text-muted f-w-400"></h6>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="display:flex; flex-direction:row; position: absolute; top: 85%;">
        <form action="/logOut" method="get" style="margin-right:10%;">
            <input type="submit" class="button-20" style="background-color:grey;" value="LogOut"></input>
        </form>
        <form action="/deleteAccount" method="get">
            <input type="submit" class="button-20" style="background:linear-gradient(to right, #ee5a6f, #f29263);" value="Delete Account"></input>
        </form>
    </div>
</body>
</html>
