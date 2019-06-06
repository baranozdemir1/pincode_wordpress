<?php
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');
?>
@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
body {
    font-family: 'Montserrat', sans-serif;
    background-color:<?=pincode_value('pincode_body_background_color');?>;
}

.pincode_header_background{
    background-color:<?=pincode_value('pincode_header_background_color');?>;
}

.pincode_body_background{
    background-color:<?=pincode_value('pincode_body_background_color');?>;
}

.rklm {
    height: 250px;
}

.rklm .ortala {
    line-height: 250px;
    color: white;
}

.a-etiketi {
    color: black;
}

.a-etiketi-beyaz {
    color: white;
}

.a-etiketi:hover {
    text-decoration: none;
    color: black;
}

.a-etiketi-beyaz:hover {
    text-decoration: none;
    color: white;
}

.font-15 {
    font-size: 15px!important;
}

.font-12 {
    font-size: 12px!important;
}
.font-13 {
    font-size: 13px!important;
}
.font-14 {
    font-size: 14px!important;
}

.font-18 {
    font-size: 18px;
}

.detay-resim {
    width: 730px;
}

.detay-sosyal-medya {
    font-size: 35px;
    text-decoration: none;
    color: black;
}

.detay-sosyal-medya:hover {
    text-decoration: none;
}

.kategori {
    padding: 7px;
}

.baran-card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 35px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)!important;
    transition: all .3s;
}

.baran-card:hover {
    box-shadow: .3rem .3rem 3rem rgba(0, 0, 0, .35)!important;
    transition: all .3s;
}

.baran-card.baran-hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
}

.baran-card.baran-hovercard .baran-cardheader {
    background-size: cover;
}

.baran-card.baran-hovercard .baran-info {
    padding: 0 8px;
}

.baran-card.baran-hovercard .baran-info .baran-title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.baran-desc p {
    font-size: 15px;
}

.baran-card.baran-hovercard .baran-info .baran-desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.baran-card.baran-hovercard .baran-bottom {
    padding: 0 20px;
}

.baran-zoom-effect {
    -webkit-transition: 0.4s ease;
    transition: 0.4s ease;
}

.baran-zoom-effect:hover {
    -webkit-transform: scale(1.08);
    transform: scale(1.08);
}

.text-shadow {
    text-shadow: 1px 1px white;
}
.linkfeat{
	background: rgba(76,76,76,0);
	background: -moz-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,0)), color-stop(49%, rgba(48,48,48,0)), color-stop(100%, rgba(19,19,19,1)));
	background: -webkit-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -o-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -ms-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: linear-gradient(to bottom, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}

.navbar-top {
    border-bottom: 4px solid #60B078;
    color: #FFF;
    height: auto;
    padding: .5rem 1rem;
}

.ust-nav {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
/* Wrapper */
.icon-button {
	border-radius: 3.6rem;
	cursor: pointer;
	display: inline-block;
	font-size: 1.75rem;
	height: 3.6rem;
	line-height: 3.6rem;
	margin: 0 5px;
	position: relative;
	text-align: center;
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
	width: 3.6rem;
}

/* Circle */
.icon-button span {
	border-radius: 0;
	display: block;
	height: 0;
	left: 50%;
	margin: 0;
	position: absolute;
	top: 50%;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 0;
}
.icon-button:hover span {
	width: 3.6rem;
	height: 3.6rem;
	border-radius: 3.6rem;
	margin: -1.8rem;
}
.twitter span {
	background-color: #4099ff;
}
.facebook span {
	background-color: #3B5998;
}
.google-plus span {
	background-color: #4875B4;
}

/* Icons */
.icon-button i {
	background: none;
	color: white;
	height: 3.6rem;
	left: 0;
	line-height: 3.6rem;
	position: absolute;
	top: 0;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 3.6rem;
	z-index: 10;
}
.icon-button .icon-twitter {
	color: #4099ff;
}
.icon-button .icon-facebook {
	color: #3B5998;
}
.icon-button .icon-google-plus {
	color: #4875B4;
}
.icon-button:hover .icon-twitter,
.icon-button:hover .icon-facebook,
.icon-button:hover .icon-google-plus {
	color: white;
}

/*recent-post-col////////////////////*/
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    margin-top: 30px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #60B078;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}

.recent-post{width: 100%;height: 80px;list-style-type: none;}
.post-img img {
    width: 100px;
    height: 70px;
    float: left;
    margin-right: 15px;
    transition: 0.5s;
}

.recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}
.post-img, .recent-post a:hover{color:<?=pincode_value('pincode_genel_hover_color');?>;}
.post-img img:hover{border: 5px solid <?=pincode_value('pincode_genel_hover_color');?>;}

.sosyal-medya-header {
    list-style-type: none;
    display: block;
}

.sosyal-medya-header li {
    display: inline-block;
    padding-top: .3125rem;
    margin-right: 1rem;
    line-height: inherit;
    white-space: nowrap;
    position: relative;
}

.sosyal-medya-header li a {
    color: <?=pincode_value('pincode_genel_active_color');?>;
    transition: .5s;
}

.sosyal-medya-header li a:hover {
    transition: .5s;
    text-decoration: none;
    color: <?=pincode_value('pincode_genel_hover_color');?>;
}

.mb-n-5 {
    margin-bottom: -5px;  
}

.header-logo {
    transition: .5s;
    color: black;
}

.header-logo:hover{
    text-decoration: none;
    transition: .5s;
    color: <?=pincode_value('pincode_genel_hover_color');?>;
}

@media (max-width:767px) {
    .mtm-3{
        margin-top: 1rem;
    }
    .mlmr-m {
        margin-left: 12px;
        margin-right: -12px;
    }
}
@media (min-width:767px) {
    .mrml-m {
        margin-left: -10px;
        margin-right: 10px;
    }
}
/* Extra small devices (phones, up to 480px) */
@media screen and (max-width: 767px) {
    .manset-font, .manset-font p {
        font-size:1rem!important;
    }
    .manset-sag-font, .manset-sag-kategori{
        font-size:0.75rem!important;
    }
    #sosyal-medya-header-none{
        display: none;
    }
    .mobil-duzeltme {
        width: 98%;
    }
    .mobil-duzeltme2 {
        margin-left: -10px;
        margin-right: 10px;
    }
}
/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991px) {
    .manset-font, .manset-font p {
        font-size:1rem!important;
    }
    .manset-sag-font, .manset-sag-kategori{
        font-size: 0.50rem!important;
    }
}
/* tablets/desktops and up ----------- */
@media (min-width: 992px) and (max-width: 1199px) {
    .manset-font, .manset-font p {
        font-size:1rem!important;
    }
    .manset-sag-font, .manset-sag-kategori{
        font-size: 0.75rem!important;
    }
}
/* large desktops and up ----------- */
@media screen and (min-width: 1200px) {
    .manset-font, .manset-font p {
        font-size:2rem!important;
    }
    .manset-sag-font, .manset-sag-kategori{
        font-size: 1rem!important;
    }
}
.cursor-default{
    cursor: default;
}
.error-content {
    padding: 0 0 70px;
}
.error-text{
    text-align: center;
}
.error {
    font-size: 180px;
    font-weight: 100;
}
@keyframes bob {
    0% {
        top: 0;
    }
    50% {
        top: 0.2em;
    }
}
.pincode-mobil-menu span{background-color:#FFF;border-radius:2px;box-shadow:0px 0px 0px 1px #000!important;}
.pincode-mobil-menu{width:35px;height:30px;position:relative;}
.pincode-mobil-menu span{position:absolute;transition:.3s cubic-bezier(.8,.5,.2,1.4);width:100%;height:4px;transition-duration:.5s;}
.pincode-mobil-menu span:nth-child(1){top:0;left:0;}
.pincode-mobil-menu span:nth-child(2){top:13px;left:0;}
.pincode-mobil-menu span:nth-child(3){bottom:0;left:0;}
.pincode-mobil-menu-click span:nth-child(1){transform:rotate(45deg);top:13px;}
.pincode-mobil-menu-click span:nth-child(2){transform:scale(.1);}
.pincode-mobil-menu-click span:nth-child(3){transform:rotate(-45deg);top:13px;}
