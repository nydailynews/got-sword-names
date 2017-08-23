<?php
$share_img = 'share';
$share_height = 767;
$share_width = 512;
if ( count($_GET) > 0 ):
	$pieces = explode('_', htmlspecialchars($_GET['sword']));
	$sword_id = intval(array_slice($pieces, -1));
	$share_img = 'weapon-' . $sword_id;
	$share_height = 600;
	$share_width = 300;
endif;
?><!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Game of Thrones Weapon Name Generator</title>
    <link rel="icon" type="image/png" href="http://interactive.nydailynews.com/favicons.png">
    <!-- DEFAULT -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="">
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <!-- Titles -->
    <meta property="og:title" content='Game of Thrones Weapon Name Generator' />
    <meta name="twitter:title" content='Game of Thrones Weapon Name Generator' />

    <!-- DESCRIPTION -->
    <meta name="description" content="Generate a Game of Thrones-style blade-name for your fictional digital weapon." />
    <meta property="og:description" content="Generate a Game of Thrones-style blade-name for your fictional digital weapon." />
    <meta name="twitter:description" content="Generate a Game of Thrones-style blade-name for your fictional digital weapon." />

    <!-- KEYWORD -->
    <meta name="keywords" content="Game of Thrones,sword name generator,axe name generator,swords,axes" />
    <meta name="news_keywords" content="Game of Thrones,sword name generator,axe name generator,swords,axes" />

    <!-- LINK -->
    <link rel="canonical" href="http://interactive.nydailynews.com/project/choose-your-weapon/">
    <meta property="og:url" content="http://interactive.nydailynews.com/project/choose-your-weapon/" />
    <meta name="twitter:url" content="http://interactive.nydailynews.com/project/choose-your-weapon/" />

    <!-- THUMBNAIL IMAGE-->
    <meta property="og:image" content="http://interactive.nydailynews.com/project/choose-your-weapon/img/<?php echo $share_img; ?>.png" />
    <meta name="twitter:image" content="http://interactive.nydailynews.com/project/choose-your-weapon/img/<?php echo $share_img; ?>.png" />
    <meta name="twitter:image:alt" content="A photo of Joffrey Lannister from Game of Thrones (when he was alive)" />
    <meta property="og:image:width" content="<?php echo $share_width; ?>" />
    <meta property="og:image:height" content="<?php echo $share_height; ?>" />

    <!-- PARSELY -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "Game of Thrones Weapon Name Generator",
            "url": "http://interactive.nydailynews.com/project/choose-your-weapon/",
            "thumbnailUrl": "http://interactive.nydailynews.com/project/choose-your-weapon/img/share.png",
            "dateCreated": "2017-08-04T09:00:00Z",
            "articleSection": "Interactive",
            "creator": ["Kelli R. Parker", "Interactive Project","Jenna Bouchard"],
            "keywords": ["interactive project","interactive","game of thrones"]
        }
    </script>

    <!-- NO NEED TO FILL -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="http://interactive.nydailynews.com"/>
    <meta name="twitter:site" content="@nydailynews">
    <meta name="twitter:creator" content="@kelliparker">
    <meta name="decorator" content="responsive" />
    <meta name="nydn_section" content="NY Daily News" />
    <meta name="msvalidate.01" content="02916AAC0DA8B068EFE01D721E03ED7E" />
    <meta name="p:domain_verify" content="78efe4f5c9935744af497772f68a0ee7" />
    <meta property="fb:app_id" content="107464888913" />
    <meta property="fb:admins" content="1594068001" />
    <meta property="fb:pages" content="268914272540" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="NY Daily News" />
    <meta property="article:publisher" content="https://www.facebook.com/NYDailyNews/" />
    <meta name="localeCountry" content="US"/>
    <meta name="localeLanguage" content="en" />

    <!-- ADOBE ANALYTICS -->
    <script src="//assets.adobedtm.com/4fc527d6fda921c80e462d11a29deae2e4cf7514/satelliteLib-c91fdc6ac624c6cbcd50250f79786de339793801.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P|Open%20Sans|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <script data-main="http://assets.nydailynews.com/nydn/js/rh.js?r=20170405001" src="http://assets.nydailynews.com/nydn/js/require.js?r=2016LIST" defer></script>
      
    <script>
        var nydn = nydn || {
            "section": "NYDailyNews",
            "subsection": "news",
            "template": "article",
            "revision": "201609014009",
            "bidder": { contains: function() {} },
            "targetPath": document.location.pathname
        };
        var nydnDO = [ { 
            'title':'xxxGame of Thrones Weapon Name Generatorxxx', 
            'link':'http://interactive.nydailynews.com/project/choose-your-weapon/', 
            'p_type':'interactive', 
            'section':'interactive' 
        }];
    </script>
    
    <!-- ADS-START -->
    <script onload="nydn_ads('sword-name');" src="http://interactive.nydailynews.com/includes/ads/ads.js"></script>
    <!-- ADS-END -->

    <script src="http://interactive.nydailynews.com/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/rh.css">
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/ra.css">
    <link rel="stylesheet" type="text/css" href="css/style-weapon.css">

    <script>var nav_params = {section: 'projects', url: 'http://interactive.nydailynews.com/project/'};</script>
    <script src="http://interactive.nydailynews.com/library/vendor-nav/vendor-include.js" defer></script>
</head>

<body id="nydailynews" data-section="nydailynews" data-subsection="NY Daily News">

<!-- SITEHEADER-START -->
<header id="templateheader"></header>
<!-- SITEHEADER-END -->

<!-- CONTENT-START -->
<main>
    <article>
        <div class="main-text">
            <h1>GoT <span>Game of Thrones</span> Weapon Generator</h1>
            <h2>Choose your weapon</h2>
            <p>From Widow's Wail to Oathkeeper, the <a href="http://www.nydailynews.com/tags/game-of-thrones">Game of Thrones</a> universe knows how to name a fear-inspiring weapon.</p>
            <p>Click below to create a noble moniker for your fictional blade.</p>
			 <ul class="ra-share" id="ra-share-top">
				<li class="rt-share-f"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://interactive.nydailynews.com/project/choose-your-weapon/">facebook</a> </li>
				<li class="ra-share-t"> <a target="_blank" href="https://twitter.com/intent/tweet?text=Make your own sword name with our Game of Thrones sword name generator&url=http://nydn.us/blades&related=nydni,kelliparker">Tweet</a></li>
				<li class="ra-share-e"> <a href="mailto:?subject=Game of Thrones sword name generator&body=http://interactive.nydailynews.com/project/choose-your-weapon/">email</a> </li>
			</ul>
        </div>

        <div class="button-box">
            <button id="generate-name" onClick="generate_weapon();">New Weapon</button>
            <button id="save-weapon" disabled="true" onClick="save_weapon();">Save</button>
            <button id="share-weapon" class="hide" disabled="true" onClick="share_weapon();">Share</button>
        </div>
        <div id="sword-share"></div>
        <script>
            if ( is_mobile ) $('#save-weapon').addClass('hide');
        </script>
        <div id="weapon" class="action-box">
            <div class="weapon">
                <div class="ad center hide" id="ad1">
                    <div id='div-gpt-ad-1423507761396-1'>
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-1'); });
                        </script>
                    </div>
                </div>
                <div class="ad center hide" id="ad2">
                    <div id='div-gpt-ad-1423507761396-2'>
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-2'); });
                        </script>
                    </div>
                </div>
                <div class="ad center hide" id="ad3">
                    <div id='div-gpt-ad-1423507761396-3'>
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-3'); });
                        </script>
                    </div>
                </div>
                <img id="weapon-image" src="img/weapon-start.png" class="initial" alt="an image of pixel art weapons">
                <p id="weapon-name"></p>
                <p id="url" class="hide">http://nydn.us/blades</p>
            </div>
        </div>

        <div style="margin: 10px;">
            <div id="audio">
                <button onClick="play_audio();">Play 8-bit Theme Song</button>
				<audio id="player" class="hide" controls="controls">
            </div>
        <p class="byline">Interactive by Jenna Bouchard and Kelli R. Parker • Music by<a href="https://youtu.be/qyCCfJwFh8I" style="color: #aaff4d;" target="_blank"> Floating Point</a></p>
        </div>

        <div class="ad center">
            <div id='div-gpt-ad-x105'>
            <script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-x105'); });
            </script>
            </div>
        </div>
    </article>
</main>

<!-- CONTENT-END -->

<!-- FOOTER-START -->
<footer id="templatefooter"></footer>
<!-- FOOTER-END -->

<div id="ra-bp">
      </div> <section id="rao">  <div id="rao-close"></div> <div id="rao-wrap"></div> </section>
</div>

<div id="r-scripts">
    <div id="parsely-root" style="display: none">
        <span id="parsely-cfg" data-parsely-site="nydailynews.com"></span>
    </div>
    <div class="r-ad">
        <div id="div-gpt-ad-x100">
        </div>
    </div>
</div>

<!--
<script src="http://interactive.nydailynews.com/js/html2canvas/0.5.0-beta4/html2canvas.js"></script>
-->
<script src="http://interactive.nydailynews.com/js/html2canvas/0.4.1/html2canvas.js"></script>

<script>
function convert_to_slug(text) {
    return text
        .toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-');
}

function save_weapon() {
    $('#url').removeClass('hide');
    save_image();
}

function save_image()
{
    html2canvas($('#weapon'), {
        allowTaint: true,
        onrendered: function(canvas) {

            document.body.appendChild(canvas);
            window.oCanvas = document.getElementsByTagName("canvas");
            window.oCanvas = window.oCanvas[0];
            var strDataURI = window.oCanvas.toDataURL();

            var filename = convert_to_slug($('#weapon-name').text());

            var a = $("<a>").attr("href", strDataURI).attr("download", "weapon-" + filename + ".png").appendTo("body");
            a[0].click();
            a.remove();

            $('#download-'+filename).attr('href', strDataURI).attr('target', '_blank');
            $('#download-'+filename).trigger('click');
            window.location.reload(true);

            $('#url').addClass('hide');
        }
    });
}

function names(data, search_field) {
    var bucket = []
    for (var i = 0; i < data.length; i++) {        
        if (data[i][search_field] === 1) {
            bucket.push(data[i]['name']);
        }
    }
    return bucket;
}

function random(list) {
    var i = Math.floor(Math.random() * list.length);
    return list[i];
}

function share_weapon() {
	// PERMALINK
    // Edit the URL to make the image permalinkable
    var blade_name = $('#weapon-name').text();
    var blade_id = $('#weapon-image').attr('src').replace('img/weapon-','').replace('.png','');
    var slug = convert_to_slug(blade_name);
    document.location.hash = '#' + slug + '_' + blade_id;
    var url = document.location.href.replace('#','?sword=');
    var tweet_text = "I made a blade named " + blade_name + " with the #GoT sword generator:";
    var markup = "<h3>Share your blade</h3>\n\
<a class=\"twitter-share\" href='http://twitter.com/share?url=" + url + "&text=" + tweet_text + "&via=nydailynews' target='_blank'>\n\
<button class='share social_icon_box twitter_button'>Share On Twitter</button></a>&nbsp;\n\
<a class=\"fb-share\" href='http://www.facebook.com/sharer.php?u=" + url + "' target='_blank'>\n\
<button class='share social_icon_box facebook_button'>Share On Facebook</button></a>\n\
</div>";
    $('#sword-share').html(markup);

}
function load_weapon(hash, data) {
	// PERMALINK
    // When a permalink is loaded, return the blade
	window.history.replaceState('', '', document.location.origin + document.location.pathname);
    var pieces = hash.substr(1).split('_');
    var names = pieces[0].split('-');
    var weapon_id = pieces[1];
    $('#weapon-image').removeClass('initial');
    $('#weapon-image').attr('src','img/weapon-'+ weapon_id + '.png');

    // Make sure the name is in our list of names
    var len = data.length;
    var has_name = 0;
    var prefix = names[0];
    for (var i = 0; i < len; i++) {        
        if ( data[i]['name'] === prefix ) has_name = 1;
    }
    if ( has_name === 0 ) prefix = names(data, 'prefix');

    has_name = 0;
    var suffix = names.slice(1).join(' ');
    for (var i = 0; i < len; i++) {        
        if ( data[i]['name'] === suffix ) has_name = 1;
    }
    if ( has_name === 0 ) suffix = names(data, 'suffix');
    
    var new_name = prefix + ' ' + suffix;
    $('#weapon-image').attr('alt',new_name);
    $('#weapon-name').text(new_name);
    }

var count = 0;
var ad = 1;
var ad_id = 'div-gpt-ad-1423507761396-';
function generate_weapon() {
    if ( count == 0 ) {
        $('#weapon-image').removeClass('initial');
        document.getElementById("save-weapon").disabled = false;
        document.getElementById("share-weapon").disabled = false;
    } 
    count += 1;

	// AD REFRESH AND SUCH
	if ( count % 10 == 0 ) {
		$('#weapon-image').addClass('hide');
		$('#ad' + ad).removeClass('hide');
		$('#weapon-name').text('ad');
		return true;
	}
	if ( count > 1 && count % 10 == 1 ) {
		$('#ad' + ad).addClass('hide');
		$('#weapon-image').removeClass('hide');
		ad += 1;
		if ( ad > 3 ) ad = 1;
		// AD REFRESH
		if ( count % 30 == 1 ) googletag.pubads().refresh();
	}
	if ( count % 10 == 0 ) {
		PARSELY.beacon.trackPageView({
			url: document.location.href,
			urlref: document.location.href,
			js: 1
		});
		src = '//assets.adobedtm.com/4fc527d6fda921c80e462d11a29deae2e4cf7514/satelliteLib-c91fdc6ac624c6cbcd50250f79786de339793801.js'
        var s = document.createElement('script');
        s.setAttribute('src', src);
        //document.getElementsByTagName('head')[0].appendChild(s);
	}

    var weapon_id = Math.floor(Math.random() * 16);
    var weapon_img = 'img/weapon-' + weapon_id + '.png';
    var new_name = random(prefix)+' '+random(suffix);
    $('#weapon-image').attr('src', weapon_img);
    $('#weapon-image').attr('alt',new_name);
	window.history.replaceState('', '', document.location.origin + document.location.pathname + '#' + convert_to_slug(new_name) + '_' + weapon_id);
    $('#weapon-name').text(new_name);
}

$.getJSON('data.json', function(name_data) {
    prefix = names(name_data, 'prefix');
    suffix = names(name_data, 'suffix');
    hsh = document.location.hash.substr(1);
    $('#weapon-image, #weapon-name').click(function() { generate_weapon(); });

    // In case we're back here via save button
    if ( document.referrer == document.location.href ) $('#generate-name').trigger('click');

    // PERMALINK
    if ( document.location.hash !== '' ) load_weapon(document.location.hash, name_data);
    if ( document.location.search !== '' ) load_weapon(document.location.search.replace('sword=',''), name_data);

});

function play_audio() {
    var music = document.getElementById('player');
    //music.setAttribute('autoplay', 'autoplay');
    music.src = 'http://audio-download.ngfiles.com/476000/476918_Game-of-Thrones-8-bit.mp3';
    music.type = 'audio/mpeg';
    $('#player').removeClass('hide');
    $('#audio button').remove();
	music.load();
	music.play();
}

// PRELOAD IMAGES
for ( var i = 0; i <= 16; i ++ ) {
	$('<img/>')[0].src = 'img/weapon-' + i + '.png';
}

</script>
</body>
</html>
