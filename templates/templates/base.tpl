{* Smarty *}
<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="kylemattimore, kmattimo, umich, kyle mattimore, developer, web developer, music, guitar">
	<meta name="description" content="Music &amp; Tech | University of Michigan | One North Interactive">
	<meta name="author" content="Kyle Mattimore">
  <link rel="stylesheet" href="/static/css/site.css" />
  <title>{$title}</title>
</head>
<body>
   

<div>
	<div class="jumbotron text-center no-bottom-padding">
		<h1> Kyle Mattimore</h1>
		<br>
			<div class="container" >
				<div class="row row-centered-2">	
					<div class="col-xs-12 col-sm-10 col-md-8 col-centered-2">
						<ul class="nav nav-tabs nav-justified" role="navigation">
							<li {if $page=='home'}class="active" {/if}><a href="/">Home</a></li>				
							<li {if $page=='projects'}class="active" {/if} ><a href="/projects/">Projects</a></li>	
							<li {if $page=='contact'}class="active" {/if}><a href="/contact/">Contact</a></li>	
						</ul>
					</div>	
				</div>
			</div>		
	</div> 

    {block "body"}Default Body Text{/block}
</div>
  

		
{block "footerScripts"}
<!-- <link rel="stylesheet" href="/static/css/font-awesome.min.css"> -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
{/block}		
{block "customJS"}{/block}		
		
{literal}

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.kylemattimore.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//p.kmattimo.me/";
    _paq.push(['setTrackerUrl', u+'js/']);
    _paq.push(['setSiteId', '3']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//p.kmattimo.me/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>

{/literal}
</body>

</html>
