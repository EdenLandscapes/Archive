//var height
//var width
var link
var aw = window.screen.availWidth;
var ah = window.screen.availHeight;
//var ahpos = ah/2 - 205;

	function popUp(URL,height) 
	{		
		var ahpos = (ah/2) - (height/2);
		link = URL + ".html";
		
		if (aw != "800") {
			newWindow = window.open('','portfolio','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=no,width=' + (aw - 50) + ',height='+height+',top='+ahpos+',left=25');
			newWindow.location.href = link;
    		if (newWindow.opener == null) newWindow.opener = self;
  			}
		else {
			newWindow = window.open('','portfolio','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=no,width=' + (aw - 10) + ',height='+height+',top='+ahpos+',left=5');
			newWindow.location.href = link;
    		if (newWindow.opener == null) newWindow.opener = self;
  			}
		newWindow.focus();

      }
      
    function checkWindow() 
    {
      
      if (window.newWindow) newWindow.close();
      
    }
