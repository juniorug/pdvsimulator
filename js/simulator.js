function writeNumber(number, msgID) {
    document.getElementById(msgID).focus();
    var field = document.getElementById(msgID).value;
    var conc;
    if (number == '-1') {
        conc = field.substring(0, field.length - 1);
    } else {
        conc = field.concat(number);
    }

    document.getElementById(msgID).innerHTML = conc;
    document.getElementById(msgID).value = conc;
}

function saveValue(msgID, divToShow, divTohide) {   
   
   $('<form>').attr({ method: 'POST', action: '', })
    .append($('<input>').attr({ type: 'hidden', name: 'msg', value: document.getElementById(msgID).value }))
    .append($('<input>').attr({ type: 'hidden', name: 'environment', value: document.getElementById('myonoffswitch').value }))
    .appendTo("body")
    .submit()
    .remove();
}

function cancel() {
    $('<form>').attr({ method: 'POST', action: '', })
    .appendTo("body")
    .submit()
    .remove();	
}

function inputFocus(elmId) {
  var elem = document.getElementById(elmId);
  if(typeof elem !== 'undefined' && elem !== null) {
    document.getElementById(elmId).focus();
  }
}

function testM() {
     alert('msg');  
}
