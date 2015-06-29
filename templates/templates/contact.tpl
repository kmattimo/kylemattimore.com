{* Smarty *}
{extends 'base.tpl'}
{block name='body'}




<div class="container">
	
	<div class="row row-centered">
		<div class="col-xs-12 col-md-6 col-lg-6 col-centered-left">
			{*<h4>I am seeking Summer employment!</h4> May through August 2015. 
			
			<br><br>
			*}
			<h4> Are you human? </h4>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-xs-12 col-md-6 col-lg-6  col-centered">
			<div class="input-group" id="inputDiv">
				<input type="text" class="form-control" id="humanInput" value="I am not">
				<span class="input-group-addon"><i id="human-android" class="fa fa-android fa-lg"></i></span>
			</div>
		</div>
	</div>
<br/>
	<div class="row row-centered" >
		<div class="col-xs-12 col-md-6 col-lg-6  col-centered-left" id="contactinfo">
		<div class="well"> If you aren't, contact me at [kylemattimore+spam(at)g mail<(dot)com] </div>
		
			<a href="/contact2">Alternate Validation</a>
			
			<noscript> <br> Note: you appear to have scripts disabled. Please enable JavaScript to validate, or examine the code and run the ajax call yourself :) </noscript>

			
		</div>
	</div>
</div>	

<br/><br/>
{/block}

{block name='customJS'}
<script src="/static/js/obfuscation.js"></script>
<script src="/static/js/humanValidation.js"></script>
{/block}