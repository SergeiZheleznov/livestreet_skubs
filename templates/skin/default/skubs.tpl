{if $aSkubBlogs}
	<li class="skubs-wrapper">
		<span>{$aLang.plugin.skubs.activity}:</span>
		<strong>
		{foreach from=$aSkubBlogs item=oBlog name=blog_skubs}{strip}
			<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a><sup title="{$aLang.plugin.skubs.sup_title}">{$oBlog->getSkubs()}</sup>{if !$smarty.foreach.blog_skubs.last}, {/if}
		{/strip}{/foreach}
		</strong>
	</li>
{/if}