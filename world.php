<?php

    $data=file_get_contents("https://api.covid19api.com/summary");
    $codata=json_decode($data);

    // echo "<pre>";
    // print_r($codata);

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
        <h3 class="text-uppercase text-center">Covid-19 Global updates</h3>
    </div>

    <div class="d-flex justify-content-around align-items-center mb-3 count_style">
        <div id="conf" class="mb-3 global">
            <h1 class="count" id="confirmed"></h1>
            <h3 id="newcon"></h3>
            <p>total cases</p>
        </div>

        <div id="act" class="mb-3 global">
            <h1 class="count" id="active">123456</h1>
            <h3 id="newact"></h3>
            <p>Active cases</p>
        </div>
        
        <div id="rec" class="mb-3 global">
            <h1 class="count" id="recovered">123456</h1>
            <h3 id="newrec"></h3>
            <p>recoverd cases</p>
        </div>
        
        <div id="deaths" class="mb-3 global">
            <h1 class="count" id="death">123</h1>
            <h3 id="newdeath"></h3>
            <p>death cases</p>
        </div>
    </div>


    <div class="table-responsive rounded">

        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>Confirmed</th>
                <th>Active</th>
                <th>Recovered</th>
                <th>Deaths</th>
            </tr>

        </table>

    </div>
</div>

    <!-- top curser starts -->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFun()" id="topbtn"></i>
    </div>
    <!-- top curser ends -->

<script>

    function fetch(){

        $.get("https://api.covid19api.com/summary", 
            function (data){
                // console.log(data['Countries'].length);

                document.getElementById("confirmed").innerHTML=data["Global"]["TotalConfirmed"];
                if(data["Global"]["NewConfirmed"]>0){
                    document.getElementById("newcon").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Global"]["NewConfirmed"];
                }
                else{
                    document.getElementById("newcon").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Global"]["NewConfirmed"];
                }
                

                document.getElementById("active").innerHTML=data["Global"]["TotalConfirmed"]-data["Global"]["TotalRecovered"]-data["Global"]["TotalDeaths"];
                if(data["Global"]["NewConfirmed"]-data["Global"]["NewRecovered"]-data["Global"]["NewDeaths"]>0){
                    var activecase=data["Global"]["NewConfirmed"]-data["Global"]["NewRecovered"]-data["Global"]["NewDeaths"];
                    document.getElementById("newact").innerHTML='<i class="fa fa-arrow-up"></i> '+activecase;
                }
                else{
                    var activecase=data["Global"]["NewRecovered"]+data["Global"]["NewDeaths"]-data["Global"]["NewConfirmed"];
                    document.getElementById("newact").innerHTML='<i class="fa fa-arrow-down"></i> '+activecase;
                }
                
                document.getElementById("recovered").innerHTML=data["Global"]["TotalRecovered"];
                if(data["Global"]["NewRecovered"]>0){
                    document.getElementById("newrec").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Global"]["NewRecovered"];
                }
                else{
                    document.getElementById("newrec").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Global"]["NewRecovered"];
                }
                

                document.getElementById("death").innerHTML=data["Global"]["TotalDeaths"];
                if(data["Global"]["NewDeaths"]>0){
                    document.getElementById("newdeath").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Global"]["NewDeaths"];
                }
                else{
                    document.getElementById("newdeath").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Global"]["NewDeaths"];
                }
                
        

                var tbval=document.getElementById("tbval");

                for(var i=1;i<data['Countries'].length;i++){
                    var row=tbval.insertRow();
                    row.insertCell(0);
                    tbval.rows[i].cells[0].innerHTML=data["Countries"][i-1]["Country"];
                    tbval.rows[i].cells[0].style.background='#80008075';
                    tbval.rows[i].cells[0].style.color='white';

                    row.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML=data["Countries"][i-1]["TotalConfirmed"];
                    
                    if(data["Countries"][i-1]["NewConfirmed"]>0){
                        tbval.rows[i].cells[1].innerHTML+=" [+"+data["Countries"][i-1]["NewConfirmed"]+"]";
                        if(data["Countries"][i-1]["NewConfirmed"]>1000){
                            tbval.rows[i].cells[1].style.color='#ff0000';
                            tbval.rows[i].cells[1].style.font='bolder';
                        } 
                    }
                   
                    tbval.rows[i].cells[1].style.background='#0000ff60';
                    row.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML=data["Countries"][i-1]["TotalConfirmed"]-data["Countries"][i-1]["TotalRecovered"]-data["Countries"][i-1]["TotalDeaths"];
                    
                    tbval.rows[i].cells[2].style.background='#ffff0066';
                    row.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML=data["Countries"][i-1]["TotalRecovered"];
                    
                    if(data["Countries"][i-1]["NewRecovered"]>0){
                        tbval.rows[i].cells[3].innerHTML+=" [+"+data["Countries"][i-1]["NewRecovered"]+"]";
                        if(data["Countries"][i-1]["NewRecovered"]>1000){
                            tbval.rows[i].cells[3].style.color='#007a5e';
                            tbval.rows[i].cells[3].style.font='bolder';
                        }   
                    }
                    tbval.rows[i].cells[3].style.background='#00ff0066';
                    row.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML=data["Countries"][i-1]["TotalDeaths"];
                    if(data["Countries"][i-1]["NewDeaths"]>0){
                        tbval.rows[i].cells[4].innerHTML+=" [+"+data["Countries"][i-1]["NewDeaths"]+"]";   
                        if(data["Countries"][i-1]["NewDeaths"]>500){
                            tbval.rows[i].cells[4].style.color='#ff0000';
                            tbval.rows[i].cells[4].style.font='bolder';
                        }
                    }
                    tbval.rows[i].cells[4].style.background='#ff000066';
                }

            }
        )
    }
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

