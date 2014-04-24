<script type="text/javascript" src="{sugar_getjspath file='include/javascript/comite/portal/family_history.js'}"></script>

<div id="hla_form" class="form-wrapper">
  <h1>Health &amp; Lifestyle Assessment Form (HLA)</h1>

  <div class="nav">
    <ul>
{php}
$this->assign('IDX', 0);
{/php}
{foreach from=$STEPS key=KEY item=VALUE}
  {php}
  $this->assign('IDX', $this->get_template_vars('IDX')+1);
  {/php}
      <li{if $STEP == $KEY} class="selected"{/if}><a href="index.php?module=comite_Portal&action=hla&step={$KEY}"><span>{$IDX}</span> {$VALUE}</a></li>
{/foreach}
    </ul>
  </div>

  <div class="form-content">
    <form id="main_form" action="index.php?module=comite_Portal&action=hla&step={$STEP}" method="post">
      <input type="hidden" name="next" id="next" value="{$NEXT}" />
      <input type="hidden" name="user__record" id="user__record" value="{$FORM->user->id}" />
      <div class="step" id="step_{$STEP}">

        {$FORM_CONTENT}

        <div class="buttonrow">
          <input type="submit" name="submit" id="save_logout" value="Save &amp; Logout"/>
          {if $STEP != 'hla_complete'}
          <input type="submit" name="submit" id="save" value="Save" style="display: none;"/>
          <input type="submit" name="submit" id="save_continue" value="Save &amp; Continue to the Next Step &rarr;"/>
          {/if}
        </div>
      </div>
    </form>
  </div><!-- /form-content -->

  <div class="sidebar">
    <div class="fixed">

      <p class="req"><em>*</em> Indicates required fields</p>

      <hr />

      <p>Please remember to click on Save & Logout if you need to resume the questionnaire at a later time,
      to ensure that all the information you have filled out will save properly.</p>

      <hr />

      <p>Progress<br />
        <div id="progressbar">
            <div id="barin">&nbsp;</div>
            <div id="overlay">
                <div class="section">&nbsp;</div>
                <div class="section">&nbsp;</div>
                <div class="section">&nbsp;</div>
                <div class="section">&nbsp;</div>
                <div class="section">&nbsp;</div>
                <div class="section">&nbsp;</div>
            </div>
        </div>
      </p>

      <p>
        <a href="#" class="button" onclick="javascript:document.getElementById('save').click(); return false;">Save</a>
        <a href="#" class="button" onclick="javascript:document.getElementById('save_logout').click(); return false;">Save &amp; Logout</a>
      </p>

    </div><!-- /fixed -->
  </div><!-- /sidebar -->

</div><!-- /stage -->


<script type="text/javascript"><!--
{literal}
(function($){
    $.fn.enterAsTab = function(options){
        var settings = $.extend({
            'allowSubmit': false
        }, options);
        this.find('input, select').live('keypress', {localSettings: settings}, function(event) {
            if (settings.allowSubmit && $(this).attr('type') == 'submit') {
                return true;
            }
            if (event.keyCode == 13) {
                var inputs =   $(this).parents('form').eq(0).find(':input:visible:not(disabled):not([readonly])');
                var idx = inputs.index(this);
                if (idx == inputs.length - 1) {
                    idx = -1;
                } else {
                    inputs[idx + 1].focus(); // handles submit buttons
                }
                try {
                    inputs[idx + 1].select();
                } catch(err) {
                    // handle objects not offering select
                }
                return false;
            }
        });
        return this;
    };
})(jQuery);
$('#hla_form form').enterAsTab();
{/literal}
//-->
</script>