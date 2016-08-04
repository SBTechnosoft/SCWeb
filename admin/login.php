<?php include("include/header.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />

</head>

<body >
<div class="wrapper">
  <header class="header"> <img src="img/blog-logo.png" width="292" height="58" alt=""/> 
  
 
   
   </header>
  <!-- .header-->
  
  <main class="content">
  
  <div class="col-md-12">
	<div id="contactForm">
      <form action="loginPost.php" method="post" >
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name *" id="admin_name" name="admin_name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password *" name="admin_pass" id="admin_pass" required data-validation-required-message="Please enter your Password.">
              <p class="help-block text-danger"></p>
            </div>
            
          </div>
		 
          <div class="col-md-12">
            <div class="form-group form-group-text">
             
			  <input type="submit" class="btn btn-xl" value="login" name="btn_login" id="btn_login"/>
            </div>
          </div>
         
        </div>
      </form>
	  </div>
    </div>
  

    
    
    
        
    
    
  </main>
  <!-- .content -->
  
  
  <!-- .footer --> 
  
</div>
<!-- .wrapper -->

<link href="css/master.css" rel="stylesheet">
<style scoped >

.btn-panel-header{
	clear:both;
}


.doclinks{
  border: 2px solid;
    color: #fff;
    display: inline-block;
    font-family: "oswaldbook";
    font-size: 20px;
    margin-top: 30px;
    padding: 10px 20px;
    text-decoration: none !important;
    text-transform: uppercase;
}


.doclinks:hover{
	background-color: #ffc908;
}


.header , .footer{
  color: #fff;
    height: auto !important;
    padding: 50px;
    text-align: center;
}


.preview-item{
display: inline-block;
    margin: 30px 30px 0;
    vertical-align: top;
    width: 237px;
}

.preview-item a{
   border: 5px solid #444444;
    display: block;
    height: 300px;
    margin-bottom: 20px;
    overflow: hidden;
    width: 237px;
		-webkit-transition: all .3s ease-out;
	-moz-transition: all .3s ease-out;
	-ms-transition: all .3s ease-out;
	-o-transition: all .3s ease-out;
	transition: all .3s ease-out;
}


.preview-item:hover a{
	border-color:#ffc908 ;
}


.hover1:hover  img {
	margin-top:-1560px;
	
}


.hover2:hover  img {
	margin-top:-280px;
	
}
.hover3:hover  img {
	margin-top:-160px;
	
}

.hover4:hover  img {
	margin-top:-160px;
	
}

.hover5:hover  img {
	margin-top:-185px;
	
}


.hover6:hover  img {
	margin-top:-176px;
	
}
.preview-item img{
	width:100%;
	height:auto;
	position:relative;
		-webkit-transition: all 4.3s ease-out;
	-moz-transition: all 4.3s ease-out;
	-ms-transition: all 4.3s ease-out;
	-o-transition: all 4.3s ease-out;
	transition: all 4.3s ease-out
}

.preview-item h3{
	border-bottom: 1px solid #444444;
    color: #fff;
    font-family: "oswaldbook";
    font-size: 16px;
    margin-bottom: 20px;
    padding-bottom: 15px;
    position: relative;
    text-transform: uppercase;
}

.content{
	display:inline-block;
}



/* Eric Meyer's CSS Reset */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}

html{
	min-height:100%;
}

body {
	background:url(bg-start.jpg) no-repeat 0 0;
	background-size:cover;
	background-attachment:relative;
	line-height: 1;
	height:100%;
	min-height:100%;
	overflow-x:hidden;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* End of Eric Meyer's CSS Reset */

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
	display: block;
}
body {
	font: 12px/18px Arial, sans-serif;
	width: 100%;
}
.wrapper {
	width: 1000px;
	margin: 0 auto;
	
}


/* Header
-----------------------------------------------------------------------------*/
.header {
	height: 150px;

}


/* Middle
-----------------------------------------------------------------------------*/
.content {
	 background:  #222222;
    color: #fff;
    padding: 3%;
	text-align:center;
	position:absolute;
	margin-left:14%;
    width: 50%;
	opacity: 0.4;
	
}




/* Footer
-----------------------------------------------------------------------------*/
.footer {
	height: 150px;

}


</style>
</body>
</html>