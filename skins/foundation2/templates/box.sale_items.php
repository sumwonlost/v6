{*
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2017. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}
{if $PRODUCTS && $CONFIG['catalogue_sale_mode']>0}
<div class="panel" id="box-sale_items">
  <h3>{$LANG.catalogue.title_saleitems}</h3>
  <ul>
  {foreach from=$PRODUCTS item=product name="sale_items"}
    {if $SECTION_NAME=='home' && $smarty.foreach.sale_items.index == 5}
      {break}
    {/if}
	<li>
	  <a href="{$product.url}" title="{$product.name} ({if {$product.saving}}{$LANG.catalogue.saving} {$product.saving}{/if})">{$product.name|truncate:42:"&hellip;"}</a><br>
	  <span class="old_price">{$product.price}</span> <span class="sale_price">{$product.sale_price}</span>
	</li>
  {/foreach}
  </ul>
</div>
{/if}