<!--cachetime:1438042742--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":9:{s:6:"params";a:8:{s:6:"plugin";N;s:10:"controller";s:5:"posts";s:6:"action";s:8:"archives";s:5:"named";a:0:{}s:4:"pass";a:0:{}s:6:"isAjax";b:0;s:6:"paging";a:1:{s:4:"Post";a:10:{s:4:"page";i:1;s:7:"current";i:1;s:5:"count";i:1;s:8:"prevPage";b:0;s:8:"nextPage";b:0;s:9:"pageCount";i:1;s:5:"order";a:1:{s:12:"Post.created";s:4:"desc";}s:5:"limit";i:15;s:7:"options";a:1:{s:10:"conditions";a:0:{}}s:9:"paramType";s:5:"named";}}s:6:"models";a:3:{s:4:"Post";a:2:{s:6:"plugin";N;s:9:"className";s:4:"Post";}s:7:"Setting";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Setting";}s:4:"User";a:2:{s:6:"plugin";N;s:9:"className";s:4:"User";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:15:"posts/archives/";s:4:"base";s:5:"/blog";s:7:"webroot";s:6:"/blog/";s:4:"here";s:21:"/blog/posts/archives/";s:13:" * _detectors";a:11:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:26:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"iPad";i:8;s:4:"J2ME";i:9;s:4:"MIDP";i:10;s:8:"NetFront";i:11;s:5:"Nokia";i:12;s:10:"Opera Mini";i:13;s:10:"Opera Mobi";i:14;s:6:"PalmOS";i:15;s:10:"PalmSource";i:16;s:9:"portalmmm";i:17;s:7:"Plucker";i:18;s:14:"ReqwirelessWeb";i:19;s:12:"SonyEricsson";i:20;s:7:"Symbian";i:21;s:11:"UP\.Browser";i:22;s:5:"webOS";i:23;s:10:"Windows CE";i:24;s:16:"Windows Phone OS";i:25;s:5:"Xiino";}}s:9:"requested";a:2:{s:5:"param";s:9:"requested";s:5:"value";i:1;}}s:9:" * _input";s:0:"";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo2OntzOjc6IlNlc3Npb24iO047czo0OiJIdG1sIjtOO3M6NDoiRm9ybSI7TjtzOjk6IlBhZ2luYXRvciI7TjtzOjQ6IlRleHQiO047czo1OiJDYWNoZSI7Tjt9'));
				$controller->layout = $this->layout = 'academic';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjM2OiJQdWJsaWNhdGlvbiBhcmNoaXZlcyAtIEFjYWRlbWljIGJsb2ciO3M6NToicG9zdHMiO2E6MTp7aTowO2E6Mjp7czo0OiJQb3N0IjthOjc6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJ0aXRsZSI7czoyMDoiV2VsY29tZSB0byBhY2FkZW1pYyoiO3M6NDoic2x1ZyI7czoxOToid2VsY29tZV90b19hY2FkZW1pYyI7czo0OiJib2R5IjtzOjEwODoiWW91IGNhbiBlZGl0IG9yIGRlbGV0ZSB0aGlzIHB1YmxpY2F0aW9uIGJ5IGNyZWF0aW5nIGFuIGFkbWluaXN0cmF0b3IgYWNjb3VudCA8YSBocmVmPScvdXNlcnMvYWRkLyc+aGVyZTwvYT4uIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTUtMDctMjcgMTY6MTc6MDAiO3M6NjoiZm9ybWF0IjtzOjg6InN0YW5kYXJkIjtzOjc6InVzZXJfaWQiO3M6MToiMSI7fXM6NDoiVXNlciI7YTo3OntzOjI6ImlkIjtzOjE6IjEiO3M6NToiZW1haWwiO3M6MTQ6Im9zY2FyQHJ4LWMubmV0IjtzOjY6InBzZXVkbyI7czo1OiJvc2NhciI7czo4OiJwYXNzd29yZCI7czo0MDoiYzgyNWFhYjczMGFjMmE0MDZhMjIyZTJiNDk5ZmI5NzY0NzcwNzcyMyI7czo0OiJyb2xlIjtzOjU6ImFkbWluIjtzOjU6ImFib3V0IjtzOjE0OiJIb29mZGdlYnJ1aWtlciI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE1LTA3LTI3IDE2OjE4OjQ4Ijt9fX1zOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTI2NjoiCgoKCQk8ZGl2IGNsYXNzPSdjZW50ZXJlZCc+PGgxIHN0eWxlPSJtYXJnaW4tYm90dG9tOiAyMHB4OyI+UHVibGljYXRpb24gYXJjaGl2ZXM8L2gxPjwvZGl2PgoKCQkKCQk8Zm9ybSBhY3Rpb249Ii9ibG9nL3Bvc3RzL3NlYXJjaCIgY2xhc3M9ImZvcm0gd2VsbCBmb3JtLXNlYXJjaCZxdW90OyIgaWQ9IlBvc3RTZWFyY2hGb3JtIiBtZXRob2Q9InBvc3QiIGFjY2VwdC1jaGFyc2V0PSJ1dGYtOCI+PGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiLz48L2Rpdj4KPHRhYmxlPgoJPHRyPgoJPHRkPjxkaXYgY2xhc3M9ImlucHV0IHRleHQiPjxpbnB1dCBuYW1lPSJkYXRhW1NlYXJjaF1baW5wdXRdIiBzdHlsZT0id2lkdGg6MzQwcHg7IG1hcmdpbi1yaWdodDoxMHB4OyIgY2xhc3M9ImlucHV0IHNlYXJjaC1xdWVyeSIgdHlwZT0idGV4dCIgaWQ9IlNlYXJjaElucHV0Ii8+PC9kaXY+PC90ZD4KCTx0ZD48aW5wdXQgdHlwZT0nc3VibWl0JyBjbGFzcz0nYnRuJyB2YWx1ZT0nU2VhcmNoJz48L3RkPgoJPC90cj4KPC90YWJsZT4KPC9mb3JtPgkJCgkJPHRhYmxlIGNsYXNzPSJ0YWJsZSB0YWJsZS1zdHJpcGVkIj4KCQkgICAgPHRyPgoJCSAgICAgICAgPHRoPj88L3RoPgoJCSAgICAgICAgPHRoPjxhIGhyZWY9Ii9ibG9nL3Bvc3RzL2FyY2hpdmVzL3NvcnQ6dGl0bGUvZGlyZWN0aW9uOmFzYyI+VGl0bGU8L2E+PC90aD4KCQkgICAgICAgIDx0aCBzdHlsZT0id2lkdGg6IDEzNXB4OyI+PGEgaHJlZj0iL2Jsb2cvcG9zdHMvYXJjaGl2ZXMvc29ydDpjcmVhdGVkL2RpcmVjdGlvbjphc2MiIGNsYXNzPSJkZXNjIj5DcmVhdGVkPC9hPjwvdGg+CgkJICAgICAgICAJCSAgICA8L3RyPgoJCQoJCSAgICAJCSAgICAJCSAgICAKCQkgICAgPHRyPgoJCSAgICAgICAgPHRkPgoJCSAgICAgICAgPGkgY2xhc3M9JyBpY29uLXBlbmNpbCc+PC9pPiAJCSAgICAgICAgPC90ZD4KCQkgICAgICAgIAoJCSAgICAgICAgPHRkPgoJCSAgICAgICAgPGEgaHJlZj0iL2Jsb2cvcG9zdHMvLi4vcG9zdC93ZWxjb21lX3RvX2FjYWRlbWljIj5XZWxjb21lIHRvIGFjYWRlbWljKjwvYT4JCSAgICAgICAgPC90ZD4KCQkgICAgICAgIDx0ZD48c3BhbiBjbGFzcz0ibXV0ZWQiPjIwMTUtMDctMjcgMTY6MTc6MDA8L3NwYW4+PC90ZD4KCQkgICAgICAgIAkJICAgIDwvdHI+CgkJICAgIAkJCgkJPC90YWJsZT4KCQkKCQk8ZGl2IGNsYXNzPSdjZW50ZXJlZCc+CgkJIAoJCSAKCQkgCgkJPC9kaXY+IjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjt9'));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Publication archives - Academic blog</title>
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


		<div class='centered'><h1 style="margin-bottom: 20px;">Publication archives</h1></div>

		
		<form action="/blog/posts/search" class="form well form-search&quot;" id="PostSearchForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
<table>
	<tr>
	<td><div class="input text"><input name="data[Search][input]" style="width:340px; margin-right:10px;" class="input search-query" type="text" id="SearchInput"/></div></td>
	<td><input type='submit' class='btn' value='Search'></td>
	</tr>
</table>
</form>		
		<table class="table table-striped">
		    <tr>
		        <th>?</th>
		        <th><a href="/blog/posts/archives/sort:title/direction:asc">Title</a></th>
		        <th style="width: 135px;"><a href="/blog/posts/archives/sort:created/direction:asc" class="desc">Created</a></th>
		        		    </tr>
		
		    		    		    
		    <tr>
		        <td>
		        <i class=' icon-pencil'></i> 		        </td>
		        
		        <td>
		        <a href="/blog/posts/../post/welcome_to_academic">Welcome to academic*</a>		        </td>
		        <td><span class="muted">2015-07-27 16:17:00</span></td>
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