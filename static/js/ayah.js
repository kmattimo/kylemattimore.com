if (AYAH.isIframeCommSupported() ) {
        // Defines which events to listen for
        // and which functions to call when those events occur
     
        AYAH.addGameCompleteHandler(submitForm);
    } else {
        // Defines what happens if postMessage() is not supported
        alert("iframe communication is not supported!");
    }
    
    // Declares the function to handle the events
    function submitForm(e) {
        // Defines what happens when an event occurs
        if(e.type === 'gameComplete')
			{
			document.getElementById('AYAH_submit').submit();
			}
		
    }