{* Smarty *}
{extends 'base.tpl'}
{block name='body'}

<div class="container">
	
	<div class="row row-centered">
		<div class="col-xs-6 col-centered-left">
			<h4> Are you human? </h4>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-xs-6 col-centered">
			<div class="input-group">
				<input type="text" class="form-control" value="I am not">
				<span class="input-group-addon"><i class="fa fa-android fa-lg"></i></span>
			</div>
		</div>
	</div>
<br/>
	<div class="row row-centered" id="contactinfo">
		<div class="col-xs-6 col-centered-left">
		If you aren't, contact me at [kylemattimore+spam(at)gmail(dot)com]
		</div>
	</div>
</div>	

{/block}