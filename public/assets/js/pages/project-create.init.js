/*! For license information please see project-create.init.js.LICENSE.txt */
!function(){flatpickr("#datepicker-range",{mode:"range"});var e=0;function t(e){var t=document.getElementsByClassName("wizard-tab");t[e].style.display="block",document.getElementById("prevBtn").style.display=0==e?"none":"inline",e==t.length-1?document.getElementById("nextBtn").innerHTML="Submit":document.getElementById("nextBtn").innerHTML="Next",function(e){var t,n=document.getElementsByClassName("list-item");for(t=0;t<n.length;t++)n[t].className=n[t].className.replace(" active","");n[e].className+=" active"}(e)}t(e)}();