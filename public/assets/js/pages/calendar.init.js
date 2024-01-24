/*! For license information please see calendar.init.js.LICENSE.txt */
(()=>{var e,t={7759:()=>{function e(e,s){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var s=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=s){var n,r,a,o,i=[],c=!0,l=!1;try{if(a=(s=s.call(e)).next,0===t){if(Object(s)!==s)return;c=!1}else for(;!(c=(n=a.call(s)).done)&&(i.push(n.value),i.length!==t);c=!0);}catch(e){l=!0,r=e}finally{try{if(!c&&null!=s.return&&(o=s.return(),Object(o)!==o))return}finally{if(l)throw r}}return i}}(e,s)||function(e,s){if(!e)return;if("string"==typeof e)return t(e,s);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return t(e,s)}(e,s)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var s=0,n=new Array(t);s<t;s++)n[s]=e[s];return n}!function(){var t,s={"./resources/js/pages/calendar.init.js":function(){function e(e,s){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var s=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=s){var n,r,a,o,i=[],c=!0,l=!1;try{if(a=(s=s.call(e)).next,0===t){if(Object(s)!==s)return;c=!1}else for(;!(c=(n=a.call(s)).done)&&(i.push(n.value),i.length!==t);c=!0);}catch(e){l=!0,r=e}finally{try{if(!c&&null!=s.return&&(o=s.return(),Object(o)!==o))return}finally{if(l)throw r}}return i}}(e,s)||function(e,s){if(!e)return;if("string"==typeof e)return t(e,s);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return t(e,s)}(e,s)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var s=0,n=new Array(t);s<t;s++)n[s]=e[s];return n}!function(){var t,s={"./resources/js/pages/calendar.init.js":function(){document.addEventListener("DOMContentLoaded",(function(){var e=new bootstrap.Modal(document.getElementById("event-modal"),{keyboard:!1});document.getElementById("event-modal");var t=document.getElementById("modal-title"),s=document.getElementById("form-event"),n=null,r=null,a=document.getElementsByClassName("needs-validation"),o=(n=null,r=null,new Date),i=o.getDate(),c=o.getMonth(),l=o.getFullYear();new(0,FullCalendar.Draggable)(document.getElementById("external-events"),{itemSelector:".external-event",eventData:function(e){return{title:e.innerText,start:new Date,className:e.getAttribute("data-class")}}});var u=[{title:"All Day Event",start:new Date(l,c,1),className:"bg-primary"},{title:"Long Event",start:new Date(l,c,i-5),end:new Date(l,c,i-2),className:"bg-warning"},{id:999,title:"Repeating Event",start:new Date(l,c,i-3,16,0),allDay:!1,className:"bg-info"},{id:999,title:"Repeating Event",start:new Date(l,c,i+4,16,0),allDay:!1,className:"bg-primary"},{title:"Meeting",start:new Date(l,c,i,10,30),allDay:!1,className:"bg-success"},{title:"Lunch",start:new Date(l,c,i,12,0),end:new Date(l,c,i,14,0),allDay:!1,className:"bg-danger"},{title:"Birthday Party",start:new Date(l,c,i+1,19,0),end:new Date(l,c,i+1,22,30),allDay:!1,className:"bg-success"},{title:"Click for Google",start:new Date(l,c,28),end:new Date(l,c,29),url:"http://google.com/",className:"bg-dark"}],d=(document.getElementById("external-events"),document.getElementById("calendar"));function f(a){e.show(),s.classList.remove("was-validated"),s.reset(),n=null,t.innerText="Add Event",r=a}function v(){return window.innerWidth>=768&&window.innerWidth<1200?"timeGridWeek":window.innerWidth<=768?"listMonth":"dayGridMonth"}var p=new FullCalendar.Calendar(d,{timeZone:"local",editable:!0,droppable:!0,selectable:!0,initialView:v(),themeSystem:"bootstrap",headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay,listMonth"},windowResize:function(e){var t=v();p.changeView(t)},eventDidMount:function(e){if("done"===e.event.extendedProps.status){e.el.style.backgroundColor="red";var t=e.el.getElementsByClassName("fc-event-dot")[0];t&&(t.style.backgroundColor="white")}},eventClick:function(a){e.show(),s.reset(),document.getElementById("event-title").value[0]="",n=a.event,document.getElementById("event-title").value=n.title,document.getElementById("event-category").value=n.classNames[0],r=null,t.innerText="Edit Event",r=null},dateClick:function(e){f(e)},events:u});p.render(),s.addEventListener("submit",(function(t){t.preventDefault();var s=document.getElementById("event-title").value,o=document.getElementById("event-category").value;if(!1===a[0].checkValidity())a[0].classList.add("was-validated");else{if(n)n.setProp("title",s),n.setProp("classNames",[o]);else{var i={title:s,start:r.date,allDay:r.allDay,className:o};p.addEvent(i)}e.hide()}})),document.getElementById("btn-delete-event").addEventListener("click",(function(e){n&&(n.remove(),(n=null).hide())})),document.getElementById("btn-new-event").addEventListener("click",(function(e){f({date:new Date,allDay:!0})}))}))},"./resources/scss/bootstrap.scss":function(e,t,s){"use strict";s.r(t)},"./resources/scss/icons.scss":function(e,t,s){"use strict";s.r(t)},"./resources/scss/app.scss":function(e,t,s){"use strict";s.r(t)}},n={};function a(e){var t=n[e];if(void 0!==t)return t.exports;var r=n[e]={exports:{}};return s[e](r,r.exports,a),r.exports}a.m=s,t=[],a.O=function(s,n,r,o){if(!n){var i=1/0;for(f=0;f<t.length;f++){for(var c=e(t[f],3),l=(n=c[0],r=c[1],o=c[2],!0),u=0;u<n.length;u++)(!1&o||i>=o)&&Object.keys(a.O).every((function(e){return a.O[e](n[u])}))?n.splice(u--,1):(l=!1,o<i&&(i=o));if(l){t.splice(f--,1);var d=r();void 0!==d&&(s=d)}}return s}o=o||0;for(var f=t.length;f>0&&t[f-1][2]>o;f--)t[f]=t[f-1];t[f]=[n,r,o]},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},function(){var t={"/assets/js/pages/calendar.init":0,"assets/css/app":0,"assets/css/icons":0,"assets/css/bootstrap":0};a.O.j=function(e){return 0===t[e]};var s=function(s,n){var r,o,i=e(n,3),c=i[0],l=i[1],u=i[2],d=0;if(c.some((function(e){return 0!==t[e]}))){for(r in l)a.o(l,r)&&(a.m[r]=l[r]);if(u)var f=u(a)}for(s&&s(n);d<c.length;d++)o=c[d],a.o(t,o)&&t[o]&&t[o][0](),t[o]=0;return a.O(f)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(s.bind(null,0)),n.push=s.bind(null,n.push.bind(n))}(),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/js/pages/calendar.init.js")})),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/bootstrap.scss")})),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/icons.scss")}));var o=a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/app.scss")}));r=a.O(o)}()},"./resources/scss/bootstrap.scss":function(e,t,s){"use strict";s.r(t)},"./resources/scss/icons.scss":function(e,t,s){"use strict";s.r(t)},"./resources/scss/app.scss":function(e,t,s){"use strict";s.r(t)}},n={};function a(e){var t=n[e];if(void 0!==t)return t.exports;var r=n[e]={exports:{}};return s[e](r,r.exports,a),r.exports}a.m=s,t=[],a.O=function(s,n,r,o){if(!n){var i=1/0;for(f=0;f<t.length;f++){for(var c=e(t[f],3),l=(n=c[0],r=c[1],o=c[2],!0),u=0;u<n.length;u++)(!1&o||i>=o)&&Object.keys(a.O).every((function(e){return a.O[e](n[u])}))?n.splice(u--,1):(l=!1,o<i&&(i=o));if(l){t.splice(f--,1);var d=r();void 0!==d&&(s=d)}}return s}o=o||0;for(var f=t.length;f>0&&t[f-1][2]>o;f--)t[f]=t[f-1];t[f]=[n,r,o]},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},function(){var t={"/assets/js/pages/calendar.init":0,"assets/css/app":0,"assets/css/icons":0,"assets/css/bootstrap":0};a.O.j=function(e){return 0===t[e]};var s=function(s,n){var r,o,i=e(n,3),c=i[0],l=i[1],u=i[2],d=0;if(c.some((function(e){return 0!==t[e]}))){for(r in l)a.o(l,r)&&(a.m[r]=l[r]);if(u)var f=u(a)}for(s&&s(n);d<c.length;d++)o=c[d],a.o(t,o)&&t[o]&&t[o][0](),t[o]=0;return a.O(f)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(s.bind(null,0)),n.push=s.bind(null,n.push.bind(n))}(),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/js/pages/calendar.init.js")})),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/bootstrap.scss")})),a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/icons.scss")}));var o=a.O(void 0,["assets/css/app","assets/css/icons","assets/css/bootstrap"],(function(){return a("./resources/scss/app.scss")}));r=a.O(o)}()},3524:()=>{},4946:()=>{},6626:()=>{}},s={};function n(e){var r=s[e];if(void 0!==r)return r.exports;var a=s[e]={exports:{}};return t[e](a,a.exports,n),a.exports}n.m=t,e=[],n.O=(t,s,r,a)=>{if(!s){var o=1/0;for(u=0;u<e.length;u++){for(var[s,r,a]=e[u],i=!0,c=0;c<s.length;c++)(!1&a||o>=a)&&Object.keys(n.O).every((e=>n.O[e](s[c])))?s.splice(c--,1):(i=!1,a<o&&(o=a));if(i){e.splice(u--,1);var l=r();void 0!==l&&(t=l)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[s,r,a]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={7063:0,4464:0,8393:0,4673:0};n.O.j=t=>0===e[t];var t=(t,s)=>{var r,a,[o,i,c]=s,l=0;if(o.some((t=>0!==e[t]))){for(r in i)n.o(i,r)&&(n.m[r]=i[r]);if(c)var u=c(n)}for(t&&t(s);l<o.length;l++)a=o[l],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(u)},s=self.webpackChunk=self.webpackChunk||[];s.forEach(t.bind(null,0)),s.push=t.bind(null,s.push.bind(s))})(),n.O(void 0,[4464,8393,4673],(()=>n(7759))),n.O(void 0,[4464,8393,4673],(()=>n(3524))),n.O(void 0,[4464,8393,4673],(()=>n(4946)));var r=n.O(void 0,[4464,8393,4673],(()=>n(6626)));r=n.O(r)})();