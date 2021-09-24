<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Tri Fold Mirror
      </div>
      <div id="author">
        Claire Dawn | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="../img/Splash-Image-CarTrash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>I’ve been working as a hairdresser in Hollywood for the past decade. I can’t name names on whose hair I’ve dolled up, but you’d be shocked to know. And yes, the rumors are true about Hollywood trends. They come and go as fast as money comes and goes in a Las Vegas casino. </p>

      <p>But there’s this one trend that I’ve been seeing for months now among all the young ladies. They’ve been bringing a very particular portable mirror everywhere they go.</p>

      <p>Come to think of it, this trend started around the time a certain A-list celebrity was pictured with a major makeup fail all over the tabloids.</p>

      <p>I’ve talked to my best friend who’s a makeup artist. She says the number one problem comes down to poor lighting.</p>

      <p>“Fluorescent white lights are energy efficient, but not so great when you’re applying makeup. They’re too cool and bright. Most women end up putting too much foundation, bronzer, and blush on and end up looking like a ghost,” she said and then paused.</p>

      <p>“And don’t get me started on yellow lights… I call it “clown lighting” for a reason.”</p>

      <p>But then it happened…</p>

      <p>Despite my best friend being a makeup artist… </p>

      <p>And her talking about not putting makeup on in poor lighting…</p>

      <p>I walked into work looking 30 years older. </p>

      <p>My own major makeup fail.</p>

	<div class="articleImgsmall">
      <img src="../img/CarTrash2-1.jpg" width="100%" />
      </div>

      <p>Super embarrassing!!!</p>

      <p>Thankfully, before I walked too far, one of the actresses, Alicia, pulled me aside and opened her (incredibly) fancy portable mirror and showed me the horror.</p>

      <p>The foundation underneath my eyes was super white. I blobbed on way too much concealer on my nose (yes, a hilarious amount of it). I also clearly used the wrong lipstick. I was wondering why I was using a different color than what I normally did. The light made it seem like it was too dark for my skin.</p>

      <p>I was in a rush that morning and did my makeup using my car’s rear view mirror at 6:00 AM. Yeah, I held my phone up above my face to provide myself with lighting.</p>

      <p>Bad decisions were made that morning.</p>

      <p>It reminded me of when I first tried putting makeup on when I was a pre-teen.... I walked out of the dark bathroom thinking I had barely put any makeup on. I thought I was clever and my parents wouldn’t notice. They noticed immediately just how Alicia immediately pulled me into a nearby empty room.</p>

      <p>This time would’ve been way more embarrassing…</p>

      <p>I could’ve been embarrassed in front of all of my coworkers.</p>

      <p>I’m so glad that Alicia not only noticed and told me about the problem… but she could also show me AND she also helped me fix my makeup on the spot!</p>

      <p>“All of the agents told us we needed to start bringing lighted mirrors with us,” Alicia explained as she redid my eye shadow.</p>

      <div class="blockQuote">
         <i>
         Then she giggled and said, “You put a lot of makeup on in the areas that were dark from shadows. It’s something a lot of newbies do too. You need light that’s evenly applied like how this mirror evenly shines on your face.”
		</i>
      </div>

      <p>Technically, I knew better. But I still didn’t have a proper mirror with me at the time to actually prevent this makeup fail from happening.</p>

      <p>I thought to myself for a moment. I’m not one to follow Hollywood trends.</p>

      <p>But would I rather be stubborn and feel embarrassed or just hop on the trend in case and prevent another possible makeup fail…?</p>

      <p>Since makeup fails can happen so frequently (as I’ve personally witnessed over the years), I think it’s good common sense to get this mirror. So, I asked…</p>

      <p>“Where’d you get this nifty mirror? It’s like a mini-mirror from the studio room.”</p>

      <p>“Yeah, that’s another reason why everyone loves it. We call it “mini-Hollywood mirror” but it’s true name is ioVanity.”</p>

      </div>
    <div class="articleSubheader">
      What Is It?
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="img/product.jpg" width="100%" />
    </div>
    <div class="articleText">

      <p><a class="articleLink" href="<?=$exitLink;?>">ioVanity</a>  is a popular vanity makeup mirror for women to apply makeup on the go or in the comfort of their own home, in order to avoid some serious makeup fails.</p>

      <p>Yes, even celebrities face horrifying makeup fails.</p>

      <div class="articleImgsmall">
        <img src="img/makeup.jpg" width="100%" />
      </div>
      <!-- <div class="articleImgsmall">
        <img src="../img/CarTrash2.jpg" width="100%" />
      </div> -->

      <p>After all of these fails, more and more celebrities are turning to this easy-to-use mirror that folds up, lights up, and magnifies the face aimed to help people apply perfect precision makeup.</p>

    <p>That’s why celebrities can commonly be found holding this mirror on set or leaving them in their gym lockers before heading out to the studio or a party.</p>

    <p>Everyday people also appreciate this mirror. </p>

    <p>In the mornings, women say they put it in front of their computer screens before their Zoom meetings, quickly apply their makeup, and fold the mirror back up and put it down on the ground beside their desk. </p>

    <p>Women also tend to leave this mirror in their cars, in case they are in a morning rush or have a late night out with the girls or a sudden date.</p>

    <p>This mirror was invented because...</p>

    <p>No one wants to look inside a mirror that’s too small and there’s no way anyone would luggage a giant mirror around either…</p>

    <p>And most places don’t have the proper lighting without risking a serious makeup fail.</p>

    <p>That’s why this makeup mirror expands to become larger and folds up small enough to fit inside of a bag or a large purse and has even lighting.</p>

    <p>When opened, there’s actually 4 different mirrors. </p>

    <p>The center mirror shows the whole face (zits and all) and the long vertical mirror shows the entire length of the face; so women can adequately apply blush without overdoing it. </p>

    <p>And that’s not all. </p>

    <p>There’s two other mirrors. One mirror has 2x the magnification to help spot even the slightest of lipstick smudges; and the other mirror magnifies 3x to allow adequate eye makeup applications.</p>

    <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>

    <p>Therefore, this mirror eliminates the need to have a bunch of different mirrors around.</p>

    <p>The lights are LED, which is the type of lighting that makeup artists recommend for proper makeup applications. And the lights are set up to provide even lighting across the entire face.</p>

    <p>“When you’re in a rush, you may not be under the most perfect lighting to put on makeup. That’s why the mirror includes adjustable lights too. And it also gives that Hollywood look you’d see on famous movie sets.”</p>

    <p>The lights work anywhere. Choose between the mirror’s batteries or plug it into a wall with a USB cord / phone charger.</p>

    <p>“This is the easiest method to curb major makeup fails. You can bring the [product] anywhere. You can light up your entire face or dim the lights down as much as you please. Always look your best whether you’re going to be in a movie or going to watch a movie.”</p>

    </div>
    <div class="articleSubheader">
    What The Reviews Say
    </div>
    <div class="articleText">
      <p>Being the skeptic I am, I checked the reviews. To my surprise, thousands have already bought and used [product]. Women of all ages have shared their thoughts on social media. :</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Luke L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        The product was larger than I expected, in a good way ;). The materials are solid and the interior looks like it could definitely handle a few spills. The support sticks used to hold it open seem like they could fall out since there is no sleeve, but otherwise everything looks good.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Anne A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/30/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         Love this car trashcan! Fits my 2008 Toyota Corolla. Both passenger and driver can easily reach it. Can use a regular plastic bag from Walmart to fit inside. I especially like the Velcro strip on the underside that sticks to the carpet to secure it in place. Highly Recommend! Great price!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kim C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
          I was pleasantly surprised by the quality. It might sound silly but I wanted something that would stand up to a fair amount of use as the kids and I spend a LOT of time driving and often eat on the go, creating all kinds of garbage.
			This was perfect for my needs. Good size and well designed.

      </div>
    </div>
    <div class="articleText">

      <p>There’s so many reviews… so many 5 star reviews. And seeing it in Hollywood for months and months, it’s no wonder so many mirrors have sold.</p>

      <p>Since apparently it’s literally a must-have trend for anyone who uses makeup. So, I decided to bit the bullet it and put the mirror to the test.</p>

    </div>
    <div class="articleSubheader">
     I Bought It… Is It A Successful Trend or Dud?
    </div>
    <div class="articleText">

      <p>I bought the mirror. I’ve seen the mirror before, of course. But when it’s yours, it’s different. I opened my mirror and my eyes sparkled. “It’s just like in the movies.” It looks like a mini-version right out of my best friend’s makeup studio. </p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

	  <p>The real question that I am sure you are wondering, just as I wondered, how do you even test a mirror? I mean, that’s a strange question… Quite unconventional.</p>
     
      <p>So, I called up my best friend, the Makeup Queen. I asked her, “How can I know for sure this mirror is a quality mirror and not just some dud?”</p>

      <p>Her answer was surprisingly ordinary. “You use it.”</p>

      <p>“That’s it?” I asked.</p>

      <p>“Use it in your bathroom, your car, at the restaurant, on a rainy day, when the sun can’t shine any brighter in the middle of summer. If it can withstand all of these places and provide you good lighting with accurate makeup colors no matter where you are, then you know, you got a good, reliable mirror.”</p>

      <p>And that’s exactly what I did. </p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>So, I brought the mirror everywhere and used it everywhere… Until my daughter “borrowed” (A.K.A kept) it. I ended up having to buy another for myself.</p>

      <p>My favorite part is how you can adjust the lights. This single feature made it possible to do my makeup even on the rainiest of days in my car. </p>

      <p>But the most efficient part of the mirror is how it evenly lights up the face.</p>

      <p>I say this because...</p>

      <p>I tried using my phone to put makeup on in a restaurant to see how well it would compare to using the mirror.</p>

      <p>My boyfriend said that I did my makeup wonderfully… until we walked outside. </p>

      <p>He was absolutely horrified.</p>

      <p>I was absolutely horrified when I got in the car and looked inside the mirror. </p>

      <p>On a different day, I took my daughter out to the same restaurant. We did our makeup together while waiting for the food. I had my boyfriend pick us up. The LED lights evenly spread across the mirror helped keep us aware how accurate a color really was against our skin tone.</p>

      <p>Honestly, it was tremendously less annoying than holding my phone. And I didn’t smudge any makeup on my phone either this time.</p>

      <p>We walked out. My boyfriend came out, gave me a kiss, and said how lovely we both looked.</p>

      <p>I got so many stories about how this mirror made a difference. Thanks to all of this practice and the lighting and magnification this mirror provides, my makeup game is on point now.</p>

      <p>I’ve found much more suitable colors for my face and skin tone. The lighting can change the appearance of the makeup. Even lighting helps neutralize any confusion and indescrepencies that could happen. The magnification helps with seeing and fixing any slight mistake or smudge on the lips or eyes.</p>

      <p>My daughter’s favorite part is that she can bring the mirror anywhere and still sees her entire face. She loves bringing it to sleepovers. All of her friends’ parents are mad at me because now they got to buy their daughters one.</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

    </div>
    <div class="articleSubheader">
    Was It Worth It and How Much Was It?
    </div>
    <div class="articleText">

        <p>I love this mirror (and so does my daughter and her friends). You can only get the mirror from the website. It’s the exact mirror that I see Hollywood actresses use. And it’s the exact mirror that I use. It has the best lighting, the clearest reflection, and lasts the longest. You definitely want something that you buy to last.</p>
        
      <p>You’d think since actresses use this mirror that it would be really expensive. But it’s only [price]. I obviously gave my daughter one, so it’s really not that expensive to get. I’m thinking of getting one for her best friend whose parents rarely ever buy her anything. I don’t want her to feel left out, you know. </p>

      <p>I’m a hairdresser, not a makeup professional. I always found putting makeup on was a lot harder than putting up hair. But this mirror definitely makes it easier and I don’t have to squint every 2 seconds. </p>

      <p>The last time I checked on the website, they were almost sold out. I’m not sure if they got a new stock in or not. You’d have to check it yourself.</p>
    </div>
   
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">ioVanity</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 10 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
