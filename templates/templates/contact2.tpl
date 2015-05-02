{* Smarty *}
{extends 'base.tpl'}
{block name='body'}




<div class="container">
	
	<div class="row row-centered">
		<div class="col-xs-12 col-md-6 col-lg-6 col-centered-left">
			{*<h4>I am seeking Summer employment!</h4> May through August 2015. 
			
			<br><br>
			*}
			<h4>{if (isset($payload))} Thanks! {else}Are you human? {/if}</h4>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-xs-12 col-md-6 col-lg-6  col-centered">
			
		{if !(isset($payload))}
			<form  method="post" action="" id="AYAH_submit">
			{$AYAH}
			 <input type="hidden" name="AYAHform" value=" Submit"> <form>
		{/if}	 
		
		</div>
	</div>
<br/>
	<div class="row row-centered" >
		<div class="col-xs-12 col-md-6 col-lg-6  col-centered-left" id="contactinfo">
		
		{if isset($payload)} {$payload} 
		{else}
		<div class="well"> If you aren't, contact me at [kylemattimore+spam(at)gmail(dot)com] </div>
		{/if}
			<a href="/contact">Return to original</a>
		</div>
	</div>
</div>	

<br/><br/>

{if !(isset($payload))}
<script src="/static/js/obfuscation.js"></script>
<script src="/static/js/ayah.js"></script>
{/if}
{/block}