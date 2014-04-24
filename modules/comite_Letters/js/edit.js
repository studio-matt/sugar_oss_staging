$(document).ready(function(){
    $('.pdf .editable').each(function(){
        $('<input type="hidden" />').attr('id', 'var-' + $(this).attr('data-var')).attr('name', 'VARS[' + $(this).attr('data-var') + ']').val($(this).html()).appendTo('#letter');
        $(this).editable(function(value, settings) {
            $('#letter').find('#var-' + $(this).attr('data-var')).val(value);
            return(value);
         }, { 
            type: 'textarea',
            submit: 'OK',
            onblur: 'submit',
            placeholder: '<span class="placeholder">[click to edit]</span>'
        });
    });
});