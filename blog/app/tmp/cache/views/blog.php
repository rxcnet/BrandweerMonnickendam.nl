<!--cachetime:1438042663--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:8:{s:6:"plugin";N;s:10:"controller";s:5:"posts";s:6:"action";s:5:"index";s:5:"named";a:0:{}s:4:"pass";a:0:{}s:6:"isAjax";b:0;s:6:"paging";a:1:{s:4:"Post";a:10:{s:4:"page";i:1;s:7:"current";i:1;s:5:"count";i:1;s:8:"prevPage";b:0;s:8:"nextPage";b:0;s:9:"pageCount";i:1;s:5:"order";a:1:{s:12:"Post.created";s:4:"desc";}s:5:"limit";i:5;s:7:"options";a:1:{s:10:"conditions";a:0:{}}s:9:"paramType";s:5:"named";}}s:6:"models";a:3:{s:4:"Post";a:2:{s:6:"plugin";N;s:9:"className";s:4:"Post";}s:7:"Setting";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Setting";}s:4:"User";a:2:{s:6:"plugin";N;s:9:"className";s:4:"User";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";b:0;s:4:"base";s:5:"/blog";s:7:"webroot";s:6:"/blog/";s:4:"here";s:6:"/blog/";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo2OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjk6IlBhZ2luYXRvciI7TjtzOjQ6IlRleHQiO047czo1OiJDYWNoZSI7Tjt9'));
				$controller->layout = $this->layout = 'academic';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjM5OiJBY2FkZW1pYyBibG9nIC0gVGhlIG1pbmltYWxpc3QgYmxvZyBDTVMiO3M6NToicG9zdHMiO2E6MTp7aTowO2E6Mjp7czo0OiJQb3N0IjthOjc6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czoyMDoiV2VsY29tZSB0byBhY2FkZW1pYyoiO3M6NDoic2x1ZyI7czoxOToid2VsY29tZV90b19hY2FkZW1pYyI7czo0OiJib2R5IjtzOjEwODoiWW91IGNhbiBlZGl0IG9yIGRlbGV0ZSB0aGlzIHB1YmxpY2F0aW9uIGJ5IGNyZWF0aW5nIGFuIGFkbWluaXN0cmF0b3IgYWNjb3VudCA8YSBocmVmPScvdXNlcnMvYWRkLyc+aGVyZTwvYT4uIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTUtMDctMjcgMTY6MTc6MDAiO3M6NjoiZm9ybWF0IjtzOjg6InN0YW5kYXJkIjtzOjc6InVzZXJfaWQiO3M6MToiMSI7fXM6NDoiVXNlciI7YTo3OntzOjI6ImlkIjtOO3M6NToiZW1haWwiO047czo2OiJwc2V1ZG8iO047czo4OiJwYXNzd29yZCI7TjtzOjQ6InJvbGUiO047czo1OiJhYm91dCI7TjtzOjc6ImNyZWF0ZWQiO047fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjM1MDoiCgoKCgoJCgoJPGRpdiBjbGFzcz0nY2VudGVyZWQnPjxoMj48YSBocmVmPSIvYmxvZy9wb3N0cy8uLi9wb3N0L3dlbGNvbWVfdG9fYWNhZGVtaWMiPldlbGNvbWUgdG8gYWNhZGVtaWMqPC9hPjwvaDI+Cgk8cD48aT48c21hbGw+UHVibGlzaGVkIE1vbmRheSAyN3RoIEp1bCAyMDE1IGJ5IDwvc21hbGw+PC9pPjwvcD4KCTwvZGl2PgoJPHA+WW91IGNhbiBlZGl0IG9yIGRlbGV0ZSB0aGlzIHB1YmxpY2F0aW9uIGJ5IGNyZWF0aW5nIGFuIGFkbWluaXN0cmF0b3IgYWNjb3VudCA8YSBocmVmPScvdXNlcnMvYWRkLyc+aGVyZTwvYT4uPC9wPgoKCQo8aHI+CgoKPGRpdiBjbGFzcz0nY2VudGVyZWQnPgogCiAKIAo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Academic blog - The minimalist blog CMS</title>
    <meta name="author" content="">
    <meta name="generator" content="academic*">

    <!-- Styles -->
    <link href="/blog/css/bootstrap.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/blog/img/favicon.ico">
    
        
  </head>

    
    <?php 
    if ('admin' == $this->Session->read('Auth.User.role')) {
    	echo $this->element('navbar_admin');
    } elseif ($this->Session->check('Auth.User.id')) {
    	echo $this->element('navbar_author');
    } else {
    	echo('<body>');
    } ?>
    

    <div class="container">
    
		<div class="content">
				
		<?php echo $this->Session->flash(); ?>
		
		<a href="/blog/" title="Home" class="fn"><img src="/blog/img/logo.png" width="500" height="100" alt=""></a>

<div style="padding: 5px; background: #FBFBFB; border-top: 1px solid #EAEAEA; border-bottom: 1px solid #EAEAEA; text-align: center; margin-bottom: 5px; margin-top: 20px; color: #999999;">
<h4 style="text-transform:uppercase; font-weight: 300;">
<a href="/blog/page/about/">About</a> • 
<a href="/blog/contacts/">Contact</a> • 
<a href="/blog/posts/archives/">Archives</a> • 
<a href="/blog/page/links/">Links</a> • 
<a href="/blog/pages/">More →</a>
</h4>
</div>

<div class="centered">
<p style="font-size: 1.15em; color: #999999; margin-top: 30px; margin-bottom: 30px; font-weight: 300;">
The minimalist blog CMS</p>
</div>

<hr>		




	

	<div class='centered'><h2><a href="/blog/posts/../post/welcome_to_academic">Welcome to academic*</a></h2>
	<p><i><small>Published Monday 27th Jul 2015 by </small></i></p>
	</div>
	<p>You can edit or delete this publication by creating an administrator account <a href='/users/add/'>here</a>.</p>

	
<hr>


<div class='centered'>
 
 
 
</div>			    
		</div>
		
		<footer style="margin-top: 20px; margin-bottom: 15px; text-align: center;">
		    <p><small><a href="/blog/posts.rss">RSS</a> - Powered by <a href="http://academic-cms.github.com/">academic*</a></small></p>
		</footer>
      
    </div>
    
    <!-- Javascript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="/blog/js/bootstrap-transition.js"></script>
    <script src="/blog/js/bootstrap-dropdown.js"></script>
    <script src="/blog/js/bootstrap-tab.js"></script>
    <script src="/blog/js/bootstrap-modal.js"></script>
    
       
	<?php 
	if (('admin' == $this->Session->read('Auth.User.role')) && (Configure::read('debug') > 0)) {
		echo ($this->element('sql_dump'));
	} ?>
	

  </body>
</html>

<!-- Powered by academic* - Download : <http://academic-cms.github.com/> -->