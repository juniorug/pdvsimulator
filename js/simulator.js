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

function post_to_url(url, params) {
    	
    var form = document.createElement('form');
    form.action = url;
    form.method = 'POST';

    for (var i in params) {
        if (params.hasOwnProperty(i)) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = i;
            input.value = params[i];
            form.appendChild(input);
        }
    }
    //$('<form>').appendTo("body").submit(); 
    $('<form>').attr({ method: 'POST', action: 'messages.php', })
    .append($('<input>').attr({ type: 'hidden', name: 'msg', value: document.getElementById("msg").value }))
    .appendTo("body")
    .submit()
    .remove();	 
    //form.submit();
}

function saveValue() {	
    post_to_url('messages.php', {
        msg: document.getElementById("msg").value
    });
    return false;
}

function cancel() {
    var form = document.createElement('form');
    form.action = 'index.php';
    form.method = 'POST';
    form.submit();
    return false;
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
