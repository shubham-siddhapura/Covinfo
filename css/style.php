<style>

    html{
        scroll-behavior:smooth;
    }
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Mulish', sans-serif;
    }
    .row{
        margin-left:0!important;
        margin-right:0!important;
    }
    .nav_style{
        background-color:#a29bfe!important;
    }

    .nav_style a{
        color:white!important;
    }

    .flex{
        display:flex;
        justify-content:space-around;
        align-items:center;
        flex-wrap:wrap;
    }

    /* ============================MAIN HEADER================================= */

    .main_header{
        width:100%;
        height:450px;
    }

    .rightside h1{
        font-size:3rem;
    }

    .virus_rot img{
        animation:rotate 2s linear infinite;
    }

    @keyframes rotate {
        0%{
            transform:rotate(0deg);
        }
        100%{
            transform:rotate(360deg);
        }
    }

    .leftside img{
        animation:beat 1.5s linear infinite alternate;
    }

    @keyframes beat {
        0%{
            transform:scale(0.80);
        }
        100%{
            transform:scale(1);
        }
    }

    /* ======================== CORONA UPDATE ====================== */

    .corona_update{
        margin-bottom:2rem;
    }

    .corona_update>div>h3{
        color:#ff7675;
    }

    .corona_update h1{
        font-size:2rem;
        text-align:center;
    }

    /* ================================About section====================== */
    .sub_section{
        background-color:#fcfafd;
    }

    /* ==================================footer============================== */
    .footer_style{
        background-color:#a29bf2;
    }

    .footer_style p{
        margin-bottom:0!important;
    }

    #topbtn{
        display:none;
        position: fixed;
        bottom:2rem;
        right:2.5rem;
        z-index: 100;
        border:none;
        border-radius:10px;
        background-color:#00a8ff;
        color:white;
        cursor:pointer;
        padding:10px;
    }

    #topbtn:hover{
        background-color:#606060;
    }

    /* ==============================Global update====================== */
    .global{
        width:auto;
        border-radius:1rem;
        padding:1rem 2rem;
    }

    #conf{
        background-color:#0000ff60;
    }

    #act{
        background-color:#ffff0066;
    }

    #rec{
        background-color:#00ff0066;
    }

    #deaths{
        background-color:#ff000066;
    }


    /* =============================Responsiv==================== */

    @media (max-width:768px) {
        .main_header{
            height:80vh;
            text-align:center;
        }
        
        .main_header h1{
            text-align:center;
            padding:5px;
            width:100%;
            font-size:2.3rem;
        }

        .count_style{
            display:inline!important;
        }

        .count_style p{
            text-align:center!important;
        }

        #aboutid{
            
            overflow-x:hidden;
        }

        .about_img{
            margin: 0!important;
            padding:0!important;
        }

        .global{
            width:90vw!important;
        }

        .global h1{
            text-align:center;
        }

        .global h3{
            text-align:center;
        }
    }

    

</style>
