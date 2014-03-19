YUI().use('node', 'event', function (Y) {

  var panels = {};

  // Contact Page - Patient Home
  var contact_init = function () {
    panels = {
        'labwork': {'panel':'LBL_DETAILVIEW_PANEL5', 'subpanel':'whole_subpanel_comite_phone_contacts', 'position': 'before'},
        'specialnotes': {'panel':'LBL_DETAILVIEW_PANEL6', 'subpanel':'whole_subpanel_comite_phone_contacts', 'position': 'before'},
        'contact': {'panel':'LBL_CONTACT_INFORMATION', 'subpanel':'whole_subpanel_comite_phone_contacts', 'position': 'before'},
        'emails': {'panel':'LBL_EDITVIEW_PANEL1', 'subpanel':'whole_subpanel_comite_phone_contacts', 'position': 'after'},
//        //'externallinks': {'panel':'LBL_EDITVIEW_PANEL3', 'subpanel':'whole_subpanel_comite_doctorsnote_contacts', 'position': 'after'},
        'office': {'panel':'LBL_EDITVIEW_PANEL4', 'subpanel':'subpanel_list', 'position': 'after'}
    };
    Y.each(panels, function(value,key) {
        new Object(key);
    });
    

    makeInlineEdits('description', 'Contacts');
  };
  YAHOO.util.Event.onAvailable('Contacts_detailview_tabs', contact_init);


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

});