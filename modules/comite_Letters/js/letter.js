// Make the h2 image on patient subpages a back to patient rather than to object list
YUI().use('node', 'event', function(Y) {
  var submit = function(e) {
    
    Y.one("#subject").set('value', Y.one('#LetterSubject').all('p.control').unwrap().get('innerHTML'));
    Y.one("#body").set('value', Y.one('#LetterBody').get('innerHTML'));
  };
  form = Y.one("form#letter");
  form.on('submit', submit);
});