function LEMcheckNG() {

	window.scrollTo(0, document.body.scrollHeight);
	
	//disable if NGs have been completed:
	if (checkDefined('ng_complete') && LEMval('ng_complete')===1) {
		inputTextFields = document.getElementsByClassName("text ");
		for (var i = 0; i < inputTextFields.length; i++) {
		    inputTextFields[i].style.display='none';
			//inputTextFields[i].disabled = true;
		}
    }
	
	var pos = arguments[0];
	// error handling:
	if (arguments.length < 2) {
        // 'At least two arguments need to be provided!';
		return false;
	}
	
	if (pos < 2) {
        // 'Position may not be smaller than 2!';
		return false;
	}
	
	if (arguments.length < pos) {
        // 'Position may not be greater than length of items!'
		return false;
	}
	
	if ((arguments[pos - 1] != '') && (typeof arguments[pos - 1] !== "undefined")) {
		return true;
	}
	
	for (var i = pos; i < arguments.length; i++) {
	 if ((arguments[i] != '') && (typeof arguments[i] !== "undefined")) {
	   return true;
	 }
    }
    return false;
}

function checkDefined() {
	
	var arg = arguments[0];
	if (typeof LEMalias2varName[arg] === 'undefined') {
	   return false;
	}
	jsName = LEMalias2varName[arg];
	if (typeof LEMvarNameAttr[jsName] === 'undefined') {
	   return false;
	}
	return true;
}

function LEMrandNG() {

	var i;
	
	// array of already sampled names:
	var sampled = new Array();

	// remaining non-empty names:
	var names = new Array();
	
	var current = arguments[0];
	var numSampled = arguments[1];
	
	// extract first arguments till current as already sampled names
	for (i = 0; i < current - 1; i++) {
		sampled[i] = arguments[i + 2];
	}
	
	// copy non-empty vars and not already sampled names:
	var counter = -1;
	
    for (i = numSampled + 2; i < arguments.length; i++) {
		if ((typeof arguments[i] !== "undefined") && (arguments[i] != '') && (!contains(sampled, arguments[i]))) {
			counter++;
			names[counter] = arguments[i];
		}
    }
	if (counter == -1) {
		return '';
	}
    return names[Math.floor(Math.random() * (counter  + 1))];
}

function contains(a, obj) {
	var i;
    for (i = 0; i < a.length; i++) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
}

function LEMuniqueToFirst()
{
    var group = arguments[0];
	var pos = 1 + +arguments[1] + (group - 1) * 25;
    
    if ((trim(arguments[pos])=='') || (typeof arguments[pos] == "undefined")) {
		return true;
	}
	
	if ((contains(arguments[pos],',')) || (contains(arguments[pos],';'))) {
		return false;
	}
   
    for (i = 2; i < arguments.length; ++i) {
        var arg = arguments[i];
        if (trim(arg)=='')
            continue;
        if (i != pos && arg == arguments[pos]) {
            return false;
		}
    }
    return true;
}

function LEMsliderOnClick() 
{		
	if ((typeof document.sliderHandle1 === "undefined") || (typeof document.sliderHandle2 === "undefined")) {
		var sliders =  new Array();
		var sliderHandles = new Array();
			
		sliders = document.getElementsByClassName("ui-slider-1");
		sliderHandles = document.getElementsByClassName("ui-slider-handle");
		
		document.sliderHandle1 = sliderHandles[0];
		sliders[0].onclick = function(){document.sliderHandle1.style.width = "15px";};
		
		document.sliderHandle2 = sliderHandles[1];
		sliders[1].onclick = function(){document.sliderHandle2.style.width = "15px";};
	}
	/* The problem with a for loop: The object that is passed to the onclick function may not be overwritten! */
	
	return true;
}