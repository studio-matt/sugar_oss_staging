/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
YAHOO.util.Event.onAvailable('sitemapLinkSpan',function()
{document.getElementById('sitemapLinkSpan').onclick=function()
{ajaxStatus.showStatus(SUGAR.language.get('app_strings','LBL_LOADING_PAGE'));var smMarkup='';var callback={success:function(r){ajaxStatus.hideStatus();document.getElementById('sm_holder').innerHTML=r.responseText;with(document.getElementById('sitemap').style){display="block";position="absolute";right=0;top=80;}
document.getElementById('sitemapClose').onclick=function()
{document.getElementById('sitemap').style.display="none";}}}
postData='module=Home&action=sitemap&GetSiteMap=now&sugar_body_only=true';YAHOO.util.Connect.asyncRequest('POST','index.php',callback,postData);}});function IKEADEBUG()
{var moduleLinks=document.getElementById('moduleList').getElementsByTagName("a");moduleLinkMouseOver=function()
{var matches=/grouptab_([0-9]+)/i.exec(this.id);var tabNum=matches[1];var moduleGroups=document.getElementById('subModuleList').getElementsByTagName("span");for(var i=0;i<moduleGroups.length;i++){if(i==tabNum){moduleGroups[i].className='selected';}
else{moduleGroups[i].className='';}}
var groupList=document.getElementById('moduleList').getElementsByTagName("li");var currentGroupItem=tabNum;for(var i=0;i<groupList.length;i++){var aElem=groupList[i].getElementsByTagName("a")[0];if(aElem==null){continue;}
var classStarter='notC';if(aElem.id=="grouptab_"+tabNum){classStarter='c';currentGroupItem=i;}
var spanTags=groupList[i].getElementsByTagName("span");for(var ii=0;ii<spanTags.length;ii++){if(spanTags[ii].className==null){continue;}
var oldClass=spanTags[ii].className.match(/urrentTab.*/);spanTags[ii].className=classStarter+oldClass;}}
var menuHandle=moduleGroups[tabNum];var parentMenu=groupList[currentGroupItem];if(menuHandle&&parentMenu){updateSubmenuPosition(menuHandle,parentMenu);}};for(var i=0;i<moduleLinks.length;i++){moduleLinks[i].onmouseover=moduleLinkMouseOver;}};function updateSubmenuPosition(menuHandle,parentMenu){var left='';if(left==""){p=parentMenu;var left=0;while(p&&p.tagName.toUpperCase()!='BODY'){left+=p.offsetLeft;p=p.offsetParent;}}
var bw=checkBrowserWidth();if(!parentMenu){return;}
var groupTabLeft=left+(parentMenu.offsetWidth / 2);var subTabHalfLength=0;var children=menuHandle.getElementsByTagName('li');for(var i=0;i<children.length;i++){if(children[i].className=='subTabMore'||children[i].parentNode.className=='cssmenu'){continue;}
subTabHalfLength+=parseInt(children[i].offsetWidth);}
if(subTabHalfLength!=0){subTabHalfLength=subTabHalfLength / 2;}
var totalLengthInTheory=subTabHalfLength+groupTabLeft;if(subTabHalfLength>0&&groupTabLeft>0){if(subTabHalfLength>=groupTabLeft){left=1;}else{left=groupTabLeft-subTabHalfLength;}}
if(totalLengthInTheory>bw){var differ=totalLengthInTheory-bw;left=groupTabLeft-subTabHalfLength-differ-2;}
if(left>=0){menuHandle.style.marginLeft=left+'px';}}
YAHOO.util.Event.onDOMReady(function()
{if(document.getElementById('subModuleList')){var parentMenu=false;var moduleListDom=document.getElementById('moduleList');if(moduleListDom!=null){var parentTabLis=moduleListDom.getElementsByTagName("li");var tabNum=0;for(var ii=0;ii<parentTabLis.length;ii++){var spans=parentTabLis[ii].getElementsByTagName("span");for(var jj=0;jj<spans.length;jj++){if(spans[jj].className.match(/currentTab.*/)){tabNum=ii;}}}
var parentMenu=parentTabLis[tabNum];}
var moduleGroups=document.getElementById('subModuleList').getElementsByTagName("span");for(var i=0;i<moduleGroups.length;i++){if(moduleGroups[i].className.match(/selected/)){tabNum=i;}}
var menuHandle=moduleGroups[tabNum];if(menuHandle&&parentMenu){updateSubmenuPosition(menuHandle,parentMenu);}}});SUGAR.themes=SUGAR.namespace("themes");SUGAR.append(SUGAR.themes,{allMenuBars:{},setModuleTabs:function(html){var el=document.getElementById('ajaxHeader');if(el){try{YAHOO.util.Event.purgeElement(el,true);for(var i in this.allMenuBars){if(this.allMenuBars[i].destroy)
this.allMenuBars[i].destroy();}}catch(e){window.location.reload();}
if(el.hasChildNodes()){while(el.childNodes.length>=1){el.removeChild(el.firstChild);}}
el.innerHTML+=html;this.loadModuleList();}},loadModuleList:function(){var nodes=YAHOO.util.Selector.query('#moduleList>div'),currMenuBar;this.allMenuBars={};for(var i=0;i<nodes.length;i++){currMenuBar=SUGAR.themes.currMenuBar=new YAHOO.widget.MenuBar(nodes[i].id,{autosubmenudisplay:true,visible:false,hidedelay:750,lazyload:true});currMenuBar.render();this.allMenuBars[nodes[i].id.substr(nodes[i].id.indexOf('_')+1)]=currMenuBar;if(typeof YAHOO.util.Dom.getChildren(nodes[i])=='object'&&YAHOO.util.Dom.getChildren(nodes[i]).shift().style.display!='none'){oMenuBar=currMenuBar;}}
YAHOO.util.Event.onAvailable('subModuleList',IKEADEBUG);}});YAHOO.util.Event.onDOMReady(SUGAR.themes.loadModuleList,SUGAR.themes,true);

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});

if(typeof String.prototype.trim !== 'function') {
  String.prototype.trim = function() {
    return this.replace(/(^[\s\xA0]+|[\s\xA0]+$)/g, '');
  }
}
(function ($) {
  if ($) {
    $.escape = function (s) {
      return s.replace(/[!"#$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, '\\$&');
    };
  }
})(window.jQuery);

function sizeof(obj) {
  var s = 0;
  $.each(obj, function(i, elem) {
    s++;
  });
  return s;
}

function showhide(id, suffix) {
  if(typeof suffix == 'undefined') {
      suffix = '1';
  }
  if (document.getElementById(id+suffix).checked==true){
    if (id=="men_medication_enhancementdrugs") {
      document.getElementById("men_medication_howhelp_C").style.display='block';
    }
    document.getElementById(id+"_C").style.display='block';
  } else {
    if (id=="men_medication_enhancementdrugs") {
      document.getElementById("men_medication_howhelp_C").style.display='none';
    }
    document.getElementById(id+"_C").style.display='none';
  }
}

function showhide_cond(id) {
  if (document.getElementById(id+"").checked==true) {
    document.getElementById(id+"_C").style.display='block';
  } else {		
    document.getElementById(id+"_C").style.display='none';
  }
}

function show_hide_select(id, suffix, value, equals_value) {
  if(typeof equals_value == "undefined") {
    equals_value = true;
  }

  div = $('#'+id+'_C');
  select = $('#'+id+suffix);

  if(equals_value) {
    if(select.val() == value) {
      div.show();
    }
    else {
      div.hide();
    }
  } else {
    if(select.val() != value) {
      div.show();
    }
    else {
      div.hide();
    }
  }
}

var FORMS = {
  otherSelect: function(selector, active_class, other_value/*="Other"*/) {
    $(selector).change(function(){
      if ($(this).val() == (other_value ? other_value : 'Other')) {
        $(this).siblings('input').attr('value', '').show().focus();
      } else {
        $(this).siblings('input').attr('value', $(this).val()).hide();
      }
    });
    if (active_class) {
      $(selector).addClass(active_class);
    }
  },
  removeClick: function(selector, active_class, parent_selector, input_selector) {
    $(selector).addClass(active_class).click(function(){
      $(this).parents(parent_selector).hide().find(input_selector).val(1);
      return false;
    });
  },
  clickPreferred: function(selector, active_class, other_selector) {
    $(selector).addClass(active_class).change(function(){
      $(other_selector).each(function(){
        $(this).siblings('input[type=hidden]').val($(this).is(':checked') ? 1 : 0);
      });
    });
  },
  registerBlurListener: function(selector, active_class, key_selector) {
/*
    $(selector).addClass(active_class).blur(function(){
      // @TODO use a data register on each field to track whether or not anything was changed. don't submit if not changed

      // @TODO required validator on required fields, if no value present, don't bother submitting
      // submit this input and it's related inputs at one time
      var data = {};
      var fieldset = $(this).parents('fieldset:first');
      fieldset.removeClass('error').addClass('progress');
      var inputs = fieldset.find('input[name],select[name],textarea[name]');
      inputs.each(function(){
        data[$(this).attr('name')] = $(this).val();
        if (sizeof(data) == inputs.length) {
          data['is_ajax_call'] = 1;
          data[$(key_selector).attr('name')] = $(key_selector).val();

          // @TODO add support for a callback here on the fieldset itself so we can extend
          console.log(data);
//          $.ajax({
//            type: 'POST',
//            url: $('#hla_form form').attr('action'),
//            dataType: 'json',
//            data: data,
//            success: function(response){
//              fieldset.removeClass('progress');
//              if (!response || !response.success || response.errors) {
//                fieldset.addClass('error');
//                alert('There was an error with your information');
//                if (response.errors) {
//                  console.log(response.errors);
//                }
//              }
//            }
//          });
        }
      });
    });
*/
  }
};

$(document).ready(function(){
  if (!$('#hla_form').length) {
    return;
  }
  
  $('#hla_form .alert ul.errors label').click(function(){
    var scrollTo = $('#' + $(this).attr('for'));
    if (scrollTo.is(':hidden')) {
      scrollTo = scrollTo.parents(':not(:hidden):first');
    }
    $(window).scrollTop(Math.round(scrollTo.parents(':not(:hidden):first').offset().top));
    return false;
  });

  var Disease = {
    cssClass: {open: 'ui-icon-triangle-1-s', close: 'ui-icon-triangle-1-e'},
    collapseEmpty: function(hide) {
      $('dl#history dd').each(function(){
        if ($('.error,select:visible', this).length == 0) {
          $(this).prev().find('span').removeClass(Disease.cssClass.open).addClass(Disease.cssClass.close);
          if (hide) {
            $(this).hide();
          } else {
            $(this).slideUp();
          }
        }
      });
    }
  };

  var HLA = {
    progressBarUpdate: function(){
        selected = $('#hla_form .nav ul li.selected');
        step = selected.index() + 1;
        $('#overlay .section').removeClass('on');
        if(step == 6) {
            $('#barin').css('width', '100%');
        } else { 
            $('#barin').css('width', '0%');
        }
        for(var i=1; i<=step; i++) {
            $('#overlay .section:nth-child('+i+')').addClass('on');
        }
    },

    formStepNavigation: function(){
      if ($('#hla_form:not(.activated)').length) {
        $('#hla_form').addClass('activated');
        $('#hla_form .nav li a').click(function(){
            if($('#hla_form .nav ul li.selected').index() == 5) {
                return true;
            }
          // switching pages, submit form first
          $('#hla_form #next').val($(this).attr('href').match(/step=([^&]+)/)[1]);
          $('#hla_form #save_continue').click();
          return false;
        });
      }
    },

    addresshtml: $('<div />').append($("#hla_form #addresses__0:first").clone()).html(),
    phonehtml: $('<div />').append($("#hla_form #phones__0:first").clone()).html(),
    conditioninstancehtml: $('<div />').append($("#hla_form #history .conditioninstance:first").clone()).html(),
    relativehtml: $('<div />').append($("#hla_form #relatives .relative:first").clone()).html(),
    medicationinstancehtml: $('<div />').append($("#hla_form #medicationinstances .medicationinstance:first").clone()).html(),
    supplementinstancehtml: $('<div />').append($("#hla_form #supplementinstances .supplementinstance:first").clone()).html(),

    init: function() {
      HLA.formStepNavigation();

      // HLA Form Salutation
      FORMS.otherSelect('#hla_form select#contact__salutation');

      // HLA Form Age display
      $('#hla_form .contact_birthdate select').change(function(){
        var today = new Date();
        var years = '';
        var months = '';
        if ($('#hla_form #dob_month').val() && $('#hla_form #dob_day').val() && $('#hla_form #dob_year').val()) {
          var birthDate = new Date($('#hla_form #dob_month').val() + '/' + $('#hla_form #dob_day').val() + '/' + $('#hla_form #dob_year').val());
          years = today.getFullYear() - birthDate.getFullYear();
          months = today.getMonth() - birthDate.getMonth();
          if (months < 0) {
            years--;
            months += 12;
          }
          if (years < 0) {
            years = '';
            months = '';
          }
          $('#hla_form #contact__birthdate').val($.datepicker.formatDate('mm/dd/yy', birthDate));
        }
        $('#hla_form #age_years').val(years);
        $('#hla_form #age_months').val(months);
      });
      $('#hla_form .contact_birthdate select').trigger('change');

      // HLA Form height
      $('#hla_form .personal_health_height #height_ft, #hla_form .personal_health_height #height_in').change(function(){
        var height = 0;
        if ($.trim($('#height_ft').val()).match(/^\d+$/)) {
          height += parseInt($('#height_ft').val())*12;
        }
        if ($.trim($('#height_in').val()).match(/^\d+$/)) {
          height += parseInt($('#height_in').val());
        }
        if (height) {
          $('#personal_health__height').val(height);
        } else {
          $('#personal_health__height').val('');
        }
      });

      // add addtional address
      $('#hla_form #additional_addresses').click(function(event){
        var address = $(HLA.addresshtml.replace(/addresses\[0/g, 'addresses['+($('#hla_form .contact_addresses div.address').length)).replace(/addresses__0/g, 'addresses__'+($('#hla_form .contact_addresses div.address').length)));
        address.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        address.find('.address_country select').val('US');
        address.find('label').removeClass('error');

        address.removeClass('activated').find('.activated').removeClass('activated');
        address.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        address.insertBefore($(this).parent()).show();
        HLA.update();
        address.find('.address_type select').val('').trigger('change');
        address.find('.address_country select').val('US').trigger('change');
        address.find('input:first').focus();
        return false;
      });
      // add addtional phones
      $('#hla_form #additional_phones').click(function(event){
        var phone = $(HLA.phonehtml.replace(/phones\[0/g, 'phones['+($('#hla_form .contact_phones div.phone').length)).replace(/phones__0/g, 'phones__'+($('#hla_form .contact_phones div.phone').length)));
        phone.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        phone.find('.phone_country_code select').val(0);
        phone.find('label').removeClass('error');

        phone.removeClass('activated').find('.activated').removeClass('activated');
        phone.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        phone.insertBefore($(this).parent()).show();
        HLA.update();
        phone.find('.phone_type select').val('').trigger('change');
        phone.find('.phone_country select').val(0).trigger('change');
        phone.find('input:first').focus();
        return false;
      });

      // Condition accordion navigation
      $('#hla_form dl#history dt.ui-accordion-header').click(function(){
        if (!$(this).next().is(':visible')) {
          Disease.collapseEmpty();
          $(this).next().slideDown();
          $(this).find('span').addClass(Disease.cssClass.open).removeClass(Disease.cssClass.close);
        }
        return false;
      });
      $('#hla_form dl#history .next').click(function(){
        $(this).closest('dd').next('dt').find('a:first').trigger('click');
      });
      Disease.collapseEmpty(true);

      // add addtional conditions
      $('#hla_form a.additional_conditioninstance:not(.activated)').addClass('activated').click(function(event){
          firstConditionInstance = $(this).closest('dd').find('li.conditioninstance')[0];
          if($(firstConditionInstance).is(':hidden')) {
              $(firstConditionInstance).show();
              $(firstConditionInstance).find('input.conditioninstace_delete').val('');
              return false;
          }
        var conditioninstance = $(HLA.conditioninstancehtml.replace(/conditioninstances\[0/g, 'conditioninstances['+($('#hla_form #history .conditioninstance').length)).replace(/conditioninstances__0/g, 'conditioninstances__'+($('#hla_form #history .conditioninstance').length)));
        conditioninstance.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        conditioninstance.find('label').removeClass('error');
        conditioninstance.find('input.condition_name').val($(this).parent().siblings('ul').attr('id').replace(/condition_/, ''));

        conditioninstance.removeClass('activated').find('.activated').removeClass('activated');
        conditioninstance.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        conditioninstance.appendTo($(this).parent().siblings('.people')).show();
        HLA.update();

        conditioninstance.find('input:first').focus();
        return false;
      });
      
      // add addtional medication instances
      $('#hla_form #additional_medications').click(function(event){
        var medicationinstance = $(HLA.medicationinstancehtml.replace(/medicationinstances\[0/g, 'medicationinstances['+($('#hla_form #medicationinstances .medicationinstance').length)).replace(/medicationinstances__0/g, 'medicationinstances__'+($('#hla_form #medicationinstances .medicationinstance').length)));
        medicationinstance.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        medicationinstance.find('label').removeClass('error');

        medicationinstance.removeClass('activated').find('.activated').removeClass('activated');
        medicationinstance.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        medicationinstance.appendTo($('#medicationinstances table tbody')).show();
        HLA.update();
        medicationinstance.find('input:first').focus();
        return false;
      });

      // add addtional supplement instances
      $('#hla_form #additional_supplements').click(function(event){
        var supplementinstance = $(HLA.supplementinstancehtml.replace(/supplementinstances\[0/g, 'supplementinstances['+($('#hla_form #supplementinstances .supplementinstance').length)).replace(/supplementinstances__0/g, 'supplementinstances__'+($('#hla_form #supplementinstances .supplementinstance').length)));
        supplementinstance.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        supplementinstance.find('label').removeClass('error');

        supplementinstance.removeClass('activated').find('.activated').removeClass('activated');
        supplementinstance.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        supplementinstance.appendTo($('#supplementinstances table tbody')).show();
        HLA.update();
        supplementinstance.find('input:first').focus();
        return false;
      });

      // primary physician phone
      $('#hla_form .physician_phone_office input, #hla_form .physician_fax input').keyup(function(event){
          tel = $(this);
          if(tel.data('last_-') == true && event.which == 8){
              tel.data('no_format_help', true);
          }
          if(tel.data('no_format_help') !== true && (tel.val().length == 3 || tel.val().length == 7) ) {
              tel.val(tel.val()+'-');
              tel.data('last_-', true);
          } else {
              tel.data('last_-', false);
          }
      });

      // add addtional relatives
      $('#hla_form #additional_relatives:not(.activated)').addClass('activated').click(function(event, callback){
        var relative = $(HLA.relativehtml.replace(/relatives\[0/g, 'relatives['+($('#hla_form #relatives .relative').length)).replace(/relatives__0/g, 'relatives__'+($('#hla_form #relatives .relative').length)));
        relative.find('input,select,textarea').val('').removeClass('error').attr('checked', false);
        relative.find('label').removeClass('error');
        relative.find('.condition_name').val($(this).parent().parent().find('.condition_name:first').val());

        relative.removeClass('activated').find('.activated').removeClass('activated');
        relative.removeClass('progressactivated').find('.progressactivated').removeClass('progressactivated');

        relative.insertBefore($(this).parent()).show();
        HLA.update();
        if (callback) {
          callback();
        }
        relative.find('input:first').focus();
        return false;
      });

      // hide/show medications
      $('#medicationinstances__is_no_current_medications').change(function(){
        if ($(this).is(':checked')) {
          $('#medicationinstances').hide().find('.medicationinstance_delete[value!=1]').addClass('delete_because_no_current_medications').val(1);
        } else {
          $('#medicationinstances').show().find('.delete_because_no_current_medications').removeClass('delete_because_no_current_medications').val('');
        }
      });

      // hide/show supplments
      $('#supplementinstances__is_no_current_supplements').change(function(){
        if ($(this).is(':checked')) {
          $('#supplementinstances').hide().find('.supplementinstance_delete[value!=1]').addClass('delete_because_no_current_supplementinstances').val(1);
        } else {
          $('#supplementinstances').show().find('.delete_because_no_current_supplementinstance').removeClass('delete_because_no_current_supplementinstances').val('');
        }
      });

      // show/hide notes for male medical questions
      $('.radio_yesno_more').click(function(){
        if ($(this).val().trim() == '1' || $(this).val().trim().toLowerCase() == 'yes') {
          $(this).parent().parent().find('.radio_yesno_more_content').show();
        } else {
          $(this).parent().parent().find('.radio_yesno_more_content').hide();
        }
      });

      /***************************
       * show/hide div based on checked item.
       * name first class ID# of div to show and name the second class check_showhide
       * I.E. class="blood_transfusion_C check_showhide" the hidden div ID= blood_transfusion_C
       * For inverted make third class = 'inverted'
       ***************************/
      $('.check_showhide').click(function(){
        var daclass = $(this).attr('class').split(' ')[0];
        var inverted = $(this).attr('class').split(' ')[2];
        //if show/hide on "no"
        var y='yes',n='no';
        if(inverted == 'inverted') {
          y='no';
          n='yes';
        }
        if ($('#'+ daclass).is(":visible") && $(this).val().trim().toLowerCase() != y) {
          $('#'+ daclass).hide();
        } else {
          if($(this).val().trim().toLowerCase() != n) {
          $('#'+ daclass).show();
          }
        }
      });

      /***************************
       * show/hide div based on selected item.
       * name class sel_showhide and name the second class the value needed
       * to display the hidden div. I.E. more_than_5 selected show div
       ***************************/
      $('.sel_showhide').change(function(){
        var daclass = $(this).attr('class').split(' ')[0];
        //alert($(this).val() + ' huh ' + daclass);
        if ($(this).val() == daclass) {
          $("div").siblings().find('.sel_showhide_more_content').show();
        } else {
          $("div").siblings().find('.sel_showhide_more_content').hide();
        }
      });

      HLA.update();
    },

    //* gets called on load and re-called on dom changes, use a class to track event listener registration *//
    update: function() {
      HLA.progressBarUpdate();

      // ---- ADDRESSES ---- //
      FORMS.otherSelect('#hla_form .address_type select:not(.activated)', 'activated');
      FORMS.removeClick('#hla_form .address .actionremove:not(.activated)', 'activated', '.address', '.address_delete');
      FORMS.clickPreferred('#hla_form .address_rank input[type=radio]:not(.activated)', 'activated', '#hla_form .address_rank input[type=radio]');
      // HLA Form Address Non-US
      $('#hla_form .address_country select:not(.activated)').addClass('activated').change(function(){
        if ($(this).val() && $(this).val() != 'US') {
          $(this).parents('.address_country').siblings('.address_state').find('select').val('').hide().siblings('input').show().siblings('label').html('Province/Region').parents('.address_state').siblings('.address_postal_code').find('label').html('Postal Code');
        } else {
          $(this).parents('.address_country').siblings('.address_state').find('input').val('').hide().siblings('select').show().siblings('label').html('State').parents('.address_state').siblings('.address_postal_code').find('label').html('Zip Code');
        }
      });

      // ---- PHONES ---- //
      FORMS.otherSelect('#hla_form .phone_type select:not(.activated)', 'activated');
      FORMS.removeClick('#hla_form .phone .actionremove:not(.activated)', 'activated', '.phone', '.phone_delete');
      FORMS.clickPreferred('#hla_form .phone_rank input[type=radio]:not(.activated)', 'activated', '#hla_form .phone_rank input[type=radio]');
      $('#hla_form .phone_line_number input:not(.activated)').addClass('activated').keyup(function(event){
          tel = $(this);
          if(tel.closest('.phone').find('.phone_country_code select').val() != '0') {
              tel.removeAttr('maxlength');
              return;
          }
          tel.attr('maxlength', 12);
          if(tel.val().length == 3 || tel.val().length == 7) {
              tel.val(tel.val()+'-');
          }
      });

      // ---- CONDITIONS ----//
      FORMS.removeClick('#hla_form dl#history li.conditioninstance .actionremove:not(.activated)', 'activated', '.conditioninstance', '.conditioninstace_delete');

      // ---- RELATIVES ---- //
      FORMS.removeClick('#hla_form #relatives .relative .actionremove:not(.activated)', 'activated', '.relative', '.relative_delete');

      $('#hla_form #relatives .relative .relative_relation select:not(.activated)').addClass('activated').change(function(){
        // show/hide name & deceased for relative "self"
        if ($(this).val().trim().toLowerCase() == 'self') {
          $(this).parent().siblings('.relative_name').hide().find('input').val('Self');
          $(this).parent().siblings('.relative_deceased').hide().find('select').val('0');
        } else {
          var i = $(this).parent().siblings('.relative_name').show().find('input');
          if ($(this).val() && (i.val().trim().toLowerCase() == 'self' || !i.val())) {
            i.val($(this).val() + ' ' + $('.relative_relation select option[value="'+$.escape($(this).val())+'"]:selected').length);
          }
        }

        // dropdown option values for health condition relative
        if ($(this).parents('.relative').find('.relative_delete').val() == '1') {
          $('.conditioninstance_relative option[value="' + $(this).parents('.relative').attr('id') + '"]').remove();
        } else {
          var select = this;
          $('.conditioninstance_relative').each(function(){
            if ($('option[value="' + $(select).parents('.relative').attr('id') + '"]', this).length === 0) {
              $('<option></option>').attr('value', $(select).parents('.relative').attr('id')).insertBefore($('.add_other', this));
            }
            // @TODO sort by id?
          });
          $('.conditioninstance_relative option[value="' + $.escape($(this).parents('.relative').attr('id')) + '"]').html($(this).val() + ' - ' + $(this).parents('.relative').find('.relative_name input').val());
        }
      });

      $('#hla_form #relatives .relative .relative_deceased select:not(.activated)').addClass('activated').change(function(){
        if ($(this).val() == '1') {
          $(this).parents('.relative_deceased').siblings('.relative_date_deceased').show().siblings('.relative_deceased_explanation').show();
          $(this).parents('.relative_deceased').siblings('.relative_date_born').hide();
        } else {
          $(this).parents('.relative_deceased').siblings('.relative_date_deceased').hide().siblings('.relative_deceased_explanation').hide();
          $(this).parents('.relative_deceased').siblings('.relative_date_born').show();
        }
      }).trigger('change');

      $('#hla_form #relatives .relative .relative_name input:not(.activated)').addClass('activated').blur(function(){
        $(this).parent().siblings('.relative_relation').find('select').trigger('change');
      });
      $('#hla_form #relatives .relative .actionremove img:not(.activated)').addClass('activated').parent().click(function(){
        $(this).siblings('.relative_relation').find('select').trigger('change');
        $('#hla_form .conditioninstance_relative').trigger('change');
        
      });

      $('#hla_form .conditioninstance_relative:not(.activated)').addClass('activated').change(function(){
        if ($(this).val().trim()) {
          $(this).siblings('.edit_relative').show();
        } else {
          $(this).siblings('.edit_relative').hide();
        }
        if ($('option:selected', this).hasClass('add_other')) {
          var select = this;
          $('#additional_relatives').trigger('click', function(){
            $(select).trigger('doEdit', $('<form class="form-content"></form>').append($('<fieldset><legend>Add Relative</legend></fieldset>').append($('#relatives .relative:last'))));
          });
        }
      }).bind('doEdit', function(event, wrapper, is_edit){
        var select = this;
        var vButtons = {
          "Ok": function() {
            $(wrapper).dialog('close');
          }
        };
        if (!$(wrapper).hasClass('edit')) {
          vButtons.Cancel = function() {
            $(wrapper).find('select,input').val('');
            $(wrapper).dialog('close');
          };
        }
        $(wrapper).dialog({
          modal: true,
          width: 'auto',
          open: function(event, ui) {
            $(this).find('.actionremove').hide();
            $(this).find('.relative_deceased').hide();
          },
          close: function(event, ui) {
            var relative = $(this).find('.relative').insertBefore('#relatives .buttonrow');
            // @TODO sort by id?
            relative.find('.actionremove').show();
            relative.find('.relative_deceased').show();
            relative.find('.relative_relation select').trigger('change');
            if (!$(select).val().trim()) {
              $(select).val(relative.attr('id')).trigger('change');
            }
            if (!relative.find('.relative_relation select[value!=""],relative_name input[value!=""]').length) {
              $('#'+$(select).val()).find('.actionremove').trigger('click');
            }
            return false;
          },
          buttons: vButtons
        });
      }).append('<option value=" " class="add_other">Add New Relative</option>').trigger('change').siblings('.edit_relative').click(function(){
        var select = $(this).siblings('.conditioninstance_relative');
        if (select.val().trim()) {
          $(select).trigger('doEdit', $('<form class="form-content edit"></form>').append($('<fieldset><legend>Edit Relative</legend></fieldset>').append($('#relatives .relative#' + $.escape(select.val())))));
        }
        return false;
      });

      // HLA Form Relative Date Deceased display
      $('#hla_form .relative_date_deceased:not(.activated)').addClass('activated').find('select').change(function(){
        if ($(this).parent().find('.dod_month').val() && $(this).parent().find('.dod_day').val() && $(this).parent().find('.dod_year').val()) {
          var deathDate = new Date($(this).parent().find('.dod_month').val() + '/' + $(this).parent().find('.dod_day').val() + '/' + $(this).parent().find('.dod_year').val());
          $(this).siblings('input').val($.datepicker.formatDate('mm/dd/yy', deathDate));
        }
      });

      $('.relative_relation select').trigger('change');

      // ---- MEDICATIONS ---- //
      FORMS.removeClick('#hla_form #medicationinstances .medicationinstance .actionremove:not(.activated)', 'activated', '.medicationinstance', '.medicationinstance_delete');
      FORMS.otherSelect('#hla_form #medicationinstances .medication_name');

      // ---- SUPPLEMENTS ---- //
      FORMS.removeClick('#hla_form #supplementinstances .supplementinstance .actionremove:not(.activated)', 'activated', '.supplementinstance', '.supplementinstance_delete');
      FORMS.otherSelect('#hla_form #supplementinstances .supplement_name');

      // Register new inputs
      FORMS.registerBlurListener('#hla_form input:not(.ajaxsavelistener), #hla_form select:not(.ajaxsavelistener), #hla_form textarea:not(.ajaxsavelistener)', 'ajaxsavelistener', '#user__record');
    }//HLA.update
  };

  HLA.init();
});//document.ready for #hla_form


/* CLEAN UP PROFILE FORM */
$(document).ready(function(){
    $('input[value="Reset User Preferences"]').remove();
    $('input[value="Reset Homepage"]').remove();
    $('#EditView_tabs > ul > li:nth-child(3), #EditView_tabs > ul > li:nth-child(4),#EditView_tabs > ul > li:nth-child(5)').hide();
    $('h2').remove();
    $('#create_link, #create_image').remove();
    $('#LBL_EMPLOYEE_INFORMATION').hide();
    $('#status_label').hide().next('td').hide();
    $('#UserType_label').hide().next('td').hide();
    $('#contacts_users_1_name_label').hide().next('td').hide();
    $('#restrict_to_ips_c, #restrict_to_ips_c_label').hide();
    $('#email_options').hide();
    $('#bottomLinks a').each(function(){
        if ($(this).attr('onclick').match('print')) {
            $(this).hide();
        }
    });
});
