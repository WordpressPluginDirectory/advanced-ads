(()=>{"use strict";var t,e={999:(t,e,n)=>{const a=jQuery;var o=n.n(a);function s(){var t,e,n,a,s;t=o()(".js-pubguru-connect"),e=t.next(".aa-spinner"),n=o()("#advads-m2-connect"),o()(".js-m2-show-consent").on("click",".button",(function(t){t.preventDefault();var e=o()(this).closest("tr");n.show(),e.addClass("hidden"),e.next().removeClass("hidden")})),o()(".js-pubguru-disconnect").on("click",".button",(function(t){t.preventDefault();var e=o()(this).closest("tr");n.hide(),e.addClass("hidden"),e.prev().removeClass("hidden"),o().ajax({type:"POST",url:ajaxurl,data:{action:"pubguru_disconnect",nonce:advadsglobal.ajax_nonce},dataType:"json"}).done((function(t){if(t.success){var n=o()('<div class="notice notice-success" />');n.html("<p>"+t.data.message+"</p>"),e.closest(".postbox").after(n),setTimeout((function(){n.fadeOut(500,(function(){n.remove()}))}),3e3)}}))})),o()("#m2-connect-consent").on("change",(function(){var e=o()(this);t.prop("disabled",!e.is(":checked"))})),o()("#advads-overview").on("click",".notice-dismiss",(function(t){t.preventDefault();var e=o()(this).parent();e.fadeOut(500,(function(){e.remove()}))})),t.on("click",(function(n){n.preventDefault(),e.addClass("show"),o().ajax({type:"POST",url:ajaxurl,data:{action:"pubguru_connect",nonce:advadsglobal.ajax_nonce},dataType:"json"}).done((function(t){t.success&&(o()(".pubguru-not-connected").hide(),o()(".pubguru-connected").removeClass("hidden"),o()(".pg-tc-trail").toggle(!t.data.hasTrafficCop),o()(".pg-tc-install").toggle(t.data.hasTrafficCop))})).fail((function(e){var n=e.responseJSON,a=o()('<div class="notice notice-error is-dismissible" />');a.html("<p>"+n.data+'</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button>'),t.closest(".postbox").after(a)})).complete((function(){return e.removeClass("show")}))})),a=o()("#pubguru-modules"),s=o()("#pubguru-notices"),a.on("input","input:checkbox",(function(){var t=o()(this),e=t.attr("name"),n=t.is(":checked");o().ajax({url:a.attr("action"),method:"POST",data:{action:"pubguru_module_change",security:a.data("security"),module:e,status:n}}).done((function(t){var e=t.data.notice,n=void 0===e?"":e;s.html(""),""!==n&&s.html(n)}))})),s.on("click",".js-btn-backup-adstxt",(function(){var t=o()(this);t.prop("disabled",!0),t.html(t.data("loading")),o().ajax({url:a.attr("action"),method:"POST",data:{action:"pubguru_backup_ads_txt",security:t.data("security")}}).done((function(e){e.success?(t.html(t.data("done")),setTimeout((function(){s.fadeOut("slow",(function(){s.html("")}))}),4e3)):t.html(t.data("text"))})).fail((function(){t.html(t.data("text"))}))}))}o()((function(){s()}))},51:()=>{}},n={};function a(t){var o=n[t];if(void 0!==o)return o.exports;var s=n[t]={exports:{}};return e[t](s,s.exports,a),s.exports}a.m=e,t=[],a.O=(e,n,o,s)=>{if(!n){var c=1/0;for(d=0;d<t.length;d++){for(var[n,o,s]=t[d],i=!0,r=0;r<n.length;r++)(!1&s||c>=s)&&Object.keys(a.O).every((t=>a.O[t](n[r])))?n.splice(r--,1):(i=!1,s<c&&(c=s));if(i){t.splice(d--,1);var u=o();void 0!==u&&(e=u)}}return e}s=s||0;for(var d=t.length;d>0&&t[d-1][2]>s;d--)t[d]=t[d-1];t[d]=[n,o,s]},a.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return a.d(e,{a:e}),e},a.d=(t,e)=>{for(var n in e)a.o(e,n)&&!a.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},a.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{var t={449:0,464:0};a.O.j=e=>0===t[e];var e=(e,n)=>{var o,s,[c,i,r]=n,u=0;if(c.some((e=>0!==t[e]))){for(o in i)a.o(i,o)&&(a.m[o]=i[o]);if(r)var d=r(a)}for(e&&e(n);u<c.length;u++)s=c[u],a.o(t,s)&&t[s]&&t[s][0](),t[s]=0;return a.O(d)},n=globalThis.webpackChunkadvanced_ads=globalThis.webpackChunkadvanced_ads||[];n.forEach(e.bind(null,0)),n.push=e.bind(null,n.push.bind(n))})(),a.O(void 0,[464],(()=>a(999)));var o=a.O(void 0,[464],(()=>a(51)));o=a.O(o)})();