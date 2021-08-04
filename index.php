
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <?php include("link/link.php");?>
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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#aboutid">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="world.php">Global Updates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="india.php">India Updates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#symptoms">Symptoms</a>
        </li><li class="nav-item">
            <a class="nav-link" href="#prevent">Prevention</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
        </li>
       
    </div>
    </nav>
    <!-- navbar ends -->

    <!-- main header starts -->
    <div class="main_header">
        <div class="row w-100 h-100">
        
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">

                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/side.jpg" width="300" height="300" style="border-radius:50%" alt="">
                </div>

            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">

                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against <span class="virus_rot">Cor<img src="images/virus.png" width="70" height="70" alt="">na</span> Virus</h1>
                </div>              

            </div>
        
        </div>
    </div>
    <!-- main header ends -->

    <!-- corona latest updates starts -->
    <section class="corona_update">
        <div class="mb-5 update">
            <h3 class="text-uppercase text-center">Covid-19 Global updates</h3>
        </div>

        
        <div class="d-flex justify-content-around align-items-center mb-3 count_style">
            <div id="conf" class="mb-3 global">
                <h1 class="count" id="confirmed"></h1>
                <h3 id="newcon" class="count"></h3>
                <p>total cases</p>
            </div>

            <div id="act" class="mb-3 global">
                <h1 class="count" id="active"></h1>
                <h3 id="newact" class="count"></h3>
                <p>Active cases</p>
            </div>
            
            <div id="rec" class="mb-3 global">
                <h1 class="count" id="recovered"></h1>
                <h3 id="newrec" class="count"></h3>
                <p>recoverd cases</p>
            </div>
            
            <div id="deaths" class="mb-3 global">
                <h1 class="count" id="death"></h1>
                <h3 id="newdeath" class="count"></h3>
                <p>death cases</p>
            </div>
        </div>

        <div class="mb-5 update">
            <h3 class="text-uppercase text-center">Covid-19 India updates</h3>
        </div>

        
        <div class="d-flex justify-content-around align-items-center mb-3 count_style">
            <div id="conf" class="mb-3 global">
                <h1 class="count" id="indconfirmed"></h1>
                <h3 id="indnewcon" class="count"></h3>
                <p>total cases</p>
            </div>

            <div id="act" class="mb-3 global">
                <h1 class="count" id="indactive"></h1>
                <h3 id="indnewact" class="count"></h3>
                <p>Active cases</p>
            </div>
            
            <div id="rec" class="mb-3 global">
                <h1 class="count" id="indrecovered"></h1>
                <h3 id="indnewrec" class="count"></h3>
                <p>recoverd cases</p>
            </div>
            
            <div id="deaths" class="mb-3 global">
                <h1 class="count" id="inddeath"></h1>
                <h3 id="indnewdeath" class="count"></h3>
                <p>death cases</p>
            </div>
        </div>
    </section>
    <!-- corona latest updates starts -->

    <!-- about section starts -->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header mt-5 mb-5 text-center">
            <h1>About COVID-19</h1>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_img">
                <img src="images/about.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-md-6 col-12">

                <h2>What is COVID-19 (Corona Virus) ?</h2>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. This new virus and disease were unknown before the outbreak begun in Wuhan, China in December 2019.</p>
                <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans. 
                </p>
                <p>
                Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.</p>

            </div>


        </div>

    </div>
    <!-- about section ends -->

    <!-- Symptoms section starts -->
    <div class="container-fluid pt-5 pb-5" id="symptoms">
        <div class="section_header mt-5 mb-5 text-center">
            <h1>COVID-19 Symptoms</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/cough.jpg" width="120" height="120" alt="">
                        <figcaption>cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/runnynose.png" width="120" height="120" alt="">
                        <figcaption>runny nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/fever.jpg" width="120" height="120" alt="">
                        <figcaption>fever</figcaption>
                    </figure>
                </div>
                
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/cold.png" width="120" height="120" alt="">
                        <figcaption>cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/tired.jpg" width="120" height="120" alt="">
                        <figcaption>tiredness</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center mt-5">
                        <img src="images/breathing.jpg" style="border-radius:20%" width="120" height="120" alt="">
                        <figcaption>breathing problem</figcaption>
                    </figure>
                </div>
                
            </div>

        </div>

    </div>
    <!-- Symptoms section ends -->

    <!-- prevention section starts -->
    <div class="container-fluid sub_section pt-5 pb-5" id="prevent">
        <div class="section_header mt-5 mb-5 text-center">
            <h1>6 Steps Prevention Against Coronavirus</h1>
        </div>
        <div class="flex col-12">
            <div class="container col-lg-9 col-md-12 col-12">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/handwashing.png" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Wash your hand regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/socialdis.jpg" style="border-radius:15%;" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Avoid close contact(1 meter or 3 feets) with people who are unwell</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/alergy.jpg" style="border-radius:15%;" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/stayhome.png" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay home and self-isolate from others in the household if you feel unwell</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/live.png" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay informed by watching news & follow the recommanded practices</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="images/sick.png" width="100" height="100" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>If you have fever, cough and breathing problem contanct us immediately.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/6XdjmB4IY3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/xVu_I6WCsto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
        </div>

        

        
        

    </div>
    <!-- prevention section ends -->

    <!-- contact us starts -->
    <div class="container-fluid pt-5 pb-5" id="contact">
        <div class="section_header mt-5 mb-5 text-center">
            <h1>Contact us ASAP</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <form action="" method="post">
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text" class="form-control"  name="username" placeholder="name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label >Mobile</label>
                            <input type="number" class="form-control"  name="mobile" placeholder="Mobile" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Describe Symptoms</label>
                            <textarea class="form-control" name="detail" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us ends -->

    <!-- top curser starts -->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFun()" id="topbtn"></i>
    </div>
    <!-- top curser ends -->

    <!-- footer starts -->
    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>copyrights by Shubham Siddhapura</p>
        </div>
    </footer>
    <!-- footer ends -->


    <script type="text/javascript">

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

                // india update
                document.getElementById("indconfirmed").innerHTML=data["Countries"][76]["TotalConfirmed"];
                if(data["Countries"][76]["NewConfirmed"]>0){
                    document.getElementById("indnewcon").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Countries"][76]["NewConfirmed"];
                }
                else{
                    document.getElementById("indnewcon").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Countries"][76]["NewConfirmed"];
                }
                

                document.getElementById("indactive").innerHTML=data["Countries"][76]["TotalConfirmed"]-data["Countries"][76]["TotalRecovered"]-data["Countries"][76]["TotalDeaths"];
                if(data["Countries"][76]["NewConfirmed"]-data["Countries"][76]["NewRecovered"]-data["Countries"][76]["NewDeaths"]>0){
                    var activecase=data["Countries"][76]["NewConfirmed"]-data["Countries"][76]["NewRecovered"]-data["Countries"][76]["NewDeaths"];
                    document.getElementById("indnewact").innerHTML='<i class="fa fa-arrow-up"></i> '+activecase;
                }
                else{
                    var activecase=data["Countries"][76]["NewRecovered"]+data["Countries"][76]["NewDeaths"]-data["Countries"][76]["NewConfirmed"];
                    document.getElementById("indnewact").innerHTML='<i class="fa fa-arrow-down"></i> '+activecase;
                }
                
                document.getElementById("indrecovered").innerHTML=data["Countries"][76]["TotalRecovered"];
                if(data["Countries"][76]["NewRecovered"]>0){
                    document.getElementById("indnewrec").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Countries"][76]["NewRecovered"];
                }
                else{
                    document.getElementById("indnewrec").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Countries"][76]["NewRecovered"];
                }
                

                document.getElementById("inddeath").innerHTML=data["Countries"][76]["TotalDeaths"];
                if(data["Countries"][76]["NewDeaths"]>0){
                    document.getElementById("indnewdeath").innerHTML='<i class="fa fa-arrow-up"></i> '+data["Countries"][76]["NewDeaths"];
                }
                else{
                    document.getElementById("indnewdeath").innerHTML='<i class="fa fa-arrow-down"></i> '+data["Countries"][76]["NewDeaths"];
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

<?php
    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $detail=$_POST['detail'];
        
        $query="insert into contact (name, email, mobile, detail) values ('$name', '$email', '$mobile', '$detail')";
        $execute=mysqli_query($con, $query);
        if($execute){
            header("Location: index.php");
        }
        else{
            echo"something went wrong";
        }
    }
?>