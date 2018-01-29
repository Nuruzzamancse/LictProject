<!DOCTYPE html>
<html>
<head>
    
    <title>Side Menu</title>
    

    <script language="javascript" type="text/javascript" src="js/wow.js"></script>
	<script language="javascript" type="text/javascript" src="js/wow.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

    <script src="main.js"></script>

   

    <style>
    
            .sidemenu{

                height:100%;
                width:100%;
                min-height: 450px;
                min-width: 250px;
                max-width:300px;
                border:1px solid green;
                
                }
                #menu0, #menu1,#menu4,#menu5, #menu1p1, #menu2,#menu3,#menu2p2,#menu3p3,#menu4p4,#menu5p5{

                    clear:both;
                    overflow:hidden;
                    float:left;
                    padding:4px;
                    text-align:left;
                    background-color:#ccc;
                    border:1px solid #c3c3c3c3;
                    width:96%;
                    color:#FFFFFF;
                    cursor:pointer;

                }

                #menu1p1,#menu2p2,#menu3p3,#menu4p4,#menu5p5{
                    display:none;
                    padding:5px;
                    height:150px;
                    border:1px solid blue;
                    background: -webkit-gradient(linear, left bottom, left top, from(#4B0082), to(#ffffff));
                }
    
    </style>

<script>

    $(document).ready(function(){
        
        $("#menu1").click(function(){
            $("#menu1p1").slideToggle("slow");
            $("#menu2p2").hide("slow");
            $("#menu3p3").hide("slow");
            $("#menu4p4").hide("slow");
            $("#menu5p5").hide("slow");
        });

        $("#menu2").click(function(){
            $("#menu2p2").slideToggle("slow");
            $("#menu1p1").hide("slow");
            $("#menu3p3").hide("slow");
            $("#menu4p4").hide("slow");
            $("#menu5p5").hide("slow");
        });

        $("#menu3").click(function(){
            $("#menu3p3").slideToggle("slow");
            $("#menu2p2").hide("slow");
            $("#menu1p1").hide("slow");
            $("#menu4p4").hide("slow");
            $("#menu5p5").hide("slow");
        });

        $("#menu4").click(function(){
            $("#menu4p4").slideToggle("slow");
            $("#menu2p2").hide("slow");
            $("#menu3p3").hide("slow");
            $("#menu1p1").hide("slow");
            $("#menu5p5").hide("slow");
        });

        $("#menu5").click(function(){
            $("#menu5p5").slideToggle("slow");
            $("#menu2p2").hide("slow");
            $("#menu3p3").hide("slow");
            $("#menu4p4").hide("slow");
            $("#menu1p51").hide("slow");
        });

    });
</script>

    
</head>

<body>
    <div class="sidemenu">
                
    
            <div id="menu0">Products</div>


                <div id="menu1">
                     Male Products
                </div>

                <div id="menu1p1">
                    <ul>
                        <li>Panjabi</li>
                        <li>Pant</li>
                        <li>Shirt</li>
                        <li>T-shirt</li>
                    </ul>
                </div>

                <div id="menu2">
                    Products 2
                </div>

                <div id="menu2p2"> </div>

                <div id="menu3">
                    Products 3
                </div>

                <div id="menu3p3"> </div>

                <div id="menu4">
                    Products 4
                </div>

                <div id="menu4p4"> </div>

                <div id="menu5">
                    Products 5
                </div>

                <div id="menu5p35"> </div>
    </div>
</body>
</html>