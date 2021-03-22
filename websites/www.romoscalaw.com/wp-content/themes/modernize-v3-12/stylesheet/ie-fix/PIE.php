<!--
PIE: CSS3 rendering for IE
Version 1.0beta1
http://css3pie.com
Licensed for use under the Apache License, Version 2.0
-->
<PUBLIC:COMPONENT lightWeight="true">
    <PUBLIC:ATTACH EVENT="onresize" FOR="element" ONEVENT="update()" />
    <PUBLIC:ATTACH EVENT="onresize" FOR="window" ONEVENT="update()" /><!-- for IE8 -->
    <PUBLIC:ATTACH EVENT="onmove" FOR="element" ONEVENT="update()" />
    <PUBLIC:ATTACH EVENT="onpropertychange" FOR="element" ONEVENT="propChanged()" />
    <PUBLIC:ATTACH EVENT="onmouseenter" FOR="element" ONEVENT="mouseEntered()" />
    <PUBLIC:ATTACH EVENT="onmouseleave" FOR="element" ONEVENT="mouseLeft()" />
    <PUBLIC:ATTACH EVENT="oncontentready" FOR="element" ONEVENT="init()" />
    <PUBLIC:ATTACH EVENT="ondetach" FOR="element" ONEVENT="cleanup()" />

    <script type="text/javascript">
function j(){return function(){}}var C=window.PIE;
if(!C){C=window.PIE={T:"-pie-",Ha:"Pie",Fa:"pie_"};if(!window.XMLHttpRequest){C.Qb=true;C.T=C.T.replace(/^-/,"")}C.q={ja:function(a){var b=C.zb;if(!b){b=C.zb=element.document.createDocumentFragment();b.namespaces.add("css3vml","urn:schemas-microsoft-com:vml")}return b.createElement("css3vml:"+a)},Aa:function(a){var b,c,d,e,f=arguments;b=1;for(c=f.length;b<c;b++){e=f[b];for(d in e)if(e.hasOwnProperty(d))a[d]=e[d]}return a},ab:function(a,b,c){var d=C.tb||(C.tb={}),e=d[a],f;if(e)b.call(c,e);else{f=new Image;
f.onload=function(){e=d[a]={u:f.width,i:f.height};b.call(c,e);f.onload=null};f.src=a}}};C.g=function(){function a(b){this.F=b}a.prototype={Ba:/(px|em|ex|mm|cm|in|pt|pc|%)$/,Pa:function(){var b=this.ub;if(b===undefined)b=this.ub=parseFloat(this.F);return b},xa:function(){var b=this.sa;if(!b)b=this.sa=(b=this.F.match(this.Ba))&&b[0]||"px";return b},a:function(b,c){var d=this.Pa(),e=this.xa();switch(e){case "px":return d;case "%":return d*(typeof c==="function"?c():c)/100;case "em":return d*this.Oa(b);
case "ex":return d*this.Oa(b)/2;default:return d*a.Hb[e]}},Oa:function(b){var c=b.currentStyle.fontSize,d;if(c.indexOf("px")>0)return parseFloat(c);else{c=this.yb;if(!c){c=this.yb=b.document.createElement("length-calc");d=c.style;d.width="1em";d.position="absolute";d.top=d.left=-9999}b.appendChild(c);d=c.offsetWidth;b.removeChild(c);return d}}};a.Hb=function(){for(var b=["mm","cm","in","pt","pc"],c={},d=element.parentNode,e=0,f=b.length,g,h,i;e<f;e++){g=b[e];h=element.document.createElement("length-calc");
i=h.style;i.position="absolute";i.top=i.left=-9999;i.width="100"+g;d.appendChild(h);c[g]=h.offsetWidth/100;d.removeChild(h)}return c}();a.qb=new a("0");return a}();C.qa=function(){function a(b){this.C=b}a.prototype={Nb:function(){if(!this.Ka){var b=this.C,c=b.length,d=C.g.qb,e=new C.g("50%"),f=C.k.Y.V,g={top:1,center:1,bottom:1},h={left:1,center:1,right:1};d=["left",d,"top",d];if(c===1){b.push({type:f,value:"center"});c++}if(c===2){f&(b[0].type|b[1].type)&&b[0].value in g&&b[1].value in h&&b.push(b.shift());
if(b[0].type&f)if(b[0].value==="center")d[1]=e;else d[0]=b[0].value;else if(b[0].J())d[1]=new C.g(b[0].value);if(b[1].type&f)if(b[1].value==="center")d[3]=e;else d[2]=b[1].value;else if(b[1].J())d[3]=new C.g(b[1].value)}this.Ka=d}return this.Ka},coords:function(b,c,d){var e=this.Nb(),f=e[1].a(b,c);b=e[3].a(b,d);return{x:Math.round(e[0]==="right"?c-f:f),y:Math.round(e[2]==="bottom"?d-b:b)}}};return a}();C.bb=function(){function a(b){this.F=b}a.prototype={Ba:/[a-z]+$/i,xa:function(){return this.sa||
(this.sa=this.F.match(this.Ba)[0].toLowerCase())},Ib:function(){var b=this.sb,c;if(b===undefined){b=this.xa();c=parseFloat(this.F,10);b=this.sb=b==="deg"?c:b==="rad"?c/Math.PI*180:b==="grad"?c/400*360:b==="turn"?c*360:0}return b}};return a}();C.U=function(){function a(b){this.F=b}a.Xb=/\s*rgba\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d+|\d*\.\d+)\s*\)\s*/;a.prototype={parse:function(){if(!this.ga){var b=this.F,c=b.match(a.Xb);if(c){this.ga="rgb("+c[1]+","+c[2]+","+c[3]+")";this.Ja=parseFloat(c[4])}else{this.ga=
b;this.Ja=1}}},value:function(b){this.parse();return this.ga==="currentColor"?b.currentStyle.color:this.ga},La:function(){this.parse();return this.Ja}};return a}();C.k=function(){function a(c){this.ka=c;this.ch=0;this.C=[];this.da=0}var b=a.Y={ea:1,Ea:2,S:4,mb:8,Ga:16,V:32,o:64,W:128,X:256,fa:512,ob:1024,URL:2048};a.Ia=function(c,d){this.type=c;this.value=d};a.Ia.prototype={za:function(){return this.type&b.o||this.type&b.W&&this.value==="0"},J:function(){return this.za()||this.type&b.fa}};a.prototype=
{fc:/\s/,Sb:/^[\+\-]?(\d*\.)?\d+/,url:/^url\(\s*("([^"]*)"|'([^']*)'|([!#$%&*-~]*))\s*\)/i,Sa:/^\-?[_a-z][\w-]*/i,ac:/^("([^"]*)"|'([^']*)')/,Ob:/^#([\da-f]{6}|[\da-f]{3})/i,dc:{px:b.o,em:b.o,ex:b.o,mm:b.o,cm:b.o,"in":b.o,pt:b.o,pc:b.o,deg:b.ea,rad:b.ea,grad:b.ea},Eb:{aqua:1,black:1,blue:1,fuchsia:1,gray:1,green:1,lime:1,maroon:1,navy:1,olive:1,purple:1,red:1,silver:1,teal:1,white:1,yellow:1,currentColor:1},Db:{rgb:1,rgba:1,hsl:1,hsla:1},next:function(c){function d(n,p){n=new a.Ia(n,p);if(!c){k.C.push(n);
k.da++}return n}function e(){k.da++;return null}var f,g,h,i,k=this;if(this.da<this.C.length)return this.C[this.da++];for(;this.fc.test(this.ka.charAt(this.ch));)this.ch++;if(this.ch>=this.ka.length)return e();g=this.ch;f=this.ka.substring(this.ch);h=f.charAt(0);switch(h){case "#":if(i=f.match(this.Ob)){this.ch+=i[0].length;return d(b.S,i[0])}break;case '"':case "'":if(i=f.match(this.ac)){this.ch+=i[0].length;return d(b.ob,i[2]||i[3]||"")}break;case "/":case ",":this.ch++;return d(b.X,h);case "u":if(i=
f.match(this.url)){this.ch+=i[0].length;return d(b.URL,i[2]||i[3]||i[4]||"")}}if(i=f.match(this.Sb)){h=i[0];this.ch+=h.length;if(f.charAt(h.length)==="%"){this.ch++;return d(b.fa,h+"%")}if(i=f.substring(h.length).match(this.Sa)){h+=i[0];this.ch+=i[0].length;return d(this.dc[i[0].toLowerCase()]||b.mb,h)}return d(b.W,h)}if(i=f.match(this.Sa)){h=i[0];this.ch+=h.length;if(h.toLowerCase()in this.Eb)return d(b.S,h);if(f.charAt(h.length)==="("){this.ch++;if(h.toLowerCase()in this.Db){f=function(n){return n&&
n.type&b.W};i=function(n){return n&&n.type&(b.W|b.fa)};var o=function(n,p){return n&&n.value===p},l=function(){return k.next(1)};if((h.charAt(0)==="r"?i(l()):f(l()))&&o(l(),",")&&i(l())&&o(l(),",")&&i(l())&&(h==="rgb"||h==="hsa"||o(l(),",")&&f(l()))&&o(l(),")"))return d(b.S,this.ka.substring(g,this.ch));return e()}return d(b.Ga,h+"(")}return d(b.V,h)}this.ch++;return d(b.Ea,h)},n:function(){return this.C[this.da-- -2]},all:function(){for(;this.next(););return this.C},R:function(c,d){for(var e=[],
f,g;f=this.next();){if(c(f)){g=true;this.n();break}e.push(f)}return d&&!g?null:e}};return a}();C.w={M:function(a){function b(c){this.element=c}C.q.Aa(b.prototype,C.w,a);return b},f:function(){if(this.j())this.xb=this.N(this.rb=this.aa());return this.xb},aa:function(){var a=this.element,b=a.style;a=a.currentStyle;var c=this.$,d=this.ca,e=this.vb||(this.vb=C.T+c),f=this.wb||(this.wb=C.Ha+d.charAt(0).toUpperCase()+d.substring(1));return b[f]||a.getAttribute(e)||b[d]||a.getAttribute(c)},d:function(){return!!this.f()},
j:function(){return this.rb!==this.aa()}};C.db=C.w.M({$:C.T+"background",ca:C.Ha+"Background",Bb:{scroll:1,fixed:1,local:1},pa:{"repeat-x":1,"repeat-y":1,repeat:1,"no-repeat":1},Tb:{"padding-box":1,"border-box":1,"content-box":1},Cb:{"padding-box":1,"border-box":1},Wb:{top:1,right:1,bottom:1,left:1,center:1},Zb:{contain:1,cover:1},N:function(a){function b(q){return q.J()||q.type&i&&q.value in n}function c(q){return q.J()&&new C.g(q.value)||q.value==="auto"&&"auto"}var d=this.element.currentStyle,
e,f,g=C.k.Y,h=g.X,i=g.V,k=g.S,o,l,n=this.Wb,p,u,s=null;if(this.wa()){a=new C.k(a);s={images:[]};for(f={};e=a.next();){o=e.type;l=e.value;if(!f.type&&o&g.Ga&&l==="linear-gradient("){p={P:[],type:"linear-gradient"};for(u={};e=a.next();){o=e.type;l=e.value;if(o&g.Ea&&l===")"){u.color&&p.P.push(u);p.P.length>1&&C.q.Aa(f,p);break}if(o&k){if(p.ua||p.ya){e=a.n();if(e.type!==h)break;a.next()}u={color:new C.U(l)};e=a.next();if(e.J())u.Ta=new C.g(e.value);else a.n()}else if(o&g.ea&&!p.ua&&!u.color&&!p.P.length)p.ua=
new C.bb(e.value);else if(b(e)&&!p.ya&&!u.color&&!p.P.length){a.n();p.ya=new C.qa(a.R(function(q){return!b(q)},false))}else if(o&h&&l===","){if(u.color){p.P.push(u);u={}}}else break}}else if(!f.type&&o&g.URL){f.url=l;f.type="image"}else if(b(e)&&!f.size){a.n();f.position=new C.qa(a.R(function(q){return!b(q)},false))}else if(o&i)if(l in this.pa)f.repeat=l;else if(l in this.Tb){f.origin=l;if(l in this.Cb)f.clip=l}else{if(l in this.Bb)f.jc=l}else if(o&k&&!s.color)s.color=new C.U(l);else if(o&h)if(l===
"/"){e=a.next();o=e.type;l=e.value;if(o&i&&l in this.Zb)f.size=l;else if(l=c(e))f.size={u:l,i:c(a.next())||a.n()&&l}}else{if(l===","&&f.type){s.images.push(f);f={}}}else return null}f.type&&s.images.push(f)}else this.$a(function(){var q=d.backgroundPositionX,v=d.backgroundPositionY,m=d.backgroundImage,t=d.backgroundColor;s={};if(t!=="transparent")s.color=new C.U(t);if(m!=="none")s.images=[{type:"image",url:(new C.k(m)).next().value,repeat:d.backgroundRepeat,position:new C.qa((new C.k(q+" "+v)).all())}]});
return s},$a:function(a){var b=this.element.runtimeStyle,c=b.backgroundImage,d=b.backgroundColor;b.backgroundImage=b.backgroundColor="";a=a.call(this);b.backgroundImage=c;b.backgroundColor=d;return a},aa:function(){var a=this.element.currentStyle;return this.wa()||this.$a(function(){return a.backgroundColor+" "+a.backgroundImage+" "+a.backgroundRepeat+" "+a.backgroundPositionX+" "+a.backgroundPositionY})},wa:function(){var a=this.element;return a.style[this.ca]||a.currentStyle.getAttribute(this.$)},
d:function(){return this.wa()&&!!this.f()}});C.ib=C.w.M({Yb:["Top","Right","Bottom","Left"],Rb:{mc:"1px",kc:"3px",lc:"5px"},N:function(){var a={},b={},c={},d=this.element,e=d.currentStyle;d=d.runtimeStyle;var f=d.borderColor,g=0,h=false,i=true,k=true,o=true,l,n,p,u,s,q,v;for(d.borderColor="";g<4;g++){p=this.Yb[g];v=p.charAt(0).toLowerCase();l=b[v]=e["border"+p+"Style"];n=e["border"+p+"Color"];p=e["border"+p+"Width"];if(g>0){if(l!==u)k=false;if(n!==s)i=false;if(p!==q)o=false}u=l;s=n;q=p;c[v]=new C.U(n);
p=a[v]=new C.g(b[v]==="none"?"0":this.Rb[p]||p);if(p.a(this.element)>0)h=true}d.borderColor=f;return h?{Za:a,bc:b,Fb:c,gc:o,Gb:i,cc:k}:null},aa:function(){var a=this.element,b=a.currentStyle;a=a.runtimeStyle;var c=a.borderColor;a.borderColor="";b=b.borderWidth+"|"+b.borderStyle+"|"+b.borderColor;a.borderColor=c;return b}});C.gb=C.w.M({$:"border-radius",ca:"borderRadius",N:function(a){var b=null,c,d,e,f,g=false;if(a){d=new C.k(a);var h=function(){for(var i=[],k;(e=d.next())&&e.J();){f=new C.g(e.value);
k=f.Pa();if(k<0)return null;if(k>0)g=true;i.push(f)}return i.length>0&&i.length<5?{tl:i[0],tr:i[1]||i[0],br:i[2]||i[0],bl:i[3]||i[1]||i[0]}:null};if(a=h()){if(e){if(e.type&C.k.Y.X&&e.value==="/")c=h()}else c=a;if(g&&a&&c)b={x:a,y:c}}}return b}});C.fb=C.w.M({$:"border-image",ca:"borderImage",pa:{stretch:1,round:1,repeat:1,space:1},N:function(a){var b=null,c,d,e,f,g,h,i=0,k,o=C.k.Y,l=o.V,n=o.W,p=o.o,u=o.fa;if(a){c=new C.k(a);b={};for(var s=function(m){return m&&m.type&o.X&&m.value==="/"},q=function(m){return m&&
m.type&l&&m.value==="fill"},v=function(){f=c.R(function(m){return!(m.type&(n|u))});if(q(c.next())&&!b.fill)b.fill=true;else c.n();if(s(c.next())){i++;g=c.R(function(){return!(d.type&(n|u|p))&&!(d.type&l&&d.value==="auto")});if(s(c.next())){i++;h=c.R(function(){return!(d.type&(n|p))})}}else c.n()};d=c.next();){a=d.type;e=d.value;if(a&(n|u)&&!f){c.n();v()}else if(q(d)&&!b.fill){b.fill=true;v()}else if(a&l&&this.pa[e]&&!b.repeat){b.repeat={i:e};if(d=c.next())if(d.type&l&&this.pa[d.value])b.repeat.Ca=
d.value;else c.n()}else if(a&o.URL&&!b.src)b.src=e;else return null}if(!b.src||!f||f.length<1||f.length>4||g&&g.length>4||i===1&&g.length<1||h&&h.length>4||i===2&&h.length<1)return null;if(!b.repeat)b.repeat={i:"stretch"};if(!b.repeat.Ca)b.repeat.Ca=b.repeat.i;a=function(m,t){return{Q:t(m[0]),O:t(m[1]||m[0]),H:t(m[2]||m[0]),K:t(m[3]||m[1]||m[0])}};b.slice=a(f,function(m){return new C.g(m.type&n?m.value+"px":m.value)});b.width=g&&g.length>0?a(g,function(m){return m.type&(p|u)?new C.g(m.value):m.value}):
(k=this.element.currentStyle)&&{Q:new C.g(k.borderTopWidth),O:new C.g(k.borderRightWidth),H:new C.g(k.borderBottomWidth),K:new C.g(k.borderLeftWidth)};b.ba=a(h||[0],function(m){return m.type&p?new C.g(m.value):m.value})}return b}});C.lb=C.w.M({$:"box-shadow",ca:"boxShadow",N:function(a){var b,c=C.g,d=C.k.Y,e;if(a){e=new C.k(a);b={ba:[],oa:[]};for(a=function(){for(var f,g,h,i,k,o;f=e.next();){h=f.value;g=f.type;if(g&d.X&&h===",")break;else if(f.za()&&!k){e.n();k=e.R(function(l){return!l.za()})}else if(g&
d.S&&!i)i=h;else if(g&d.V&&h==="inset"&&!o)o=true;else return false}f=k&&k.length;if(f>1&&f<5){(o?b.oa:b.ba).push({hc:new c(k[0].value),ic:new c(k[1].value),blur:new c(k[2]?k[2].value:"0"),$b:new c(k[3]?k[3].value:"0"),color:new C.U(i||"currentColor")});return true}return false};a(););}return b&&(b.oa.length||b.ba.length)?b:null}});C.pb=C.w.M({aa:function(){var a=this.element.currentStyle;return a.visibility+"|"+a.display},N:function(){var a=this.element,b=a.runtimeStyle;a=a.currentStyle;var c=b.visibility,
d;b.visibility="";d=a.visibility;b.visibility=c;return{ec:d!=="hidden",Jb:a.display!=="none"}},d:function(){return false}});C.p={L:function(a){function b(c,d,e){this.element=c;this.e=d;this.parent=e}C.q.Aa(b.prototype,C.p,a);return b},B:function(){return false},D:j(),Wa:j(),s:j(),ta:function(a,b){this.Va(a);for(var c=this.Z||(this.Z=[]),d=a+1,e=c.length,f;d<e;d++)if(f=c[d])break;c[a]=b;this.m().insertBefore(b,f||null)},ma:function(a){var b=this.Z;return b&&b[a]||null},Va:function(a){var b=this.ma(a),
c=this.G;if(b&&c){c.removeChild(b);this.Z[a]=null}},na:function(a,b,c,d){var e=this.ra||(this.ra={}),f=e[a];if(!f){f=e[a]=C.q.ja("shape");if(b)f.appendChild(f[b]=C.q.ja(b));if(d){c=this.ma(d);if(!c){this.ta(d,this.element.document.createElement("group"+d));c=this.ma(d)}}c.appendChild(f);a=f.style;a.position="absolute";a.left=a.top=0;a.behavior="url(#default#VML)"}return f},va:function(a){var b=this.ra,c=b&&b[a];if(c){c.parentNode.removeChild(c);delete b[a]}return!!c},Qa:function(a){var b=this.element,
c=b.offsetWidth,d=b.offsetHeight,e,f,g,h,i,k,o;e=a.x.tl.a(b,c);f=a.y.tl.a(b,d);g=a.x.tr.a(b,c);h=a.y.tr.a(b,d);i=a.x.br.a(b,c);k=a.y.br.a(b,d);o=a.x.bl.a(b,c);a=a.y.bl.a(b,d);c=Math.min(c/(e+g),d/(h+k),c/(o+i),d/(f+a));if(c<1){e*=c;f*=c;g*=c;h*=c;i*=c;k*=c;o*=c;a*=c}return{x:{tl:e,tr:g,br:i,bl:o},y:{tl:f,tr:h,br:k,bl:a}}},la:function(a,b){b=b||1;var c,d,e=this.element;d=e.offsetWidth*b;e=e.offsetHeight*b;var f=this.e.v,g=Math.floor,h=Math.ceil,i=a?a.Q*b:0,k=a?a.O*b:0,o=a?a.H*b:0;a=a?a.K*b:0;var l,
n,p,u,s,q;if(f.d()){c=this.Qa(f.f());f=c.x.tl*b;l=c.y.tl*b;n=c.x.tr*b;p=c.y.tr*b;u=c.x.br*b;s=c.y.br*b;q=c.x.bl*b;b=c.y.bl*b;d="m"+g(a)+","+g(l)+"qy"+g(f)+","+g(i)+"l"+h(d-n)+","+g(i)+"qx"+h(d-k)+","+g(p)+"l"+h(d-k)+","+h(e-s)+"qy"+h(d-u)+","+h(e-o)+"l"+g(q)+","+h(e-o)+"qx"+g(a)+","+h(e-b)+" x e"}else d="m"+g(a)+","+g(i)+"l"+h(d-k)+","+g(i)+"l"+h(d-k)+","+h(e-o)+"l"+g(a)+","+h(e-o)+"xe";return d},m:function(){var a=this.parent.ma(this.zIndex),b;if(!a){a=this.element.document.createElement(this.ia);
b=a.style;b.position="absolute";b.top=b.left=0;this.parent.ta(this.zIndex,a)}return a},h:function(){this.parent.Va(this.zIndex);delete this.ra;delete this.Z}};C.nb=C.p.L({d:function(){var a=this.e;for(var b in a)if(a.hasOwnProperty(b)&&a[b].d())return true;return false},B:function(){return this.e.Ya.j()},Wa:function(){if(this.d()){var a=this.element,b=a,c,d,e=this.m().style,f=0;c=0;do b=b.offsetParent;while(b&&b.currentStyle.position==="static");c=a.getBoundingClientRect();if(b){d=b.getBoundingClientRect();
b=b.currentStyle;f=c.left-d.left-(parseFloat(b.borderLeftWidth)||0);c=c.top-d.top-(parseFloat(b.borderTopWidth)||0)}else{b=a.document.documentElement;f=c.left+b.scrollLeft-b.clientLeft;c=c.top+b.scrollTop-b.clientTop}e.left=f;e.top=c;e.zIndex=a.currentStyle.position==="static"?-1:a.currentStyle.zIndex}},s:function(){if(this.d()){var a=this.element,b=this.m().style;b.width=a.offsetWidth;b.height=a.offsetHeight}},Xa:function(){var a=this.e.Ya.f();this.m().style.display=a.ec&&a.Jb?"":"none"},D:function(){this.d()?
this.Xa():this.h()},m:function(){var a=this.G,b,c;if(!a){b=this.element;a=this.G=b.document.createElement("css3-container");c=a.style;c.position=b.currentStyle.position==="fixed"?"fixed":"absolute";this.Xa();b.parentNode.insertBefore(a,b)}return a},h:function(){var a=this.G;a&&a.parentNode&&a.parentNode.removeChild(a);delete this.G;delete this.Z}});C.cb=C.p.L({zIndex:2,ia:"background",B:function(){var a=this.e;return a.I.j()||a.v.j()},d:function(){var a=this.e;return a.z.d()||a.v.d()||a.I.d()||a.A.d()&&
a.A.f().oa},s:function(){this.d()&&this.Ma()},D:function(){this.h();this.d()&&this.Ma()},Ma:function(){this.Kb();this.Lb()},Kb:function(){var a=this.e.I.f(),b=this.element,c=a&&a.color&&a.color.value(b),d,e,f;if(c&&c!=="transparent"){this.Ra();d=this.na("bgColor","fill",this.m(),1);e=b.offsetWidth;b=b.offsetHeight;d.stroked=false;d.coordsize=e*2+","+b*2;d.coordorigin="1,1";d.path=this.la(null,2);f=d.style;f.width=e;f.height=b;d.fill.color=c;a=a.color.La();if(a<1)d.fill.opacity=a}else this.va("bgColor")},
Lb:function(){var a=this.e.I.f();a=a&&a.images;var b,c,d,e,f,g;if(a){this.Ra();b=this.element;d=b.offsetWidth;e=b.offsetHeight;for(g=a.length;g--;){b=a[g];c=this.na("bgImage"+g,"fill",this.m(),2);c.stroked=false;c.fill.type="tile";c.fillcolor="none";c.coordsize=d*2+","+e*2;c.coordorigin="1,1";c.path=this.la(0,2);f=c.style;f.width=d;f.height=e;if(b.type==="linear-gradient")this.Ab(c,b);else{c.fill.src=b.url;this.Vb(c,g)}}}for(g=a?a.length:0;this.va("bgImage"+g++););},Vb:function(a,b){C.q.ab(a.fill.src,
function(c){var d=a.fill,e=this.element,f=e.offsetWidth,g=e.offsetHeight,h=this.e,i=h.ha.f(),k=i&&i.Za;i=k?k.t.a(e):0;var o=k?k.r.a(e):0,l=k?k.b.a(e):0;k=k?k.l.a(e):0;h=h.I.f().images[b];e=h.position?h.position.coords(e,f-c.u-k-o,g-c.i-i-l):{x:0,y:0};h=h.repeat;o=0;l=f;var n=g,p=0;k=e.x+k+0.5;i=e.y+i+0.5;d.position=k/f+","+i/g;if(h&&h!=="repeat"){if(h==="repeat-x"||h==="no-repeat"){o=i+1;n=i+c.i+1}if(h==="repeat-y"||h==="no-repeat"){p=k+1;l=k+c.u+1}a.style.clip="rect("+o+"px,"+l+"px,"+n+"px,"+p+"px)"}},
this)},Ab:function(a,b){function c(x,y,w,D,H){if(w===0||w===180)return[D,y];else if(w===90||w===270)return[x,H];else{w=Math.tan(-w*l/180);x=w*x-y;y=-1/w;D=y*D-H;H=y-w;return[(D-x)/H,(w*D-y*x)/H]}}function d(){q=i>=90&&i<270?g:0;v=i<180?h:0;m=g-q;t=h-v}function e(x,y){var w=y[0]-x[0];x=y[1]-x[1];return Math.abs(w===0?x:x===0?w:Math.sqrt(w*w+x*x))}var f=this.element,g=f.offsetWidth,h=f.offsetHeight;a=a.fill;var i=b.ua,k=b.ya;b=b.P;var o=b.length,l=Math.PI,n,p,u,s,q,v,m,t,r,A,B,z;if(k){k=k.coords(f,
g,h);n=k.x;p=k.y}if(i){i=i.Ib();if(i<0)i+=360;i%=360;d();if(!k){n=q;p=v}k=c(n,p,i,m,t);u=k[0];s=k[1]}else if(k){u=g-n;s=h-p}else{n=p=u=0;s=h}k=u-n;r=s-p;if(i===undefined){i=-Math.atan2(r,k)/l*180;if(i<0)i+=360;i%=360;d()}k=Math.atan2(k*g/h,r)/l*180;k+=180;k%=360;A=e([n,p],[u,s]);u=e([q,v],c(q,v,i,m,t));s=[];p=e([n,p],c(n,p,i,q,v))/u*100;n=[];for(r=0;r<o;r++)n.push(b[r].Ta?b[r].Ta.a(f,A):r===0?0:r===o-1?A:null);for(r=1;r<o;r++){if(n[r]===null){B=n[r-1];A=r;do z=n[++A];while(z===null);n[r]=B+(z-B)/
(A-r+1)}n[r]=Math.max(n[r],n[r-1])}for(r=0;r<o;r++)s.push(p+n[r]/u*100+"% "+b[r].color.value(f));a.angle=k;a.type="gradient";a.method="sigma";a.color=b[0].color.value(f);a.color2=b[o-1].color.value(f);a.colors.value=s.join(",")},Ra:function(){var a=this.element.runtimeStyle;a.backgroundImage="none";a.backgroundColor="transparent"},h:function(){C.p.h.call(this);var a=this.element.runtimeStyle;a.backgroundImage=a.backgroundColor=""}});C.hb=C.p.L({zIndex:4,ia:"border",B:function(){var a=this.e;return a.ha.j()||
a.v.j()},d:function(){var a=this.e;return a.z.d()||a.v.d()||a.I.d()},s:function(){this.d()&&this.Na()},D:function(){this.h();this.d()&&this.Na()},Na:function(){var a=this.element,b=a.offsetWidth,c=a.offsetHeight,d,e,f,g,h,i;if(this.e.ha.f()){this.Pb();f=this.Mb(2);h=0;for(i=f.length;h<i;h++){g=f[h];d=this.na("borderPiece"+h,g.stroke?"stroke":"fill",this.m());d.coordsize=b*2+","+c*2;d.coordorigin="1,1";d.path=g.path;e=d.style;e.width=b;e.height=c;d.filled=!!g.fill;d.stroked=!!g.stroke;if(g.stroke){d=
d.stroke;d.weight=g.Da+"px";d.color=g.color.value(a);d.dashstyle=g.stroke==="dashed"?"2 2":g.stroke==="dotted"?"1 1":"solid";d.linestyle=g.stroke==="double"&&g.Da>2?"ThinThin":"Single"}else d.fill.color=g.fill.value(a)}for(;this.va("borderPiece"+h++););}},Pb:function(){var a=this.element,b=a.runtimeStyle;if(C.Qb){if(a.childNodes.length!==1||a.firstChild.tagName!=="ie6-mask"){var c=a.document.createElement("ie6-mask"),d=c.style;d.visibility="visible";for(d.zoom=1;d=a.firstChild;)c.appendChild(d);a.appendChild(c);
b.visibility="hidden"}}else b.borderColor="transparent"},Mb:function(a){var b=this.element,c,d,e=this.e.ha,f=[],g,h,i,k,o,l,n,p;if(e.d()){e=e.f();l=e.Za;n=e.bc;p=e.Fb;if(e.gc&&e.cc&&e.Gb){e=l.t.a(b);i=e/2;f.push({path:this.la({Q:i,O:i,H:i,K:i},a),stroke:n.t,color:p.t,Da:e})}else{a=a||1;c=b.offsetWidth;d=b.offsetHeight;e=l.t.a(b);i=l.r.a(b);k=l.b.a(b);b=l.l.a(b);var u={t:e,r:i,b:k,l:b};b=this.e.v;if(b.d())o=this.Qa(b.f());g=Math.floor;h=Math.ceil;var s=function(m,t){return o?o[m][t]:0},q=function(m,
t,r,A,B,z){var x=s("x",m),y=s("y",m),w=m.charAt(1)==="r";m=m.charAt(0)==="b";return x>0&&y>0?(z?"al":"ae")+(w?h(c-x):g(x))*a+","+(m?h(d-y):g(y))*a+","+(g(x)-t)*a+","+(g(y)-r)*a+","+A*65535+","+2949075*(B?1:-1):(z?"m":"l")+(w?c-t:t)*a+","+(m?d-r:r)*a},v=function(m,t,r,A){var B=m==="t"?g(s("x","tl"))*a+","+h(t)*a:m==="r"?h(c-t)*a+","+g(s("y","tr"))*a:m==="b"?h(c-s("x","br"))*a+","+g(d-t)*a:g(t)*a+","+h(d-s("y","bl"))*a;m=m==="t"?h(c-s("x","tr"))*a+","+h(t)*a:m==="r"?h(c-t)*a+","+h(d-s("y","br"))*a:
m==="b"?g(s("x","bl"))*a+","+g(d-t)*a:g(t)*a+","+g(s("y","tl"))*a;return r?(A?"m"+m:"")+"l"+B:(A?"m"+B:"")+"l"+m};b=function(m,t,r,A,B,z){var x=m==="l"||m==="r",y=u[m],w,D;if(y>0&&n[m]!=="none"){w=u[x?m:t];t=u[x?t:m];D=u[x?m:r];r=u[x?r:m];if(n[m]==="dashed"||n[m]==="dotted"){f.push({path:q(A,w,t,z+45,0,1)+q(A,0,0,z,1,0),fill:p[m]});f.push({path:v(m,y/2,0,1),stroke:n[m],Da:y,color:p[m]});f.push({path:q(B,D,r,z,0,1)+q(B,0,0,z-45,1,0),fill:p[m]})}else f.push({path:q(A,w,t,z+45,0,1)+v(m,y,0,0)+q(B,D,
r,z,0,0)+(n[m]==="double"&&y>2?q(B,D-g(D/3),r-g(r/3),z-45,1,0)+v(m,h(y/3*2),1,0)+q(A,w-g(w/3),t-g(t/3),z,1,0)+"x "+q(A,g(w/3),g(t/3),z+45,0,1)+v(m,g(y/3),1,0)+q(B,g(D/3),g(r/3),z,0,0):"")+q(B,0,0,z-45,1,0)+v(m,0,1,0)+q(A,0,0,z,1,0),fill:p[m]})}};b("t","l","r","tl","tr",90);b("r","t","b","tr","br",0);b("b","r","l","br","bl",-90);b("l","b","t","bl","tl",-180)}}return f},h:function(){C.p.h.call(this);this.element.runtimeStyle.borderColor=""}});C.eb=C.p.L({zIndex:5,Ub:["t","tr","r","br","b","bl","l",
"tl","c"],B:function(){var a=this.e;return a.z.j()||a.z.j()},d:function(){return this.e.z.d()},s:function(){if(this.d()){var a=this.e.z.f();this.m();var b=this.element,c=this.Ua;C.q.ab(a.src,function(d){function e(q,v,m,t,r){q=c[q].style;q.width=v;q.height=m;q.left=t;q.top=r}function f(q,v,m){for(var t=0,r=q.length;t<r;t++)c[q[t]].imagedata[v]=m}var g=b.offsetWidth,h=b.offsetHeight,i=a.width,k=i.Q.a(b),o=i.O.a(b),l=i.H.a(b);i=i.K.a(b);var n=a.slice,p=n.Q.a(b),u=n.O.a(b),s=n.H.a(b);n=n.K.a(b);e("tl",
i,k,0,0);e("t",g-i-o,k,i,0);e("tr",o,k,g-o,0);e("r",o,h-k-l,g-o,k);e("br",o,l,g-o,h-l);e("b",g-i-o,l,i,h-l);e("bl",i,l,0,h-l);e("l",i,h-k-l,0,k);e("c",g-i-o,h-k-l,i,k);f(["tl","t","tr"],"cropBottom",(d.i-p)/d.i);f(["tl","l","bl"],"cropRight",(d.u-n)/d.u);f(["bl","b","br"],"cropTop",(d.i-s)/d.i);f(["tr","r","br"],"cropLeft",(d.u-u)/d.u);if(a.repeat.Ca==="stretch"){f(["l","r","c"],"cropTop",p/d.i);f(["l","r","c"],"cropBottom",s/d.i)}if(a.repeat.i==="stretch"){f(["t","b","c"],"cropLeft",n/d.u);f(["t",
"b","c"],"cropRight",u/d.u)}c.c.style.display=a.fill?"":"none"},this)}else this.h()},D:function(){this.h();this.d()&&this.s()},m:function(){var a=this.G,b,c,d,e=this.Ub,f=e.length;if(!a){a=this.G=this.element.document.createElement("border-image");b=a.style;b.position="absolute";this.Ua={};for(d=0;d<f;d++){c=this.Ua[e[d]]=C.q.ja("rect");c.appendChild(C.q.ja("imagedata"));b=c.style;b.behavior="url(#default#VML)";b.position="absolute";b.top=b.left=0;c.imagedata.src=this.e.z.f().src;c.stroked=false;
c.filled=false;a.appendChild(c)}this.parent.ta(this.zIndex,a)}return a}});C.kb=C.p.L({zIndex:1,ia:"outset-box-shadow",B:function(){var a=this.e;return a.A.j()||a.v.j()},d:function(){var a=this.e.A;return a.d()&&a.f().ba[0]},s:function(){if(this.d())for(var a=this.element,b=this.e.A.f().ba,c=b.length,d=a.offsetWidth,e=a.offsetHeight,f,g,h,i,k,o,l,n;c--;){f=b[c];g=this.na("shadow"+c,"fill",this.m());h=g.style;i=f.hc.a(a);k=f.ic.a(a);o=f.$b.a(a);l=f.blur.a(a);n=Math.ceil(l/2);l=n*2;if(l>0){n="progid:DXImageTransform.Microsoft.blur(pixelRadius="+
n+")";h.filter=n+" "+n}h.left=i-l;h.top=k-l;h.width=d;h.height=e;g.stroked=false;g.filled=true;g.fillcolor=f.color.value(a);f=f.color.La();if(f<1)g.fill.opacity=f;l=l>0?4:0;g.coordsize=d*2+l+","+(e*2+l);g.coordorigin="1,1";g.path=this.la(o?{Q:-o,O:-o,H:-o,K:-o}:0,2)}else this.h()},D:function(){this.h();this.s()}});C.jb=C.p.L({zIndex:3,ia:"inset-box-shadow",B:function(){var a=this.e;return a.A.j()||a.v.j()},d:function(){var a=this.e.A;return a.d()&&a.f().oa[0]},s:j(),D:j()})}var E,F,G,I,J,K,L;
function update(){init();var a=element.getBoundingClientRect(),b=a.left,c=a.top,d=a.right-b;a=a.bottom-c;var e,f;if(b!==G||c!==I){e=0;for(f=J.length;e<f;e++)J[e].Wa();G=b;I=c}if(d!==E||a!==F){e=0;for(f=J.length;e<f;e++)J[e].s();E=d;F=a}}function propChanged(){init();var a,b,c=[];a=0;for(b=J.length;a<b;a++)J[a].B()&&c.push(J[a]);a=0;for(b=c.length;a<b;a++)c[a].D()}function mouseEntered(){event.srcElement.className+=" "+C.Fa+"hover";setTimeout(propChanged,0)}
function mouseLeft(){var a=event.srcElement;a.className=a.className.replace(new RegExp("\\b"+C.Fa+"hover\\b","g"),"");setTimeout(propChanged,0)}function M(){var a=event.propertyName;if(a==="className"||a==="id")propChanged()}function cleanup(){var a,b;if(J){a=0;for(b=J.length;a<b;a++)J[a].h();J=null}K=null;if(L){a=0;for(b=L.length;a<b;a++){L[a].detachEvent("onpropertychange",M);L[a].detachEvent("onmouseenter",mouseEntered);L[a].detachEvent("onmouseleave",mouseLeft)}L=null}}
function init(){if(!J){var a=element;a.runtimeStyle.zoom=1;K={I:new C.db(a),ha:new C.ib(a),z:new C.fb(a),v:new C.gb(a),A:new C.lb(a),Ya:new C.pb(a)};var b=new C.nb(a,K);J=[b,new C.kb(a,K,b),new C.cb(a,K,b),new C.jb(a,K,b),new C.hb(a,K,b),new C.eb(a,K,b)];var c=element;if(a=c.currentStyle.getAttribute(C.T+"watch-ancestors")){L=[];a=parseInt(a,10);b=0;for(c=c.parentNode;c&&(a==="NaN"||b++<a);){L.push(c);c.attachEvent("onpropertychange",M);c.attachEvent("onmouseenter",mouseEntered);c.attachEvent("onmouseleave",
mouseLeft);c=c.parentNode}}update()}}element.readyState==="complete"&&init();
    </script>

</PUBLIC:COMPONENT>
