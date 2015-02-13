{* Smarty *}
{extends 'base.tpl'}
{block name='body'}

<div class= "row row-centered">
	<div class= "col-xs-12 col-md-6 col-centered"> 

	<form method="post" action="">
	<input type="text" name="string" />
	<input type="submit" name="string_encode" value="Encode" >
	
	</div>
</div>

<div class= "row row-centered">
	<div class= "col-xs-10  col-centered-left"> 

	{if isset($result)}

	<div class="well" style="word-wrap: break-word;">

	{$result}
	</div>

	{/if}
	</div>
</div>


{/block}