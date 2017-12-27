<?php
   session_start();
   
   $_SESSION['message']="";
   
   //requiring the credentials
   include 'homepage/dbconnect.php';
   // Create connection
   $dbName="";
   $connection = @mysqli_connect($server, $username, $password, $dbName);
   
   // Check connection
   if (!$connection) {
   		$error_message= "Connection failed: " . mysqli_connect_error();
   		echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";
   }
   
   ?>
   
<html>
   <head>
      <?php
         if( isset($_POST['coordinator-form-submit'] )) {
         		$coordinator_name=addslashes($_POST['coordinator-form-name']);
         		$coordinator_email=addslashes($_POST['coordinator-form-email']);
         		$coordinator_department=addslashes($_POST['coordinator-form-department']);
         		$coordinator_team=addslashes($_POST['coordinator-form-team']);
         		$coordinator_phone=addslashes($_POST['coordinator-form-phone']);
         		$_SESSION['message']="We're extremely happy to know that you want to join our team of talented coordinators! Our team will get back to you shortly!";
         		
         		$Csql = "INSERT INTO coordinators (name, email, phone, department, post) VALUES ('$coordinator_name','$coordinator_email','$coordinator_phone','$coordinator_department','$coordinator_team')";
         		if (mysqli_query($connection, $Csql)) {
         		} else {
         		    $error_message= "Connection failed: " . mysqli_connect_error();
         			echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";
         		} 
         }
         
         if( isset($_POST['ambassador-form-submit'] )) {
         		$ambassador_name=addslashes($_POST['ambassador-form-name']);
         		$ambassador_email=addslashes($_POST['ambassador-form-email']);
         		$ambassador_college=addslashes($_POST['ambassador-form-college']);
                 	$ambassador_phone=addslashes($_POST['ambassador-form-phone']);
                 	$ambassador_reasons=addslashes($_POST['ambassador-form-reason']);
         		$_SESSION['message']="You just signed up to be well-informed about the great things we do at the Jadavpur University E-Cell!<br>
Ideate. Innovate. Build!";
         		
         		$Asql = "INSERT INTO ambassador (name, email, phone, college, reason) VALUES ('$ambassador_name','$ambassador_email','$ambassador_phone','$ambassador_college','$ambassador_reason')";
         		if (mysqli_query($connection, $Asql)) {
         		} else {
         		    $error_message= "Connection failed: " . mysqli_connect_error();
         			echo "<script>console.log(\"" . addslashes($error_message) . "\");</script>";		
         			}
         }
         
         if( isset($_POST['contact-form-submit'] )) {
         		$contact_name=addslashes($_POST['contact-form-name']);
         		$contact_email=addslashes($_POST['contact-form-email']);
         //		$contact_institute=addslashes($_POST['contact-form-college']);
         		$contact_message=addslashes($_POST['contact-form-message']);
         		$contact_phone=addslashes($_POST['contact-form-phone']);
         			$_SESSION['message']="We're extremely happy to see your interest in the Jadavpur University E-Cell! Our team will get back to you shortly!";
         		
         		$Csql = "INSERT INTO contact (name, email, phone, message) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_message')";
         		if (mysqli_query($connection, $Csql)) {
         		} else {
         		    $message= "Connection failed: " . mysqli_connect_error();
         			echo "<script>console.log(\"" . addslashes($message) . "\");</script>";
         		}
         }
         ?>
      <meta charset="utf-8">
	  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
	  
	  <title>JU E-CELL | A Jadavpur University,Kolkata Students initiative</title>
	  
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stlyesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/style.css?noached">
      <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bowlby+One+SC|Changa+One|Neuton|Titan+One|Archivo+Black|Scada|Changa+One|Anton" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="js/modernizr.custom.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
         (function(h,j,c,f,e,k,g){
         new(function(){});var d={l:function(a){return a},Be:function(a){return-a*(a-2)},n:function(a){return a*a*a},Md:function(a){return(a-=1)*a*a+1}};var b=new function(){var i=this,Ab=/\S+/g,I=1,bb=2,eb=3,db=4,hb=5,J,s=0,l=0,t=0,X=0,A=0,L=navigator,mb=L.appName,o=L.userAgent,p=parseFloat;function Ib(){if(!J){J={Mf:"ontouchstart"in h||"createTouch"in j};var a;if(L.pointerEnabled||(a=L.msPointerEnabled))J.Bd=a?"msTouchAction":"touchAction"}return J}function w(g){if(!s){s=-1;if(mb=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");s=I;t=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;l=j.documentMode||t}else if(mb=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){s=bb;l=p(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");s=f>=0?db:eb;l=p(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){s=I;l=t=p(a[1])}}if(c>=0)A=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){s=hb;l=p(a[2])}}}return g==s}function q(){return w(I)}function yb(){return q()&&(l<6||j.compatMode=="BackCompat")}function Bb(){return w(bb)}function cb(){return w(eb)}function gb(){return w(hb)}function ub(){return cb()&&A>534&&A<535}function M(){w();return A>537||l>42||s==I&&l>=11}function wb(){return q()&&l<9}function vb(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(h,e){var b=a;if(e)b=h+d;if(f.style[b]!=g)return c=b})}return c}}function tb(b){var a;return function(c){a=a||vb(b)(c)||b;return a}}var N=tb("transform");function lb(a){return{}.toString.call(a)}var ib={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){ib["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(lb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):ib[lb(a)]||"object"}function jb(a){for(var b in a)return e}function B(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function v(a,b){return{x:a,y:b}}function qb(b,a){setTimeout(b,a||0)}function K(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function sb(b,a){if(l<9)b.style.filter=a}function nb(a,b){if(a===g)a=b;return a}i.wf=Ib;i.Ad=q;i.Jf=yb;i.gf=Bb;i.vf=cb;i.Xe=M;vb("transform");i.ud=function(){return l};i.Kd=function(){return t||l};i.bf=function(){w();return A};i.Z=qb;i.S=nb;i.cf=function(a,b){b.call(a);return D({},a)};function W(a){a.constructor===W.caller&&a.Ub&&a.Ub.apply(a,W.caller.arguments)}i.Ub=W;i.Hb=function(a){if(i.df(a))a=j.getElementById(a);return a};function u(a){return a||h.event}i.Dc=function(b){b=u(b);var a=b.target||b.srcElement||j;if(a.nodeType==3)a=i.Cc(a);return a};i.qd=function(a){a=u(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function x(c,d,a){if(a!==g)c.style[d]=a==g?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Z(b,c,a,d){if(a===g){a=p(x(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");x(b,c,a)}function m(c,a){var d=a?Z:x,b;if(a&4)b=tb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(q()&&t<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Fb(b,a,f){if(q()&&t<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=K(h,[i],d);sb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var O={I:["rotate"],pb:["rotateX"],nb:["rotateY"],Rb:["skewX"],Sb:["skewY"]};if(!M())O=D(O,{K:["scaleX",2],L:["scaleY",2],ib:["translateZ",1]});function P(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.pb;delete a.nb;delete a.ib}b.j(a,function(d,b){var a=O[b];if(a){var e=a[1]||0;if(Q[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(M()){if(a.vb||a.wb||a.ib!=g)c+=" translate3d("+(a.vb||0)+"px,"+(a.wb||0)+"px,"+(a.ib||0)+"px)";if(a.K==g)a.K=1;if(a.L==g)a.L=1;if(a.K!=1||a.L!=1)c+=" scale3d("+a.K+", "+a.L+", 1)"}}d.style[N(d)]=c}i.kf=m("transformOrigin",4);i.mf=m("backfaceVisibility",4);i.rf=m("transformStyle",4);i.Kf=m("perspective",6);i.sf=m("perspectiveOrigin",4);i.qf=function(b,a){if(q()&&t<9||t<10&&yb())b.style.zoom=a==1?"":a;else{var c=N(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=K(e,[g],f);b.style[c]=d}};i.i=function(a,d,b,c){a=i.Hb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};i.X=function(a,c,d,b){a=i.Hb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.ac=function(a){a=u(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=k};i.jf=function(a){a=u(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};i.V=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};i.fc=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function kb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(H(a,b)==c)return a;if(!e){var d=kb(a,c,e,b);if(d)return d}}}i.ec=kb;function U(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){H(a,b)==d&&c.push(a);if(!g){var e=U(a,d,g,b);if(e.length)c=c.concat(e)}}return c}function fb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}i.Cf=fb;i.ne=function(b,a){return b.getElementsByTagName(a)};i.Lb=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=b.z(a,d);if(c&&c==nb(f,c)){e=a;break}}a=b.Cc(a)}while(a&&a!=j.body);return e};function D(){var e=arguments,d,c,b,a,h=1&e[0],f=1+h;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==g){a=c[b];var i=d[b];d[b]=h&&(B(i)||B(a))?D(h,{},i,a):a}}return d}i.O=D;function Y(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=Y(a,b);e=!jb(a)}!e&&(d[c]=a)}}return d}i.Tc=function(a){return E(a)=="function"};i.df=function(a){return E(a)=="string"};i.nd=function(a){return!isNaN(p(a))&&isFinite(a)};i.j=n;i.Ee=B;function S(a){return j.createElement(a)}i.Fb=function(){return S("DIV")};i.Oc=function(){};function C(b,c,a){if(a==g)return b.getAttribute(c);b.setAttribute(c,a)}function H(a,b){return C(a,b)||C(a,"data-"+b)}i.P=C;i.z=H;i.Jb=function(d,b,c){var a=i.tf(H(d,b));if(isNaN(a))a=c;return a};function y(b,a){return C(b,"class",a)||""}function pb(b){var a={};n(b,function(b){if(b!=g)a[b]=b});return a}function rb(b,a){return b.match(a||Ab)}function R(b,a){return pb(rb(b||"",a))}i.Zc=pb;i.lf=rb;function ab(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function F(a,c,b){y(a,ab(" ",D(Y(R(y(a)),R(c)),R(b))))}i.Cc=function(a){return a.parentNode};i.Y=function(a){i.Gb(a,"none")};i.N=function(a,b){i.Gb(a,b?"none":"")};i.of=function(b,a){b.removeAttribute(a)};i.ef=function(d,a){if(a)d.style.clip="rect("+c.round(a.f||a.E||0)+"px "+c.round(a.s)+"px "+c.round(a.q)+"px "+c.round(a.c||a.F||0)+"px)";else if(a!==g){var h=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=K(h,f,"");b.dd(d,e)}};i.kb=function(){return+new Date};i.Q=function(b,a){b.appendChild(a)};i.Ib=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};i.Jc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};i.Ze=function(a,b){n(a,function(a){i.Jc(a,b)})};i.Pd=function(a){i.Ze(i.fc(a,e),a)};i.Hc=function(a,b){var c=i.Cc(a);b&1&&i.T(a,(i.D(c)-i.D(a))/2);b&2&&i.U(a,(i.C(c)-i.C(a))/2)};var T={f:f,s:f,q:f,c:f,G:f,H:f};i.uf=function(a){var b=i.Fb();r(b,{gc:"block",db:i.ub(a),f:0,c:0,G:0,H:0});var d=i.Nc(a,T);i.Ib(b,a);i.Q(b,a);var e=i.Nc(a,T),c={};n(d,function(b,a){if(b==e[a])c[a]=b});r(b,T);r(b,c);r(a,{f:0,c:0});return c};i.tf=p;function V(d,c,b){var a=d.cloneNode(!c);!b&&i.of(a,"id");return a}i.fb=V;i.Db=function(d,f){var a=new Image;function b(e,d){i.X(a,"load",b);i.X(a,"abort",c);i.X(a,"error",c);f&&f(a,d)}function c(a){b(a,e)}if(gb()&&l<11.6||!d)b(!d);else{i.i(a,"load",b);i.i(a,"abort",c);i.i(a,"error",c);a.src=d}};i.Pf=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){i.Db(a.src,b)});b()};i.Qf=function(a,g,i,h){if(h)a=V(a);var c=U(a,g);if(!c.length)c=b.ne(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=V(i);y(e,y(d));b.dd(e,d.style.cssText);b.Ib(e,d);b.Jc(d)}return a};function Gb(a){var l=this,p="",r=["av","pv","ds","dn"],d=[],q,k=0,f=0,e=0;function h(){F(a,q,(d[e||f&2||f]||"")+" "+(d[k]||""));b.qb(a,"pointer-events",e?"none":"")}function c(){k=0;h();i.X(j,"mouseup",c);i.X(j,"touchend",c);i.X(j,"touchcancel",c)}function o(a){if(e)i.ac(a);else{k=4;h();i.i(j,"mouseup",c);i.i(j,"touchend",c);i.i(j,"touchcancel",c)}}l.Nf=function(a){if(a===g)return f;f=a&2||a&1;h()};l.hc=function(a){if(a===g)return!e;e=a?0:3;h()};l.gb=a=i.Hb(a);C(a,"data-jssor-button","1");var m=b.lf(y(a));if(m)p=m.shift();n(r,function(a){d.push(p+a)});q=ab(" ",d);d.unshift("");i.i(a,"mousedown",o);i.i(a,"touchstart",o)}i.Ec=function(a){return new Gb(a)};i.qb=x;i.Bb=m("overflow");i.U=m("top",2);i.If=m("right",2);i.Hf=m("bottom",2);i.T=m("left",2);i.D=m("width",2);i.C=m("height",2);i.Gf=m("marginLeft",2);i.Ff=m("marginTop",2);i.ub=m("position");i.Gb=m("display");i.M=m("zIndex",1);i.wc=function(b,a,c){if(a!=g)Fb(b,a,c);else return Db(b)};i.dd=function(a,b){if(b!=g)a.style.cssText=b;else return a.style.cssText};i.zf=function(b,a){if(a===g){a=x(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}x(b,"backgroundImage",a?"url('"+a+"')":"")};var G;i.yf=G={a:i.wc,f:i.U,s:i.If,q:i.Hf,c:i.T,G:i.D,H:i.C,db:i.ub,gc:i.Gb,ab:i.M};i.Nc=function(c,b){var a={};n(b,function(d,b){if(G[b])a[b]=G[b](c)});return a};function r(h,l){var e=wb(),b=M(),d=ub(),j=N(h);function k(b,d,a){var e=b.zb(v(-d/2,-a/2)),f=b.zb(v(d/2,-a/2)),g=b.zb(v(d/2,a/2)),h=b.zb(v(-d/2,a/2));b.zb(v(300,300));return v(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.ib||0,p=(a.pb||0)%360,q=(a.nb||0)%360,u=(a.I||0)%360,l=a.K,m=a.L,f=a.Yf;if(l==g)l=1;if(m==g)m=1;if(f==g)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Cb(a.vb,a.wb,n);c.pb(p);c.nb(q);c.Je(u);c.oe(a.Rb,a.Sb);c.Kb(l,m,f);if(b){c.tb(a.F,a.E);d.style[j]=c.le()}else if(!X||X<9){var o="",h={x:0,y:0};if(a.hb)h=k(c,a.hb,a.Ab);i.Ff(d,h.y);i.Gf(d,h.x);o=c.je();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=K(s,[t],o);sb(d,r)}}r=function(e,c){c=c||{};var j=c.F,k=c.E,h;n(G,function(a,b){h=c[b];h!==g&&a(e,h)});i.ef(e,c.g);if(!b){j!=g&&i.T(e,(c.Sc||0)+j);k!=g&&i.U(e,(c.Rc||0)+k)}if(c.ge)if(d)qb(i.V(f,P,e,c));else a(e,c)};i.ic=P;if(d)i.ic=r;if(e)i.ic=a;else if(!b)a=P;i.J=r;r(h,l)}i.ic=r;i.J=r;function Cb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,h=c.cos,l=c.tan;function g(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.Kb=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.tb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.pb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.nb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.Je=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.oe=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.zb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.le=function(){return"matrix3d("+b.join(",")+")"};d.je=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.K=function(b,c){return a.Mc(b,c,0)};a.L=function(b,c){return a.Mc(b,0,c)};a.Mc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.zb=function(d,c){var a=b(d,[[c.x],[c.y]]);return v(a[0][0],a[1][0])}};var Q={Sc:0,Rc:0,F:0,E:0,bb:1,K:1,L:1,I:0,pb:0,nb:0,vb:0,wb:0,ib:0,Rb:0,Sb:0};i.Pc=function(c,d){var a=c||{};if(c)if(b.Tc(c))a={S:a};else if(b.Tc(c.g))a.g={S:c.g};a.S=a.S||d;if(a.g)a.g.S=a.g.S||d;return a};i.Yc=function(n,j,s,t,B,C,o){var a=j;if(n){a={};for(var i in j){var D=C[i]||1,z=B[i]||[0,1],h=(s-z[0])/z[1];h=c.min(c.max(h,0),1);h=h*D;var x=c.floor(h);if(h!=x)h-=x;var k=t.S||d.l,m,E=n[i],p=j[i];if(b.nd(p)){k=t[i]||k;var A=k(h);m=E+p*A}else{m=b.O({Yb:{}},n[i]);var y=t[i]||{};b.j(p.Yb||p,function(d,a){k=y[a]||y.S||k;var c=k(h),b=d*c;m.Yb[a]=b;m[a]+=b})}a[i]=m}var w=b.j(j,function(b,a){return Q[a]!=g});w&&b.j(Q,function(c,b){if(a[b]==g&&n[b]!==g)a[b]=n[b]});if(w){if(a.bb)a.K=a.L=a.bb;a.hb=o.hb;a.Ab=o.Ab;if(q()&&l>=11&&(j.F||j.E)&&s!=0&&s!=1)a.I=a.I||1e-8;a.ge=e}}if(j.g&&o.tb){var r=a.g.Yb,v=(r.f||0)+(r.q||0),u=(r.c||0)+(r.s||0);a.c=(a.c||0)+u;a.f=(a.f||0)+v;a.g.c-=u;a.g.s-=u;a.g.f-=v;a.g.q-=v}if(a.g&&!a.g.f&&!a.g.c&&!a.g.E&&!a.g.F&&a.g.s==o.hb&&a.g.q==o.Ab)a.g=f;return a}};function o(){var a=this,d=[];function i(a,b){d.push({Ac:a,Bc:b})}function g(a,c){b.j(d,function(b,e){b.Ac==a&&b.Bc===c&&d.splice(e,1)})}a.Nb=a.addEventListener=i;a.removeEventListener=g;a.o=function(a){var c=[].slice.call(arguments,1);b.j(d,function(b){b.Ac==a&&b.Bc.apply(h,c)})}}var l=function(A,E,g,J,M,L){A=A||0;var a=this,p,m,n,s,C=0,G,H,F,D,z=0,i=0,l=0,y,j,d,f,o,x,u=[],w;function O(a){d+=a;f+=a;j+=a;i+=a;l+=a;z+=a}function r(p){var h=p;if(o)if(!x&&(h>=f||h<d)||x&&h>=d)h=((h-d)%o+o)%o+d;if(!y||s||i!=h){var k=c.min(h,f);k=c.max(k,d);if(!y||s||k!=l){if(L){var m=(k-j)/(E||1);if(g.cd)m=1-m;var n=b.Yc(M,L,m,G,F,H,g);if(w)b.j(n,function(b,a){w[a]&&w[a](J,b)});else b.J(J,n)}a.Fc(l-j,k-j);var r=l,q=l=k;b.j(u,function(b,c){var a=!y&&x||h<=i?u[u.length-c-1]:b;a.W(l-z)});i=h;y=e;a.Qb(r,q)}}}function B(a,b,e){b&&a.Xb(f);if(!e){d=c.min(d,a.Xc()+z);f=c.max(f,a.Gc()+z)}u.push(a)}var v=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.vf()&&b.ud()<7||!v)v=function(a){b.Z(a,g.jb)};function I(){if(p){var d=b.kb(),e=c.min(d-C,g.md),a=i+e*n;C=d;if(a*n>=m*n)a=m;r(a);if(!s&&a*n>=m*n)K(D);else v(I)}}function q(g,h,j){if(!p){p=e;s=j;D=h;g=c.max(g,d);g=c.min(g,f);m=g;n=m<i?-1:1;a.kd();C=b.kb();v(I)}}function K(b){if(p){s=p=D=k;a.jd();b&&b()}}a.id=function(a,b,c){q(a?i+a:f,b,c)};a.hd=q;a.sb=K;a.ve=function(a){q(a)};a.mb=function(){return i};a.gd=function(){return m};a.eb=function(){return l};a.W=r;a.tb=function(a){r(i+a)};a.fd=function(){return p};a.qe=function(a){o=a};a.Xb=O;a.ed=function(a,b){B(a,0,b)};a.rc=function(a){B(a,1)};a.Xc=function(){return d};a.Gc=function(){return f};a.Qb=a.kd=a.jd=a.Fc=b.Oc;a.oc=b.kb();g=b.O({jb:16,md:50},g);o=g.nc;x=g.Ce;w=g.De;d=j=A;f=A+E;H=g.ld||{};F=g.B||{};G=b.Pc(g.k)};var m={Zb:"data-scale",tc:"data-scale-ratio",Pb:"data-autocenter"},n=new function(){var a=this;a.xb=function(c,a,e,d){(d||!b.P(c,a))&&b.P(c,a,e)};a.mc=function(a){var c=b.Jb(a,m.Pb);b.Hc(a,c)}},q=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.Xd=function(d){for(var e=[],a,b=0;b<d.v;b++)for(a=0;a<d.p;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},t=function(m,s,p,u,z,A){var a=this,v,h,g,y=0,x=u.Ae,r,i=8;function t(a){if(a.f)a.E=a.f;if(a.c)a.F=a.c;b.j(a,function(a){b.Ee(a)&&t(a)})}function j(h,f,g){var a={jb:f,m:1,Z:0,p:1,v:1,a:0,bb:0,g:0,tb:k,u:k,cd:k,te:q.Xd,A:{lb:0,ob:0},k:d.l,ld:{},Tb:[],B:{}};b.O(a,h);if(a.v==0)a.v=c.round(a.p*g);t(a);a.k=b.Pc(a.k,d.l);a.we=c.ceil(a.m/a.jb);a.Ne=function(c,b){c/=a.p;b/=a.v;var f=c+"x"+b;if(!a.Tb[f]){a.Tb[f]={G:c,H:b};for(var d=0;d<a.p;d++)for(var e=0;e<a.v;e++)a.Tb[f][e+","+d]={f:e*b,s:d*c+c,q:e*b+b,c:d*c}}return a.Tb[f]};if(a.Lc){a.Lc=j(a.Lc,f,g);a.u=e}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,d,r,p=a.A.lb||0,q=a.A.ob||0,g=a.Ne(n,l),o=B(a),C=o.length-1,s=a.m+a.Z*C,w=v+s,j=a.u,x;w+=50;function B(a){var b=a.te(a);return a.cd?b.reverse():b}y.bd=w;y.Vb=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.ceil(d/a.jb);b.j(h,function(a,e){var d=c.max(f,a.se);d=c.min(d,a.length-1);if(a.ad!=d){if(!a.ad&&!j)b.N(m[e]);else d==a.pe&&j&&b.Y(m[e]);a.ad=d;b.J(m[e],a[d])}})}};i=b.fb(i);A(i,0,0);b.j(o,function(i,m){b.j(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.f=a.f||a.g&4;a.q=a.q||a.g&8;a.c=a.c||a.g&1;a.s=a.s||a.g&2;var E=s?a.q:a.f,B=s?a.f:a.q,D=o?a.s:a.c,C=o?a.c:a.s;a.g=E||B||D||C;r={};d={E:0,F:0,a:1,G:n,H:l};f=b.O({},d);t=b.O({},g[v]);if(a.a)d.a=2-a.a;if(a.ab){d.ab=a.ab;f.ab=0}var K=a.p*a.v>1||a.g;if(a.bb||a.I){var J=e;if(J){d.bb=a.bb?a.bb-1:1;f.bb=1;var N=a.I||0;d.I=N*360*(x?-1:1);f.I=0}}if(K){var i=t.Yb={};if(a.g){var w=a.Tf||1;if(E&&B){i.f=g.H/2*w;i.q=-i.f}else if(E)i.q=-g.H*w;else if(B)i.f=g.H*w;if(D&&C){i.c=g.G/2*w;i.s=-i.c}else if(D)i.s=-g.G*w;else if(C)i.c=g.G*w}r.g=t;f.g=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)d.F+=n*a.x*L;if(a.y)d.E+=l*a.y*M;b.j(d,function(a,c){if(b.nd(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:d;var F=a.we,A=c.round(m*a.Z/a.jb);h[v]=new Array(A);h[v].se=A;h[v].pe=A+F-1;for(var z=0;z<=F;z++){var y=b.Yc(f,r,z/F,a.k,a.B,a.ld,{tb:a.tb,hb:n,Ab:l});y.ab=y.ab||1;h[v].push(y)}})});o.reverse();b.j(o,function(a){b.j(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.fb(i);b.J(a,u[d]);b.Bb(a,"hidden");b.ub(a,"absolute");z.Yd(a);m[d]=a;b.N(a,!j)})})}function w(){var a=this,b=0;l.call(a,0,v);a.Qb=function(c,a){if(a-b>i){b=a;g&&g.Vb(a);h&&h.Vb(a)}};a.Vc=r}a.de=function(){var a=0,b=u.xc,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].yb=a);return b[a]};a.Bf=function(x,y,k,l,b,t){a.rb();r=b;b=j(b,i,t);var f=l.Uc,e=k.Uc;f["no-image"]=!l.jc;e["no-image"]=!k.jc;var o=f,q=e,w=b,d=b.Lc||j({},i,t);if(!b.u){o=e;q=f}var u=d.Xb||0;h=new n(m,q,d,c.max(u-d.jb,0),s,p);g=new n(m,o,w,c.max(d.jb-u,0),s,p);h.Vb(0);g.Vb(0);v=c.max(h.bd,g.bd);a.yb=x};a.rb=function(){m.rb();h=f;g=f};a.af=function(){var a=f;if(g)a=new w;return a};if(z&&b.bf()<537)i=16;o.call(a);l.call(a,-1e7,1e7)},p={Kc:1};var u=function(a,d,i,y,x,w){var c=this;o.call(c);var j,h,g,l;b.D(a);b.C(a);var s,r;function q(a){c.o(p.Kc,a,e)}function v(c){b.N(a,c);b.N(d,c)}function u(){s.hc(i.dc||!j.Te(h));r.hc(i.dc||!j.Ef(h))}c.qc=function(c,a,b){h=a;!b&&u()};c.lc=v;var t;c.kc=function(){h=0;if(!t){b.i(a,"click",b.V(f,q,-l));b.i(d,"click",b.V(f,q,l));s=b.Ec(a);r=b.Ec(d);t=e}};c.Wb=g=b.O({Of:1},i);l=g.Of;j=w;if(g.Kb==k){n.xb(a,m.Zb,1);n.xb(d,m.Zb,1)}if(g.cb){n.xb(a,m.Pb,g.cb);n.xb(d,m.Pb,g.cb)}n.mc(a);n.mc(d)},r=function(g,E){var l=this,x,B,s,a,A=[],z,y,d,q,r,w,v,j,t,h,u;o.call(l);g=b.Hb(g);function D(n,g){var h=this,c,m,j;function o(){m.Nf(s==g)}function i(f){if(f||!t.Lf()){var c=d-g%d,a=t.Ld((g+c)/d-1),b=a*d+d-c;if(a<0)b+=x%d;if(a>=B)b-=x%d;l.o(p.Kc,b,k,e)}}h.yb=g;h.Nd=o;j=n.We||n.jc||b.Fb();h.bc=c=b.Qf(u,"thumbnailtemplate",j,e);m=b.Ec(c);a.vc&1&&b.i(c,"click",b.V(f,i,0));a.vc&2&&b.i(c,"mouseenter",b.V(f,i,1))}l.qc=function(a,f,e){if(a!=s){var b=s;s=a;b!=-1&&A[b].Nd();A[a].Nd()}!e&&t.ff(t.Ld(c.floor(a/d)))};l.lc=function(a){b.N(g,a)};var C;l.kc=function(E,F){if(!C){x=E;B=c.ceil(x/d);s=-1;var f=a.Eb&1;j=j||c.ceil((z+q)/(w+q)*f+(y+r)/(v+r)*(1-f));j=c.min(j,B);var u=w+(w+q)*(d-1)*(1-f),p=v+(v+r)*(d-1)*f,o=u+(u+q)*(j-1)*f,n=p+(p+r)*(j-1)*(1-f);o=c.min(z,o);n=c.min(y,n);b.ub(h,"absolute");b.Bb(h,"hidden");b.D(h,o);b.C(h,n);b.Hc(h,3);var m=[];b.j(F,function(k,g){var i=new D(k,g),e=i.bc,a=c.floor(g/d),j=g%d;b.T(e,(w+q)*j*(1-f));b.U(e,(v+r)*j*f);if(!m[a]){m[a]=b.Fb();b.Q(h,m[a])}b.Q(m[a],e);A.push(i)});var G=b.O({Cb:0,Qd:k,nf:u,pf:p,xd:q*f+r*(1-f),pd:12,rd:200,sd:1,p:j,td:a.Eb,vd:a.Ye||a.Uf?0:a.Eb},a);t=new i(g,G);l.Ve=t.Ve;C=e}};l.Wb=a=b.O({Wc:0,Qc:0,Eb:1,vc:1},E);z=b.D(g);y=b.C(g);h=b.ec(g,"slides",e);u=b.ec(h,"prototype");w=b.D(u);v=b.C(u);b.Jc(u,h);d=a.v||1;q=a.Wc;r=a.Qc;j=a.p;a.Kb==k&&n.xb(g,m.Zb,1);a.cb&=a.Eb;a.cb&&n.xb(g,m.Pb,a.cb);n.mc(g)};function s(e,d,c){var a=this;l.call(a,0,c);a.Id=b.Oc;a.Cd=0;a.Dd=c}var i=function(){var a=this;b.cf(a,o);var Ob="data-jssor-slider",bc="data-jssor-thumb",v,n,T,ob,db,yb,cb,W,N,L,Db,Vb=1,nc=1,dc=1,ec={},x,X,Gb,Jb,Ib,pb,Ab,zb,kb,r=-1,Rb,q,I,H,fb,vb,wb,V,M,O,ab,y,Y,ub,gb=[],jc,lc,fc,Wb,Hc,u,lb,G,hc,tb,Pb,ic,R,Lb=0,P=0,K=Number.MAX_VALUE,E=Number.MIN_VALUE,kc,C,mb,S,J=1,bb,A,eb,Sb=0,Tb=0,Q,qb,rb,nb,w,ib,z,Hb,hb=[],Fb=b.wf(),sb=Fb.Mf,B=[],D,U,F,Nb,ac,Z;function wc(d,k,o){var l=this,h={f:2,s:1,q:2,c:1},n={f:"top",s:"right",q:"bottom",c:"left"},g,a,f,i,j={};l.gb=d;l.cc=function(q,p,t){var l,s=q,r=p;if(!f){f=b.uf(d);g=d.parentNode;i={Kb:b.Jb(d,m.Zb,1),cb:b.Jb(d,m.Pb)};b.j(n,function(c,a){j[a]=b.Jb(d,"data-scale-"+c,1)});a=d;if(k){a=b.fb(g,e);b.J(a,{f:0,c:0});b.Q(a,d);b.Q(g,a)}}if(o){l=c.max(q,p);if(k)if(t>0&&t<1){var v=c.min(q,p);l=c.min(l/v,1/(1-t))*v}}else s=r=l=c.pow(N<L?p:q,i.Kb);b.qf(a,l);b.P(a,m.tc,l);b.D(g,f.G*s);b.C(g,f.H*r);var u=b.Ad()&&b.Kd()<9||b.Kd()<10&&b.Jf()?l:1,w=(s-u)*f.G/2,x=(r-u)*f.H/2;b.T(a,w);b.U(a,x);b.j(f,function(d,a){if(h[a]&&d){var e=(h[a]&1)*c.pow(q,j[a])*d+(h[a]&2)*c.pow(p,j[a])*d/2;b.yf[a](g,e)}});b.Hc(g,i.cb)}}function Gc(){var b=this;l.call(b,-1e8,2e8);b.Df=function(){var a=b.eb();a=t(a);var d=c.round(a),g=d,f=a-c.floor(a),e=cc(a);return{yb:g,Af:d,db:f,gc:a,xf:e}};b.Qb=function(d,b){var g=t(b);if(c.abs(b-d)>1e-5){var f=c.floor(b);if(f!=b&&b>d&&(C&1||b>P))f++;mc(f,g,e)}a.o(i.Ue,g,t(d),b,d)}}function Fc(){var a=this;l.call(a,0,0,{nc:q});b.j(B,function(b){C&1&&b.qe(q);a.rc(b);b.Xb(R/V)})}function Ec(){var a=this,b=Hb.gb;l.call(a,-1,2,{k:d.l,De:{db:Ub},nc:q},b,{db:1},{db:-2});a.bc=b}function xc(o,m){var b=this,d,g,h,j,c;l.call(b,-1e8,2e8,{md:100});b.kd=function(){bb=e;eb=f;a.o(i.hf,t(w.mb()),w.mb())};b.jd=function(){bb=k;j=k;var b=w.Df();a.o(i.Se,t(w.mb()),w.mb());if(!A){Ic(b.Af,r);(!b.db||b.xf)&&mc(r,b.gc)}};b.Qb=function(f,e){var a;if(j)a=c;else{a=g;if(h){var b=e/h;a=n.od(b)*(g-d)+d}}w.W(a)};b.zc=function(a,e,c,f){d=a;g=e;h=c;w.W(a);b.W(0);b.hd(c,f)};b.me=function(a){j=e;c=a;b.id(a,f,e)};b.ke=function(a){c=a};w=new Gc;w.ed(o);w.ed(m)}function yc(){var c=this,a=pc();b.M(a,0);b.qb(a,"pointerEvents","none");c.gb=a;c.Yd=function(c){b.Q(a,c);b.N(a)};c.rb=function(){b.Y(a);b.Pd(a)}}function Dc(m,g){var d=this,s,J,v,j,x=[],C,y,R,E,P,L,F,h,w,p;l.call(d,-M,M+1,{});function K(a){s&&s.Id();Q(m,a,0);L=e;s=new db.R(m,db,b.Jb(m,"idle",hc),!u);s.W(0)}function V(){s.oc<db.oc&&K()}function N(p,r,o){if(!E){E=e;if(j&&o){var f=o.width,c=o.height,m=f,l=c;if(f&&c&&n.Mb){if(n.Mb&3&&(!(n.Mb&4)||f>I||c>H)){var h=k,q=I/H*c/f;if(n.Mb&1)h=q>1;else if(n.Mb&2)h=q<1;m=h?f*H/c:I;l=h?H:c*I/f}b.D(j,m);b.C(j,l);b.U(j,(H-l)/2);b.T(j,(I-m)/2)}b.ub(j,"absolute");a.o(i.ie,g)}}b.Y(r);p&&p(d)}function U(f,b,c,e){if(e==eb&&r==g&&u)if(!Hc){var a=t(f);D.Bf(a,g,b,d,c,H/I);b.he();ib.Xb(a-ib.Xc()-1);ib.W(a);z.zc(a,a,0)}}function Y(b){if(b==eb&&r==g){if(!h){var a=f;if(D)if(D.yb==g)a=D.af();else D.rb();V();h=new Cc(m,g,a,s);h.Hd(p)}!h.fd()&&h.Ic()}}function A(a,e,k){if(a==g){if(a!=e)B[e]&&B[e].Fd();else!k&&h&&h.ce();p&&p.hc();var l=eb=b.kb();d.Db(b.V(f,Y,l))}else{var j=c.min(g,a),i=c.max(g,a),o=c.min(i-j,j+q-i),m=M+n.be-1;(!P||o<=m)&&d.Db()}}function Z(){if(r==g&&h){h.sb();p&&p.ae();p&&p.Zd();h.Ed()}}function ab(){r==g&&h&&h.sb()}function W(b){!S&&a.o(i.Wd,g,b)}function O(){p=w.pInstance;h&&h.Hd(p)}d.Db=function(d,c){c=c||v;if(x.length&&!E){b.N(c);if(!R){R=e;a.o(i.Vd,g);b.j(x,function(a){if(!b.P(a,"src")){a.src=b.z(a,"src2")||"";b.Gb(a,a["display-origin"])}})}b.Pf(x,j,b.V(f,N,d,c))}else N(d,c)};d.Sd=function(){if(q==1){d.Fd();A(g,g)}else{var a;if(D)a=D.de(q);if(a){var h=eb=b.kb(),c=g+lb,e=B[t(c)];return e.Db(b.V(f,U,c,e,a,h),v)}else Cb(lb)}};d.yc=function(){A(g,g,e)};d.Fd=function(){p&&p.ae();p&&p.Zd();d.zd();h&&h.re();h=f;K()};d.he=function(){b.Y(m)};d.zd=function(){b.N(m)};d.Qe=function(){p&&p.hc()};function Q(a,f,c,h){if(b.P(a,Ob))return;if(!L){if(a.tagName=="IMG"){x.push(a);if(!b.P(a,"src")){P=e;a["display-origin"]=b.Gb(a);b.Y(a)}}var d=b.zf(a);if(d){var g=new Image;b.z(g,"src2",d);x.push(g)}c&&b.M(a,(b.M(a)||0)+1)}var i=b.fc(a);b.j(i,function(a){var d=a.tagName,g=b.z(a,"u");if(g=="player"&&!w){w=a;if(w.pInstance)O();else b.i(w,"dataavailable",O)}if(g=="caption"){if(f){b.kf(a,b.z(a,"to"));b.mf(a,b.z(a,"bf"));F&&b.z(a,"3d")&&b.rf(a,"preserve-3d")}}else if(!L&&!c&&!j){if(d=="A"){if(b.z(a,"u")=="image")j=b.Cf(a,"IMG");else j=b.ec(a,"image",e);if(j){C=a;b.J(C,kb);y=b.fb(C,e);b.wc(y,0);b.qb(y,"backgroundColor","#000")}}else if(d=="IMG"&&b.z(a,"u")=="image")j=a;if(j){j.border=0;b.J(j,kb)}}Q(a,f,c+1,h)})}d.Fc=function(c,b){var a=M-b;Ub(J,a)};d.yb=g;o.call(d);F=b.z(m,"p");b.Kf(m,F);b.sf(m,b.z(m,"po"));var G=b.ec(m,"thumb",e);if(G){d.We=b.fb(G);b.Y(G)}b.N(m);v=b.fb(X);b.M(v,1e3);b.i(m,"click",W);K(e);d.jc=j;d.yd=y;d.Uc=m;d.bc=J=m;b.Q(J,v);a.Nb(203,A);a.Nb(28,ab);a.Nb(24,Z)}function Cc(z,g,p,q){var c=this,n=0,v=0,h,j,f,d,m,t,s,o=B[g];l.call(c,0,0);function w(){b.Pd(U);Wb&&m&&o.yd&&b.Q(U,o.yd);b.N(U,!m&&o.jc)}function x(){c.Ic()}function y(a){s=a;c.sb();c.Ic()}c.Ic=function(){var b=c.eb();if(!A&&!bb&&!s&&r==g){if(!b){if(h&&!m){m=e;c.Ed(e);a.o(i.Oe,g,n,v,h,d)}w()}var k,p=i.wd;if(b!=d)if(b==f)k=d;else if(b==j)k=f;else if(!b)k=j;else k=c.gd();a.o(p,g,b,n,j,f,d);var l=u&&(!G||J);if(b==d)(f!=d&&!(G&12)||l)&&o.Sd();else(l||b!=f)&&c.hd(k,x)}};c.ce=function(){f==d&&f==c.eb()&&c.W(j)};c.re=function(){D&&D.yb==g&&D.rb();var b=c.eb();b<d&&a.o(i.wd,g,-b-1,n,j,f,d)};c.Ed=function(a){p&&b.Bb(ab,a&&p.Vc.Wf?"":"hidden")};c.Fc=function(c,b){if(m&&b>=h){m=k;w();o.zd();D.rb();a.o(i.Le,g,n,v,h,d)}a.o(i.Ke,g,b,n,j,f,d)};c.Hd=function(a){if(a&&!t){t=a;a.Nb($JssorPlayer$.Pe,y)}};p&&c.rc(p);h=c.Gc();c.rc(q);j=h+q.Cd;d=c.Gc();f=u?h+q.Dd:d}function Qb(a,c,d){b.T(a,c);b.U(a,d)}function Ub(c,b){var a=y>0?y:T,d=(vb*b+Lb)*(a&1),e=(wb*b+Lb)*(a>>1&1);Qb(c,d,e)}function Mb(a){if(!(C&1))a=c.min(K,c.max(a,E));return a}function cc(a){return!(C&1)&&(a-E<.0001||K-a<.0001)}function gc(){Nb=bb;ac=z.gd();F=w.mb()}function Yb(){gc();if(A||!J&&G&12){z.sb();a.o(i.Ie)}}function Xb(g){if(!A&&(J||!(G&12))&&!z.fd()){var b=w.mb(),a=F,f=0;if(g&&c.abs(Q)>=n.pd){a=b;f=rb}if(cc(b)){if(!g||S)a=c.round(a)}else a=c.ceil(a);a=Mb(a+f);if(!(C&1)){if(K-a<.5)a=K;if(a-E<.5)a=E}var e=c.abs(a-b);if(e<1&&n.od!=d.l)e=1-c.pow(1-e,5);if(!S&&Nb)z.ve(ac);else if(b==a){Rb.Qe();Rb.yc()}else z.zc(b,a,e*tb)}}function Zb(a){!b.Lb(b.Dc(a),"nodrag")&&b.ac(a)}function Ac(a){qc(a,1)}function qc(c,h){var d=b.Dc(c);ub=k;var l=b.Lb(d,"1",bc);if((!l||l===v)&&!Y&&(!h||c.touches.length==1)){ub=b.Lb(d,"nodrag")||!mb||!Bc();var n=b.Lb(d,g,m.tc);if(n)dc=b.P(n,m.tc);if(h){var p=c.touches[0];Sb=p.clientX;Tb=p.clientY}else{var o=b.qd(c);Sb=o.x;Tb=o.y}A=e;eb=f;b.i(j,h?"touchmove":"mousemove",Eb);b.kb();S=0;Yb();if(!Nb)y=0;Q=0;qb=0;rb=0;a.o(i.He,t(F),F,c)}}function Eb(g){if(A){var a;if(g.type!="mousemove")if(g.touches.length==1){var o=g.touches[0];a={x:o.clientX,y:o.clientY}}else jb();else a=b.qd(g);if(a){var d=a.x-Sb,f=a.y-Tb;if(y||c.abs(d)>1.5||c.abs(f)>1.5){if(c.floor(F)!=F)y=y||T&Y;if((d||f)&&!y){if(Y==3)if(c.abs(f)>c.abs(d))y=2;else y=1;else y=Y;if(sb&&y==1&&c.abs(f)>c.abs(d)*2.4)ub=e}var n=f,i=wb;if(y==1){n=d;i=vb}if(Q-qb<-1.5)rb=0;else if(Q-qb>1.5)rb=-1;qb=Q;Q=n;Z=F-Q/i/dc;if(!(C&1)){var l=0,j=[-F+P,0,F-q+O-P];b.j(j,function(b,d){if(b>0){var a=c.pow(b,1/1.6);a=c.tan(a*c.PI/2);l=(a-b)*(d-1)}});var h=l+Z,m=k;j=[-h+P,0,h-q+O-P];b.j(j,function(a,b){if(a>0){a=c.min(a,i);a=c.atan(a)*2/c.PI;a=c.pow(a,1.6);Z=a*(b-1)+P;if(b)Z+=q-O;m=e}});if(!m)Z=h}if(Q&&y&&!ub){b.ac(g);if(!bb)z.me(Z);else z.ke(Z)}}}}}function jb(){zc();if(A){S=Q;b.kb();b.X(j,"mousemove",Eb);b.X(j,"touchmove",Eb);S&&u&8&&(u=0);z.sb();A=k;var c=w.mb();a.o(i.Ge,t(c),c,t(F),F);G&12&&gc();Xb(e)}}function vc(c){var a=b.Dc(c),d=b.Lb(a,"1",Ob);if(v===d)if(S){b.jf(c);while(a&&v!==a){(a.tagName=="A"||b.P(a,"data-jssor-button"))&&b.ac(c);a=a.parentNode}}else u&4&&(u=0)}function rc(d){if(d!=r){var b=nb.eb(),a=Mb(d),e=c.round(t(a));if(b-a<.5)a=b;B[r];r=e;Rb=B[r];w.W(a)}}function Ic(b,c){y=0;rc(b);if(u&2&&(lb>0&&r==q-1||lb<0&&!r))u=0;a.o(i.Re,r,c)}function mc(a,d,e){if(!(C&1)){a=c.max(0,a);a=c.min(a,q-O+P);a=c.round(a)}a=t(a);b.j(gb,function(b){b.qc(a,d,e)})}function Bc(){var b=i.Jd||0,a=mb;i.Jd|=a;return Y=a&~b}function zc(){if(Y){i.Jd&=~mb;Y=0}}function pc(){var a=b.Fb();b.J(a,kb);return a}function t(b,a){a=a||q||1;return(b%a+a)%a}function Kb(c,a,b){u&8&&(u=0);xb(c,tb,a,b)}function Bb(){b.j(gb,function(a){a.lc(a.Wb.Vf<=J)})}function tc(){if(!J){J=1;Bb();if(!A){G&12&&Xb();G&3&&B[r]&&B[r].yc()}}a.o(i.ye)}function sc(){if(J){J=0;Bb();A||!(G&12)||Yb()}a.o(i.xe)}function uc(){b.j(hb,function(a){b.J(a,kb);b.Bb(a,"hidden");b.Y(a)});b.J(X,kb)}function Cb(b,a){xb(b,a,e)}function xb(l,f,m,o){if(!A&&(J||!(G&12))||n.Qd){bb=e;A=k;z.sb();if(f==g)f=tb;var b=t(nb.eb()),d=l;if(m){d=b+l;d=c.round(d)}var a=d;if(!(C&1)){if(o)a=t(a);else if(C&2&&(a<0&&c.abs(b-E)<.0001||a>q-O&&c.abs(b-K)<.0001))a=a<0?K:E;a=Mb(a);if(K-a<.5)a=K;if(a-E<.5)a=E}var j=(a-b)%q;a=b+j;var h=b==a?0:f*c.abs(j),i=1;if(M>1)i=(T&1?Ab:zb)/V;h=c.min(h,f*i*1.5);z.zc(b,a,h||1)}}a.Cb=function(a){if(a==g)return u;if(a!=u){u=a;u&&B[r]&&B[r].yc()}};a.Lf=function(){return S};a.hb=function(){return N};a.Ab=function(){return L};a.ue=function(b){if(b==g)return Db||N;a.cc(b,b/N*L)};a.cc=function(c,a,d){b.D(v,c);b.C(v,a);Vb=c/N;nc=a/L;b.j(ec,function(a){a.cc(Vb,nc,d)});if(!Db){b.Ib(ab,x);b.U(ab,0);b.T(ab,0)}Db=c};a.Te=function(a){return c.abs(a-E)<.0001};a.Ef=function(a){return c.abs(a-K)<.0001};a.ff=xb;a.id=function(){a.Cb(u||1)};a.Ld=function(a){a=t(a);if(C&1){var e=R/V,b=t(nb.eb()),d=t(a-b+e),f=t(c.abs(a-b));if(d>=M){if(f>q/2)if(a>b)a-=q;else a+=q}else if(a>b&&d<e)a-=q;else if(a<b&&d>e)a+=q}return a};a.Ub=function(A,m){a.gb=v=b.Hb(A);N=b.D(v);L=b.C(v);n=b.O({Mb:0,be:1,Ob:1,pc:0,Cb:0,dc:1,uc:e,Qd:e,Fe:1,Od:3e3,sd:1,rd:500,od:d.Be,pd:20,xd:0,Me:1,td:1,vd:1},m);n.uc=n.uc&&b.Xe();if(n.Rd!=g)n.Od=n.Rd;if(n.Td!=g)n.p=n.Td;if(n.Ud!=g)n.sc=n.Ud;T=n.td&3;ob=n.ze;db=b.O({R:s},n.Rf);yb=n.Sf;cb=n.ee;W=n.fe;!n.Me;var r=b.fc(v);b.j(r,function(a,d){var c=b.z(a,"u");if(c=="loading")X=a;else{if(c=="slides")x=a;if(c=="navigator")Gb=a;if(c=="arrowleft")Jb=a;if(c=="arrowright")Ib=a;if(c=="thumbnavigator")pb=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")ec[c||d]=new wc(a,c=="slides",b.Zc(["slides","thumbnavigator"])[c])}});X=X||b.Fb(j);Ab=b.D(x);zb=b.C(x);I=n.nf||Ab;H=n.pf||zb;kb={G:I,H:H,f:0,c:0,gc:"block",db:"absolute"};fb=n.xd;vb=I+fb;wb=H+fb;V=T&1?vb:wb;var i=T&1?Ab:zb;lb=n.Fe;G=n.sd;hc=n.Od;tb=n.rd;Hb=new yc;if(n.uc&&(!b.gf()||sb))Qb=function(a,c,d){b.ic(a,{vb:c,wb:d})};u=n.Cb&63;a.Wb=m;b.P(v,Ob,"1");b.M(x,b.M(x)||0);b.ub(x,"absolute");ab=b.fb(x,e);b.Ib(ab,x);ib=new Ec;b.Q(ab,ib.bc);b.Bb(x,"hidden");G&=sb?10:5;var y=b.fc(x),Q=b.Zc(["DIV","A","LI"]);b.j(y,function(a){Q[a.tagName.toUpperCase()]&&!b.z(a,"u")&&hb.push(a);b.M(a,(b.M(a)||0)+1)});U=pc();b.qb(U,"backgroundColor","#000");b.wc(U,0);b.M(U,0);b.Ib(U,x.firstChild,x);q=hb.length;var o=c.ceil((i+fb)/V);if(n.p)o=n.p;M=c.min(q,o);O=(i+fb)/V;kc=M<q;C=kc?n.dc:0;if(q){uc();R=n.sc;if(R==g){var w=T&1?I:H;R=(i-w)/2}if(q<O){R=0;O=q;Lb=(i-V*q+fb)/2}if(ob){Wb=ob.Xf;Pb=ob.R;ic=!R&&M==1&&q>1&&Pb&&(!b.Ad()||b.ud()>=9)}if(!(C&1)){P=R/V;E=P;K=E+q-O}mb=(M>1||R?T:-1)&n.vd;Fb.Bd&&b.qb(x,Fb.Bd,([f,"pan-y","pan-x","none"])[mb]||"");if(ic)D=new Pb(Hb,I,H,ob,sb,Qb);for(var k=0;k<hb.length;k++){var F=hb[k],J=new Dc(F,k);B.push(J)}b.Y(X);nb=new Fc;z=new xc(nb,ib);b.i(v,"click",vc,e);b.i(v,"mouseleave",tc);b.i(v,"mouseenter",sc);b.i(v,"mousedown",qc);b.i(v,"touchstart",Ac);b.i(v,"dragstart",Zb);b.i(v,"selectstart",Zb);b.i(h,"mouseup",jb);b.i(j,"mouseup",jb);b.i(j,"touchend",jb);b.i(j,"touchcancel",jb);b.i(h,"blur",jb);if(Gb&&yb){jc=new yb.R(Gb,yb,N,L);gb.push(jc)}if(cb&&Jb&&Ib){cb.dc=C;lc=new cb.R(Jb,Ib,cb,N,L,a);gb.push(lc)}if(pb&&W){W.pc=n.pc;W.Ob=W.Ob||0;fc=new W.R(pb,W);!W.Ye&&b.P(pb,bc,"1");gb.push(fc)}b.j(gb,function(a){a.kc(q,B,X);a.Nb(p.Kc,Kb)});b.qb(v,"visibility","visible");a.cc(N,L);Bb();n.Ob&&b.i(j,"keydown",function(a){if(a.keyCode==37)Kb(-n.Ob,e);else a.keyCode==39&&Kb(n.Ob,e)});var l=n.pc;l=t(l);xb(l,0)}};b.Ub(a)};i.Wd=21;i.He=22;i.Ge=23;i.hf=24;i.Se=25;i.Vd=26;i.ie=27;i.Ie=28;i.xe=31;i.ye=32;i.Ue=202;i.Re=203;i.Oe=206;i.Le=207;i.Ke=208;i.wd=209;jssor_1_slider_init=function(){var g=[{m:800,x:.3,B:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:800,x:-.3,u:e,k:{c:d.n,a:d.l},a:2},{m:800,x:-.3,B:{c:[.3,.7]},k:{c:d.n,a:d.l},a:2},{m:800,x:.3,u:e,k:{c:d.n,a:d.l},a:2},{m:800,y:.3,B:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:800,y:-.3,u:e,k:{f:d.n,a:d.l},a:2},{m:800,y:-.3,B:{f:[.3,.7]},k:{f:d.n,a:d.l},a:2},{m:800,y:.3,u:e,k:{f:d.n,a:d.l},a:2},{m:800,x:.3,p:2,B:{c:[.3,.7]},A:{lb:3},k:{c:d.n,a:d.l},a:2},{m:800,x:.3,p:2,u:e,A:{lb:3},k:{c:d.n,a:d.l},a:2},{m:800,y:.3,v:2,B:{f:[.3,.7]},A:{ob:12},k:{f:d.n,a:d.l},a:2},{m:800,y:.3,v:2,u:e,A:{ob:12},k:{f:d.n,a:d.l},a:2},{m:800,y:.3,p:2,B:{f:[.3,.7]},A:{lb:12},k:{f:d.n,a:d.l},a:2},{m:800,y:-.3,p:2,u:e,A:{lb:12},k:{f:d.n,a:d.l},a:2},{m:800,x:.3,v:2,B:{c:[.3,.7]},A:{ob:3},k:{c:d.n,a:d.l},a:2},{m:800,x:-.3,v:2,u:e,A:{ob:3},k:{c:d.n,a:d.l},a:2},{m:800,x:.3,y:.3,p:2,v:2,B:{c:[.3,.7],f:[.3,.7]},A:{lb:3,ob:12},k:{c:d.n,f:d.n,a:d.l},a:2},{m:800,x:.3,y:.3,p:2,v:2,B:{c:[.3,.7],f:[.3,.7]},u:e,A:{lb:3,ob:12},k:{c:d.n,f:d.n,a:d.l},a:2},{m:800,Z:20,g:3,k:{g:d.n,a:d.l},a:2},{m:800,Z:20,g:3,u:e,k:{g:d.Md,a:d.l},a:2},{m:800,Z:20,g:12,k:{g:d.n,a:d.l},a:2},{m:800,Z:20,g:12,u:e,k:{g:d.Md,a:d.l},a:2}],j={Cb:1,sc:0,ze:{R:t,xc:g,Ae:1},ee:{R:u},fe:{R:r,p:5,sc:390}},f=new i("jssor_1",j),k=980;function a(){var d=f.gb.parentNode,b=d.clientWidth;if(b){var e=c.min(k||b,b);f.ue(e)}else h.setTimeout(a,30)}a();b.i(h,"load",a);b.i(h,"resize",a);b.i(h,"orientationchange",a)}})(window,document,Math,null,true,false)
      </script>
      <style>
         .jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}.jssort111 .p{position:absolute;top:0;left:0;width:200px;height:100px;background-color:#000}.jssort111 .p img{position:absolute;top:0;left:0;width:100%;height:100%}.jssort111 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45}.jssort111 .p:hover .t{opacity:.8}.jssort111 .pav .t,.jssort111 .pdn .t,.jssort111 .p:hover.pdn .t{opacity:1}.jssort111 .ti{position:absolute;bottom:0;left:0;width:100%;height:28px;line-height:28px;text-align:center;font-size:12px;color:#fff;background-color:rgba(0,0,0,.3)}.jssort111 .pav .ti,.jssort111 .pdn .ti,.jssort111 .p:hover.pdn .ti{color:#000;background-color:rgba(255,255,255,.6)}
         body {
         max-width: 100%;	
         overflow-x: hidden;
         }
          
        .plus-for-numbers{
            display: none;
        }


	.container-fluid {
			 padding-left:0 !important;
			 padding-right:0 !important;
		 }
	      
	#footer .footer-links a{
		text-decoration: none;
		color:white;
	}
	#home-gallery .ti {
		display:none;	
	}
	@media screen and (min-width: 900px) {

	.honeycomb-size-fix{
		padding-left:50px;
		padding-right:50px;
	      }
	}
	.hexLink .skew-box-diagonal-border {
    transform: rotate3d(0 0 1 90deg) skewY(-40deg);
    border: 3px solid red;
    height: 100%;
    width: 100%;
    z-index: 1;
    bottom: 0;
    left: -1.75%;
}


.hexLink .box-vertical-border {
	width:  100%;
    height: 100%;
    left: 0;
    border: 3px solid red;
    z-index: 2;
}

      </style>
   </head>
   <body>
      <button class="md-trigger" data-modal="modal-12" id="thank-you-modal-button" style="display:none" ></button>
      <div class="md-modal md-effect-4" id="modal-12">
         <div class="md-content">
            <h3>Thank You<a class="md-close" style="float:right ; text-decoration:none;color:white;cursor:pointer;">x</a></h3>
            <div>
               <p><?php 
                  echo $_SESSION['message']; ?></p>
            </div>
         </div>
      </div>
	        <div class="container-fluid">
	<div>
		<section class="navigation" style="width:100%;position:fixed ; z-index : 100">
            <div class="nav-container">
               <div class="brand" style="width : 25%">
                  <p style="
    padding-top: 0px;
    margin-top: 0;
"> <a href="#"><img src="https://i.imgur.com/NSBCfAX.png" style="height: 80%;margin-top: 4px;"></a></p>
               </div>
               
               <nav class="headd" >
                  <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                  <ul class="nav-list">
                     <li>
                        <a href="#">Home</a>
                     </li>
                     <li>
                        <a href="#about">About</a>
                     </li>
                     <li>
                        <a href="#pasts">Initiatives</a>
                        <ul class="nav-dropdown" style="display: none;">
                           <li>
                              <a href="#">Hult Prize</a>
                           </li>
                           <li>
                              <a href="#">Summer in a Startup</a>
                           </li>
                           <li>
                              <a href="#">E-Weekend</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">The Team</a>
                     </li>
                     <li>
                        <a href="#apply">Apply</a>
                        <ul class="nav-dropdown" style="display: none;">
                          
                           <li>
                              <a href="#">As Coordinator</a>
                           </li>
                           <li>
                              <a href="#">As Campus Ambassador</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ContactUs">Contact</a>
                     </li>
                     <li>
                        <a href="https://juecell.in/alumni/" target="_black">For the Alumni</a>
                        
                     </li>
                  </ul>
               </nav>
            </div>
         </section>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item" id="topthree" style="color:white">
                     <img src="assets/images/bread2.jpg" style="width:100%;">
                     <div class="header-text" style="color:white">
                        <div class="col-md-12 text-center">
                           <h1>
                              <strong></strong>
                           </h1>
                        </div>
                     </div>
                     <!-- /header-text -->  
                  </div>
                  <div class="item" id="toptw" style="color:white;background-image: url('https://i.imgur.com/Gnor7dP.png');
    background-position: cleft center;
    background-attachment: fixed;
    background-size: cover;
    max-width: 100%;
    height: 700px">
                     
                     <div class="header-text" style="color:white">
                     <div class="col-md-12 text-left" style="color:white ; width: 100% ; text-align: left">
                     <h2 style="font-size: 56px ; font-weight: bold;font-family: 'Archivo Black', sans-serif
">
                        JADAVPUR UNIVERSITY
                     </h2>
                     <h3>
                         Entrepreneurship Cell
                     </h3>
                     <br>
                   <div class="opening-button">
                   <button class="btn btn-danger">KNOW MORE</button>
                   </div>
                </div>
                     </div>
                     <!-- /header-text -->
                  </div>
                  <div class="item active" id="topone" style="color:white">
                     <img src="carousel1.svg"  style="width:100%;">
                     <div class="header-text " style="color:white">
                        <div class="col-md-12 text-left" style="color:white ; width: 100% ; text-align: left">
                             <h2 style="font-size: 56px ; font-weight: bold;font-family: 'Archivo Black', sans-serif
">
                                JADAVPUR UNIVERSITY
                             </h2>
                           
                             <h3>
                                 Entrepreneurship Cell
                             </h3>
                             <br>
                           <div class="opening-button">
                           <button class="btn btn-danger">KNOW MORE</button>
                           </div>
                        </div>
                     </div>
                     <!-- /header-text -->
                  </div>
               </div>
               <!-- Left and right controls -->
               <a class="left carousel-control slide_fade" href="#myCarousel" data-slide="prev" onmouseover="slide_on_hover(0,1)" onmouseout="slide_on_hover(0,0)">
               <span class="glyphicon glyphicon-chevron-left" id="slide_on_hover_0" style="display:none" ></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control slide_fade" href="#myCarousel" data-slide="next"  onmouseover="slide_on_hover(1,1)" onmouseout="slide_on_hover(1,0)">
               <span class="glyphicon glyphicon-chevron-right"  id="slide_on_hover_1" style="display:none"></span>
               <span class="sr-only">Next</span>
               </a>
               <script>
                  function slide_on_hover(dir,fState){
                  	var target= "slide_on_hover_" + dir;
                  	if(fState==1){
                  		document.getElementById(target).style.display = "inline";
                  	}
                  	else if(fState==0){
                  		document.getElementById(target).style["display"] = "none";
                  	}		
                  }
                   
               </script>
            </div>
		
		</div>
	  </div>
	  <div class="container-fluid ">
	  <div class='paget vision' style="text-align:center">
            <div id="vision" class=" right-stop left-stop " style="text-align:center">
               <h2 style="color:#B69BFA ; font-family :'Playfair Display', serif; font-size: 42px;font-weight:bold" >
                  VISION
               </h2>
               <br>
               <p style="text-align: justify;font-size: 15px">
                  Entrepreneurship is the set of wings that a country requires to soar higher.
                  And the Jadavpur University Entrepreneurship Cell aims at invoking a spirit of entrepreneurship
                  among the new generation, a stepping stone towards the better future of our Nation and her growing economy.
                  We believe in providing a platform to guide these creative minds through effective interaction between
                  the student body and esteemed members of the corporate world, successful entrepreneurs, investors,
                  venture capitalists, thus helping their ideas transform into entrepreneurial ventures.
                  We aim to help dreams take off, here at Jadavpur University! 
               </p>
            </div>
         </div>
         <div class='paget' style="background-color: #100F0F !important">
            <div class='sectiont featuret-1'>
               <div class="uppertest hvr-ripple-out">  <i class="fa fa-lightbulb-o fa-3x" aria-hidden="true" style="color:black"></i></div>
               <div>
                  <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold">IDEATE</h3>
               </div>
               <div>
                  <p style="text-align: center">Put on your Imagination Hats! </p>
               </div>
            </div>
            <div class='sectiont featuret-2'>
               <div class="uppertest hvr-ripple-out"><i class="fa fa-users fa-3x" aria-hidden="true"></i></div>
               <div>
                  <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold"> INNOVATE</h3>
               </div>
               <div>
                  <p style="text-align: center">Explore hidden potentials!</p>
               </div>
            </div>
            <div class='sectiont featuret-3'>
               <div class="uppertest hvr-ripple-out"><i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
               </div>
               <div>
                  <h3 style="color: #B69BFA ;font-family: 'Playfair Display' , serif;font-weight:bold"> BUILD</h3>
               </div>
               <div>
                  <p style="text-align: center">Pick up your Magic Wands!</p>
               </div>
            </div>
         </div>

	  </div>
	  	<div class="container-fluid upcoming-events">


          <div class="upcoming-header">
          <h1 style="color: #2b2828; padding-top: 30px ; font-family: 'Playfair Display' , serif; font-weight: bold ">UPCOMING EVENTS</h1>
          <p style="color:#585252;font-size:18px">An overview of the exciting events we have planned</p>
          </div>
          <div class="cards" >
          
                          
                         <div class="card card-1">
                            <div class="card-image">
                            <img class="upcoming-card-1-img" src="https://i.imgur.com/Wmqxv19.png" alt=""></img>
                            </div>

                            <div class="card-body">
                            <h2 style="text-align: center;color: black;font-family:'Roboto', seriff;font-weight: 500">Josh Talks</h2>
                            <p style="color: #666 "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptatibus autem consectetur voluptate facere at, omnis ab optio placeat officiis! Animi modi harum enim quia veniam consectetur unde autem inventore.</p>
                            
                            <p><strong style="color: black ; font-size : 16px">Where </strong>:  Jadavpur University Gandhi Bhavan </p>
                                  <p><strong style="color: black ; font-size : 16px" >When :</strong> January , 2018 </p>
                                  <p style="text-align: center"><a href="#" class="btn btn-lg btn-primary detail-button">Details</a></p>
                            </div>
                         </div>
          
                  <div class="card">
                            <div class="card-image">
                            <img class="upcoming-card-1-img" src="https://i.imgur.com/fLGTOmN.png" alt=""></img>
                            </div>
                            
                            <div class="card-body">
                            <h2 style="text-align: center;color: black;font-family:"DINWebPro", Helvetica, Arial, sans-serif;font-weight: 500">Falling Walls</h2>
                            <p style="color: #666 "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptatibus autem consectetur voluptate facere at, omnis ab optio placeat officiis! Animi modi harum enim quia veniam consectetur unde autem inventore.</p>
                            
                            <p><strong style="color: black ; font-size : 16px">Where </strong>:  Jadavpur University Gandhi Bhavan </p>
                                  <p><strong style="color: black ; font-size : 16px" >When :</strong> January , 2018 </p>
                                  <p style="text-align: center"><a href="#" class="btn btn-lg btn-primary detail-button">Details</a></p>
                            </div>
                   </div>
          
          
         </div>
		
		</div>



        
	  	<div class="container-fluid ">
			<div class="section honeycomb-size-fix" style="text-align: center" id="pasts" >
            <h1 style="color: white ;font-family: 'Changa One', cursive;
               "> PAST EVENTS </h1>
            <ul id="hexgrid" style="padding-left:0px">
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/b92rjqb.png" alt="" />
                        <h3>Hult Prize at JU</h3>
                        <p>Nobel Prize for Student Entrepreneurs</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/VKnSAKH.jpg" alt="" />
                        <h3>JU ABC Club </h3>
                        <p>Analytics, Business and Consulting Division</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/TcoGzRz.png" alt="" />
                        <h3>Jet Set Vote</h3>
                        <p>Spreading Awareness about Voting with Youth Ki Awaaz</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/qHO3RqD.png" alt="Summer in a Startup " />
                        <h3>Summer in a Startup</h3>
                        <p>Grab amazing internships this summer!</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/9hrDuBc.png" alt="E-Weekend 2017" />
                        <h3>E-Weekend 2017</h3>
                        <p>A trio of events that brought 400+ enthusiasts together!</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/jQWjiWF.png" alt="Facebook on Campus" />
						<h3>FB on Campus</h3>
                        <p>JU E-Cell, with FB & YouthKiAwaaz, set up a Startup workshop!</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/Rcs85FJ.png" alt="" />
                        <h3>Start-Up Weekend</h3>
                        <p>54 engaging hours of brainstorming, B-plan making and mentoring!</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/oos8JME.png" alt="" />
                        <h3>Epiphany</h3>
                        <p>Dive into the Case Challenge @Srijan</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/e4ZNWyQ.png" alt="" />
                        <h3>B-Model</h3>
                        <p>Pitch your Business plan @Srijan</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/lDO9V4O.png" alt="" />
                        <h3>The Great Debate</h3>
                        <p>The most prestigious Debate in the City with BDHC</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
               <li class="hex">
                  <div class="hexIn">
                     <a class="hexLink" href="#">
					 <span class="box-vertical-border"></span>
                        <img src="https://i.imgur.com/xvTbKeU.png" alt="NASSCOM" />
                        <h3>NASSCOM</h3>
                        <p>Exciting App Dev Workshop with Internships at offer!</p>
						<span class="hexIn skew-box-diagonal-border"></span>
                     </a>
                  </div>
               </li>
            </ul>
         </div>

		</div>
		<div class="container-fluid ">
		         <div class='application-container' id="daaamn">
            <div class='application'>
               <div id='about' class="col-md-8">
                  <h1 style="font-family: 'Playfair Display' , serif
                  ;color:#B69BFA;font-weight: bold;font-size:38px" >ABOUT US</h1>
                  <p  style="text-align:justify;font-size: 15px">
                     Are you a Start-up Enthusiast with a plan in hand, looking for the missing piece in your start-up puzzle?
                     Are you a Venture Capitalist or Angel Investor, hunting to find the best place to invest ?
                     Or, Are you just a Student with a passionate heart and curious mind, exploring all what college-life has to offer?
                     Well, you have come to the right place! 
                     Jadavpur University Entrepreneurship-Cell is an organisation that aims to actively infuse the spirit of entrepreneurship among students by creating just the perfect environment that is start-up friendly. Right from sowing the seed of Entrepreneurship in aspiring hearts, to watering them with workshops and training and then providing them with the manures of Mentoring, the exuberant team of student coordinators at Jadavpur University E-Cell strive hard to make your Start-up journey smooth, enriching and euphoric!
                     Helping dreams take off at Jadavpur University,
                     The Entrepreneurship Cell.
                  </p>
               </div>
               <div class='apply col-md-4' id="apply">
                  <h1  style="font-family: 'Playfair Display' , serif
                     ;color:#B69BFA;font-weight: bold;font-size:38px">Join Us</h1>
                  <div class="application-buttons">
                     <button type="button" class="btn btn-info btn-lg hvr-float-shadow" data-toggle="modal" data-target="#Coordinator-Modal">As Coordinator</button>
                     <button  type="button" class="btn btn-info btn-lg hvr-float-shadow" data-toggle="modal" data-target="#Ambassador-Modal">As Campus Ambassador</button>
                  </div>
               </div>
            </div>
         </div>
		</div>
		<div class="container-fluid ">
		<div class="counter-section" >
         <div>
            <h2 style="color: white ;font-family: 'Archivo Black', sans-serif"> In Numbers </h2>
         </div>
         <div class="countersz" style="color: white;font-family:'Playfair Display' , serif">
            <div>
               <span id= "counter" class="counter-value" data-count="500" style="font-size: 45px;font-family:'Playfair Display' , serif">0</span><span style="font-size:40px" class="plus-for-numbers counter-value" >+</span>
               <h3>Members</h3>
            </div>
            <div>
               <span id="counter"  class="counter-value" data-count="50" style="font-size: 45px;font-family:'Playfair Display' , serif">0</span><span style="font-size:40px" class="plus-for-numbers counter-value" >+</span>
               <h3>Coordinators</h3>
            </div>
            <div>
               <span id="counter" class="counter-value" data-count="75" style="font-size: 45px;font-family:'Playfair Display' , serif">0</span><span style="font-size:40px" class="plus-for-numbers counter-value" >+</span>
               <h3>Campus<br>Ambassadors</h3>
            </div>
            <div>
               <span id="counter" class="counter-value" data-count="5" style="font-size: 45px;font-family:'Playfair Display' , serif">0</span><span style="font-size:40px" class="plus-for-numbers counter-value" >+</span>
               <h3>Events</h3>
            </div>
         </div>
			</div>
		</div>
		
		<div class="container-fluid ">
		<div class="container-contact">
        <div class="container-form col-sm-7 col-md-5" id="ContactUs">
<form action="#ContactUs" method="post" id="contact-form" name="contact-form">        
        <h1> Contact Us </h1>
          <ul class="flex-outer">

		<li>
              <label for="contact-form-name"></label>
              <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="text" name="contact-form-name" id="contact-form-name" placeholder="Name*" required>
            </li>
            
            <li>
              <label for="contact-form-email"></label>
              <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="text" name="contact-form-email" id="contact-form-email" placeholder="EMail Address*" required>
            </li>
            <li>
              <label for="contact-form-phone"></label>
              <input style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black;" type="text" name="contact-form-phone" id="contact-form-phone" placeholder="Contact Number">
            </li>
            <li>
              <label for="contact-form-message"></label>
              <textarea style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color:  black; border-radius:0" rows="6" name="contact-form-message" id="contact-form-message" placeholder="Your message*"></textarea>
            </li>
       
            <li>
			<center style="width:100%;text-align:right ">
              <input type="submit" value="Send" id="contact-form-submit" name="contact-form-submit" style="
    position:  relative;
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    z-index: 0;
    margin-right: 0 ;
    background:  black;
    box-shadow: 0 0;
    border-radius: 0 ; 
">
            </center>
			</li>
          </ul>
        </form>
        </div>
         <div class="container-map" style="margin-left:0;padding-right:0;height:600px">
            <h1>FIND US HERE </h1>
            <div id="map" style="width: 100%; color: black" ></div>
         </div>
			</div>
      
		</div>
		
		<div class="container-fluid ">
		            <div  id="home-gallery" style="text-align:center">
               <div>
                  <h1 style="color: black ;font-family: 'Changa One', cursive; text-align:center"> Gallery </h1>
                  <hr>
               </div>
               <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                  <!-- Loading Screen -->
                  <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                     <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="./assets/images/spin.svg"  />
                  </div>
                  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                     <div>
                        <img data-u="image" src="https://i.imgur.com/7eNMu4gh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/7eNMu4gh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/DZGzy40h.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/DZGzy40h.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/4FK4wTTh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/4FK4wTTh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/BipMlJ6h.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/BipMlJ6h.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/NPLfNkDh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/NPLfNkDh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/G6fpYyVh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/G6fpYyVh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/S3gdrXJh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/S3gdrXJh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/0DixybJh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/0DixybJh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/sSp5in3h.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/sSp5in3h.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/L2cGMaVh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/L2cGMaVh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/QrqR21wh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/QrqR21wh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/MHbEul0h.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/MHbEul0h.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
					<div>
                        <img data-u="image" src="https://i.imgur.com/hu2vjelh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/hu2vjelh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/mGO3iCUh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/mGO3iCUh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/ACRz2zXh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/ACRz2zXh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/7VCL82Lh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/7VCL82Lh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/Spv6qbWh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/Spv6qbWh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/qqDGkL4h.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/qqDGkL4h.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/7ORANtWh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/7ORANtWh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/yxAuSZNh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/yxAuSZNh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/Slyzj2uh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/Slyzj2uh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/pWyDwqjh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/pWyDwqjh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>
                     <div>
                        <img data-u="image" src="https://i.imgur.com/CoseHySh.jpg" />
                        <div data-u="thumb">
                           <img data-u="thumb" src="https://i.imgur.com/CoseHySh.jpg" />
                           <div class="ti">Tiltle of image</div>
                        </div>
                     </div>					 
                  </div>
                  <!-- Thumbnail Navigator -->
                  <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;cursor:default;" data-autocenter="1" data-scale-bottom="0.75">
                     <div data-u="slides">
                        <div data-u="prototype" class="p">
                           <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                     </div>
                  </div>
                  <!-- Arrow Navigator -->
                  <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:162px;left:25px;" data-scale="0.75">
                     <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                     </svg>
                  </div>
                  <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:162px;right:25px;" data-scale="0.75">
                     <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                     </svg>
                  </div>
               </div>
               <script type="text/javascript">jssor_1_slider_init();</script>
            </div>
			<div id="testinomial" class="container-fluid">
			        <div class="roww">
            <div class="col-md-12">
			<h1 style="color: black ;font-family: 'Changa One', cursive; text-align:center"> Testimonial </h1>
                <div class="carousel slide" data-ride="carousel" id="testinomial-quote-carousel">
				
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p style="padding-left:30px">Just go out there and do whatever you enjoy without thinking where/how you might end up. You will see you have achieved and learnt a lot even if you fail. Only remember, hard work and taking risk are never going to go out of fashion in any era. Just add this to your repertoire and you will flourish.</p>
										<small><b>Sauvik Banerjee</b><br>VP ,Tata CLiQ</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p style="padding-left:30px">To any entrepreneur: if you want to do it, do it now. If you don’t, you’re going to regret it. Do Or do not. There is no try.It’s not about ideas. It’s about making ideas happen.I congratulate to all those students who made rigorous efforts to make this idea of an Entrepreneurship Cell in Jadavpur University come to life.</p>
                                        <small><b>Prof. Surjayan Sen</b><br>VC, Jadavpur University</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p style="padding-left:30px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testinomial-quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://i.imgur.com/2tqMelrt.png" alt="">
                        </li>
                        <li data-target="#testinomial-quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://i.imgur.com/cXQ9Wsrt.png" alt="">
                        </li>
                        <li data-target="#testinomial-quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#testinomial-quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#testinomial-quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
<style>
#testinomial-quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#testinomial-quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#testinomial-quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#testinomial-quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#testinomial-quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
#testinomial .item blockquote {
    border-left: none;
    margin: 0;
}
#testinomial .item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}

</style>




            </div>
            

            
			<div class="container-fluid" style="background-color:#1f2930">
			<div id="footer" class="container" >
         <div id="img-footer" class="col-sm-4">
            <span><img id="footer-logo" src="https://i.imgur.com/NSBCfAX.png"  style="margin-top:20px;height:70px"></span>
            <hr>
            <div id="footer-info" >
               <span id="footer-info">
               Jadavpur University<br>
               Kolkata, IN
               </span>
               <br><br><br>
               <span style="padding-top:10px">
               contact@juecell.in
               </span>
               <br>
               <br>
            </div>
         </div>
         <div class="col-sm-2">
            <span style="font-family: 'Anton', sans-serif;">
               <h3>Navigate</h3>
            </span>
            <br>
            <br>
            <span class="footer-links">
            <a href="#">Home</a><br><br>
            <a href="#">Events</a><br><br>
            <a href="#">About</a><br><br>
            <a href="#">Reach Us</a><br><br>
            <a href="#">Testinomial</a><br><br>
            </span>
         </div>
         <div class="col-sm-2">
            <span style="font-family: 'Anton', sans-serif;">
               <h3>Initiatives</h3>
            </span>
            <br>
            <br>
            <span class="footer-links">
            <a href="#">Hult Prize</a><br><br>
            <a href="#">E-weekend</a><br><br>
            <a href="#">Startup Weekend</a><br><br>
            <a href="#">Summer in a startup</a><br><br>
            </span>
         </div>
         <div class="col-sm-3" >
            <span style="font-family: 'Anton', sans-serif;">
               <h3>Social Media</h3>
            </span>
            <br>
            <br>
			<span>
					<a href="#" class="col-sm-2 footer-social fa fa-facebook"></a>
					<a href="#" class="col-sm-2 footer-social fa fa-twitter"></a>
					<a href="#" class="col-sm-2 footer-social fa fa-linkedin"></a>
					<a href="#" class="col-sm-2 footer-social fa fa-youtube-play"></a>
					<a href="#" class="col-sm-2 footer-social fa fa-google-plus"></a>
			</span>
         </div>
         <div class="col-sm-1"></div>
      </div>
      </div>
      <div class="col-xs-12" style="background-color:grey; text-align:center">
         <div>©2017 Jadavpur University Entrepreneurship Cell</div>
         <div>Crafted by &#128009;</div>
      </div>
      <style>
         .footer-social {
         font-size:20px;
         color: inherit;
         text-decoration:none !important;
         padding-left:0  !important;
         }
         .fa-facebook:hover {
         color:#3b5998;
         }
         .fa-linkedin:hover {
         color:#007bb5;
         }
         .fa-twitter:hover {
         color:#55acee;
         }
         .fa-youtube-play:hover {
         color:#bb0000;
         }
         .fa-google-plus:hover {
         color:#dd4b39;
         }
      </style>
			</div>
        </div>
        
        <style>
        @media screen and (max-width:403px){
        #footer-logo{
             width:90%;
        }
    }
     </style>
		      <!-- Modal content for coordinator-->
      <div id="modal-form" class="row" >
         <div class="modal fade" id="Coordinator-Modal" role="dialog" class="col-xs-12">
            <div class="formstl">
               <!-- Modal content-->
               <div  class="modal-content">
                  <div class="modal-header">
                     <h3 class="modal-title">Coordinator Application Form</h3>
                     <button style="background: 00; border: 0; font-size: 21px;" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <form action="#about" method="post" id="coordinator-form" name="coordinator-form" style="display:inline">
                        Only for JU Students
                        <input type="text" id="coordinator-form-name" name="coordinator-form-name" placeholder="Name*"  required >
                        <input type="email" id="coordinator-form-email" name="coordinator-form-email" placeholder="Email*"  required>
                        <select class="form-control" id="coordinator-form-department" name="coordinator-form-department" placeholder="Department*" required>
                           <option value="" selected disabled hidden>Department*</option>
                           <optgroup label="Engineering &amp; Technology">
                              <option value="Architecture">Architecture</option>
                              <option value="Chemical Engineering">Chemical Engineering</option>
                              <option value="Civil Engineering">Civil Engineering</option>
                              <option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering</option>
                              <option value="Construction Engineering">Construction Engineering</option>
                              <option value="Electrical Engineering">Electrical Engineering</option>
                              <option value="Electronics &amp; Telecommunication Engineering">Electronics &amp; Telecommunication Engineering</option>
                              <option value="Food Technology &amp; Bio-Chemical Engineering">Food Technology &amp; Bio-Chemical Engineering</option>
                              <option value="Information Technology">Information Technology</option>
                              <option value="Instrumentation &amp; Electronics Engineering">Instrumentation &amp; Electronics Engineering</option>
                              <option value="Mechanical Engineering">Mechanical Engineering</option>
                              <option value="Metallurgical &amp; Material Engineering">Metallurgical &amp; Material Engineering</option>
                              <option value="Pharmaceutical Technology">Pharmaceutical Technology</option>
                              <option value="Power Engineering">Power Engineering</option>
                              <option value="Printing Engineering">Printing Engineering</option>
                              <option value="Production Engineering">Production Engineering</option>
                           </optgroup>
                           <optgroup label="Arts">
                              <option value="Bengali">Bengali</option>
                              <option value="Comparative Literature">Comparative Literature</option>
                              <option value="Economics">Economics</option>
                              <option value="Education">Education</option>
                              <option value="English">English</option>
                              <option value="Film Studies">Film Studies</option>
                              <option value="History">History</option>
                              <option value="International Relations">International Relations</option>
                              <option value="Library &amp; Information Science">Library &amp; Information Science</option>
                              <option value="Philosophy">Philosophy</option>
                              <option value="Physical Education">Physical Education</option>
                              <option value="Sanskrit">Sanskrit</option>
                              <option value="Sociology">Sociology</option>
                           </optgroup>
                           <optgroup label="Science">
                              <option value="Chemistry">Chemistry</option>
                              <option value="Geography">Geography</option>
                              <option value="Geological sciences">Geological sciences</option>
                              <option value="Instrumentation Science">Instrumentation Science</option>
                              <option value="Life science &amp; Bio-technology">Life science &amp; Bio-technology</option>
                              <option value="Mathematics">Mathematics</option>
                              <option value="Physics">Physics</option>
                           </optgroup>
                        </select>
                        <input type="number" id="coordinator-form-phone" name="coordinator-form-phone" placeholder="Phone*" required >
                        <select name="coordinator-form-team" id="coordinator-form-team" class="form-control" required>
                           <option value="1" selected disabled hidden>Select a team Preference*</option>
                           <option value="Any">Any</option>
                           <option value="Events">Events</option>
                           <option value="Marketing">Marketing</option>
                           <option value="Public Relations/Sponsorship">Public Relations/Sponsorship</option>
                           <option value="Creative content">Creative content</option>
                           <option value="Technical">Technical</option>
                           <option value="Finanace/Logistics">Finanace/Logistics</option>
                        </select>
                        <br>
                        <input type="submit" value="Apply" id="coordinator-form-submit" name="coordinator-form-submit">
                     </form>
                     <span id="coordinator-form-ty" style="display:none">Thank You for applying, We will get back to you soon</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal content for coordinator ends-->
      <!-- Modal content for Campus Ambassador-->
      <div id="modal-form" class="row" >
         <div class="modal fade" id="Ambassador-Modal" role="dialog" class="col-xs-12">
            <div class="formstl">
               <!-- Modal content-->
               <div  class="modal-content">
                  <div class="modal-header">
                     <h3 class="modal-title">Apply as a Campus Ambassador</h3>
                     <button style="background: 00; border: 0; font-size: 21px;" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                     <form  action="#about" method="post" id="ambassador-form" style="display:inline">
                        Be a part of the extended family
                        <input type="text" id="ambassador-form-name" name="ambassador-form-name" placeholder="Name*" required>
                        <input type="text" id="ambassador-form-email" name="ambassador-form-email" placeholder="Email*" required>
                        <input type="text" id="ambassador-form-college" name="ambassador-form-college" placeholder="College/University*" required>											
                       
                        <textarea name="ambassador-form-reason" id="ambassador-form-reason" cols="30" rows="6" placeholder="Your reasons for applying"></textarea>
                        <input type="number" id="ambassador-form-phone" name="ambassador-form-phone" placeholder="Phone">
                        <br>
                        <input type="submit" value="Apply" name="ambassador-form-submit">
                     </form>
                     <span id="ambassador-form-ty" style="display:none">Thank You for subscribing.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal content for Campus Ambassador ends-->

      <script type="text/javascript">
         $(window).load(function() {
                         function showhead(){
                             $('.headingz').animate({
                              opacity: '1'
                          } , 2000 );
                         };
                         window.setTimeout( showhead, 300);
                        
                         
                     });
      </script>
      <script type="text/javascript">
         
         // Mobile Navigation
         $('.mobile-toggle').click(function() {
             if ($('.main_h').hasClass('open-nav')) {
                 $('.main_h').removeClass('open-nav');
             } else {
                 $('.main_h').addClass('open-nav');
             }
         });
         
         $('.main_h li a').click(function() {
             if ($('.main_h').hasClass('open-nav')) {
                 $('.navigation').removeClass('open-nav');
                 $('.main_h').removeClass('open-nav');
             }
         });
         
         $('nav a').click(function(event) {
             var id = $(this).attr("href");
             var offset = 70;
             var target = $(id).offset().top - offset;
             $('html, body').animate({
                 scrollTop: target
             }, 500);
             event.preventDefault();
         });
         
      </script>
      <script type='text/javascript'>
      // ===== Scroll to Top ==== 
      $(window).scroll(function() {
          if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
              $('#return-to-top').fadeIn(200);    // Fade in the arrow
          } else {
              $('#return-to-top').fadeOut(200);   // Else fade out the arrow
          }
      });
      $('#return-to-top').click(function() {      // When arrow is clicked
          $('body,html').animate({
              scrollTop : 0                       // Scroll to top of body
          }, 500);
      });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
         
           var a = 0;
         $(window).scroll(function() {
           var oTop = $('#counter').offset().top - window.innerHeight;
           if (a == 0 && $(window).scrollTop() > oTop) {
             $('.counter-value').each(function() {
               var $this = $(this),
                 countTo = $this.attr('data-count');
               $({
                 countNum: $this.text()
               }).animate({
                   countNum: countTo
                 },
         
                 {
         
                   duration: 2000,
                   easing: 'swing',
                   step: function() {
                     $this.text(Math.floor(this.countNum));
                   },
                   complete: function() {
                     $this.text(this.countNum);
                     
                   }
         
                 });
             });
             a = 1;
               $( ".plus-for-numbers" ).delay(1700).fadeIn( 1000 );
           }
         
         });
         });
           
      </script>


      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRiDrm36Kcz2OWvZgnwFAB1-Lk9SIQOlY&callback=initMap"></script>
   <script>
         function initMap() {
             
            var locations = [
              ['Jadavpur University<br>Salt Lake Campus', 22.560473, 88.413460, 2],
              ['Jadavpur University', 22.499842, 88.371498, 1],
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              center: new google.maps.LatLng(22.5301575, 88.392479),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: 'ecell.png',
                map: map
              });
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
         }
      </script>
      <script>
         $(document).ready(function() {
             
             /* Every time the window is scrolled ... */
             $(window).scroll( function(){
             
                 /* Check the location of each desired element */
                 $('.hideme').each( function(i){
                     
                     var bottom_of_object = $(this).position().top + $(this).outerHeight();
                     var bottom_of_window = $(window).scrollTop() + $(window).height();
                     
                     /* If the object is completely visible in the window, fade it it */
                     if( bottom_of_window > bottom_of_object ){
                         
                         $(this).animate({'opacity':'1'},3000);
                             
                     }
                     
                 }); 
             
             });
             
         });
      </script>
      <script>
         $(document).ready(function() {
             
             /* Every time the window is scrolled ... */
             $(window).scroll( function(){
             
                 /* Check the location of each desired element */
                 $('.hideme2').each( function(i){
                     
                     var bottom_of_object = $(this).position().top + $(this).outerHeight();
                     var bottom_of_window = $(window).scrollTop() + $(window).height();
                     
                     /* If the object is completely visible in the window, fade it it */
                     if( bottom_of_window > bottom_of_object ){
                         
                         $(this).animate({'opacity':'1'},3000);
                             
                     }
                     
                 }); 
             
             });
             
         });
      </script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script>
         $(document).ready(function($) { // Begin jQuery
           $(function() { // DOM ready
             // If a link has a dropdown, add sub menu toggle.
             $('nav ul li a:not(:only-child)').mouseenter(function(e) {
               $(this).siblings('.nav-dropdown').slideToggle('medium');
               // Close one dropdown when selecting another
               $('.nav-dropdown').not($(this).siblings()).hide();
               e.stopPropagation();
             });
            
             $('nav ul li ul , nav ul ').mouseleave(function(e) {
               $(this).siblings('.nav-dropdown').slideToggle('medium');
               // Close one dropdown when selecting another
               $('.nav-dropdown').not($(this).siblings()).hide();
               e.stopPropagation();
             });
         
             
             // Clicking away from dropdown will remove the dropdown class
             $('html').hover(function() {
               $('.nav-dropdown').hide();
             });
             // Toggle open and close nav styles on click
             $('#nav-toggle').click(function() {
               $('nav ul').slideToggle();
             });
             // Hamburger to X toggle
             $('#nav-toggle').on('click', function() {
               this.classList.toggle('active');
             });
           }); // end DOM ready
         }); // end jQuery
      </script>
      <script>
         window.onload=setTimeout(MadeByTheDRAgon, 10000);
         function MadeByTheDRAgon() {
             console.log("                                        ,   ,\n                                        $,  $,     ,\n                                        'ss.$ss. .s'\n                                ,     .ss$$$$$$$$$$s,\n                                $. s$$$$$$$$$$$$$$`$$Ss\n                                '$$$$$$$$$$$$$$$$$$o$$$       ,\n                               s$$$$$$$$$$$$$$$$$$$$$$$$s,  ,s\n                              s$$$$$$$$$'$$$$$$''''$$$$$$'$$$$$,\n                              s$$$$$$$$$$s''$$$$ssssss'$$$$$$$$'\n                             s$$$$$$$$$$'         `'''ss'$'$s''\n                             s$$$$$$$$$$,              `'''''$  .s$$s\n                             s$$$$$$$$$$$$s,...               `s$$'  `\n                         `ssss$$$$$$$$$$$$$$$$$$$$####s.     .$$'$.   , s-\n                           `''''$$$$$$$$$$$$$$$$$$$$#####$$$$$$'     $.$'\n                                 '$$$$$$$$$$$$$$$$$$$$$####s''     .$$$|\n                                  '$$$$$$$$$$$$$$$$$$$$$$$$##s    .$$' $\n                                   $$''$$$$$$$$$$$$$$$$$$$$$$$$$$$$$'   `\n                                  $$'  '$'$$$$$$$$$$$$$$$$$$$$S'''''\n                             ,   ,'     '  $$$$$$$$$$$$$$$$####s\n                             $.          .s$$$$$$$$$$$$$$$$$####'\n                 ,           '$s.   ..ssS$$$$$$$$$$$$$$$$$$$####'\n                 $           .$$$S$$$$$$$$$$$$$$$$$$$$$$$$#####'\n                 Ss     ..sS$$$$$$$$$$$$$$$$$$$$$$$$$$$######''\n                  '$$sS$$$$$$$$$$$$$$$$$$$$$$$$$$$########'\n           ,      s$$$$$$$$$$$$$$$$$$$$$$$$#########'''\n           $    s$$$$$$$$$$$$$$$$$$$$$#######'''      s'         ,\n           $$..$$$$$$$$$$$$$$$$$$######''       ....,$$....    ,$\n            '$$$$$$$$$$$$$$$######'' ,     .sS$$$$$$$$$$$$$$$$s$$\n              $$$$$$$$$$$$#####'     $, .s$$$$$$$$$$$$$$$$$$$$$$$$s.\n   )          $$$$$$$$$$$#####'      `$$$$$$$$$###########$$$$$$$$$$$.\n  ((          $$$$$$$$$$$#####       $$$$$$$$###'       '####$$$$$$$$$$\n  ) \         $$$$$$$$$$$$####.     $$$$$$###'             '###$$$$$$$$$   s'\n (   )        $$$$$$$$$$$$$####.   $$$$$###'                ####$$$$$$$$s$$'\n )  ( (       $$'$$$$$$$$$$$#####.$$$$$###' -The DRAgon    .###$$$$$$$$$$'\n (  )  )   _,$'   $$$$$$$$$$$$######.$$##'                .###$$$$$$$$$$\n ) (  ( \.         '$$$$$$$$$$$$$#######,,,.          ..####$$$$$$$$$$$'\n(   )$ )  )        ,$$$$$$$$$$$$$$$$$$####################$$$$$$$$$$$'\n(   ($$  ( \     _sS'  `'$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$S$$,\n )  )$$$s ) )  .      .   `$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$''  `$$\n  (   $$$Ss/  .$,    .$,,s$$$$$$##S$$$$$$$$$$$$$$$$$$$$$$$$S''        '\n    \)_$$$$$$$$$$$$$$$$$$$$$$$##'  $$        `$$.        `$$.\n        `'S$$$$$$$$$$$$$$$$$#'      $          `$          `$\n            `''''''''''''''         '           '           '\n");
         	console.log("The theme for JU ECell is created by Daipayan Mukherjee, Abhigyan Das, Rohit Chattopadhyay as a project for free. If you do wish to implement any stuff from the theme then give due credit to the developers"); 
         }
          
      </script>
      <div class="md-overlay"></div>
      <!-- the overlay element -->
      <!-- classie.js by @desandro: https://github.com/desandro/classie -->
      <script src="js/classie.js"></script>
      <script src="js/modalEffects.js"></script>
      <!-- for the blur effect -->
      <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
      <script>
         // this is important for IEs
         var polyfilter_scriptpath = '/js/';
      </script>
      <script src="js/cssParser.js"></script>
      <script src="js/css-filters-polyfill.js"></script>
      <?php 
         if(strlen($_SESSION['message'])!=0){
         	echo "<script>
         	function button4ty(){
         	document.getElementById('thank-you-modal-button').click();
         }
         window.onload= button4ty ;
         	</script>";
         }
         ?>
   </body>
</html>
