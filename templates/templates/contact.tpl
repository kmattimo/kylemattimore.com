{* Smarty *}
{extends 'base.tpl'}
{block name='body'}

<script src="/static/js/humanValidation.js"></script>


<div class="container">
	
	<div class="row row-centered">
		<div class="col-xs-12 col-md-6 col-lg-6 col-centered-left">
			<h4>I am seeking Summer employment!</h4> May through August 2015. 
			<br><br>
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
		<div class="well"> If you aren't, contact me at [kylemattimore+spam(at)gmail(dot)com] </div>
		</div>
	</div>
</div>	

<br/><br/>
{/block}