"use strict";
document.title = ". : Multiple Converter";
var fVal = document.getElementById("fVal"); //input element for first (user) value
var sVal = document.getElementById("sVal"); //input element for second (computed) value
var fValNote = document.getElementById("fValNote"); //description for first input element
var sValNote = document.getElementById("sValNote"); //description for second input element
var opSect = document.getElementById("opSect"); //title descibing the conversion operation selected
var opSel = document.getElementById("opSel"); //select element containing available conversions
var swp = document.getElementById("swp"); //button element to swap conversion values
var loader = document.getElementById("loader");
var sValg = document.getElementById("sValg");
var fctr; //factor for conversion
var alFctr = [2.2045855,0.157473,0.621504,0.3048,0.9144,0.0929,2.4709661,3.78541,0.0083864,365,442,506,81]; //array of all factors
var swapState = false; //setting the state of the conversion to NOT yet swapped
var sInd; //selectedIndex for selected conversion 
sVal.style.fontWeight = "bold";
opSel.onchange = selOp;
/*my THIRD and Latest attempt at writing*/

//selOp fuction is now very short
function selOp(){
	sInd = opSel.selectedIndex;
	setDesc(sInd, opSel.options[sInd].text, opSel.options[sInd].text.split("-")[0], opSel.options[sInd].text.split("-")[1]);
	fctr = alFctr[sInd-1];
	convsn(fctr, fVal.value, sVal);
}

function setDesc(a,b,c,d){
	opSect.innerHTML = "Converting between " + b;
	
	if(a<=9){
		if (swapState == false){
			fValNote.innerHTML = "Value in " + c;
			sValNote.innerHTML = "Value in " + d;
		}else{
			fValNote.innerHTML = "Value in " + d;
			sValNote.innerHTML = "Value in " + c;
		}
	}else{
		if (swapState == false){
			fValNote.innerHTML = "Amount in " + c;
			sValNote.innerHTML = "Amount in " + d;
		}else{
			fValNote.innerHTML = "Amount in " + d;
			sValNote.innerHTML = "Amount in " + c;
		}
	}	
}


fVal.addEventListener("keyup", function(){convsn(fctr,Number(this.value),sVal);});
fVal.onchange = function(){convsn(fctr,this.value,sVal);};

function convsn(fct,fVV,sV){	
	if((fct=="")||(isNaN(fct)) || (fct === undefined) || (fct==0)){
		sV.placeholder = "Error: Select Conversion Type...";
		sValNote.innerHTML = loader.innerHTML + " &nbsp;&nbsp;" + sV.placeholder; //"Error: Select Conversion Type...";
		sV.style.borderColor = "tomato";
		sV.style.borderRadius = "4px";
		sV.style.color = "tomato";
		sValNote.style.color="tomato";
		swp.disabled = "disabled";
	}else{
	    if(isNaN(fVV)){
		    sV.value = "Error Converting: Enter a Number";
			sValNote.innerHTML = loader.innerHTML + "&nbsp;&nbsp;" + sV.value;//"Error Converting...Enter a Number";
			sV.style.borderColor = "tomato";
			sV.style.borderRadius = "4px";
			sV.style.color = "tomato";
			sValNote.style.color = "tomato";
			swp.disabled = "disabled";
			loader.style.display = "inline";
	    }else{						
		    if(swapState == false){
		        sV.value = fVV *  fct;
				
	        }else{
		        sV.value = fVV / fct;
	        }
			swp.removeAttribute("disabled");
			sV.style.borderColor = "#00ff00";
			sV.style.color = "black";
			sV.style.borderRadius = "4px";
			sValNote.style.color = "#006600";
			loader.style.display = "none";
			setDesc(sInd, opSel.options[sInd].text, opSel.options[sInd].text.split("-")[0], opSel.options[sInd].text.split("-")[1]);
	    }
	}	
}

swp.onclick = function (){swap(Number(fVal.value),sValNote.innerHTML);};

function swap(fVV,sVNt){
	if(swapState == false){
		sValNote.innerHTML = fValNote.innerHTML;
		fValNote.innerHTML = sVNt;
		swapState = true;
		fVal.value = sVal.value;		
		convsn(fctr,fVal.value,sVal);
	}else{		
		fValNote.innerHTML = sValNote.innerHTML;
		sValNote.innerHTML = fVNt;
		swapState = false;
		fVal.value = sVal.value;
		convsn(fctr,fVal.value,sVal);
	}
}

setInterval("crntTm()", "1000");
function crntTm(){
	var now = new Date();
	document.getElementById("crndt").innerHTML = "<i class='fa fa-calendar'> </i>" + "  " + now.toDateString();
	document.getElementById("crntm").innerHTML = "<i class='fa fa-clock-o'> </i>" + "  " + now.toLocaleTimeString();
}

