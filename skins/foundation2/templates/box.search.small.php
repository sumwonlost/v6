<form class="hide" id="small_search_box" action="{$STORE_URL}/search.html" method="get">
    <div class="row collapse">
       <div class="small-2 columns">
          <a class="button white postfix nomarg nopad" id="close_small_search" value="{$LANG.common.close}"><svg class="icon"><use xlink:href="#icon-times"></use></svg></a>
       </div>
       <div class="small-8 columns">
          <input name="search[keywords]" id="search_box" type="text" class="nomarg" placeholder="{$LANG.search.input_default}" required>
       </div>
       <div class="small-2 columns">
          <button class="button postfix nomarg nopad" type="submit" value="{$LANG.common.search}"><svg class="icon"><use xlink:href="#icon-search"></use></svg></button>
       </div>
    </div>
    <input type="hidden" name="_a" value="category">
</form>