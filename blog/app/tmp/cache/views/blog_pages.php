<!--cachetime:1438042738--><?php
			App::uses('PagesController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:7:{s:6:"plugin";N;s:10:"controller";s:5:"pages";s:6:"action";s:5:"index";s:5:"named";a:0:{}s:4:"pass";a:0:{}s:6:"paging";a:1:{s:4:"Page";a:10:{s:4:"page";i:1;s:7:"current";i:2;s:5:"count";i:2;s:8:"prevPage";b:0;s:8:"nextPage";b:0;s:9:"pageCount";i:1;s:5:"order";a:1:{s:12:"Page.created";s:3:"asc";}s:5:"limit";i:15;s:7:"options";a:1:{s:10:"conditions";a:0:{}}s:9:"paramType";s:5:"named";}}s:6:"models";a:2:{s:4:"Page";a:2:{s:6:"plugin";N;s:9:"className";s:4:"Page";}s:7:"Setting";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Setting";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:6:"pages/";s:4:"base";s:5:"/blog";s:7:"webroot";s:6:"/blog/";s:4:"here";s:12:"/blog/pages/";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new PagesController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo1OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjk6IlBhZ2luYXRvciI7TjtzOjU6IkNhY2hlIjtOO30='));
				$controller->layout = $this->layout = 'academic';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjIxOiJQYWdlcyAtIEFjYWRlbWljIGJsb2ciO3M6NToicGFnZXMiO2E6Mjp7aTowO2E6MTp7czo0OiJQYWdlIjthOjU6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czo1OiJBYm91dCI7czo0OiJzbHVnIjtzOjU6ImFib3V0IjtzOjQ6ImJvZHkiO3M6MjQ0OiJMb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzY2luZyBlbGl0LiBVdCBhIGR1aSBtZXR1cywgdml0YWUgYXVjdG9yIGRvbG9yLiBGdXNjZSBsZW8gdHVycGlzLCBzYWdpdHRpcyBzZWQgZGlnbmlzc2ltIGlkLCByaG9uY3VzIGFjIGRpYW0uIE5hbSBzdXNjaXBpdCBydXRydW0gdmVuZW5hdGlzLiBEb25lYyBtaSB1cm5hLCBwaGFyZXRyYSBlZ2V0IGN1cnN1cyB1dCwgaW50ZXJkdW0gaW4gcmlzdXMuIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTUtMDctMjcgMTY6MTc6MDAiO319aToxO2E6MTp7czo0OiJQYWdlIjthOjU6e3M6MjoiaWQiO3M6MToiMiI7czo1OiJ0aXRsZSI7czo1OiJMaW5rcyI7czo0OiJzbHVnIjtzOjU6ImxpbmtzIjtzOjQ6ImJvZHkiO3M6NjE6IiMjI0xpbmsgY2F0ZWdvcnkKICAqIFtMaW5rMV0oIykKICAqIFtMaW5rMl0oIykKICAqIFtMaW5rM10oIykiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNS0wNy0yNyAxNjoxNzowMCI7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjkwODoiCgkJPGRpdiBjbGFzcz0nY2VudGVyZWQnPjxoMSBzdHlsZT0ibWFyZ2luLWJvdHRvbTogMjBweDsiPlBhZ2UgbGlzdDwvaDE+PC9kaXY+CgkJCgkJPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1zdHJpcGVkIj4KCQkgICAgPHRyPgoJCSAgICAgICAgPHRoPjxhIGhyZWY9Ii9ibG9nL3BhZ2VzL2luZGV4L3NvcnQ6dGl0bGUvZGlyZWN0aW9uOmFzYyI+VGl0bGU8L2E+PC90aD4KCQkgICAgICAgIDx0aD5Db250ZW50IHByZXZpZXc8L3RoPgoJCSAgICAgICAgCQkgICAgPC90cj4KCQkKCQkgICAgCQkgICAgCQkgICAgCgkJICAgIDx0cj4KCQkgICAgICAgIDx0ZD48YSBocmVmPSIvYmxvZy9wYWdlcy8uLi9wYWdlL2Fib3V0Ij5BYm91dDwvYT48L3RkPgoJCSAgICAgICAgPHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2NpbmcgZWxpdC4gVXQgYSBkdWkgbWV0dXMsIHZpdGFlIGF1Y3RvciBkb2xvci4gRnVzY2UgbGVvIHR1cnBpcywgc2FnaXR0aXMgc2VkIGRpZ25pc3NpbSBpZCwgcmhvbmN1cyBhYyBkaWFtLiBOYW0gc3VzY2lwaXQgcnV0cnVtIHZlbmVuYXRpcy4gRG9uZWMgbWkgKC4uLik8L3RkPgoJCSAgICAgICAgCQkgICAgPC90cj4KCQkgICAgCQkgICAgCQkgICAgCgkJICAgIDx0cj4KCQkgICAgICAgIDx0ZD48YSBocmVmPSIvYmxvZy9wYWdlcy8uLi9wYWdlL2xpbmtzIj5MaW5rczwvYT48L3RkPgoJCSAgICAgICAgPHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiBqdXN0aWZ5OyI+TGluayBjYXRlZ29yeQoKCkxpbmsxCkxpbmsyCkxpbmszCgo8L3RkPgoJCSAgICAgICAgCQkgICAgPC90cj4KCQkgICAgCQkKCQk8L3RhYmxlPgoJCQoJCTxkaXYgY2xhc3M9J2NlbnRlcmVkJz4KCQkgCgkJIAoJCSAKCQk8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pages - Academic blog</title>
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
		<div class='centered'><h1 style="margin-bottom: 20px;">Page list</h1></div>
		
		<table class="table table-striped">
		    <tr>
		        <th><a href="/blog/pages/index/sort:title/direction:asc">Title</a></th>
		        <th>Content preview</th>
		        		    </tr>
		
		    		    		    
		    <tr>
		        <td><a href="/blog/pages/../page/about">About</a></td>
		        <td style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a dui metus, vitae auctor dolor. Fusce leo turpis, sagittis sed dignissim id, rhoncus ac diam. Nam suscipit rutrum venenatis. Donec mi (...)</td>
		        		    </tr>
		    		    		    
		    <tr>
		        <td><a href="/blog/pages/../page/links">Links</a></td>
		        <td style="text-align: justify;">Link category


Link1
Link2
Link3

</td>
		        		    </tr>
		    		
		</table>
		
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