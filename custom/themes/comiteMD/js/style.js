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

function onAvailableRepeatedly(id, callback) {
    var exists = [];
    if ($('#' + id).length) {
        callback();
    }
    exists[id] = true;
    setInterval(function(){
        if (exists[id] && !$('#' + id).length) {
            exists[id] = false;
            YAHOO.util.Event.purgeElement(id);
            YAHOO.util.Event.onAvailable(id, function(){
                exists[id] = true;
                callback();
            });
        }
    }, 250);
}
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}
function eraseCookie(name) {
    createCookie(name, "", -1);
}

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
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c;})(window.console=window.console||{});

function showSubPanel_static(child_field)
{
    var subpanel = document.getElementById('subpanel_'+child_field);
    subpanel.style.display = '';

    set_div_cookie(subpanel.cookie_name, '');
}

// Move Detail blocks above their subpanels
YUI({base:'include/javascript/yui3/build/'}).use('node', 'event', function (Y) {

  var panels = {};

  // Personal Health History
  function personal_init() {
    panels = {
      'exposures': {'panel':'LBL_EDITVIEW_PANEL2', 'subpanel':'whole_subpanel_comite_exposureinstance_comite_personalhealthhistory', 'position': 'after'},
      'diagnostics': {'panel':'LBL_EDITVIEW_PANEL3', 'subpanel':'whole_subpanel_comite_diagnosticinstance_comite_personalhealthhistory', 'position': 'after'},
      'medications': {'panel':'LBL_EDITVIEW_PANEL1', 'subpanel':'whole_subpanel_comite_reviewoverallhealth_comite_personalhealthhistory', 'position': 'before'},
      'office': {'panel':'LBL_EDITVIEW_PANEL4', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
      var obj = new Object(key);
    });
  }
  YAHOO.util.Event.onAvailable('comite_PersonalHealthHistory_detailview_tabs', personal_init);


  // Family Health History
  // @TODO

  // LifeStyle Panels
  function lifestyle_init() {
    panels = {
      'substance': {'panel':'LBL_EDITVIEW_PANEL1', 'subpanel':'whole_subpanel_comite_substanceuseinstance_comite_lifestyle'},
      'sleep': {'panel':'LBL_EDITVIEW_PANEL3', 'subpanel':'whole_subpanel_comite_sleepconditioninstance_comite_lifestyle'},
      'stress': {'panel':'LBL_EDITVIEW_PANEL2', 'subpanel':'whole_subpanel_comite_workfeelinginstance_comite_lifestyle', 'position': 'after'},
      'office': {'panel':'LBL_EDITVIEW_PANEL4', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
      var obj = new Object(key);
    });
  }
  YAHOO.util.Event.onAvailable('comite_LifeStyle_detailview_tabs', lifestyle_init);

  // Nutirtion & Exercise
  function nutrition_init() {
    panels = {
        'injury': {'panel':'LBL_EDITVIEW_PANEL4', 'subpanel':'whole_subpanel_comite_exercisesummary_comite_nutritionexercise', 'position': 'after'},
        'beverage': {'panel':'LBL_EDITVIEW_PANEL1', 'subpanel':'whole_subpanel_comite_nutrionalsummary_comite_nutritionexercise', 'position': 'after'},
        'intakedetail': {'panel':'LBL_EDITVIEW_PANEL3', 'subpanel':'whole_subpanel_comite_nutritionalintake_comite_nutritionexercise', 'position': 'after'},
        'office': {'panel':'LBL_EDITVIEW_PANEL5', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
      var obj = new Object(key);
    });
  }
  YAHOO.util.Event.onAvailable('comite_NutritionExercise_detailview_tabs', nutrition_init);

  // Physical Exam
  function physicalexam_init() {
    panels = {
      'office': {'panel':'LBL_EDITVIEW_PANEL2', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
      var obj = new Object(key);
    });
  }
  YAHOO.util.Event.onAvailable('comite_FamilyHealthHistory_detailview_tabs', physicalexam_init);

  // Family Health History
  function healthhistory_init() {
    panels = {
      'office': {'panel':'LBL_EDITVIEW_PANEL1', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
      var obj = new Object(key);
    });
  }
  YAHOO.util.Event.onAvailable('comite_HealthTest_detailview_tabs', healthhistory_init);

    // Functions
  function Object(key) {
    if (panels[key] == undefined) {
      console.log('Missing panel: ' + key);
    } else {
      YAHOO.util.Event.onAvailable(panels[key].subpanel, this.handleOnAvailable, {me:this, key:key});
    }
  }

  Object.prototype.handleOnAvailable = function(passed) {
    me = passed.me;
    key = passed.key;
    if (panels[key] == undefined) {
    } else {
      panel = Y.one('#'+panels[key].panel);
      if(typeof panels[key].position == "undefined" || panels[key].position == "before") {
        position = 'before';
        Y.one(this).prepend(panel);
      } else {
        position = 'after';
        Y.one(this).append(panel);
      }
    }
  };
  
  birthdate_init = function() {
      fixBirthdate($('#birthdate'));
  };
  //YAHOO.util.Event.onAvailable('birthdate', birthdate_init);
  onAvailableRepeatedly('birthdate', birthdate_init);

  birthdateLabel_init = function(){
      fixBirthdate($(this).parent('td').next('td').find('span'));
  };
  //YAHOO.util.Event.onAvailable('birthdateLabel', birthdateLabel_init);
  onAvailableRepeatedly('birthdate', birthdateLabel_init);
});



/**
 * Change the look and feel of doctors notes
 */
YUI({base:'include/javascript/yui3/build/'}).use('node', 'event', function (Y) {

  panel_init = function() {
    var a = $('#DoctorNotesButtons').find('a:eq(0)');

    // open previously opened tab if we left and returned to this record
    var record = readCookie('drnotetab_record');
    var tab_id = readCookie('drnotetab_id');
    if (record === $('input[name=record]:first').val() && tab_id.length && $('#DoctorNotesButtons a[href=#' + tab_id + ']').length) {
      a = $('#DoctorNotesButtons a[href=#' + tab_id + ']');
    }

    var id = a.attr('href').replace('#','');

    hideMainTitles();
    fixBirthdate($('#detailpanel_1 > tbody > tr td:nth-child(4) #comite_doctorsnote_contactscontacts_ida'));
    makeInlineEdits('introduction');
    makeInlineEdits('additional_notes');
    makeInlineEdits('description');
    if ($('#finalized').is(':checked')) {
        $('.HLAGroup form, .HLAGroup .buttons input, #subpanel_list form, #subpanel_list .buttons input').hide();
        $('.HLAGroup .listViewTdToolsS1').hide();
    }
    setTimeout(function(){
        var $ul = $('body > ul#subpanel_list:empty').hide().append($('body > li.noBullet'));
        $('#DoctorNotesButtons').after($('body > div.HLAGroup')).after($ul);
        doctorsNoteShowHide(a, id);
    }, 500);
  };
  YAHOO.util.Event.onAvailable('DoctorNotesButtons', panel_init);
});

var makeInlineEdits = function(field, module) {
    if(arguments.length == 1) {
        module = 'comite_DoctorsNote';
    }
    var span = $('#'+field);
    var cssMouseEnter = {
            background: '#FFFFCC',
            display: 'block',
            cursor:  'pointer'
        };
    var cssMouseLeave = {
            background: 'transparent',
            display: 'auto',
            width:   'auto',
            height:  'auto',
            cursor:  'auto'
        };
    $(document).on('mouseenter', 'span'+span.selector, function(){
        $(this).css(cssMouseEnter);
    });
    $(document).on('mouseleave', 'span'+span.selector, function() {
        if($(this).text > 20) {
            $(this).css(cssMouseLeave);
        } else {
            $(this).css({background: 'transparent', cursor: 'auto'});
        }
    });

    if($('span'+span.selector).text().length < 20) {
        $('span'+span.selector).css({display: 'block', height: '20px', width: '100%;'});
    }
    $(document).on('click', 'span'+span.selector, function() {
        $this = $(this);
        var input = $('<textarea id="'+field+'" cols="100" rows="5"/>')
            .val($this.text())
            .blur(function(){
                $this = $(this);

                var id=$('form[name="DetailView"] input[name="record"]').val();
                data = {
                    module: module,
                    action: 'Save',
                    record: id
                };
                data[field] = $this.val();
                $this.attr('disabled', 'disabled').css({background: '#D6C485'});
                // Submit form
                $.post('index.php', data, function() {
                    if(span.text().length > 20) { 
                        span.text($this.val()).css(cssMouseLeave);
                    } else {
                        span.text($this.val()).css({background: 'transparent', cursor: 'auto'});
                    }
                    $this.replaceWith(span);
                });
            });
        ;
        $this.replaceWith(input);
        input.focus();

    });
};

var fixBirthdate = function(birthdate) {
    if(birthdate.parent('a').length == 1) {
        birthdate.unwrap('a');
    }
    date = new Date(birthdate.text());
    diff = new Date - date;
    var diffdays = diff / 1000 / (60 * 60 * 24);
    var age = Math.floor(diffdays / 365.25);
    birthdate.text(date.getMonth()+1+'/'+date.getDate()+'/'+date.getFullYear()+' ( Age: '+age+' )');
};
var hideMainTitles = function() {
//  $('div#Dr_PersonalHealth_Sub #subpanel_title_comite_medsuppinst_comite_personalhealthhistory').hide();
//  $('div#Dr_Demographics_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_FamilyHealth_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_PersonalHealth_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_Lifestyle_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_NutritionExercise_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_PharmacyLog_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
//  $('div#Dr_DrNotesNutritionExercise_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
};

function doctorsNoteShowHide(a, id) {
    
    // Hide Everything
    $('div.HLAGroup').hide();

    // remember opened tab if we return to this record
    createCookie('drnotetab_record', $('input[name=record]:first').val());
    createCookie('drnotetab_id', id);

    switch(id) {
        case 'Dr_Labs_Sub':
            break;
        case 'Dr_Health_History_Sub':
            $('#Dr_FamilyHealth_Sub').show();
            $('#Dr_FamilyHealth_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('#list_subpanel_comite_medsuppinst_comite_personalhealthhistory').hide();
            $('#Dr_FamilyHealth_Sub #subpanel_comite_lifestyle').hide();
            // Renable full pane
            $('#Dr_PersonalHealth_Sub').show();
            $('#Dr_PersonalHealth_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').show();
            $('#Dr_PersonalHealth_Sub #subpanel_comite_lifestyle').show();
            $('#Dr_PersonalHealth_Sub ul#subpanel_list li').show();
            $('#Dr_PersonalHealth_Sub #whole_subpanel_comite_medsuppinst_comite_personalhealthhistory').hide();
            $('#Dr_Demographics_Sub div#LBL_EDITVIEW_PANEL2').insertAfter('#Dr_PersonalHealth_Sub #whole_subpanel_comite_exposureinstance_comite_personalhealthhistory').show();
            break;
        case 'Dr_Lifestyle_Fitness_Sub':
            $('#Dr_Lifestyle_Sub').show();
            $('#Dr_NutritionExercise_Sub').show();
            break;
        case 'Dr_Nutrition_Exercise_Sub':
            $('#Dr_DrNotesNutritionExercise_Sub').show();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_comite_lifestyle').hide();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_list li#whole_subpanel_comite_physicalexam_comite_drnotesnutritionexercise').hide();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_list li:not(#whole_subpanel_comite_physicalexam_comite_drnotesnutritionexercise)').show();
            break;
        case 'Dr_Consults_Diagnostics_Sub':
            $('#Dr_DrNotesNutritionExercise_Sub').show();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('#subpanel_comite_lifestyle').hide();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_list li#whole_subpanel_comite_physicalexam_comite_drnotesnutritionexercise').show();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_list li:not(#whole_subpanel_comite_physicalexam_comite_drnotesnutritionexercise)').hide();
            $('#Dr_DrNotesNutritionExercise_Sub #subpanel_comite_lifestyle').hide();
            $('#Dr_Demographics_Sub').show().find('> div').hide().siblings('ul').find('li').hide();
            $('div#Dr_Demographics_Sub ul#subpanel_list #LBL_EDITVIEW_PANEL1').hide();
            $('#whole_subpanel_history').hide();
            $('.subpanelTablist').hide();
            $('#Dr_Demographics_Sub div#LBL_EDITVIEW_PANEL2').hide();
            $('div#Dr_Demographics_Sub ul#subpanel_list li').hide();
            $('div#Dr_Demographics_Sub #whole_subpanel_comite_episodicnote_contacts').hide();
            $('div#Dr_Demographics_Sub #whole_subpanel_activities').hide();
            $('div#Dr_Demographics_Sub #whole_subpanel_comite_doctorsnote_contacts').hide();
            $('#whole_subpanel_comite_impression_contacts').show(); 
            $('#whole_subpanel_documents').show();
            
            break;
        case 'Dr_PharmacyLog_Sub':
            $('#Dr_PharmacyLog_Sub').show();
            $('#Dr_PharmacyLog_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('#Dr_PharmacyLog_Sub #subpanel_comite_lifestyle').hide();
            $('#whole_subpanel_comite_pharmacylog_contacts').hide();
            break;
        case 'Dr_Plan_Sub':
            $('#Dr_Demographics_Sub').show().siblings('.HLAGroup').hide();
            $('#Dr_Demographics_Sub').show().find('> div').show().siblings('ul').find('li').show();
            $('#Dr_Demographics_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('div#Dr_Demographics_Sub #subpanel_comite_lifestyle').hide();
            // Plan Only Stuff
            $('div#Dr_Demographics_Sub ul#subpanel_list li').hide();
            $('div#Dr_Demographics_Sub #whole_subpanel_comite_episodicnote_contacts').show();
            $('div#Dr_Demographics_Sub #whole_subpanel_activities').show();
            $('div#Dr_Demographics_Sub #whole_subpanel_comite_doctorsnote_contacts').show();
            $('div#Dr_Demographics_Sub ul#subpanel_list #LBL_EDITVIEW_PANEL1').hide();
            $('#whole_subpanel_history').show();
            $('#Dr_Demographics_Sub div#LBL_EDITVIEW_PANEL2').hide();
            break;
        case 'Dr_Med_Table_Sub':
        default:
            $('#list_subpanel_comite_medsuppinst_comite_personalhealthhistory').show();
            $('#Dr_PersonalHealth_Sub').show().siblings('.HLAGroup').hide();
            $('#Dr_PersonalHealth_Sub #subpanel_title_comite_angryreactioninstance_comite_lifestyle').hide();
            $('#Dr_PersonalHealth_Sub #subpanel_comite_lifestyle').show();
            // Hide everything except medtable
            //
            $('#Dr_PersonalHealth_Sub #subpanel_comite_lifestyle').hide();
            $('#Dr_PersonalHealth_Sub #LBL_EDITVIEW_PANEL2').hide();
            $('#Dr_PersonalHealth_Sub ul#subpanel_list li').hide();
            $('#Dr_PersonalHealth_Sub #whole_subpanel_comite_medsuppinst_comite_personalhealthhistory').show();
            break;
    }
    
  // not sure why, but on non-ajax view, this gets mixed up
  if ($('#subpanel_list:empty').length) {
      $('#subpanel_list:empty').addClass('fixingsubpanel');
      if ($('#whole_subpanel_comite_exposureinstance_comite_personalhealthhistory').parent().attr('id') !== 'subpanel_list') {
          $('#subpanel_list.fixingsubpanel').append($('#whole_subpanel_comite_exposureinstance_comite_personalhealthhistory').siblings('li'));
          $('#subpanel_list.fixingsubpanel').prepend($('#whole_subpanel_comite_exposureinstance_comite_personalhealthhistory'));
          $('#Dr_PersonalHealth_Sub').append($('#subpanel_list.fixingsubpanel'));
      }
  }

  $(a).closest('li').addClass('active').siblings('li').removeClass('active');
  return false;
}

/**
 * Manage Meetings for Plans and Labs
 */ 
YUI({base:'include/javascript/yui3/build/'}).use('node', 'event', 'io-base', 'json-stringify', 'querystring-stringify-simple', function (Y) {

  var panels = {
    'specialty' : 'LBL_EDITVIEW_PANEL2',
    'test'     : 'LBL_EDITVIEW_PANEL3',
    'study'   : 'LBL_EDITVIEW_PANEL4',
    'misc'      : 'LBL_EDITVIEW_PANEL5',
    'misc-call' : 'LBL_EDITVIEW_PANEL6'
  };

  
  meeting_plan_init = function() {
	  
    hideAllPanels();
    
    var plantype = '';
    plantype = Y.one('#plan_type_c').get('value');
    if(plantype != ''){
    	selected = plantype;
        hideAllPanels();
        Y.one('#plan_type_c').ancestor('div#LBL_EDITVIEW_PANEL1').siblings('#'+panels[selected]).setStyle('display', 'block');
        
        var formName = 'EditView';
      	var formType = Y.one('#plan_type_c').get('form').get('attributes');
      	formType.each(function(childNode){
      		if(childNode.get('nodeName') == 'name'){
      			formName = childNode.get('nodeValue');
      		}
      	});
        if(selected == 'misc')
    	{
    		document.getElementById('name_label').innerHTML = '<label for="name">Misc Recommendation:</label><span class="required">*</span>';
    		addToValidate(formName, 'name', 'name', true,'Misc Recommendation' );
    	}else if(selected == 'specialty')
    	{
    		document.getElementById('name_label').innerHTML = '<label for="name">Specialty Procedure Name:</label><span class="required">*</span>';
    		addToValidate(formName, 'name', 'name', true,'Specialty Procedure Name' );
    	}else
    	{
    		document.getElementById('name_label').innerHTML = '<label for="name">Subject:</label><span class="required">*</span>';
    		addToValidate(formName, 'name', 'name', true,'Subject' );
    	}
    }  
    
    if(plantype != ''){
	    Y.one('#'+formName).on('blur', function(e){
	    	selected = Y.one('#plan_type_c').get('value');
	        if(selected == 'misc')
	    	{
	        	removeFromValidate(formName, 'name');
	    		addToValidate(formName, 'name', 'name', true,'Misc Recommendation' );
	    	}else if(selected == 'specialty')
	    	{
	    		removeFromValidate(formName, 'name');
	    		addToValidate(formName, 'name', 'name', true,'Specialty Procedure Name' );
	    	}
	    });
    }
    
      
    Y.one('#plan_type_c').on('change', function(e){
      selected = this.get('value');
      hideAllPanels();
      Y.one('#plan_type_c').ancestor('div#LBL_EDITVIEW_PANEL1').siblings('#'+panels[selected]).setStyle('display', 'block');
      	var formName = 'EditView';
      	var formType = this.get('form').get('attributes');
      	formType.each(function(childNode){
      		if(childNode.get('nodeName') == 'name'){
      			formName = childNode.get('nodeValue');
      			//console.log(formName);
      		}
      	});
    	if(selected == 'misc')
    	{
    		clear_all_errors();
    		document.getElementById('name_label').innerHTML = '<label for="name">Misc Recommendation:</label><span class="required">*</span>';
    		removeFromValidate(formName, 'name');
    		addToValidate(formName, 'name', 'name', true,'Misc Recommendation' );
    	}else if(selected == 'specialty')
    	{
    		clear_all_errors();
    		document.getElementById('name_label').innerHTML = '<label for="name">Specialty Procedure Name:</label><span class="required">*</span>';
    		removeFromValidate(formName, 'name');
    		addToValidate(formName, 'name', 'name', true,'Specialty Procedure Name' );
    	}else
    	{
    		clear_all_errors();
    		document.getElementById('name_label').innerHTML = '<label for="name">Subject:</label><span class="required">*</span>';
    		removeFromValidate(formName, 'name');
    		addToValidate(formName, 'name', 'name', true,'Subject' );
    	}
    });

    
    var specialty_type = '';
    specialty_type = Y.one('#specialty_type_c').get('value');
    if(specialty_type != ''){
		selected = specialty_type;
		if(selected == 'other') {
	        currentTr = this.ancestor('tr');
	        newTr = Y.Node.create('<tr id="specialty_other_new"><td><label for="other_new">Name</label></td><td><input type="text" /></td></td>');
	        currentTr.insert(newTr, 'after');
	     } else {
	        miscOtherNew = Y.one('#specialty_other_new');
	        if(miscOtherNew) {
	          miscOtherNew.remove();
	        }
	     }
    }
    
    // Handle Specialty
    Y.one('#specialty_type_c').on('change', function(e){
      selected = this.get('value');
      if(selected == 'other') {
        currentTr = this.ancestor('tr');
        newTr = Y.Node.create('<tr id="specialty_other_new"><td><label for="other_new">Name</label></td><td><input type="text" /></td></td>');
        currentTr.insert(newTr, 'after');
      } else {
        miscOtherNew = Y.one('#specialty_other_new');
        if(miscOtherNew) {
          miscOtherNew.remove();
        }
      }
    });

    // Handle Test
    Y.one('#tests_test_c').on('change', showOtherOptionField, null, 'tests_test_list');

    // Handle Study
    Y.one('#studies_study_c').on('change', showOtherOptionField, null, 'studies_study_list');

    // Handle Misc
    Y.one('#misc_type_c').on('change', showOtherOptionField, null, 'misc_type_list');

  };



  var hideAllPanels = function() {
     Y.each(panels, function(item, index, array) {
      Y.one('#plan_type_c').ancestor('div#LBL_EDITVIEW_PANEL1').siblings('#'+item).setStyle('display', 'none');
    });
  };

  var showOtherOptionField = function(e, sugar_drop_down_list_name){
    selected = this.get('value');

    if(selected == 'call_list') {
      Y.one('#plan_type_c').ancestor('div#LBL_EDITVIEW_PANEL1').siblings('#'+panels['misc-call']).setStyle('display', 'block');
    } else {
      Y.one('#plan_type_c').ancestor('div#LBL_EDITVIEW_PANEL1').siblings('#'+panels['misc-call']).setStyle('display', 'none');
    }

    if(selected == 'other') {
      currentTr = this.ancestor('tr');
      newTr = Y.Node.create('<tr id="other_creator">'
        +'<td>'
        +'<label for="new_option_name">Name</label>'
        +'</td><td>'
        +'<input type="text" id="new_option_name" />'
        +'<input id="new_option_name_add" type="button" value="Add" />'
        +'</td></tr>');
      currentTr.insert(newTr, 'after');
      Y.one('#new_option_name_add').on('click', createDropDownAndUse, null,
        Y.one('#new_option_name'),
        Y.one('#other_creator'),
        this,
        sugar_drop_down_list_name
      );
    } else {
      miscOtherNew = Y.one('#other_creator');
      if(miscOtherNew) {
        miscOtherNew.remove();
      }
    }
  };

  createDropDownAndUse = function(e, otherField, tr, dropDown, drop_down_name) {
    display = otherField.get('value');
    value = display.toLowerCase().replace(/[^a-zA-Z0-9]+/g, '_');

    var list_values = [];
    dropDown.all('option').each(function(obj){
      list_values.push([obj.get('value'), obj.get('text')]);
    });

    list_values.push([value, display]);
    list_values = Y.JSON.stringify(list_values);

    var formData = {
      module: 'ModuleBuilder',
      action: 'savedropdown',
      to_pdf: 'true',
      view_module: '',
      view_package: 'studio',
      list_value: list_values,
      dropdown_name: drop_down_name,
      dropdown_lang: 'en_us',
      drop_name: '',
      drop_value: ''
    };

    var cfg = {
      method: "POST",
      data: formData,
      headers: { 'X-Transaction': 'POST Example'}
    };
    var sUrl = "index.php?to_pdf=1&sugar_body_only=1";
    var handleSuccess = function(ioId, o){
            Y.log(arguments);
            Y.log("The success handler was called.  Id: " + ioId + ".", "info", "example");

            if(o.responseText !== undefined){
                    var s = "<li>Transaction id: " + ioId + "</li>";
                    s += "<li>HTTP status: " + o.status + "</li>";
                    s += "<li>Status code message: " + o.statusText + "</li>";
                    s += "<li>HTTP headers received: <ul>" + o.getAllResponseHeaders() + "</ul></li>";
                    s += "<li>PHP response: " + o.responseText + "</li>";
            }
    };

    //A function handler to use for failed requests:
    var handleFailure = function(ioId, o){
            Y.log("The failure handler was called.  Id: " + ioId + ".", "info", "example");

            if(o.responseText !== undefined){
                    var s = "<li>Transaction id: " + ioId + "</li>";
                    s += "<li>HTTP status: " + o.status + "</li>";
                    s += "<li>Status code message: " + o.statusText + "</li>";
            }
    };

    //Subscribe our handlers to IO's global custom events:
    Y.on('io:success', handleSuccess);
    Y.on('io:failure', handleFailure);
    var request = Y.io(sUrl, cfg);

    dropDown.append('<option selected="selected" value="'+value+'">'+display+'</option>');
    tr.remove();
  };

  //YAHOO.util.Event.onAvailable('plan_type_c', meeting_plan_init);
  onAvailableRepeatedly('plan_type_c', meeting_plan_init);
});

/**
 * Make the h2 image on patient subpages a back to patient rather than to object list
 */
YUI({base:'include/javascript/yui3/build/'}).use('node', function(Y) {
  var fix_sub_page = function() {
    patient_href = Y.one(this).ancestor('a').get('href');
    Y.one('h2 > a').set('href', patient_href);
  };

  var patient_elements = [
    'comite_familyhealthhistory_contactscontacts_idb',
    'comite_lifestyle_contactscontacts_idb',
    'comite_pharmacylog_contactscontacts_idb',
    'comite_personalhealthhistory_contactscontacts_idb',
    'comite_nutritionexercise_contactscontacts_idb',
    'comite_healthtest_contactscontacts_idb'
  ];
  YAHOO.util.Event.onAvailable(patient_elements, fix_sub_page);
});
