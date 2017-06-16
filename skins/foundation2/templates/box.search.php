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
<div id=top_nav_search>
   <div class="show-for-medium-up">
   <form action="{$STORE_URL}/search.html" class="search_form" method="get">
      <div class="row collapse">
         <div class="medium-10 columns">
            <input name="search[keywords]" id="search_box" type="text" class="nomarg" placeholder="{$LANG.search.input_default}" required>
            <small><a href="{$STORE_URL}/search.html">{$LANG.search.advanced}</a></small>
         </div>
         <div class="medium-2 columns">
            <button class="button postfix nomarg nopad" type="submit" value="{$LANG.common.search}"><svg class="icon"><use xlink:href="#icon-search"></use></svg></button>
         </div>
      </div>
      <input type="hidden" name="_a" value="category">
   </form>
   <div class="hide validate_search">{$LANG.search.enter_search_term}</div>
   </div>
   <div class="show-for-small-only">
      <a href="#" id="small_search_button"><svg class="icon icon-x2"><use xlink:href="#icon-search"></use></svg>
   </div>
</div>