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
<div class="element-social">
   <h3 class="hide">{$LANG.common.follow_us}</h3>
   <ul class="inline-list">
      {foreach from=$SOCIAL_LINKS item=link}
      <li><a href="{$link.url}" title="{$link.name}" class="{$link.icon}" target="_blank" rel="noopener noreferrer"><svg class="icon"><use xlink:href="#icon-{$link.icon}"></use></svg></a></li>
      {/foreach}
   </ul>
</div>