<?php

include_once 'include/config.php';

?>

<?php
 mysql_query ("set character_set_results='utf8'");
 $sql="SELECT * FROM settings WHERE id=1";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result)
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | <?php echo $row['stitle'] ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/fav.png" rel="shortcut icon">
    <link href='//fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
	
<style type="text/css">
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
/****-----start-body----****/
body{
	background:#F7DA55;
 	font-family: 'Adamina';

}
.login-form {
	background:#eee;
	width: 26%;
	margin:9% auto 4% auto;
 	position: relative;
 	-webkit-border-radius: 0.4em;
	-o-border-radius: 0.4em;
	-moz-border-radius: 0.4em;
 	box-shadow: rgba(243, 208, 39, 0.33) 1px 1px,
 rgba(243, 208, 39, 0.33) 2px 2px,
 rgba(243, 208, 39, 0.33) 3px 3px,
 rgba(243, 208, 39, 0.33) 4px 4px,
 rgba(243, 208, 39, 0.33) 5px 5px,
 rgba(243, 208, 39, 0.33) 6px 6px,
 rgba(243, 208, 39, 0.33) 7px 7px,
 rgba(243, 208, 39, 0.33) 8px 8px,
 rgba(243, 208, 39, 0.33) 9px 9px,
 rgba(243, 208, 39, 0.33) 10px 10px,
 rgba(243, 208, 39, 0.33) 11px 11px,
 rgba(243, 208, 39, 0.33) 12px 12px,
 rgba(243, 208, 39, 0.33) 13px 13px,
 rgba(243, 208, 39, 0.33) 14px 14px,
 rgba(243, 208, 39, 0.33) 15px 15px,
 rgba(243, 208, 39, 0.33) 16px 16px,
 rgba(243, 208, 39, 0.33) 17px 17px,
 rgba(243, 208, 39, 0.33) 18px 18px,
 rgba(243, 208, 39, 0.33) 19px 19px,
 rgba(243, 208, 39, 0.33) 20px 20px,
 rgba(243, 208, 39, 0.33) 21px 21px,
 rgba(243, 208, 39, 0.33) 22px 22px,
 rgba(243, 208, 39, 0.33) 23px 23px,
 rgba(243, 208, 39, 0.33) 24px 24px,
 rgba(243, 208, 39, 0.33) 25px 25px,
 rgba(243, 208, 39, 0.33) 26px 26px,
 rgba(243, 208, 39, 0.33) 27px 27px,
 rgba(243, 208, 39, 0.33) 28px 28px,
 rgba(243, 208, 39, 0.33) 29px 29px,
 rgba(243, 208, 39, 0.33) 30px 30px,
 rgba(243, 208, 39, 0.33) 31px 31px,
 rgba(243, 208, 39, 0.33) 32px 32px,
 rgba(243, 208, 39, 0.33) 33px 33px,
 rgba(243, 208, 39, 0.33) 34px 34px,
 rgba(243, 208, 39, 0.33) 35px 35px,
 rgba(243, 208, 39, 0.33) 36px 36px,
 rgba(243, 208, 39, 0.33) 37px 37px,
 rgba(243, 208, 39, 0.33) 38px 38px,
 rgba(243, 208, 39, 0.33) 39px 39px,
 rgba(243, 208, 39, 0.33) 40px 40px,
 rgba(243, 208, 39, 0.33) 41px 41px,
 rgba(243, 208, 39, 0.33) 42px 42px,
 rgba(243, 208, 39, 0.33) 43px 43px,
 rgba(243, 208, 39, 0.33) 44px 44px,
 rgba(243, 208, 39, 0.33) 45px 45px,
 rgba(243, 208, 39, 0.33) 46px 46px,
 rgba(243, 208, 39, 0.33) 47px 47px,
 rgba(243, 208, 39, 0.33) 48px 48px,
 rgba(243, 208, 39, 0.33) 49px 49px,
 rgba(243, 208, 39, 0.33) 50px 50px,
 rgba(243, 208, 39, 0.33) 51px 51px,
 rgba(243, 208, 39, 0.33) 52px 52px,
 rgba(243, 208, 39, 0.33) 53px 53px,
 rgba(243, 208, 39, 0.33) 54px 54px,
 rgba(243, 208, 39, 0.33) 55px 55px,
 rgba(243, 208, 39, 0.33) 56px 56px,
 rgba(243, 208, 39, 0.33) 57px 57px,
 rgba(243, 208, 39, 0.33) 58px 58px,
 rgba(243, 208, 39, 0.33) 59px 59px,
 rgba(243, 208, 39, 0.33) 60px 60px,
 rgba(243, 208, 39, 0.33) 61px 61px,
 rgba(243, 208, 39, 0.33) 62px 62px,
 rgba(243, 208, 39, 0.33) 63px 63px,
 rgba(243, 208, 39, 0.33) 64px 64px,
 rgba(243, 208, 39, 0.33) 65px 65px,
 rgba(243, 208, 39, 0.33) 66px 66px,
 rgba(243, 208, 39, 0.33) 67px 67px,
 rgba(243, 208, 39, 0.33) 68px 68px,
 rgba(243, 208, 39, 0.33) 69px 69px,
 rgba(243, 208, 39, 0.33) 70px 70px,
 rgba(243, 208, 39, 0.33) 71px 71px,
 rgba(243, 208, 39, 0.33) 72px 72px,
 rgba(243, 208, 39, 0.33) 73px 73px,
 rgba(243, 208, 39, 0.33) 74px 74px,
 rgba(243, 208, 39, 0.33) 75px 75px,
 rgba(243, 208, 39, 0.33) 76px 76px,
 rgba(243, 208, 39, 0.33) 77px 77px,
 rgba(243, 208, 39, 0.33) 78px 78px,
 rgba(243, 208, 39, 0.33) 79px 79px,
 rgba(243, 208, 39, 0.33) 80px 80px,
 rgba(243, 208, 39, 0.33) 81px 81px,
 rgba(243, 208, 39, 0.33) 82px 82px,
 rgba(243, 208, 39, 0.33) 83px 83px,
 rgba(243, 208, 39, 0.33) 84px 84px,
 rgba(243, 208, 39, 0.33) 85px 85px,
 rgba(243, 208, 39, 0.33) 86px 86px,
 rgba(243, 208, 39, 0.33) 87px 87px,
 rgba(243, 208, 39, 0.33) 88px 88px,
 rgba(243, 208, 39, 0.33) 89px 89px,
 rgba(243, 208, 39, 0.33)90px 90px,
 rgba(243, 208, 39, 0.33)91px 91px,
 rgba(243, 208, 39, 0.33)92px 92px,
 rgba(243, 208, 39, 0.33)93px 93px,
 rgba(243, 208, 39, 0.33)94px 94px,
 rgba(243, 208, 39, 0.33) 95px 95px,
 rgba(243, 208, 39, 0.33) 96px 96px,
 rgba(243, 208, 39, 0.33) 97px 97px,
 rgba(243, 208, 39, 0.33) 98px 98px,
 rgba(243, 208, 39, 0.33) 99px 99px,
 rgba(243, 208, 39, 0.33) 100px 100px,
 rgba(243, 208, 39, 0.33) 101px 101px,
 rgba(243, 208, 39, 0.33) 102px 102px,
 rgba(243, 208, 39, 0.33) 103px 103px,
 rgba(243, 208, 39, 0.33) 104px 104px,
 rgba(243, 208, 39, 0.33) 105px 105px,
 rgba(243, 208, 39, 0.33) 106px 106px,
 rgba(243, 208, 39, 0.33) 107px 107px,
 rgba(243, 208, 39, 0.33) 108px 108px,
 rgba(243, 208, 39, 0.33) 109px 109px,
 rgba(243, 208, 39, 0.33) 110px 110px,
 rgba(243, 208, 39, 0.33) 111px 111px,
 rgba(243, 208, 39, 0.33) 112px 112px,
 rgba(243, 208, 39, 0.33) 113px 113px,
 rgba(243, 208, 39, 0.33) 114px 114px,
 rgba(243, 208, 39, 0.33) 115px 115px,
 rgba(243, 208, 39, 0.33) 116px 116px,
 rgba(243, 208, 39, 0.33) 117px 117px,
 rgba(243, 208, 39, 0.33) 118px 118px,
 rgba(243, 208, 39, 0.33) 119px 119px,
 rgba(243, 208, 39, 0.33) 120px 120px,
 rgba(243, 208, 39, 0.33) 121px 121px,
 rgba(243, 208, 39, 0.33) 122px 122px,
 rgba(243, 208, 39, 0.33) 123px 123px,
 rgba(243, 208, 39, 0.33) 124px 124px,
 rgba(243, 208, 39, 0.33) 125px 125px,
 rgba(243, 208, 39, 0.33) 126px 126px,
 rgba(243, 208, 39, 0.33) 127px 127px,
 rgba(243, 208, 39, 0.33) 128px 128px,
 rgba(243, 208, 39, 0.33) 129px 129px,
 rgba(243, 208, 39, 0.33) 130px 130px,
 rgba(243, 208, 39, 0.33) 131px 131px,
 rgba(243, 208, 39, 0.33) 132px 132px,
 rgba(243, 208, 39, 0.33)133px 133px,
 rgba(243, 208, 39, 0.33)134px 134px,
 rgba(243, 208, 39, 0.33)135px 135px,
 rgba(243, 208, 39, 0.33) 136px 136px,
 rgba(243, 208, 39, 0.33) 137px 137px,
 rgba(243, 208, 39, 0.33) 138px 138px,
 rgba(243, 208, 39, 0.33) 139px 139px,
 rgba(243, 208, 39, 0.33) 140px 140px,
 rgba(243, 208, 39, 0.33) 141px 141px,
 rgba(243, 208, 39, 0.33) 142px 142px,
 rgba(243, 208, 39, 0.33) 143px 143px,
 rgba(243, 208, 39, 0.33) 144px 144px,
 rgba(243, 208, 39, 0.33) 145px 145px,
 rgba(243, 208, 39, 0.33) 146px 146px,
 rgba(243, 208, 39, 0.33) 147px 147px,
 rgba(243, 208, 39, 0.33) 148px 148px,
 rgba(243, 208, 39, 0.33) 149px 149px,
 rgba(243, 208, 39, 0.33) 150px 150px,
 rgba(243, 208, 39, 0.33) 151px 151px,
 rgba(243, 208, 39, 0.33) 152px 152px,
 rgba(243, 208, 39, 0.33) 153px 153px,
 rgba(243, 208, 39, 0.33) 154px 154px,
 rgba(243, 208, 39, 0.33) 155px 155px,
 rgba(243, 208, 39, 0.33) 156px 156px,
 rgba(243, 208, 39, 0.33) 157px 157px,
 rgba(243, 208, 39, 0.33) 158px 158px,
 rgba(243, 208, 39, 0.33) 159px 159px,
 rgba(243, 208, 39, 0.33) 160px 160px,
 rgba(243, 208, 39, 0.33) 161px 161px,
 rgba(243, 208, 39, 0.33) 162px 162px,
 rgba(243, 208, 39, 0.33) 163px 163px,
 rgba(243, 208, 39, 0.33) 164px 164px,
 rgba(243, 208, 39, 0.33) 165px 165px,
 rgba(243, 208, 39, 0.33) 166px 166px,
 rgba(243, 208, 39, 0.33) 167px 167px,
 rgba(243, 208, 39, 0.33) 168px 168px,
 rgba(243, 208, 39, 0.33) 169px 169px,
 rgba(243, 208, 39, 0.33) 170px 170px,
 rgba(243, 208, 39, 0.33) 171px 171px,
 rgba(243, 208, 39, 0.33) 172px 172px,
 rgba(243, 208, 39, 0.33) 173px 173px,
 rgba(243, 208, 39, 0.33) 174px 174px,
 rgba(243, 208, 39, 0.33) 175px 175px,
 rgba(243, 208, 39, 0.33) 176px 176px,
 rgba(243, 208, 39, 0.33) 177px 177px,
 rgba(243, 208, 39, 0.33) 178px 178px,
 rgba(243, 208, 39, 0.33) 179px 179px,
 rgba(243, 208, 39, 0.33) 180px 180px,
 rgba(243, 208, 39, 0.33) 181px 181px,
 rgba(243, 208, 39, 0.33) 182px 182px
}

.head {
	position: absolute;
	top:-15%;
	left: 35%;
}
.head img {
	border-radius:50%;
	-webkit-border-radius:50%;
	-o-border-radius:50%;
	-moz-border-radius:50%;
	border:6px solid rgba(221, 218, 215, 0.23);
}
.main{
	position:relative;
}
.main h1{
	font-size:25px;
	color:#676767;
	font-family: 'Adamina';
	font-weight:400;
	padding-top: 19%;
	text-align: center;
}
.main form {
	width: 80%;
	margin: 0 auto;
	padding: 6% 0 9% 0;
}
.main p {
text-align: center;
}
.main form p a {
	color: #888;
	font-family: 'Adamina';
}
form p a:hover {
	color:#21A957;
}
 input[type="text"], input[type="password"]{
	text-align:left;
	position: relative;
	width:92%;
	padding:3%;
	background:#D3D3D3;
	margin-bottom: 6%;
	font-family: 'Adamina';
	color: #676767;
	font-weight:600;
	font-size: 16px;
	outline: none;
	border: none;
	border-radius: 5px;
	border:1px solid #DED6D6;
	-webkit-appearance:none;
}
 input[type="text"]:hover, input[type="password"]:hover{
 	border:1px solid #949494;
	transition:0.5s;
	-webkit-transition:0.5s;
	-moz-transition:0.5s;
	-o-transition:0.5s;
	-ms-transition:	0.5s;
 	
 }
input[type="submit"]{
	width: 99%;
	padding: 3%;
	margin-bottom: 8%;
	background: #21A957;
	font-family: 'Arbutus Slab';
	color: #ECECEC;
	box-shadow: inset 0px 0px 10px #666464;
	-webkit-text-shadow: 0px 0px 3px #000;
	-moz-text-shadow: 0px 0px 3px #000;
	-o-text-shadow: 0px 0px 3px #000;
	-ms-text-shadow: 0px 0px 3px #000;
	font-size: 20px;
	outline: none;
	border: none;
	cursor: pointer;
	font-weight:500;
	border-radius: 5px;
	transition: 0.5s;
	-webkit-appearance:none;
	-webkit-transition: 0.5s;
	-moz-transition: 0.5s;
	-o-transition: 0.5s;
	-ms-transition: 0.5s;
}
input[type="submit"]:hover{
	background:#128A42;
	color:#fff;
}
/****************/
.copy-right {
	position: absolute;
	bottom:-19%;
	left: 43.7%;
}
.copy-right p {
	color: #fff;
	font-size: 1em;
	font-family: 'Adamina';	
	font-weight: 600;
}
.copy-right p a {
	font-family: 'Adamina';	
	font-size: 1em;
	color:#21A957;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
.copy-right p a:hover{
	color:#fff;
}
/*-----start-responsive-design------*/
@media (max-width:1440px){
	.login-form {
	width:30%;
	margin: 11% auto 4% auto;
	}
	.main h1 {
	padding-top: 23%;
	}
	.copy-right {
	bottom: -26%;
	}
}
@media (max-width:1366px){
	.login-form {
	width: 32%;
	margin: 10% auto 4% auto;
	}
}
@media (max-width:1280px){
	.login-form  {
		margin:8% auto 0;
		width:34%;
	box-shadow: rgba(243, 208, 39, 0.33) 1px 1px,
	 rgba(243, 208, 39, 0.33) 2px 2px,
	 rgba(243, 208, 39, 0.33) 3px 3px,
	 rgba(243, 208, 39, 0.33) 4px 4px,
	 rgba(243, 208, 39, 0.33) 5px 5px,
	 rgba(243, 208, 39, 0.33) 6px 6px,
	 rgba(243, 208, 39, 0.33) 7px 7px,
	 rgba(243, 208, 39, 0.33) 8px 8px,
	 rgba(243, 208, 39, 0.33) 9px 9px,
	 rgba(243, 208, 39, 0.33) 10px 10px,
	 rgba(243, 208, 39, 0.33) 11px 11px,
	 rgba(243, 208, 39, 0.33) 12px 12px,
	 rgba(243, 208, 39, 0.33) 13px 13px,
	 rgba(243, 208, 39, 0.33) 14px 14px,
	 rgba(243, 208, 39, 0.33) 15px 15px,
	 rgba(243, 208, 39, 0.33) 16px 16px,
	 rgba(243, 208, 39, 0.33) 17px 17px,
	 rgba(243, 208, 39, 0.33) 18px 18px,
	 rgba(243, 208, 39, 0.33) 19px 19px,
	 rgba(243, 208, 39, 0.33) 20px 20px,
	 rgba(243, 208, 39, 0.33) 21px 21px,
	 rgba(243, 208, 39, 0.33) 22px 22px,
	 rgba(243, 208, 39, 0.33) 23px 23px,
	 rgba(243, 208, 39, 0.33) 24px 24px,
	 rgba(243, 208, 39, 0.33) 25px 25px,
	 rgba(243, 208, 39, 0.33) 26px 26px,
	 rgba(243, 208, 39, 0.33) 27px 27px,
	 rgba(243, 208, 39, 0.33) 28px 28px,
	 rgba(243, 208, 39, 0.33) 29px 29px,
	 rgba(243, 208, 39, 0.33) 30px 30px,
	 rgba(243, 208, 39, 0.33) 31px 31px,
	 rgba(243, 208, 39, 0.33) 32px 32px,
	 rgba(243, 208, 39, 0.33) 33px 33px,
	 rgba(243, 208, 39, 0.33) 34px 34px,
	 rgba(243, 208, 39, 0.33) 35px 35px,
	 rgba(243, 208, 39, 0.33) 36px 36px,
	 rgba(243, 208, 39, 0.33) 37px 37px,
	 rgba(243, 208, 39, 0.33) 38px 38px,
	 rgba(243, 208, 39, 0.33) 39px 39px,
	 rgba(243, 208, 39, 0.33) 40px 40px,
	 rgba(243, 208, 39, 0.33) 41px 41px,
	 rgba(243, 208, 39, 0.33) 42px 42px,
	 rgba(243, 208, 39, 0.33) 43px 43px,
	 rgba(243, 208, 39, 0.33) 44px 44px,
	 rgba(243, 208, 39, 0.33) 45px 45px,
	 rgba(243, 208, 39, 0.33) 46px 46px,
	 rgba(243, 208, 39, 0.33) 47px 47px,
	 rgba(243, 208, 39, 0.33) 48px 48px,
	 rgba(243, 208, 39, 0.33) 49px 49px,
	 rgba(243, 208, 39, 0.33) 50px 50px,
	 rgba(243, 208, 39, 0.33) 51px 51px,
	 rgba(243, 208, 39, 0.33) 52px 52px,
	 rgba(243, 208, 39, 0.33) 53px 53px,
	 rgba(243, 208, 39, 0.33) 54px 54px,
	 rgba(243, 208, 39, 0.33) 55px 55px,
	 rgba(243, 208, 39, 0.33) 56px 56px,
	 rgba(243, 208, 39, 0.33) 57px 57px,
	 rgba(243, 208, 39, 0.33) 58px 58px,
	 rgba(243, 208, 39, 0.33) 59px 59px,
	 rgba(243, 208, 39, 0.33) 60px 60px,
	 rgba(243, 208, 39, 0.33) 61px 61px,
	 rgba(243, 208, 39, 0.33) 62px 62px,
	 rgba(243, 208, 39, 0.33) 63px 63px,
	 rgba(243, 208, 39, 0.33) 64px 64px,
	 rgba(243, 208, 39, 0.33) 65px 65px,
	 rgba(243, 208, 39, 0.33) 66px 66px,
	 rgba(243, 208, 39, 0.33) 67px 67px,
	 rgba(243, 208, 39, 0.33) 68px 68px,
	 rgba(243, 208, 39, 0.33) 69px 69px,
	 rgba(243, 208, 39, 0.33) 70px 70px,
	 rgba(243, 208, 39, 0.33) 71px 71px,
	 rgba(243, 208, 39, 0.33) 72px 72px,
	 rgba(243, 208, 39, 0.33) 73px 73px,
	 rgba(243, 208, 39, 0.33) 74px 74px,
	 rgba(243, 208, 39, 0.33) 75px 75px,
	 rgba(243, 208, 39, 0.33) 76px 76px,
	 rgba(243, 208, 39, 0.33) 77px 77px,
	 rgba(243, 208, 39, 0.33) 78px 78px,
	 rgba(243, 208, 39, 0.33) 79px 79px,
	 rgba(243, 208, 39, 0.33) 80px 80px,
	 rgba(243, 208, 39, 0.33) 81px 81px,
	 rgba(243, 208, 39, 0.33) 82px 82px,
	 rgba(243, 208, 39, 0.33) 83px 83px,
	 rgba(243, 208, 39, 0.33) 84px 84px,
	 rgba(243, 208, 39, 0.33) 85px 85px,
	 rgba(243, 208, 39, 0.33) 86px 86px,
	 rgba(243, 208, 39, 0.33) 87px 87px,
	 rgba(243, 208, 39, 0.33) 88px 88px,
	 rgba(243, 208, 39, 0.33) 89px 89px,
	 rgba(243, 208, 39, 0.33)90px 90px,
	 rgba(243, 208, 39, 0.33)91px 91px,
	 rgba(243, 208, 39, 0.33)92px 92px,
	 rgba(243, 208, 39, 0.33)93px 93px,
	 rgba(243, 208, 39, 0.33)94px 94px,
	 rgba(243, 208, 39, 0.33) 95px 95px,
	 rgba(243, 208, 39, 0.33) 96px 96px,
	 rgba(243, 208, 39, 0.33) 97px 97px,
	 rgba(243, 208, 39, 0.33) 98px 98px,
	 rgba(243, 208, 39, 0.33) 99px 99px,
	 rgba(243, 208, 39, 0.33) 100px 100px,
	 rgba(243, 208, 39, 0.33) 101px 101px,
	 rgba(243, 208, 39, 0.33) 102px 102px,
	 rgba(243, 208, 39, 0.33) 103px 103px,
	 rgba(243, 208, 39, 0.33) 104px 104px,
	 rgba(243, 208, 39, 0.33) 105px 105px,
	 rgba(243, 208, 39, 0.33) 106px 106px,
	 rgba(243, 208, 39, 0.33) 107px 107px,
	 rgba(243, 208, 39, 0.33) 108px 108px,
	 rgba(243, 208, 39, 0.33) 109px 109px,
	 rgba(243, 208, 39, 0.33) 110px 110px,
	 rgba(243, 208, 39, 0.33) 111px 111px,
	 rgba(243, 208, 39, 0.33) 112px 112px,
	 rgba(243, 208, 39, 0.33) 113px 113px,
	 rgba(243, 208, 39, 0.33) 114px 114px,
	 rgba(243, 208, 39, 0.33) 115px 115px,
	 rgba(243, 208, 39, 0.33) 116px 116px,
	 rgba(243, 208, 39, 0.33) 117px 117px,
	 rgba(243, 208, 39, 0.33) 118px 118px,
	 rgba(243, 208, 39, 0.33) 119px 119px,
	 rgba(243, 208, 39, 0.33) 120px 120px,
	 rgba(243, 208, 39, 0.33) 121px 121px,
	 rgba(243, 208, 39, 0.33) 122px 122px,
	 rgba(243, 208, 39, 0.33) 123px 123px,
	 rgba(243, 208, 39, 0.33) 124px 124px,
	 rgba(243, 208, 39, 0.33) 125px 125px,
	 rgba(243, 208, 39, 0.33) 126px 126px,
	 rgba(243, 208, 39, 0.33) 127px 127px,
	 rgba(243, 208, 39, 0.33) 128px 128px,
	 rgba(243, 208, 39, 0.33) 129px 129px,
	 rgba(243, 208, 39, 0.33) 130px 130px,
	 rgba(243, 208, 39, 0.33) 131px 131px,
	 rgba(243, 208, 39, 0.33) 132px 132px,
	 rgba(243, 208, 39, 0.33)133px 133px,
	 rgba(243, 208, 39, 0.33)134px 134px,
	 rgba(243, 208, 39, 0.33)135px 135px,
	 rgba(243, 208, 39, 0.33) 136px 136px,
	 rgba(243, 208, 39, 0.33) 137px 137px,
	 rgba(243, 208, 39, 0.33) 138px 138px,
	 rgba(243, 208, 39, 0.33) 139px 139px,
	 rgba(243, 208, 39, 0.33) 140px 140px,
	 rgba(243, 208, 39, 0.33) 141px 141px,
	 rgba(243, 208, 39, 0.33) 142px 142px,
	 rgba(243, 208, 39, 0.33) 143px 143px,
	 rgba(243, 208, 39, 0.33) 144px 144px,
	 rgba(243, 208, 39, 0.33) 145px 145px,
	 rgba(243, 208, 39, 0.33) 146px 146px,
	 rgba(243, 208, 39, 0.33) 147px 147px,
	 rgba(243, 208, 39, 0.33) 148px 148px,
	 rgba(243, 208, 39, 0.33) 149px 149px,
	 rgba(243, 208, 39, 0.33) 150px 150px
	}
	.copy-right {
	left: 41%;
	bottom:-18%;
	}
}
@media (max-width:1024px){
.login-form  {
		margin:12% auto 0;
		width:45%;
	box-shadow: rgba(243, 208, 39, 0.33) 1px 1px,
	 rgba(243, 208, 39, 0.33) 2px 2px,
	 rgba(243, 208, 39, 0.33) 3px 3px,
	 rgba(243, 208, 39, 0.33) 4px 4px,
	 rgba(243, 208, 39, 0.33) 5px 5px,
	 rgba(243, 208, 39, 0.33) 6px 6px,
	 rgba(243, 208, 39, 0.33) 7px 7px,
	 rgba(243, 208, 39, 0.33) 8px 8px,
	 rgba(243, 208, 39, 0.33) 9px 9px,
	 rgba(243, 208, 39, 0.33) 10px 10px,
	 rgba(243, 208, 39, 0.33) 11px 11px,
	 rgba(243, 208, 39, 0.33) 12px 12px,
	 rgba(243, 208, 39, 0.33) 13px 13px,
	 rgba(243, 208, 39, 0.33) 14px 14px,
	 rgba(243, 208, 39, 0.33) 15px 15px,
	 rgba(243, 208, 39, 0.33) 16px 16px,
	 rgba(243, 208, 39, 0.33) 17px 17px,
	 rgba(243, 208, 39, 0.33) 18px 18px,
	 rgba(243, 208, 39, 0.33) 19px 19px,
	 rgba(243, 208, 39, 0.33) 20px 20px,
	 rgba(243, 208, 39, 0.33) 21px 21px,
	 rgba(243, 208, 39, 0.33) 22px 22px,
	 rgba(243, 208, 39, 0.33) 23px 23px,
	 rgba(243, 208, 39, 0.33) 24px 24px,
	 rgba(243, 208, 39, 0.33) 25px 25px,
	 rgba(243, 208, 39, 0.33) 26px 26px,
	 rgba(243, 208, 39, 0.33) 27px 27px,
	 rgba(243, 208, 39, 0.33) 28px 28px,
	 rgba(243, 208, 39, 0.33) 29px 29px,
	 rgba(243, 208, 39, 0.33) 30px 30px,
	 rgba(243, 208, 39, 0.33) 31px 31px,
	 rgba(243, 208, 39, 0.33) 32px 32px,
	 rgba(243, 208, 39, 0.33) 33px 33px,
	 rgba(243, 208, 39, 0.33) 34px 34px,
	 rgba(243, 208, 39, 0.33) 35px 35px,
	 rgba(243, 208, 39, 0.33) 36px 36px,
	 rgba(243, 208, 39, 0.33) 37px 37px,
	 rgba(243, 208, 39, 0.33) 38px 38px,
	 rgba(243, 208, 39, 0.33) 39px 39px,
	 rgba(243, 208, 39, 0.33) 40px 40px,
	 rgba(243, 208, 39, 0.33) 41px 41px,
	 rgba(243, 208, 39, 0.33) 42px 42px,
	 rgba(243, 208, 39, 0.33) 43px 43px,
	 rgba(243, 208, 39, 0.33) 44px 44px,
	 rgba(243, 208, 39, 0.33) 45px 45px,
	 rgba(243, 208, 39, 0.33) 46px 46px,
	 rgba(243, 208, 39, 0.33) 47px 47px,
	 rgba(243, 208, 39, 0.33) 48px 48px,
	 rgba(243, 208, 39, 0.33) 49px 49px,
	 rgba(243, 208, 39, 0.33) 50px 50px,
	 rgba(243, 208, 39, 0.33) 51px 51px,
	 rgba(243, 208, 39, 0.33) 52px 52px,
	 rgba(243, 208, 39, 0.33) 53px 53px,
	 rgba(243, 208, 39, 0.33) 54px 54px,
	 rgba(243, 208, 39, 0.33) 55px 55px,
	 rgba(243, 208, 39, 0.33) 56px 56px,
	 rgba(243, 208, 39, 0.33) 57px 57px,
	 rgba(243, 208, 39, 0.33) 58px 58px,
	 rgba(243, 208, 39, 0.33) 59px 59px,
	 rgba(243, 208, 39, 0.33) 60px 60px,
	 rgba(243, 208, 39, 0.33) 61px 61px,
	 rgba(243, 208, 39, 0.33) 62px 62px,
	 rgba(243, 208, 39, 0.33) 63px 63px,
	 rgba(243, 208, 39, 0.33) 64px 64px,
	 rgba(243, 208, 39, 0.33) 65px 65px,
	 rgba(243, 208, 39, 0.33) 66px 66px,
	 rgba(243, 208, 39, 0.33) 67px 67px,
	 rgba(243, 208, 39, 0.33) 68px 68px,
	 rgba(243, 208, 39, 0.33) 69px 69px,
	 rgba(243, 208, 39, 0.33) 70px 70px,
	 rgba(243, 208, 39, 0.33) 71px 71px,
	 rgba(243, 208, 39, 0.33) 72px 72px,
	 rgba(243, 208, 39, 0.33) 73px 73px,
	 rgba(243, 208, 39, 0.33) 74px 74px,
	 rgba(243, 208, 39, 0.33) 75px 75px,
	 rgba(243, 208, 39, 0.33) 76px 76px,
	 rgba(243, 208, 39, 0.33) 77px 77px,
	 rgba(243, 208, 39, 0.33) 78px 78px,
	 rgba(243, 208, 39, 0.33) 79px 79px,
	 rgba(243, 208, 39, 0.33) 80px 80px,
	 rgba(243, 208, 39, 0.33) 81px 81px,
	 rgba(243, 208, 39, 0.33) 82px 82px,
	 rgba(243, 208, 39, 0.33) 83px 83px,
	 rgba(243, 208, 39, 0.33) 84px 84px,
	 rgba(243, 208, 39, 0.33) 85px 85px,
	 rgba(243, 208, 39, 0.33) 86px 86px,
	 rgba(243, 208, 39, 0.33) 87px 87px,
	 rgba(243, 208, 39, 0.33) 88px 88px,
	 rgba(243, 208, 39, 0.33) 89px 89px,
	 rgba(243, 208, 39, 0.33)90px 90px,
	 rgba(243, 208, 39, 0.33)91px 91px,
	 rgba(243, 208, 39, 0.33)92px 92px,
	 rgba(243, 208, 39, 0.33)93px 93px,
	 rgba(243, 208, 39, 0.33)94px 94px,
	 rgba(243, 208, 39, 0.33) 95px 95px,
	 rgba(243, 208, 39, 0.33) 96px 96px,
	 rgba(243, 208, 39, 0.33) 97px 97px,
	 rgba(243, 208, 39, 0.33) 98px 98px,
	 rgba(243, 208, 39, 0.33) 99px 99px,
	 rgba(243, 208, 39, 0.33) 100px 100px,
	 rgba(243, 208, 39, 0.33) 101px 101px,
	 rgba(243, 208, 39, 0.33) 102px 102px,
	 rgba(243, 208, 39, 0.33) 103px 103px,
	 rgba(243, 208, 39, 0.33) 104px 104px,
	 rgba(243, 208, 39, 0.33) 105px 105px,
	 rgba(243, 208, 39, 0.33) 106px 106px,
	 rgba(243, 208, 39, 0.33) 107px 107px,
	 rgba(243, 208, 39, 0.33) 108px 108px,
	 rgba(243, 208, 39, 0.33) 109px 109px,
	 rgba(243, 208, 39, 0.33) 110px 110px,
	 rgba(243, 208, 39, 0.33) 111px 111px,
	 rgba(243, 208, 39, 0.33) 112px 112px,
	 rgba(243, 208, 39, 0.33) 113px 113px,
	 rgba(243, 208, 39, 0.33) 114px 114px,
	 rgba(243, 208, 39, 0.33) 115px 115px,
	 rgba(243, 208, 39, 0.33) 116px 116px,
	 rgba(243, 208, 39, 0.33) 117px 117px,
	 rgba(243, 208, 39, 0.33) 118px 118px,
	 rgba(243, 208, 39, 0.33) 119px 119px,
	 rgba(243, 208, 39, 0.33) 120px 120px,
	 rgba(243, 208, 39, 0.33) 121px 121px,
	 rgba(243, 208, 39, 0.33) 122px 122px,
	 rgba(243, 208, 39, 0.33) 123px 123px,
	 rgba(243, 208, 39, 0.33) 124px 124px,
	 rgba(243, 208, 39, 0.33) 125px 125px,
	 rgba(243, 208, 39, 0.33) 126px 126px,
	 rgba(243, 208, 39, 0.33) 127px 127px,
	 rgba(243, 208, 39, 0.33) 128px 128px,
	 rgba(243, 208, 39, 0.33) 129px 129px,
	 rgba(243, 208, 39, 0.33) 130px 130px,
	 rgba(243, 208, 39, 0.33) 131px 131px,
	 rgba(243, 208, 39, 0.33) 132px 132px,
	 rgba(243, 208, 39, 0.33)133px 133px,
	 rgba(243, 208, 39, 0.33)134px 134px,
	 rgba(243, 208, 39, 0.33)135px 135px,
	 rgba(243, 208, 39, 0.33) 136px 136px,
	 rgba(243, 208, 39, 0.33) 137px 137px,
	 rgba(243, 208, 39, 0.33) 138px 138px,
	 rgba(243, 208, 39, 0.33) 139px 139px,
	 rgba(243, 208, 39, 0.33) 140px 140px,
	 rgba(243, 208, 39, 0.33) 141px 141px,
	 rgba(243, 208, 39, 0.33) 142px 142px,
	 rgba(243, 208, 39, 0.33) 143px 143px,
	 rgba(243, 208, 39, 0.33) 144px 144px,
	 rgba(243, 208, 39, 0.33) 145px 145px,
	 rgba(243, 208, 39, 0.33) 146px 146px,
	 rgba(243, 208, 39, 0.33) 147px 147px,
	 rgba(243, 208, 39, 0.33) 148px 148px,
	 rgba(243, 208, 39, 0.33) 149px 149px,
	 rgba(243, 208, 39, 0.33) 150px 150px
	}
	.copy-right {
	left: 41%;
	bottom:-18%;
	}
}
@media (max-width:768px){
	.login-form  {
		margin: 16% auto 0;
		width: 59%;
	}
	.copy-right {
	left:38%;
	bottom:-14%;
	}
}
@media (max-width:640px){                                  
	.login-form {
	margin: 20% auto 0;
	width: 63%;
	}
	.copy-right {
	left:36%;
	bottom:-18%;
	}
}
@media (max-width:480px){                                  
	.login-form {
	margin: 32% auto 0;
	width: 74%;
	box-shadow: rgba(243, 208, 39, 0.33) 1px 1px,
	 rgba(243, 208, 39, 0.33) 2px 2px,
	 rgba(243, 208, 39, 0.33) 3px 3px,
	 rgba(243, 208, 39, 0.33) 4px 4px,
	 rgba(243, 208, 39, 0.33) 5px 5px,
	 rgba(243, 208, 39, 0.33) 6px 6px,
	 rgba(243, 208, 39, 0.33) 7px 7px,
	 rgba(243, 208, 39, 0.33) 8px 8px,
	 rgba(243, 208, 39, 0.33) 9px 9px,
	 rgba(243, 208, 39, 0.33) 10px 10px,
	 rgba(243, 208, 39, 0.33) 11px 11px,
	 rgba(243, 208, 39, 0.33) 12px 12px,
	 rgba(243, 208, 39, 0.33) 13px 13px,
	 rgba(243, 208, 39, 0.33) 14px 14px,
	 rgba(243, 208, 39, 0.33) 15px 15px,
	 rgba(243, 208, 39, 0.33) 16px 16px,
	 rgba(243, 208, 39, 0.33) 17px 17px,
	 rgba(243, 208, 39, 0.33) 18px 18px,
	 rgba(243, 208, 39, 0.33) 19px 19px,
	 rgba(243, 208, 39, 0.33) 20px 20px,
	 rgba(243, 208, 39, 0.33) 21px 21px,
	 rgba(243, 208, 39, 0.33) 22px 22px,
	 rgba(243, 208, 39, 0.33) 23px 23px,
	 rgba(243, 208, 39, 0.33) 24px 24px,
	 rgba(243, 208, 39, 0.33) 25px 25px,
	 rgba(243, 208, 39, 0.33) 26px 26px,
	 rgba(243, 208, 39, 0.33) 27px 27px,
	 rgba(243, 208, 39, 0.33) 28px 28px,
	 rgba(243, 208, 39, 0.33) 29px 29px,
	 rgba(243, 208, 39, 0.33) 30px 30px,
	 rgba(243, 208, 39, 0.33) 31px 31px,
	 rgba(243, 208, 39, 0.33) 32px 32px,
	 rgba(243, 208, 39, 0.33) 33px 33px,
	 rgba(243, 208, 39, 0.33) 34px 34px,
	 rgba(243, 208, 39, 0.33) 35px 35px,
	 rgba(243, 208, 39, 0.33) 36px 36px,
	 rgba(243, 208, 39, 0.33) 37px 37px,
	 rgba(243, 208, 39, 0.33) 38px 38px,
	 rgba(243, 208, 39, 0.33) 39px 39px,
	 rgba(243, 208, 39, 0.33) 40px 40px,
	 rgba(243, 208, 39, 0.33) 41px 41px,
	 rgba(243, 208, 39, 0.33) 42px 42px,
	 rgba(243, 208, 39, 0.33) 43px 43px,
	 rgba(243, 208, 39, 0.33) 44px 44px,
	 rgba(243, 208, 39, 0.33) 45px 45px,
	 rgba(243, 208, 39, 0.33) 46px 46px,
	 rgba(243, 208, 39, 0.33) 47px 47px,
	 rgba(243, 208, 39, 0.33) 48px 48px,
	 rgba(243, 208, 39, 0.33) 49px 49px,
	 rgba(243, 208, 39, 0.33) 50px 50px,
	 rgba(243, 208, 39, 0.33) 51px 51px,
	 rgba(243, 208, 39, 0.33) 52px 52px,
	 rgba(243, 208, 39, 0.33) 53px 53px,
	 rgba(243, 208, 39, 0.33) 54px 54px,
	 rgba(243, 208, 39, 0.33) 55px 55px,
	 rgba(243, 208, 39, 0.33) 56px 56px,
	 rgba(243, 208, 39, 0.33) 57px 57px,
	 rgba(243, 208, 39, 0.33) 58px 58px,
	 rgba(243, 208, 39, 0.33) 59px 59px,
	 rgba(243, 208, 39, 0.33) 60px 60px,
	 rgba(243, 208, 39, 0.33) 61px 61px,
	 rgba(243, 208, 39, 0.33) 62px 62px,
	 rgba(243, 208, 39, 0.33) 63px 63px,
	 rgba(243, 208, 39, 0.33) 64px 64px,
	 rgba(243, 208, 39, 0.33) 65px 65px,
	 rgba(243, 208, 39, 0.33) 66px 66px,
	 rgba(243, 208, 39, 0.33) 67px 67px,
	 rgba(243, 208, 39, 0.33) 68px 68px,
	 rgba(243, 208, 39, 0.33) 69px 69px,
	 rgba(243, 208, 39, 0.33) 70px 70px,
	 rgba(243, 208, 39, 0.33) 71px 71px,
	 rgba(243, 208, 39, 0.33) 72px 72px,
	 rgba(243, 208, 39, 0.33) 73px 73px,
	 rgba(243, 208, 39, 0.33) 74px 74px,
	 rgba(243, 208, 39, 0.33) 75px 75px,
	 rgba(243, 208, 39, 0.33) 76px 76px,
	 rgba(243, 208, 39, 0.33) 77px 77px,
	 rgba(243, 208, 39, 0.33) 78px 78px,
	 rgba(243, 208, 39, 0.33) 79px 79px,
	 rgba(243, 208, 39, 0.33) 80px 80px,
	 rgba(243, 208, 39, 0.33) 81px 81px,
	 rgba(243, 208, 39, 0.33) 82px 82px,
	 rgba(243, 208, 39, 0.33) 83px 83px,
	 rgba(243, 208, 39, 0.33) 84px 84px,
	 rgba(243, 208, 39, 0.33) 85px 85px,
	 rgba(243, 208, 39, 0.33) 86px 86px,
	 rgba(243, 208, 39, 0.33) 87px 87px,
	 rgba(243, 208, 39, 0.33) 88px 88px,
	 rgba(243, 208, 39, 0.33) 89px 89px,
	 rgba(243, 208, 39, 0.33)90px 90px,
	 rgba(243, 208, 39, 0.33)91px 91px,
	 rgba(243, 208, 39, 0.33)92px 92px,
	 rgba(243, 208, 39, 0.33)93px 93px,
	 rgba(243, 208, 39, 0.33)94px 94px,
	 rgba(243, 208, 39, 0.33) 95px 95px,
	 rgba(243, 208, 39, 0.33) 96px 96px,
	 rgba(243, 208, 39, 0.33) 97px 97px,
	 rgba(243, 208, 39, 0.33) 98px 98px,
	 rgba(243, 208, 39, 0.33) 99px 99px,
	 rgba(243, 208, 39, 0.33) 100px 100px,
	 rgba(243, 208, 39, 0.33) 101px 101px,
	 rgba(243, 208, 39, 0.33) 102px 102px,
	 rgba(243, 208, 39, 0.33) 103px 103px,
	 rgba(243, 208, 39, 0.33) 104px 104px,
	 rgba(243, 208, 39, 0.33) 105px 105px,
	 rgba(243, 208, 39, 0.33) 106px 106px,
	 rgba(243, 208, 39, 0.33) 107px 107px,
	 rgba(243, 208, 39, 0.33) 108px 108px,
	 rgba(243, 208, 39, 0.33) 109px 109px,
	 rgba(243, 208, 39, 0.33) 110px 110px
	}
	.copy-right {
	left:30%;
	bottom:-17%;
	}
	.main h1 {
	font-size: 22px;
	}
	.head img {
	width: 78%;
	}
	.head {
	top: -15%;
	left: 34%;
	}
	input[type="text"], input[type="password"], input[type="submit"] {
	font-weight: 600;
	margin-bottom: 4%;
	}
@media (max-width:320px){                                  
	.login-form  {
		margin:20% auto 0;
		width: 85%;
		
	box-shadow: rgba(243, 208, 39, 0.33) 1px 1px,
	 rgba(243, 208, 39, 0.33) 2px 2px,
	 rgba(243, 208, 39, 0.33) 3px 3px,
	 rgba(243, 208, 39, 0.33) 4px 4px,
	 rgba(243, 208, 39, 0.33) 5px 5px,
	 rgba(243, 208, 39, 0.33) 6px 6px,
	 rgba(243, 208, 39, 0.33) 7px 7px,
	 rgba(243, 208, 39, 0.33) 8px 8px,
	 rgba(243, 208, 39, 0.33) 9px 9px,
	 rgba(243, 208, 39, 0.33) 10px 10px,
	 rgba(243, 208, 39, 0.33) 11px 11px,
	 rgba(243, 208, 39, 0.33) 12px 12px,
	 rgba(243, 208, 39, 0.33) 13px 13px,
	 rgba(243, 208, 39, 0.33) 14px 14px,
	 rgba(243, 208, 39, 0.33) 15px 15px,
	 rgba(243, 208, 39, 0.33) 16px 16px,
	 rgba(243, 208, 39, 0.33) 17px 17px,
	 rgba(243, 208, 39, 0.33) 18px 18px,
	 rgba(243, 208, 39, 0.33) 19px 19px,
	 rgba(243, 208, 39, 0.33) 20px 20px,
	 rgba(243, 208, 39, 0.33) 21px 21px,
	 rgba(243, 208, 39, 0.33) 22px 22px,
	 rgba(243, 208, 39, 0.33) 23px 23px,
	 rgba(243, 208, 39, 0.33) 24px 24px,
	 rgba(243, 208, 39, 0.33) 25px 25px,
	 rgba(243, 208, 39, 0.33) 26px 26px,
	 rgba(243, 208, 39, 0.33) 27px 27px,
	 rgba(243, 208, 39, 0.33) 28px 28px,
	 rgba(243, 208, 39, 0.33) 29px 29px,
	 rgba(243, 208, 39, 0.33) 30px 30px,
	 rgba(243, 208, 39, 0.33) 31px 31px,
	 rgba(243, 208, 39, 0.33) 32px 32px,
	 rgba(243, 208, 39, 0.33) 33px 33px,
	 rgba(243, 208, 39, 0.33) 34px 34px,
	 rgba(243, 208, 39, 0.33) 35px 35px,
	 rgba(243, 208, 39, 0.33) 36px 36px,
	 rgba(243, 208, 39, 0.33) 37px 37px,
	 rgba(243, 208, 39, 0.33) 38px 38px,
	 rgba(243, 208, 39, 0.33) 39px 39px,
	 rgba(243, 208, 39, 0.33) 40px 40px,
	 rgba(243, 208, 39, 0.33) 41px 41px,
	 rgba(243, 208, 39, 0.33) 42px 42px,
	 rgba(243, 208, 39, 0.33) 43px 43px,
	 rgba(243, 208, 39, 0.33) 44px 44px,
	 rgba(243, 208, 39, 0.33) 45px 45px,
	 rgba(243, 208, 39, 0.33) 46px 46px,
	 rgba(243, 208, 39, 0.33) 47px 47px,
	 rgba(243, 208, 39, 0.33) 48px 48px,
	 rgba(243, 208, 39, 0.33) 49px 49px,
	 rgba(243, 208, 39, 0.33) 50px 50px,
	 rgba(243, 208, 39, 0.33) 51px 51px,
	 rgba(243, 208, 39, 0.33) 52px 52px,
	 rgba(243, 208, 39, 0.33) 53px 53px,
	 rgba(243, 208, 39, 0.33) 54px 54px,
	 rgba(243, 208, 39, 0.33) 55px 55px,
	 rgba(243, 208, 39, 0.33) 56px 56px,
	 rgba(243, 208, 39, 0.33) 57px 57px,
	 rgba(243, 208, 39, 0.33) 58px 58px,
	 rgba(243, 208, 39, 0.33) 59px 59px,
	 rgba(243, 208, 39, 0.33) 60px 60px,
	 rgba(243, 208, 39, 0.33) 61px 61px,
	 rgba(243, 208, 39, 0.33) 62px 62px,
	 rgba(243, 208, 39, 0.33) 63px 63px,
	 rgba(243, 208, 39, 0.33) 64px 64px,
	 rgba(243, 208, 39, 0.33) 65px 65px
	}
	.main h1 {
	padding-top: 20%;
	font-size: 20px;
	}
	.head img {
	width: 60%;
	border: 5px solid rgba(221, 218, 215, 0.23);
	}
	.head {
	top: -15%;
	left: 36%;
	}
	input[type="text"], input[type="password"],input[type="submit"] {
	font-weight:600;
	font-size: 15px;
	}
	.main form p a {
	font-size: 15px;
	}
	input[type="submit"] {
	padding: 4%;
	}
</style>
</head>

<body>
	 <div class="main">
		<div class="login-form">
			<br><br><br><br><br><center><h3>Wrong Credential!</h3></center>
					<div class="head">
					<img src="assets/img/login2.png" alt=""/>
					</div>
				<form method="post" action="check.php">
						<input name="phone" type="text" class="text" value="Phone No" onfocus="this.value = '';" id="phone" required />
						<input name="password" type="password" value="Password" onfocus="this.value = '';" id="password" required />
						<div class="submit">
							<input type="submit" value="LOGIN" >
					</div>	
				</form>
			</div>
			<!--//End-login-form-->
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>