// Dropdown 
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});

elemsSidenav = document.querySelectorAll(".sidenav");
const instacesSidenav = M.Sidenav.init(elemsSidenav);

elemsCollapsible = document.querySelectorAll(".collapsible");
const instancesCollapsible = M.Collapsible.init(elemsCollapsible);

$(document).ready(function(){
    $('.collapsible').collapsible();
});


    $('#slider').nivoSlider();


const elemsModal = document.querySelectorAll(".modal");
const instacesModal = M.Modal.init(elemsModal);

function onlynumber(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    //var regex = /^[0-9.,]+$/;
    var regex = /^[0-9.]+$/;
    if( !regex.test(key) ) {
       theEvent.returnValue = false;
       if(theEvent.preventDefault) theEvent.preventDefault();
    }
 }

    const elemsSelect = document.querySelectorAll('select');
    const instancesSelect = M.FormSelect.init(elemsSelect);

    const elemsText = document.querySelectorAll('textarea#desc');
    const instancesText = M.characterCounter.init(elemsText);
  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

  $(document).ready(function() {
    $('textarea#desc').characterCounter();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });

  const elemsTool = document.querySelectorAll('.tooltipped');
  const instancesTool = M.Tooltip.init(elemsTool);

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  const elemsPicker = document.querySelectorAll('.datepicker');
  const instancesPicker = M.Datepicker.init(elemsPicker);

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
