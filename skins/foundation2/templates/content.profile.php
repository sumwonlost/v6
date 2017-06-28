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

   <h2>{$LANG.account.your_details}</h2>
   <p>{$LANG.account.update_your_details}</p>
   <form action="{$VAL_SELF}" method="post" id="profile_form">
      <div class="row">
         <div class="small-4 columns">
            <div class="floater">
               <input type="text" name="title" id="acc_title" value="{$USER.title}">
               <label for="acc_title" class="show-for-medium-up">{$LANG.user.title} {$LANG.common.optional}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="text" name="first_name" id="acc_first_name" class="required" value="{$USER.first_name}" required>
               <label for="acc_first_name" class="show-for-medium-up">{$LANG.user.name_first}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="text" name="last_name" id="acc_last_name" class="required" value="{$USER.last_name}" required>
               <label for="acc_last_name" class="show-for-medium-up">{$LANG.user.name_last}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="text" name="email" id="acc_email" class="required" value="{$USER.email}" required>
               <label for="acc_email" class="show-for-medium-up">{$LANG.common.email}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="text" name="phone" id="acc_phone" class="required" value="{$USER.phone}" required>
               <label for="acc_phone" class="show-for-medium-up">{$LANG.address.phone}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="text" name="mobile" id="acc_mobile" value="{$USER.mobile}">
               <label for="acc_mobile" class="show-for-medium-up">{$LANG.address.mobile} {$LANG.common.optional}</label>
            </div>
         </div>
      </div>
      {if $ACCOUNT_EXISTS}
      <h2>{$LANG.account.password_change}</h2>
      <p>{$LANG.account.update_your_password}</p>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="password" autocomplete="off" name="passold" id="passold">
               <label for="passold" class="show-for-medium-up">{$LANG.user.password_current}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="password" autocomplete="off" name="passnew" id="passnew">
               <label for="passnew" class="show-for-medium-up">{$LANG.user.password_new}</label>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="small-12 large-8 columns">
            <div class="floater">
               <input type="password" autocomplete="off" name="passconf" id="passconf">
            <label for="passconf" class="show-for-medium-up">{$LANG.user.password_confirm}</label>
            </div>
         </div>
      </div>
      {/if}
      <div class="row">
         <div class="small-12 large-8 columns clearfix">
            <input type="submit" name="update" value="{$LANG.common.update}" class="button">
            <button type="reset" class="button secondary right"><svg class="icon"><use xlink:href="#icon-refresh"></use></svg> {$LANG.common.reset}</button>
         </div>
      </div>
   </form>

<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>
<div class="hide" id="validate_firstname">{$LANG.account.error_firstname_required}</div>
<div class="hide" id="validate_lastname">{$LANG.account.error_lastname_required}</div>
<div class="hide" id="validate_phone">{$LANG.account.error_valid_phone}</div>
<div class="hide" id="validate_mobile">{$LANG.account.error_valid_mobile_phone}</div>
<div class="hide" id="validate_password_mismatch">{$LANG.account.error_password_mismatch}</div>
<div class="hide" id="validate_password_length">{$LANG.account.error_password_length}</div>