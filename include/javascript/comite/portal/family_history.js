/*
(function($){

  var Disease = {};
  Disease.cssClass = { open: 'ui-icon-triangle-1-s', close: 'ui-icon-triangle-1-e' }
  Disease.expandAll = function() {
    $('dl#history dt span').removeClass(Disease.cssClass.close).addClass(Disease.cssClass.open);
    $('dl#history dd').show();
  };
  Disease.collapseAll = function() {
    $('dl#history dt span').removeClass(Disease.cssClass.open).addClass(Disease.cssClass.close);
    $('dl#history dd').hide();
  };
  Disease.showHide = function(){
    $span = $(this).find('span');
    if($(this).next().is(':visible')) {
      $(this).next().hide();
      $span.removeClass(Disease.cssClass.open);
      $span.addClass(Disease.cssClass.close);
    } else {
      $(this).next().slideDown();
      $span.addClass(Disease.cssClass.open);
      $span.removeClass(Disease.cssClass.close);
    }
  };

  Disease.next = function() {
    $dd = $(this).closest('dd');
    if($dd.find('ul > li').length == 0 && $dd.find('select').val() == '') {
      alert("You must select one option from the list");
      return;
    }
    $dd.prev().find('a').trigger('click');
    $dd.next().find('a').trigger('click');
  }

  var Person = {};
  Person.choices = {
    '' : {
      '': "Add Someone...",
      'n_a': "No One Available",
      'myself': "Myself"
    },
    'Siblings': {
      'new_sister': "New Sister",
      'new_brother': "New Brother"
    },
    'Parents': {
      'mother': "Mother",
      'father': "Father"
    },
    'Grandparents': {
      'maternal_grandmother': "Maternal Grandmother",
      'maternal_grandfather': "Maternal Grandfather",
      'paternal_grandmother': "Paternal Grandmother",
      'paternal_grandfather': "Paternal Grandfather"
    },
    'Extended': {
      'new_female_cousin': "New Female Cousin",
      'new_male_cousin': "New Male Cousin",
      'new_aunt': "New Aunt",
      'new_uncle': "New Uncle"
    }
  };

  Person.addPeople = function() {
    var $select = $(this);
    $.each(Person.choices, function(label,options){
      if(label == 0) {
        $.each(options, function(value, label) {
          $select.append('<option value="'+value+'">'+label+'</option>');
        });
      } else {
        $optgroup = $('<optgroup label="'+label+'" />');
        $.each(options, function(value, label) {
          $optgroup.append('<option value="'+value+'">'+label+'</option>');
        });
        $select.append($optgroup);
      }
    });
  };

  Person.clearPeople = function() {
    var $select = $(this);
    $select.find('optgroup, option').remove();
  };

  Person.change = function() {
    if($(this).val() == 'n_a') {
      return;
    }

    $peopleEffected = $(this).prevAll('.peopleEffected');
    key = $(this).attr('id');
    $selected = $(this).find('option:selected');

    if($selected.val().match(/new_/)) {
      $newSelected = $selected.clone();
      text = $newSelected.text().replace(/New /, '')+' 1';
      value = $newSelected.val().replace(/new_/, '')+' 1';
      $newSelected.val(value).text(text);
      $newSelected.insertAfter($selected);
      $selected = $newSelected;

      $optgroupLabel = $selected.closest('optgroup').attr('label');
      Person.choices[$optgroupLabel][value] = text;

      $('select.peopleAvailable').each(Person.clearPeople);
      $('select.peopleAvailable').each(Person.addPeople);
    }

    $li = $('<li class="person"/>');

    $checkbox = $('<span class="remove"><label title="Are you sure you want to remove '+$selected.text()+'?"><input type="checkbox" checked="checked" value="'+$selected.attr('value')+'" id="'+key+'" /> Remove</label></span>');
    $checkbox.change(Person.remove);
    $li.append($checkbox);	

	$li.append('<label class="name" for="'+key+'">'+$selected.text()+'</label>');
//    $li.append('<label class="notes" for="'+key+'_note">Notes</label>');
    $li.append('<textarea id="'+key+'_note" placeholder="Add notes..."></textarea>');
    
	$peopleEffected.append($li);

    $(this).val("");
  };

  Person.remove = function() {
    $(this).closest('li.person').remove();
  }

  Mortality = {}
  Mortality.selectChange = function() {
    if($(this).val() == 'deceased') {
      $(this).closest('dd').find('.cod').show();
    } else {
      $(this).closest('dd').find('.cod').hide();
    }
  };

  $(function(){
    // History
    $('select.peopleAvailable').each(Person.addPeople);
    $('select.peopleAvailable').change(Person.change);
    $('dl#history dt.ui-accordion-header').click(Disease.showHide);
    $('.next').click(Disease.next);
    $('#expandAll').click(Disease.expandAll);
    $('#collapseAll').click(Disease.collapseAll);
    $('dl#history dt').not(':first').find('a').trigger('click');

    // Mortality
    $('dl#mortality .cod').hide();
    $('dl#mortality select').change(Mortality.selectChange);
  });

})(jQuery);
*/