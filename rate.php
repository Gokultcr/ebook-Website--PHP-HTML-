<?php
session_start();
// get value of id that sent from address bar

$p_id=$_GET['p_name'];

?>
<!DOCTYPE html>
<html class="ng-scope" ng-app=""><head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
       
        <title>Simple Rating System in JQuery, CSS, PHP, MySQL :devzone.co.in</title>
        <style type="text/css">.main { 
                width: 900px; 
                margin: 0 auto; 
                height: 700px;
                border: 1px solid #ccc;
                padding: 20px;
            }
           
            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }

            #dv1, #dv0{
                width: 408px;
                border: 1px #ccc solid;
                padding: 15px;
                margin: auto;

            }
			
           
            /*downloaded from http://devzone.co.in*/
        </style>
		
<style>
body{
	background-image:url(bg.jpg);
	background-size:2000px 1200px;
	background-repeat:no-repeat;
}
</style>
        <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>

    </head>
    <body >

        <!-- ad1 start -->
        <div style="width:170px;margin:0 auto;float: left;position:fixed;">

            <script async="" src="index_files/adsbygoogle.js"></script>
            <!-- 160x600_verticle -->
            <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3439042376"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"></ins></ins></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <!-- ad1 end http://DevZone.co.in-->

        <div class="main">
            <?php
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("ebooks", $conn);
?>
<?php 
//query the database
$query = "SELECT * FROM add_book WHERE id='$p_id'";

//fetch the results / convert results into an array

if ($query_run = mysql_query($query)){
	   while ($query_row = mysql_fetch_assoc($query_run))
{
$p_id = $query_row['id'];
$book_name = $query_row['a_bname'];
$author_name = $query_row['a_author'];
$book_catetgory = $query_row['a_cate'];
$book_publisher = $query_row['a_pub'];
$book = $query_row['a_book'];
$b_img= $query_row['book_img'];



//$sql1 = "update cart set total='$total'";
//$query_run = mysql_query($sql1);
?>
<div class="wrapper">
	     <div class="center">
	<img src="book_uploads/<?php echo $b_img;?>" width="259" height="259" />

	    &nbsp;&nbsp;&nbsp;&nbsp;<h1>Book Name:-<?php echo $book_name;?></h1><br/>

		
	     </div></font>
<?php

}
        }else
		{
	       echo mysql_error();
        }	
?>

            <div class="content">
               

                <div id="dv0"></div>
                <div id="dv1">

                    <!-- Demo 1 start -->
                    

                    <!-- Demo 1 end -->
                    


                    <!-- Demo 3 start -->
                    <h1>Rate Now.............</h1>
                    <script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {

                                var label = $("label[for='" + $(this).attr('id') + "']");
                                
                                $("#feedback").text(label.attr('title'));
                                $(this).attr("checked");
                            });
                        });
                    </script>
					<form action="rate_add.php" method="post">
					<input type="hidden" name="b_id" value="<?php echo$p_id?>">
					<input type="hidden" name="b_nam" value="<?php echo$book_name?>">
                    <fieldset id='demo3' class="rating">
                        <input class="stars" type="radio" id="star53" name="rating" value="5" />
                        <label class = "full" for="star53" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half3" name="rating" value="4.5" />
                        <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star43" name="rating" value="4" />
                        <label class = "full" for="star43" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half3" name="rating" value="3.5" />
                        <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star33" name="rating" value="3" />
                        <label class = "full" for="star33" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half3" name="rating" value="2.5" />
                        <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star23" name="rating" value="2" />
                        <label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half3" name="rating" value="1.5" />
                        <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star13" name="rating" value="1" />
                        <label class = "full" for="star13" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf3" name="rating" value="0.5" />
                        <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
					<input type="submit" value="rate it">
					</form>
                    <div id='feedback'></div>

                    <!-- Demo 3 end -->

<div style='clear:both;'></div>
                </div>

                <div class="cfmonitor" style="width:700px;margin-top:50px;">
                    <div style="width:340px;float:left;">
                        <script async="" src="index_files/adsbygoogle.js"></script>
                        <!-- 336x280 -->
                        <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3475973578"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"><ins id="aswift_1_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"></ins></ins></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div style="width:340px;float:left;">
                        <script async="" src="index_files/adsbygoogle.js"></script>
                        <!-- 336x280 -->
                        <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3475973578"><ins id="aswift_2_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"><ins id="aswift_2_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:336px;background-color:transparent"></ins></ins></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>
                </div>




            </div>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-43091346-1', 'devzone.co.in');
                ga('send', 'pageview');

            </script></div>


    </body></html>