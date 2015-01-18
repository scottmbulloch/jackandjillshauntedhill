<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Jack &amp; Jill's Haunted Hill</title>
  <meta name="description" content="This horrific haunted house is the most original, creative, realistic and engaging scare you can find in Phoenix for 2012" />
  <meta name="author" content="Scott Bulloch" />

  <meta name="viewport" content="width=device-width" />

  <link rel="stylesheet" href="style.css" /><link href='http://fonts.googleapis.com/css?family=' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nosifer|Overlock|Cabin+Sketch|Piedra|Averia+Gruesa+Libre" />
  
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png" />

  <script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body>

<header>

  <h1><a href="/"><img src="img/jackandjill_header_520x280.jpg" alt="Jack and Jill's Haunted Hill" title="Jack and Jill's Haunted Hill" /></a></h1>

</header>

<div id="main_content" class="clearfix">

  <h2>Jack &amp; Jill's Haunted Hill 2012</h2>
  
  <h3>We're back with an entirely new haunt at a new location.</h3>
  
<div id="left">

  <div class="mainblock margbot20" id="auditions">
    <h4>- Actors Needed -</h4>
    <p class="margbot10">Auditions being held this Saturday, September 15th from 11am-2pm at our haunt on 4237 W Thunderbird Rd, Phoenix, AZ 85029. Please fill out the following form if you are interested in being part of our cast.</p>
    <div id="contactform">
      <?php
      function spamcheck($field){
        $field=filter_var($field, FILTER_SANITIZE_EMAIL);
        if(filter_var($field, FILTER_VALIDATE_EMAIL)){
          return TRUE;
        }
        else{
          return FALSE;
        }
      }
      if (isset($_REQUEST["email"])){
        $mailcheck = spamcheck($_REQUEST["email"]);
        if ($mailcheck==FALSE){
      ?>
      <p class="alert">Invalid email address, please re-enter your information.</p>
      <form method="post" action="index.php#auditions">
        <table>
          <tr><td>Name: <input name="name" type="text" value="" /></td></tr>
          <tr><td>Email: <input name="email" type="text" value="" /></td></tr>
          <tr><td>Phone: <input name="phone" type="text" value="" /></td></tr>
          <tr><td>Age: <input name="age" type="text" value="" /></td></tr>
          <tr><td>Gender: 
            <input type="radio" name="gender" id="male" value="male" /> <label for="male">Male</label> &nbsp; 
            <input type="radio" name="gender" id="female" value="female" /> <label for="female">Female</label>
          </td></tr>
          <tr><td>Dates Available (check all that apply):</td></tr>
          <tr><td>
            <table id="calendar">
              <tr><th colspan="7">October 2012</td></tr>
              <tr><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr>
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5<input name="october[]" type="checkbox" value="5" /></td>
                <td>6<input name="october[]" type="checkbox" value="6" /></td>
                <td>7<input name="october[]" type="checkbox" value="7" /></td>
              </tr>
              <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12<input name="october[]" type="checkbox" value="12" /></td>
                <td>13<input name="october[]" type="checkbox" value="13" /></td>
                <td>14<input name="october[]" type="checkbox" value="14" /></td>
              </tr>
              <tr>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18<input name="october[]" type="checkbox" value="18" /></td>
                <td>19<input name="october[]" type="checkbox" value="19" /></td>
                <td>20<input name="october[]" type="checkbox" value="20" /></td>
                <td>21<input name="october[]" type="checkbox" value="21" /></td>
              </tr>
              <tr>
                <td>22</td>
                <td>23</td>
                <td>24<input name="october[]" type="checkbox" value="24" /></td>
                <td>25<input name="october[]" type="checkbox" value="25" /></td>
                <td>26<input name="october[]" type="checkbox" value="26" /></td>
                <td>27<input name="october[]" type="checkbox" value="27" /></td>
                <td>28<input name="october[]" type="checkbox" value="28" /></td>
              </tr>
              <tr>
                <td>29<input name="october[]" type="checkbox" value="29" /></td>
                <td>30<input name="october[]" type="checkbox" value="30" /></td>
                <td>31<input name="october[]" type="checkbox" value="31" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </td></tr>
          <tr><td>Comments: <textarea name="comments" rows="3"></textarea></td></tr>
          <tr><td><input name="submit" type="submit" value="Submit" /></td></tr>
        </table>
      </form>
      <?php
        }
        else{
          $name         = $_REQUEST["name"];
          $email        = $_REQUEST["email"];
          $phone        = $_REQUEST["phone"];
          $age          = $_REQUEST["age"];
          $gender       = $_REQUEST["gender"];
          $availability = $_REQUEST["october"];
          $comments     = $_REQUEST["comments"];
          $to           = "jackandjillshauntedhill@gmail.com";
          $msg          = " From : $name \r\n Email : $email \r\n Phone : $phone \r\n Age : $age \r\n Gender : $gender \r\n Available for work on October: $availability[0], $availability[1], $availability[2], $availability[3], $availability[4], $availability[5], $availability[6], $availability[7], $availability[8], $availability[9], $availability[10], $availability[11], $availability[12], $availability[13], $availability[14], $availability[15], $availability[16], $availability[17] \r\n Comments : $comments";
          mail($to, "Website Audition Form Submission", $msg, "From: $email");
          print("<p class='alert'>Thank you, we look forward to seeing you at the audition!</p>");
        }
      }
      else{
      ?>
      <form method="post" action="index.php#auditions">
        <table>
          <tr><td>Name: <input name="name" type="text" value="" /></td></tr>
          <tr><td>Email: <input name="email" type="text" value="" /></td></tr>
          <tr><td>Phone: <input name="phone" type="text" value="" /></td></tr>
          <tr><td>Age: <input name="age" type="text" value="" /></td></tr>
          <tr><td>Gender: 
            <input type="radio" name="gender" id="male" value="male" /> <label for="male">Male</label> &nbsp; 
            <input type="radio" name="gender" id="female" value="female" /> <label for="female">Female</label>
          </td></tr>
          <tr><td>Dates Available (check all that apply):</td></tr>
          <tr><td>
            <table id="calendar">
              <tr><th colspan="7">October 2012</td></tr>
              <tr><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr>
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5<input name="october[]" type="checkbox" value="5" /></td>
                <td>6<input name="october[]" type="checkbox" value="6" /></td>
                <td>7<input name="october[]" type="checkbox" value="7" /></td>
              </tr>
              <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12<input name="october[]" type="checkbox" value="12" /></td>
                <td>13<input name="october[]" type="checkbox" value="13" /></td>
                <td>14<input name="october[]" type="checkbox" value="14" /></td>
              </tr>
              <tr>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18<input name="october[]" type="checkbox" value="18" /></td>
                <td>19<input name="october[]" type="checkbox" value="19" /></td>
                <td>20<input name="october[]" type="checkbox" value="20" /></td>
                <td>21<input name="october[]" type="checkbox" value="21" /></td>
              </tr>
              <tr>
                <td>22</td>
                <td>23</td>
                <td>24<input name="october[]" type="checkbox" value="24" /></td>
                <td>25<input name="october[]" type="checkbox" value="25" /></td>
                <td>26<input name="october[]" type="checkbox" value="26" /></td>
                <td>27<input name="october[]" type="checkbox" value="27" /></td>
                <td>28<input name="october[]" type="checkbox" value="28" /></td>
              </tr>
              <tr>
                <td>29<input name="october[]" type="checkbox" value="29" /></td>
                <td>30<input name="october[]" type="checkbox" value="30" /></td>
                <td>31<input name="october[]" type="checkbox" value="31" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </td></tr>
          <tr><td>Comments: <textarea name="comments" rows="3"></textarea></td></tr>
          <tr><td><input name="submit" type="submit" value="Submit" /></td></tr>
        </table>
      </form>
      <?php
      }
      ?>
    </div>
  </div>
  
  <div class="mainblock margbot20" id="story">
    <h4>- The Story -</h4>
    <p>Jack and Jill went up the Hill but were never seen again...and you might not be either! While searching for water they stumbled upon an abandoned mine and never came back out...come explore the mine and see what happened to poor Jack and Jill. Hopefully you'll be lucky enough...to make it out...ALIVE!!!</p>
  </div>
  
  <div class="mainblock" id="testimonials">
    <h4>- Testimonials -</h4>
    <blockquote class="margbot10">
      <p><strong>&ldquo;</strong>Better, scarier, and longer than last year! The wait is a lot shorter too. I go to haunted houses every single year and this one left me very shaken.<strong>&rdquo;</strong></p>
      <p class="quoted">- Jon, 2011</p>
    </blockquote>
    <blockquote class="margbot10">
      <p><strong>&ldquo;</strong>Took my little girl for her first time here and believe me it was the best! Definatly recommend going. Great price and even better setup. Gonna go again for sure<strong>&rdquo;</strong></p>
      <p class="quoted">- TJ, 2011</p>
    </blockquote>
    <blockquote class="margbot10">
      <p><strong>&ldquo;</strong>My girlfriend and I went last weekend after hearing from some friends that went how scary it was. She had to have a few drinks before getting there just to get over the anxiety of going in. Hands down the creepiest and most intimate spookfest I've ever seen. I would give it two thumbs up, and my girlfriend would tell you to wear diapers!<strong>&rdquo;</strong></p>
      <p class="quoted">- Ryan S, 2010</p>
    </blockquote>
    <blockquote class="margbot10">
      <p><strong>&ldquo;</strong>We have gone to many and this by far is unique, creative, scary and fun. Great for the money, highly recommend it! :-))<strong>&rdquo;</strong></p>
      <p class="quoted">- Kathi, Andy and Kyle, 2010</p>
    </blockquote>
    <blockquote>
      <p><strong>&ldquo;</strong>My husband and I went last year and thought that (for the price) it may not be that great. We were WRONG! They put on a great show and I was literally screaming - or swearing - the entire time. It's just long enough for you to have fun, get scared but not so long that you really start to want out. Another cool part, real actors. Looking forward to this year.<strong>&rdquo;</strong></p>
      <p class="quoted">- Amanda, 2010</p>
    </blockquote>
    </div>

</div><!-- end of left -->

<div id="right">

  <div class="sideblock margbot20" id="tickets">
    <h5>Tickets &amp; Price</h5>
    <p class="margbot10">Advance tickets are avalaible for purchase online through <a href="http://www.brownpapertickets.com/event/266280" target="_blank">Brown Paper Tickets</a>. Tickets also available at the door.</p>
    <div class="margbot10"><a href="http://www.brownpapertickets.com/event/266280" target="_blank"><img src="img/tickets_button_250x140.png" alt="Buy tickets online now at Brown Paper Tickets" /></a></div>
    <p><strong>General admission: $10.<sup>00</sup><br />VIP admission: $18.<sup>00</sup><br />Online VIP Special: $13.<sup>00</sup></strong><br />Special available through September.</p>
  </div>

  <div class="sideblock margbot20" id="location">
    <h5>Location</h5>
    <p><strong><a href="http://maps.google.com/maps?q=4237+W+Thunderbird+Rd,+Phoenix,+AZ+85029&hl=en&ll=33.609365,-112.151184&spn=0.029558,0.036092&hnear=4237+Thunderbird+Rd,+Phoenix,+Arizona+85029&gl=us&t=h&z=15" target="_blank">4237 W Thunderbird Rd,<br />Phoenix, AZ 85029</a></strong></p>
  </div>

  <div class="sideblock margbot20" id="share">
    <h5>Share</h5>
    <div id="fb-root"></div>
    <table class="social margbot10">
      <tr>
        <td><div class="fb-like" data-href="http://jackandjillshauntedhill.com/" data-send="false" data-layout="box_count"></div></td>
        <td><a href="http://jackandjillshauntedhill.com/" class="twitter-share-button" data-url="http://jackandjillshauntedhill.com/" data-via="JackandJillsHH" data-lang="en" data-count="vertical"></a></td>
        <td><div class="g-plusone" data-href="http://jackandjillshauntedhill.com/" data-size="tall"></div></td>
        <td><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fjackandjillshauntedhill.com%2F&media=http%3A%2F%2Fjackandjillshauntedhill.com%2Fimg%2Fjackandjill_logo_600x600.png&description=Visit%20this%20great%20haunted%20house%20in%20October%202012" class="pin-it-button" count-layout="vertical"></a></td>
      </tr>
    </table>
    <table class="social">
      <tr>
        <td><div class="fb-send" data-href="http://jackandjillshauntedhill.com/"></div></td>
        <td><a href="https://twitter.com/JackandJillsHH" class="twitter-follow-button" data-show-screen-name="false" data-show-count="false" data-lang="en"></a></td>
        <td><div class="addthis_toolbox addthis_default_style"><a class="addthis_counter addthis_pill_style"></a></div></td>
      </tr>
    </table>
  </div>
    
  <div class="sideblock margbot20" id="sponsor">
    <h5>Sponsored by</h5>
    <div><a href="http://troopfuel.com/" target="_blank"><img src="img/sponsor_troopfuel_270x50.png" alt="TroopFuel" /></a></div>
  </div>
  
  <div class="sideblock margbot20" id="friends">
    <h5>Friends</h5>
    <div class="margbot10"><a href="http://www.vettix.org/" target="_blank"><img src="img/friend_veterantickets_240x90.png" alt="Veteran Tickets Foundation - Give Something to Those Who Gave" /></a></div>
    <div class="margbot10"><a href="http://www.hauntedhouse.com/" target="_blank"><img src="img/friend_hauntedhouse_240x60.png" alt="Find Halloween At HauntedHouse.com" /></a></div>
    <div><a href="http://www.hauntworld.com/" target="_blank"><img src="img/friend_hauntworld_240x60.png" alt="Find Halloween At HauntWorld.com" /></a></div>
  </div>

</div><!-- end of right -->

</div><!-- end of main_content -->

<footer>  

  <div id="footer_content">
    <p>Copyright &copy; 2008-2012 Keith Jackson. All rights reserved. <a href="http://scottbulloch.com/" target="_blank">Web design and coding by Scott Bulloch</a>.</p>
  </div>

</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<script>
  // Google
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31898400-1']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['jackson._setAccount', 'UA-33935604-1']);
  _gaq.push(['jackson._trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	
	// Statcounter
  var sc_project=4891729; 
  var sc_invisible=1; 
  var sc_partition=57; 
  var sc_click_stat=1; 
  var sc_security="e4f2205c"; 
</script>
<script src="http://www.statcounter.com/counter/counter_xhtml.js"></script>

<script src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src='https://connect.facebook.net/en_US/all.js#xfbml=1';fjs.parentNode.insertBefore(js, fjs);}(document,'script','facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
<script>(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/plusone.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script>
<script src="http://assets.pinterest.com/js/pinit.js"></script>
<script>var addthis_config={'data_track_addressbar':true};</script>
<script src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-5029afca286ec4f3"></script>

</body>
</html>
