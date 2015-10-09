function writeNumber(number) {
    document.getElementById("msg").focus();
    var field = document.getElementById("msg").value;
    var conc;
    if (number == '-1') {
        conc = field.substring(0, field.length - 1);
    } else {
        conc = field.concat(number);
    }

    document.getElementById("msg").innerHTML = conc;
    document.getElementById("msg").value = conc;
}

function saveValue() {	
   $('<form>').attr({ method: 'POST', action: 'messages.php', })
    .append($('<input>').attr({ type: 'hidden', name: 'msg', value: document.getElementById("msg").value }))
    .appendTo("body")
    .submit()
    .remove();
}

function cancel() {
    $('<form>').attr({ method: 'POST', action: 'index.php', })
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
    alert("msg2");
}
