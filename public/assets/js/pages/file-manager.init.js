/*! For license information please see file-manager.init.js.LICENSE.txt */
(()=>{var e;e={series:[76],chart:{height:250,type:"radialBar",sparkline:{enabled:!0}},colors:function(e){if(console.log(e),null!==document.getElementById(e)){var t=document.getElementById(e).getAttribute("data-colors");return(t=JSON.parse(t)).map((function(e){var t=e.replace(" ","");if(-1===t.indexOf(",")){var r=getComputedStyle(document.documentElement).getPropertyValue(t);return r||t}var a=e.split(",");if(2==a.length){var n=getComputedStyle(document.documentElement).getPropertyValue(a[0]);return n="rgba("+n+","+a[1]+")"}return t}))}}("radial-chart"),plotOptions:{radialBar:{startAngle:-90,endAngle:90,track:{background:"#e7e7e7",strokeWidth:"90%",margin:5},hollow:{size:"65%"},dataLabels:{name:{show:!1},value:{offsetY:-2,fontSize:"16px"}}}},grid:{padding:{top:-10}},labels:["Storage"]},new ApexCharts(document.querySelector("#radial-chart"),e).render()})();