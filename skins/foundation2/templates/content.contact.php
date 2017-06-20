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
<h2>{$LANG.documents.document_contact}</h2>
<p>{$CONTACT.description}</p>
<form action="{$VAL_SELF}" id="contact_form" method="post">
   <div class="row">
      <div class="small-12 large-8 columns">
         <div class="floater">
            <input type="text" name="contact[name]" id="contact_name" value="{$MESSAGE.name}" required>
            <label for="contact_name">{$LANG.common.name}</label>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="small-12 large-8 columns">
         <div class="floater">
            <input type="text" name="contact[email]" id="contact_email" value="{$MESSAGE.email}">
            <label for="contact_email">{$LANG.common.email}</label>
         </div>
      </div>
   </div>
   {if isset($DEPARTMENTS)}
   <div class="row">
      <div class="small-12 large-8 columns">
         <label for="contact_dept">{$LANG.common.department}</label>
         <select name="contact[dept]" id="contact_dept">
            <option value="">{$LANG.form.please_select}</option>
            {foreach from=$DEPARTMENTS item=dept}
            <option value="{$dept.key}"{$dept.selected}>{$dept.name}</option>
            {/foreach}
         </select>
      </div>
   </div>
   {/if}
   <div class="row">
      <div class="small-12 large-8 columns">
         <div class="floater">
            <input type="text" name="contact[subject]" id="contact_subject" value="{$MESSAGE.subject}">
            <label for="contact_subject">{$LANG.common.subject}</label>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="small-12 large-8 columns">
         <div class="floater">
            <textarea name="contact[enquiry]" id="contact_enquiry" required>{$MESSAGE.enquiry}</textarea>
            <label for="contact_enquiry">{$LANG.common.enquiry}</label>
         </div>
      </div>
   </div>
   {include file='templates/content.recaptcha.php'}
   <input type="submit" class="button g-recaptcha" value="{$LANG.documents.send_message}"{include file='templates/element.recaptcha.invisible.php'}>
</form>
<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>
<div class="hide" id="validate_field_required">{$LANG.form.field_required}</div>