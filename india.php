<?php

    $api=file_get_contents("https://api.covid19india.org/data.json");
    $data=json_decode($api, true);

    // echo"<pre>";
    // print_r($data);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global update</title>

    <?php include("link/link.php"); ?>
    <?php include("css/style.php");?>
    <?php include("link/connection.php");?>


</head>
<body onload="fetch()">


    <!-- navbar starts -->
    <nav class="navbar navbar-expand-lg nav_style bg-light p-3">
    <a class="navbar-brand pl-5" href="#">COVINFO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-capitalize">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#aboutid">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="world.php">Global Updates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="india.php">India Updates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#symptoms">Symptoms</a>
        </li><li class="nav-item">
            <a class="nav-link" href="index.php#prevent">Prevention</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
        </li>
       
    </div>
    </nav>
    <!-- navbar ends -->

    <div class="container-fluid">
        <div class="mb-5 mt-5">
            <h3 class="text-uppercase text-center">Covid-19 India updates</h3>
        </div>

        <div class="d-flex justify-content-around align-items-center mb-3 count_style">
            <div id="conf" class="mb-3 global">
                <h1 class="count" id="confirmed"><?php echo $data['statewise'][0]['confirmed']; ?></h1>
                <h3 id="newcon"><i class="fa fa-arrow-up">&nbsp</i><?php echo $data['statewise'][0]['deltaconfirmed'];?></h3>
                <p>total cases</p>
            </div>

            <div id="act" class="mb-3 global">
                <h1 class="count" id="active"><?php echo $data['statewise'][0]['active'];?></h1>
                <h3 id="newact"><i class="fa fa-arrow-down"></i>&nbsp<?php echo $data['statewise'][0]['deltarecovered']+$data['statewise'][0]['deltadeaths']-$data['statewise'][0]['deltaconfirmed']; ?></h3>
                <p>Active cases</p>
            </div>
            
            <div id="rec" class="mb-3 global">
                <h1 class="count" id="recovered"><?php echo $data['statewise'][0]['recovered'];?></h1>
                <h3 id="newrec"><i class="fa fa-arrow-up"></i>&nbsp<?php echo $data['statewise'][0]['deltarecovered'];?></h3>
                <p>recoverd cases</p>
            </div>
            
            <div id="deaths" class="mb-3 global">
                <h1 class="count" id="death"><?php echo $data['statewise'][0]['deaths'];?></h1>
                <h3 id="newdeath"><i class="fa fa-arrow-up"></i>&nbsp<?php echo $data['statewise'][0]['deltadeaths'];?></h3>
                <p>death cases</p>
            </div>
        </div>


        <div class="table-responsive rounded">

            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>State</th>
                    <th>Confirmed</th>
                    <th>Active</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>

                <?php
                    $statescount=count($data['statewise']);
                    $i=1;
                    while($i<$statescount){
                        ?>
                        
                        <tr>
                            <td style="background-color:#80008075; color:white;"><?php echo $data['statewise'][$i]['state'];?></td>
                            <td style="background-color:#0000ff60;"><?php echo $data['statewise'][$i]['confirmed'];
                                if($data['statewise'][$i]['deltaconfirmed']>0){
                                    echo" [+".$data['statewise'][$i]['deltaconfirmed']."]";
                                }
                            ?></td>
                            <td style="background-color:#ffff0066;"><?php echo $data['statewise'][$i]['active'];
                                if($data['statewise'][$i]['deltarecovered']+$data['statewise'][$i]['deltadeaths']-$data['statewise'][$i]['deltaconfirmed']>0){
                                    echo" [+".$data['statewise'][$i]['deltarecovered']+$data['statewise'][$i]['deltadeaths']-$data['statewise'][$i]['deltaconfirmed']."]";
                                }
                            ?></td>
                            <td style="background-color:#00ff0066;"><?php echo $data['statewise'][$i]['recovered'];
                                if($data['statewise'][$i]['deltarecovered']>0){
                                    echo" [+".$data['statewise'][$i]['deltarecovered']."]";
                                }
                            ?></td>
                            <td style="background-color:#ff000066;"><?php echo $data['statewise'][$i]['deaths'];
                                if($data['statewise'][$i]['deltadeaths']>0){
                                    echo" [+".$data['statewise'][$i]['deltadeaths']."]";
                                }
                            ?></td>
                        </tr>

                        <?php
                        $i++;
                    }
                ?>

            </table>

        </div>
    </div>

    <!-- top curser starts -->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFun()" id="topbtn"></i>
    </div>
    <!-- top curser ends -->

    <script type="text/javascript">
        myBtn=document.getElementById("topbtn");
        window.onscroll=function(){scrollFun()};
        function scrollFun(){
            
            if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
                myBtn.style.display="block";
            }
            else{
                myBtn.style.display="none";
            }
        }

        function topFun(){
            document.body.scrollTop=0;
            document.documentElement.scrollTop=0;
        }

    </script>

</body>
</html>