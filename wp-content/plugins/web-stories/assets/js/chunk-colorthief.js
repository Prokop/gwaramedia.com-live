(window.__webStories_webpackJsonp=window.__webStories_webpackJsonp||[]).push([[185],{1003:function(t,r,n){"use strict";if(n.r(r),!o)var o={map:function(t,r){var n={};return r?t.map((function(t,o){return n.index=o,r.call(n,t)})):t.slice()},naturalOrder:function(t,r){return t<r?-1:t>r?1:0},sum:function(t,r){var n={};return t.reduce(r?function(t,o,e){return n.index=e,t+r.call(n,o)}:function(t,r){return t+r},0)},max:function(t,r){return Math.max.apply(null,r?o.map(t,r):t)}};var e=function(){function t(t,r,n){return(t<<10)+(r<<5)+n}function r(t){var r=[],n=!1;function o(){r.sort(t),n=!0}return{push:function(t){r.push(t),n=!1},peek:function(t){return n||o(),void 0===t&&(t=r.length-1),r[t]},pop:function(){return n||o(),r.pop()},size:function(){return r.length},map:function(t){return r.map(t)},debug:function(){return n||o(),r}}}function n(t,r,n,o,e,i,u){this.r1=t,this.r2=r,this.g1=n,this.g2=o,this.b1=e,this.b2=i,this.histo=u}function e(){this.vboxes=new r((function(t,r){return o.naturalOrder(t.vbox.count()*t.vbox.volume(),r.vbox.count()*r.vbox.volume())}))}function i(r,n){if(n.count()){var e=n.r2-n.r1+1,i=n.g2-n.g1+1,u=o.max([e,i,n.b2-n.b1+1]);if(1==n.count())return[n.copy()];var a,s,h,c,f=0,v=[],l=[];if(u==e)for(a=n.r1;a<=n.r2;a++){for(c=0,s=n.g1;s<=n.g2;s++)for(h=n.b1;h<=n.b2;h++)c+=r[t(a,s,h)]||0;v[a]=f+=c}else if(u==i)for(a=n.g1;a<=n.g2;a++){for(c=0,s=n.r1;s<=n.r2;s++)for(h=n.b1;h<=n.b2;h++)c+=r[t(s,a,h)]||0;v[a]=f+=c}else for(a=n.b1;a<=n.b2;a++){for(c=0,s=n.r1;s<=n.r2;s++)for(h=n.g1;h<=n.g2;h++)c+=r[t(s,h,a)]||0;v[a]=f+=c}return v.forEach((function(t,r){l[r]=f-t})),function(t){var r,o,e,i,u,s=t+"1",h=t+"2",c=0;for(a=n[s];a<=n[h];a++)if(v[a]>f/2){for(e=n.copy(),i=n.copy(),u=(r=a-n[s])<=(o=n[h]-a)?Math.min(n[h]-1,~~(a+o/2)):Math.max(n[s],~~(a-1-r/2));!v[u];)u++;for(c=l[u];!c&&v[u-1];)c=l[--u];return e[h]=u,i[s]=e[h]+1,[e,i]}}(u==e?"r":u==i?"g":"b")}}return n.prototype={volume:function(t){return this._volume&&!t||(this._volume=(this.r2-this.r1+1)*(this.g2-this.g1+1)*(this.b2-this.b1+1)),this._volume},count:function(r){var n=this.histo;if(!this._count_set||r){var o,e,i,u=0;for(o=this.r1;o<=this.r2;o++)for(e=this.g1;e<=this.g2;e++)for(i=this.b1;i<=this.b2;i++)u+=n[t(o,e,i)]||0;this._count=u,this._count_set=!0}return this._count},copy:function(){return new n(this.r1,this.r2,this.g1,this.g2,this.b1,this.b2,this.histo)},avg:function(r){var n=this.histo;if(!this._avg||r){var o,e,i,u,a=0,s=0,h=0,c=0;for(e=this.r1;e<=this.r2;e++)for(i=this.g1;i<=this.g2;i++)for(u=this.b1;u<=this.b2;u++)a+=o=n[t(e,i,u)]||0,s+=o*(e+.5)*8,h+=o*(i+.5)*8,c+=o*(u+.5)*8;this._avg=a?[~~(s/a),~~(h/a),~~(c/a)]:[~~(8*(this.r1+this.r2+1)/2),~~(8*(this.g1+this.g2+1)/2),~~(8*(this.b1+this.b2+1)/2)]}return this._avg},contains:function(t){var r=t[0]>>3;return gval=t[1]>>3,bval=t[2]>>3,r>=this.r1&&r<=this.r2&&gval>=this.g1&&gval<=this.g2&&bval>=this.b1&&bval<=this.b2}},e.prototype={push:function(t){this.vboxes.push({vbox:t,color:t.avg()})},palette:function(){return this.vboxes.map((function(t){return t.color}))},size:function(){return this.vboxes.size()},map:function(t){for(var r=this.vboxes,n=0;n<r.size();n++)if(r.peek(n).vbox.contains(t))return r.peek(n).color;return this.nearest(t)},nearest:function(t){for(var r,n,o,e=this.vboxes,i=0;i<e.size();i++)((n=Math.sqrt(Math.pow(t[0]-e.peek(i).color[0],2)+Math.pow(t[1]-e.peek(i).color[1],2)+Math.pow(t[2]-e.peek(i).color[2],2)))<r||void 0===r)&&(r=n,o=e.peek(i).color);return o},forcebw:function(){var t=this.vboxes;t.sort((function(t,r){return o.naturalOrder(o.sum(t.color),o.sum(r.color))}));var r=t[0].color;r[0]<5&&r[1]<5&&r[2]<5&&(t[0].color=[0,0,0]);var n=t.length-1,e=t[n].color;e[0]>251&&e[1]>251&&e[2]>251&&(t[n].color=[255,255,255])}},{quantize:function(u,a){if(!u.length||a<2||a>256)return!1;var s=function(r){var n,o=new Array(32768);return r.forEach((function(r){n=t(r[0]>>3,r[1]>>3,r[2]>>3),o[n]=(o[n]||0)+1})),o}(u);s.forEach((function(){}));var h=function(t,r){var o,e,i,u=1e6,a=0,s=1e6,h=0,c=1e6,f=0;return t.forEach((function(t){(o=t[0]>>3)<u?u=o:o>a&&(a=o),(e=t[1]>>3)<s?s=e:e>h&&(h=e),(i=t[2]>>3)<c?c=i:i>f&&(f=i)})),new n(u,a,s,h,c,f,r)}(u,s),c=new r((function(t,r){return o.naturalOrder(t.count(),r.count())}));function f(t,r){for(var n,o=t.size(),e=0;e<1e3;){if(o>=r)return;if(e++>1e3)return;if((n=t.pop()).count()){var u=i(s,n),a=u[0],h=u[1];if(!a)return;t.push(a),h&&(t.push(h),o++)}else t.push(n),e++}}c.push(h),f(c,.75*a);for(var v=new r((function(t,r){return o.naturalOrder(t.count()*t.volume(),r.count()*r.volume())}));c.size();)v.push(c.pop());f(v,a);for(var l=new e;v.size();)l.push(v.pop());return l}}}().quantize,u=function(t){this.canvas=document.createElement("canvas"),this.context=this.canvas.getContext("2d"),this.width=this.canvas.width=t.naturalWidth,this.height=this.canvas.height=t.naturalHeight,this.context.drawImage(t,0,0,this.width,this.height)};u.prototype.getImageData=function(){return this.context.getImageData(0,0,this.width,this.height)};var a=function(){};a.prototype.getColor=function(t,r){return void 0===r&&(r=10),this.getPalette(t,5,r)[0]},a.prototype.getPalette=function(t,r,n){var o=function(t){var r=t.colorCount,n=t.quality;if(void 0!==r&&Number.isInteger(r)){if(1===r)throw new Error("colorCount should be between 2 and 20. To get one color, call getColor() instead of getPalette()");r=Math.max(r,2),r=Math.min(r,20)}else r=10;return(void 0===n||!Number.isInteger(n)||n<1)&&(n=10),{colorCount:r,quality:n}}({colorCount:r,quality:n}),i=new u(t),a=function(t,r,n){for(var o=t,e=[],i=0,u=void 0,a=void 0,s=void 0,h=void 0,c=void 0;i<r;i+=n)a=o[0+(u=4*i)],s=o[u+1],h=o[u+2],(void 0===(c=o[u+3])||c>=125)&&(a>250&&s>250&&h>250||e.push([a,s,h]));return e}(i.getImageData().data,i.width*i.height,o.quality),s=e(a,o.colorCount);return s?s.palette():null},a.prototype.getColorFromUrl=function(t,r,n){var o=this,e=document.createElement("img");e.addEventListener("load",(function(){var i=o.getPalette(e,5,n);r(i[0],t)})),e.src=t},a.prototype.getImageData=function(t,r){var n=new XMLHttpRequest;n.open("GET",t,!0),n.responseType="arraybuffer",n.onload=function(){if(200==this.status){var t=new Uint8Array(this.response);i=t.length;for(var n=new Array(i),o=0;o<t.length;o++)n[o]=String.fromCharCode(t[o]);var e=n.join(""),u=window.btoa(e);r("data:image/png;base64,"+u)}},n.send()},a.prototype.getColorAsync=function(t,r,n){var o=this;this.getImageData(t,(function(t){var e=document.createElement("img");e.addEventListener("load",(function(){var t=o.getPalette(e,5,n);r(t[0],this)})),e.src=t}))},r.default=a}}]);