(function(modules){var installedModules={};function __webpack_require__(moduleId){if(installedModules[moduleId]){return installedModules[moduleId].exports;}
var module=installedModules[moduleId]={i:moduleId,l:false,exports:{}};modules[moduleId].call(module.exports,module,module.exports,__webpack_require__);module.l=true;return module.exports;}
__webpack_require__.m=modules;__webpack_require__.c=installedModules;__webpack_require__.d=function(exports,name,getter){if(!__webpack_require__.o(exports,name)){Object.defineProperty(exports,name,{enumerable:true,get:getter});}};__webpack_require__.r=function(exports){if(typeof Symbol!=='undefined'&&Symbol.toStringTag){Object.defineProperty(exports,Symbol.toStringTag,{value:'Module'});}
Object.defineProperty(exports,'__esModule',{value:true});};__webpack_require__.t=function(value,mode){if(mode&1)value=__webpack_require__(value);if(mode&8)return value;if((mode&4)&&typeof value==='object'&&value&&value.__esModule)return value;var ns=Object.create(null);__webpack_require__.r(ns);Object.defineProperty(ns,'default',{enumerable:true,value:value});if(mode&2&&typeof value!='string')for(var key in value)__webpack_require__.d(ns,key,function(key){return value[key];}.bind(null,key));return ns;};__webpack_require__.n=function(module){var getter=module&&module.__esModule?function getDefault(){return module['default'];}:function getModuleExports(){return module;};__webpack_require__.d(getter,'a',getter);return getter;};__webpack_require__.o=function(object,property){return Object.prototype.hasOwnProperty.call(object,property);};__webpack_require__.p="";return __webpack_require__(__webpack_require__.s=0);})
([(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);var _modules_main_menu__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(1);var _modules_dropdown__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(3);var _modules_header_menu_btn_manager__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(4);var _modules_Ticker__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(7);var _modules_Loader__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(9);var stickybits__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(10);var _modules_utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(8);var _modules_utilles_resizeHandler__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__(11);var _modules_anchors__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__(12);var _modules_variables__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__(5);var _modules_Quiz__WEBPACK_IMPORTED_MODULE_10__=__webpack_require__(13);var _modules_tabs__WEBPACK_IMPORTED_MODULE_11__=__webpack_require__(14);var _modules_Modal__WEBPACK_IMPORTED_MODULE_12__=__webpack_require__(15);jQuery(document).ready($=>{Object(_modules_Modal__WEBPACK_IMPORTED_MODULE_12__["default"])()
Object(_modules_tabs__WEBPACK_IMPORTED_MODULE_11__["tabs"])()
const pageMenu=$('#page-menu');const $dropdown=$('.dropdown');Object(_modules_dropdown__WEBPACK_IMPORTED_MODULE_1__["dropDown"])($dropdown);Object(_modules_main_menu__WEBPACK_IMPORTED_MODULE_0__["toggleMenu"])();const menuNodesArr=['.main-menu'];if(pageMenu.length){menuNodesArr.push('#page-menu')}
menuNodesArr.forEach(menuItem=>Object(_modules_main_menu__WEBPACK_IMPORTED_MODULE_0__["onSubmenuInit"])($(menuItem)))
Object(_modules_header_menu_btn_manager__WEBPACK_IMPORTED_MODULE_2__["HeaderMenuBtnManager"])()
$('.ticker-inner').each((i,el)=>{new _modules_Ticker__WEBPACK_IMPORTED_MODULE_3__["Ticker"]($(el),i+1).init()})
$('.button-load-more').click(function(){const _this=$(this)
_modules_Loader__WEBPACK_IMPORTED_MODULE_4__["Loader"].start(_this)
setTimeout(()=>{_modules_Loader__WEBPACK_IMPORTED_MODULE_4__["Loader"].end(_this)},3000)})
const $stickyElements=$('.sticky-el');const init=($el,$parent)=>(Object(stickybits__WEBPACK_IMPORTED_MODULE_5__["default"])($el,{scrollEl:$parent,stickyBitStickyOffset:70}))
Object(_modules_anchors__WEBPACK_IMPORTED_MODULE_8__["anchors"])()
if($stickyElements.length){$stickyElements.toArray().forEach(stickyEl=>{const $stickyEl=$(stickyEl)
const $parent=$stickyEl.parents('.sticky-parent')
let vw=_modules_variables__WEBPACK_IMPORTED_MODULE_9__["variables"].windowWidth
let stickyBeat=null
const breakpoint=Object(_modules_utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_6__["getUpdatedCssVal"])($stickyEl.data('sticky-breakpoint'));const stickyManager=vw=>{if(breakpoint<=Number(vw)){stickyBeat=init($stickyEl,$parent)}else{if(stickyBeat){stickyBeat.cleanup()}
stickyBeat=null}}
stickyManager(vw)
Object(_modules_utilles_resizeHandler__WEBPACK_IMPORTED_MODULE_7__["resizeHandler"])(()=>{vw=$(window).width()
stickyManager(vw)})})}
(function quiz(){const $quiz=$('.quiz');if($quiz.length){const quiz=new _modules_Quiz__WEBPACK_IMPORTED_MODULE_10__["Quiz"]($quiz);quiz.init()}}());let serachShowed=false
$('.search-show-trigger').click(function(){serachShowed=!serachShowed
const $this=$(this).find('#search-trigger')
$($this).toggleClass('opened')
$('.search-result').toggleClass('active')
if(serachShowed){$('.header').css('overflow','visible')}else{setTimeout(()=>{$('.header').css('overflow',"hidden")},400)}})
$('.search-result-close').click(function(){$('.search-result').removeClass('active')})});}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"toggleMenu",function(){return toggleMenu;});__webpack_require__.d(__webpack_exports__,"onSubmenuInit",function(){return onSubmenuInit;});var _utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(2);function Trigger(index,$node){this.id=`submenu-trigger-${index}`;this.node=$node;return this;}
function updateParentState(){let status=$('.submenu-content-item').hasClass('active');if(status){$('.submenu-wrapper').addClass("active")}else{$('.submenu-wrapper').removeClass("active")}}
const $targetSideBar=$('#page-menu');const $targetSubMenu=$($targetSideBar).find('.submenu-wrapper')
const $navElements=$targetSideBar.find('.submenu-trigger')
Object(_utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__["hoverOutsideComponent"])($targetSideBar,()=>{$targetSubMenu.addClass('off');$navElements.removeClass('menu-list--item--active');});$navElements.each((index,$el)=>{$($el).hover(()=>{$targetSubMenu.removeClass('off');});})
const submenuHandler=$submenuTriggers=>{$submenuTriggers=$($submenuTriggers);const $submenuContentItem=$('.submenu-content-item');const submenuTriggersActiveCls='menu-list--item--active';const defaultContentActiveCls='active-default';let $triggers=$submenuTriggers.toArray().map((el,i)=>new Trigger(i,el));$triggers.forEach(($trigger,index)=>{const $this=$($trigger.node);const $otherSubmenuItems=$($triggers.filter(el=>el.id!==$trigger.id).map(el=>el.node))
const $targetContent=$($this.data('target'));const $otherContent=$($submenuContentItem).not($targetContent)
if($targetContent.hasClass(defaultContentActiveCls)){$targetContent.addClass('active');}
$this.find('a').click(evt=>{if(matchMedia("(max-width: 992px)").matches){var target=$(evt.target).closest('li').attr('data-target');if($(target).length){evt.preventDefault()}}})
$this.mouseenter(function(evt){$otherSubmenuItems.removeClass(submenuTriggersActiveCls);$this.addClass(submenuTriggersActiveCls);$otherContent.removeClass('active');$targetContent.addClass('active');updateParentState();});});$submenuContentItem.find('.back-btn').click(function(){$('.submenu-wrapper').removeClass("active")})}
const toggleMenu=()=>{const $menuNode=$("#main-menu");const $trigger=$("#menu-trigger");const activeClassName='opened';if($menuNode.length){let isOpened=false
$trigger.click(function(evt){evt.preventDefault();$(this).toggleClass(activeClassName);$($menuNode).toggleClass(activeClassName)
isOpened=!isOpened
$('body').css('overflow',isOpened?"hidden":"auto")
if(isOpened){$('.header').css('overflow','visible')}else{setTimeout(()=>{$('.header').css('overflow',"hidden")},400)}});}}
const onSubmenuInit=($menu=$("#main-menu"))=>{if($menu.length){const submenuTriggers=$($menu).find('.submenu-trigger');submenuHandler(submenuTriggers)}}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"detectClickOutside",function(){return detectClickOutside;});__webpack_require__.d(__webpack_exports__,"onClickOutsideElement",function(){return onClickOutsideElement;});__webpack_require__.d(__webpack_exports__,"hoverOutsideComponent",function(){return hoverOutsideComponent;});const detectClickOutside=($el,evt)=>{return!$(evt.target).closest($el).length}
const onClickOutsideElement=($el,callback)=>{$(document).on('click',undefined,evt=>{if(detectClickOutside($el,evt)){callback()}});};const hoverOutsideComponent=($el,callback,onHoverInEl=()=>null)=>{$(document).on('mousemove',undefined,evt=>{if(!$(evt.target).closest($el).length){callback()}else if($(evt.target).closest($el).length){onHoverInEl()}});}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"dropDown",function(){return dropDown;});var _utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(2);const itemClassName='dropdown-list--item';const itemActiveClassName='dropdown-list--item--active';const dropdownActiveClassName='active';const showDropDown=($dropdown,callback)=>{$($dropdown).addClass(dropdownActiveClassName);if(callback){callback()}};const hideDropDown=($dropdown)=>{$($dropdown).removeClass(dropdownActiveClassName);};const dropDown=$nodes=>{$nodes.each((i,$el)=>{const $dropdown=$($el);const $items=$($el).find(`.${itemClassName}`)
const $activeItem=$($el).find(`.${itemActiveClassName}`)
const notActive=$items.not($activeItem)
let showed=false
$dropdown.on('click',undefined,function(){showDropDown($dropdown,()=>{$($items).slideDown(200)
showed=true
if(showed){$('.header').css('overflow',"visible")}})})
Object(_utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__["onClickOutsideElement"])($dropdown,()=>{hideDropDown($dropdown)
$(notActive).slideUp('fast',()=>{if(showed){$('.header').css('overflow',"hidden")}
showed=false})})})};}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"HeaderMenuBtnManager",function(){return HeaderMenuBtnManager;});var _variables__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(5);var _utilles_onScroll__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(6);const HeaderMenuBtnManager=()=>{const $scrolledHeader=$('.header--menu-btn-default-hidden');const breakpoint=993;const windowWidth=_variables__WEBPACK_IMPORTED_MODULE_0__["variables"].windowWidth
const init=(windowWidth)=>{if($scrolledHeader.length&&windowWidth>=breakpoint){const heroHeight=$('.section-hero').height();function update(scrollTop){if(scrollTop>heroHeight/2){$($scrolledHeader).addClass('menu-showed');}else if(scrollTop<heroHeight/2+20){$($scrolledHeader).removeClass('menu-showed');}}
const scrollTop=$(undefined).scrollTop();update(scrollTop)
Object(_utilles_onScroll__WEBPACK_IMPORTED_MODULE_1__["onScroll"])(scrollTop=>{update(scrollTop)})}}
init(windowWidth);$(window).resize(function(){let windowWidth=$(window).width();init(windowWidth)})}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"variables",function(){return variables;});const variables={headerHeight:$('header').height(),windowWidth:$(window).width()}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"onScroll",function(){return onScroll;});const onScroll=(callBack=()=>null)=>{if(callBack){$(window).scroll(()=>{const scrollTop=$(window).scrollTop()
callBack(scrollTop)})}}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"Ticker",function(){return Ticker;});var _utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(8);var _variables__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(5);class Ticker{constructor($node,id=1){this.$el=$($node)
this.i=0
this.id=id
this.math=()=>{const coef=window.matchMedia("(min-width: 992px)").matches?2:0.5;const to=Object(_utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_0__["getUpdatedCssVal"])(this.$el.css('width'))
const vw=_variables__WEBPACK_IMPORTED_MODULE_1__["variables"].windowWidth
const duration=to/vw*10000*coef
const resumeTo=to/(to/vw)
return{to,duration,resumeTo}}
this.play=()=>{this.$el.resume()
const{to,resumeTo,duration,}=this.math()
let _duration=this.i===0?duration/resumeTo:duration
this.$el.animate({left:-to},{duration:_duration,easing:"linear",complete:()=>{this.i=this.i+1
this.$el.css('left',resumeTo)
this.play()}},)}
this.pause=()=>{this.$el.pause()}
this.hover=()=>{const{play,pause,math,$el}=this
const onPlay=()=>play(math())
$el.hover(pause,onPlay)}}
init(){const{math,play,hover}=this
play(math())
hover()}}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"getUpdatedCssVal",function(){return getUpdatedCssVal;});const getUpdatedCssVal=str=>{return Number(str.slice(0,str.length-2))||0;};}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"Loader",function(){return Loader;});const Loader={start:(loader,callback=()=>{})=>{const $loader=$(loader);$loader.addClass('loading')
callback()},end:(loader=null,callback=()=>null)=>{const $loader=loader?$(loader):$('.button-load-more');$loader.removeClass('loading');callback()},}
window.Loader=Loader}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);function _extends(){_extends=Object.assign||function(target){for(var i=1;i<arguments.length;i++){var source=arguments[i];for(var key in source){if(Object.prototype.hasOwnProperty.call(source,key)){target[key]=source[key];}}}
return target;};return _extends.apply(this,arguments);}
var Stickybits=function(){function Stickybits(target,obj){var _this=this;var o=typeof obj!=='undefined'?obj:{};this.version='3.7.7';this.userAgent=window.navigator.userAgent||'no `userAgent` provided by the browser';this.props={customStickyChangeNumber:o.customStickyChangeNumber||null,noStyles:o.noStyles||false,stickyBitStickyOffset:o.stickyBitStickyOffset||0,parentClass:o.parentClass||'js-stickybit-parent',scrollEl:typeof o.scrollEl==='string'?document.querySelector(o.scrollEl):o.scrollEl||window,stickyClass:o.stickyClass||'js-is-sticky',stuckClass:o.stuckClass||'js-is-stuck',stickyChangeClass:o.stickyChangeClass||'js-is-sticky--change',useStickyClasses:o.useStickyClasses||false,useFixed:o.useFixed||false,useGetBoundingClientRect:o.useGetBoundingClientRect||false,verticalPosition:o.verticalPosition||'top',applyStyle:o.applyStyle||function(item,style){return _this.applyStyle(item,style);}};this.props.positionVal=this.definePosition()||'fixed';this.instances=[];var _this$props=this.props,positionVal=_this$props.positionVal,verticalPosition=_this$props.verticalPosition,noStyles=_this$props.noStyles,stickyBitStickyOffset=_this$props.stickyBitStickyOffset;var verticalPositionStyle=verticalPosition==='top'&&!noStyles?stickyBitStickyOffset+"px":'';var positionStyle=positionVal!=='fixed'?positionVal:'';this.els=typeof target==='string'?document.querySelectorAll(target):target;if(!('length'in this.els))this.els=[this.els];for(var i=0;i<this.els.length;i++){var _styles;var el=this.els[i];var instance=this.addInstance(el,this.props);this.props.applyStyle({styles:(_styles={},_styles[verticalPosition]=verticalPositionStyle,_styles.position=positionStyle,_styles),classes:{}},instance);this.manageState(instance);this.instances.push(instance);}}
var _proto=Stickybits.prototype;_proto.definePosition=function definePosition(){var stickyProp;if(this.props.useFixed){stickyProp='fixed';}else{var prefix=['','-o-','-webkit-','-moz-','-ms-'];var test=document.head.style;for(var i=0;i<prefix.length;i+=1){test.position=prefix[i]+"sticky";}
stickyProp=test.position?test.position:'fixed';test.position='';}
return stickyProp;};_proto.addInstance=function addInstance(el,props){var _this2=this;var item={el:el,parent:el.parentNode,props:props};if(props.positionVal==='fixed'||props.useStickyClasses){this.isWin=this.props.scrollEl===window;var se=this.isWin?window:this.getClosestParent(item.el,item.props.scrollEl);this.computeScrollOffsets(item);this.toggleClasses(item.parent,'',props.parentClass);item.state='default';item.stateChange='default';item.stateContainer=function(){return _this2.manageState(item);};se.addEventListener('scroll',item.stateContainer);}
return item;};_proto.getClosestParent=function getClosestParent(el,match){var p=match;var e=el;if(e.parentElement===p)return p;while(e.parentElement!==p){e=e.parentElement;}
return p;};_proto.getTopPosition=function getTopPosition(el){if(this.props.useGetBoundingClientRect){return el.getBoundingClientRect().top+(this.props.scrollEl.pageYOffset||document.documentElement.scrollTop);}
var topPosition=0;do{topPosition=el.offsetTop+topPosition;}while(el=el.offsetParent);return topPosition;};_proto.computeScrollOffsets=function computeScrollOffsets(item){var it=item;var p=it.props;var el=it.el;var parent=it.parent;var isCustom=!this.isWin&&p.positionVal==='fixed';var isTop=p.verticalPosition!=='bottom';var scrollElOffset=isCustom?this.getTopPosition(p.scrollEl):0;var stickyStart=isCustom?this.getTopPosition(parent)-scrollElOffset:this.getTopPosition(parent);var stickyChangeOffset=p.customStickyChangeNumber!==null?p.customStickyChangeNumber:el.offsetHeight;var parentBottom=stickyStart+parent.offsetHeight;it.offset=!isCustom?scrollElOffset+p.stickyBitStickyOffset:0;it.stickyStart=isTop?stickyStart-it.offset:0;it.stickyChange=it.stickyStart+stickyChangeOffset;it.stickyStop=isTop?parentBottom-(el.offsetHeight+it.offset):parentBottom-window.innerHeight;};_proto.toggleClasses=function toggleClasses(el,r,a){var e=el;var cArray=e.className.split(' ');if(a&&cArray.indexOf(a)===-1)cArray.push(a);var rItem=cArray.indexOf(r);if(rItem!==-1)cArray.splice(rItem,1);e.className=cArray.join(' ');};_proto.manageState=function manageState(item){var _this3=this;var it=item;var p=it.props;var state=it.state;var stateChange=it.stateChange;var start=it.stickyStart;var change=it.stickyChange;var stop=it.stickyStop;var pv=p.positionVal;var se=p.scrollEl;var sticky=p.stickyClass;var stickyChange=p.stickyChangeClass;var stuck=p.stuckClass;var vp=p.verticalPosition;var isTop=vp!=='bottom';var aS=p.applyStyle;var ns=p.noStyles;var rAFStub=function rAFDummy(f){f();};var rAF=!this.isWin?rAFStub:window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame||rAFStub;var scroll=this.isWin?window.scrollY||window.pageYOffset:se.scrollTop;var notSticky=scroll>start&&scroll<stop&&(state==='default'||state==='stuck');var isSticky=isTop&&scroll<=start&&(state==='sticky'||state==='stuck');var isStuck=scroll>=stop&&state==='sticky';if(notSticky){it.state='sticky';}else if(isSticky){it.state='default';}else if(isStuck){it.state='stuck';}
var isStickyChange=scroll>=change&&scroll<=stop;var isNotStickyChange=scroll<change/2||scroll>stop;if(isNotStickyChange){it.stateChange='default';}else if(isStickyChange){it.stateChange='sticky';}
if(state===it.state&&stateChange===it.stateChange)return;rAF(function(){var _styles2,_classes,_styles3,_extends2,_classes2,_style$classes;var stateStyles={sticky:{styles:(_styles2={position:pv,top:'',bottom:''},_styles2[vp]=p.stickyBitStickyOffset+"px",_styles2),classes:(_classes={},_classes[sticky]=true,_classes)},default:{styles:(_styles3={},_styles3[vp]='',_styles3),classes:{}},stuck:{styles:_extends((_extends2={},_extends2[vp]='',_extends2),pv==='fixed'&&!ns||!_this3.isWin?{position:'absolute',top:'',bottom:'0'}:{}),classes:(_classes2={},_classes2[stuck]=true,_classes2)}};if(pv==='fixed'){stateStyles.default.styles.position='';}
var style=stateStyles[it.state];style.classes=(_style$classes={},_style$classes[stuck]=!!style.classes[stuck],_style$classes[sticky]=!!style.classes[sticky],_style$classes[stickyChange]=isStickyChange,_style$classes);aS(style,item);});};_proto.applyStyle=function applyStyle(_ref,item){var styles=_ref.styles,classes=_ref.classes;var it=item;var e=it.el;var p=it.props;var stl=e.style;var ns=p.noStyles;var cArray=e.className.split(' ');for(var cls in classes){var addClass=classes[cls];if(addClass){if(cArray.indexOf(cls)===-1)cArray.push(cls);}else{var idx=cArray.indexOf(cls);if(idx!==-1)cArray.splice(idx,1);}}
e.className=cArray.join(' ');if(styles['position']){stl['position']=styles['position'];}
if(ns)return;for(var key in styles){stl[key]=styles[key];}};_proto.update=function update(updatedProps){var _this4=this;if(updatedProps===void 0){updatedProps=null;}
this.instances.forEach(function(instance){_this4.computeScrollOffsets(instance);if(updatedProps){for(var updatedProp in updatedProps){instance.props[updatedProp]=updatedProps[updatedProp];}}});return this;};_proto.removeInstance=function removeInstance(instance){var _styles4,_classes3;var e=instance.el;var p=instance.props;this.applyStyle({styles:(_styles4={position:''},_styles4[p.verticalPosition]='',_styles4),classes:(_classes3={},_classes3[p.stickyClass]='',_classes3[p.stuckClass]='',_classes3)},instance);this.toggleClasses(e.parentNode,p.parentClass);};_proto.cleanup=function cleanup(){for(var i=0;i<this.instances.length;i+=1){var instance=this.instances[i];if(instance.stateContainer){instance.props.scrollEl.removeEventListener('scroll',instance.stateContainer);}
this.removeInstance(instance);}
this.manageState=false;this.instances=[];};return Stickybits;}();function stickybits(target,o){return new Stickybits(target,o);}
__webpack_exports__["default"]=(stickybits);}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"resizeHandler",function(){return resizeHandler;});const resizeHandler=callBack=>{let resizeTimeout
$(window).resize(()=>{clearTimeout(resizeTimeout)
resizeTimeout=setTimeout(()=>{callBack()},250)})}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"anchors",function(){return anchors;});var _variables__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(5);var _utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(8);var _utilles_onScroll__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(6);const activeHandler=(scrollTop,id,contentObj,$anchor)=>{const{offset,maxOffset}=contentObj[id]
if(scrollTop>=offset&&scrollTop<=maxOffset){console.log('st',scrollTop)
console.log('min',offset)
console.log('max',maxOffset)
$anchor.parents('li').addClass('active')
$anchor.addClass("active")}else{$anchor.parents('li').removeClass('active')
$anchor.removeClass("active")}}
const anchors=()=>{const $anchorParents=$('.anchors')
if($anchorParents.length){$anchorParents.each(function(){const $anchors=$(this).find('a')
const anchorsArr=$anchors.toArray()
const length=anchorsArr.length
const scrollContent={}
const scrollTop=$(window).scrollTop()
let firstOffset=0
let lastOffset=0
anchorsArr.forEach((el,i)=>{const $anchor=$(el)
const id=$anchor.attr('href')
const $to=$(id)
if($to.length){const targetOffset=$to.offset().top-_variables__WEBPACK_IMPORTED_MODULE_0__["variables"].headerHeight-50
const currentValues={offset:targetOffset,maxOffset:Object(_utilles_getUpdatedCssVal__WEBPACK_IMPORTED_MODULE_1__["getUpdatedCssVal"])($($to).css('height'))+targetOffset}
if(i===0){firstOffset=targetOffset}else if(i===length-1){lastOffset=currentValues.maxOffset}
scrollContent[id]=currentValues
$anchor.click(evt=>{evt.preventDefault()
$('html').animate({scrollTop:targetOffset},600)})
activeHandler(scrollTop,id,scrollContent,$anchor)}})
Object(_utilles_onScroll__WEBPACK_IMPORTED_MODULE_2__["onScroll"])((scrollTop)=>{let isFirst=scrollTop<=firstOffset-5
if(isFirst||scrollTop>=lastOffset-5){$($anchors).removeClass('active')
$(anchorsArr[isFirst?0:length-1]).addClass('active')}else{anchorsArr.forEach($anchor=>{const _$anchor=$($anchor)
const id=_$anchor.attr('href')
activeHandler(scrollTop,id,scrollContent,_$anchor)})}})})}}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"Quiz",function(){return Quiz;});const getInitialState=questionsList=>{return{started:false,finished:false,currentStep:0,correctAnswersCount:0,totalAnswersCount:questionsList.length,questions:questionsList.map(q=>{const $questionsRadioList=$(q).find('input[type="radio"]')
const correctAnswer=$(q).find('.quiz-question');return{answers:$questionsRadioList.toArray().map(a=>{const $answerNode=$(a)
const val=$($answerNode).val()
const isCorrect=val===correctAnswer.data('ca').toString()
return{val,checked:false,isCorrect,validStatus:null,node:$answerNode}})}})}}
class Quiz{constructor($node){this.node=$($node)
this.quizStartBtn=document.getElementById('quiz-start')
this.resetQuizBtn=document.getElementById('reset-quiz')
this.quizPreview=document.getElementById('quiz-preview')
this.quizBody=document.getElementById('quiz-body')
this.quizResult=document.getElementById('quiz-result')
this.quizResultCurrent=$('#current')
this.quizResultTotal=$('#total')
this.questionsList=this.node.find('.questions-list').find('.question').toArray()
this.questionsListItems=$(this.questionsList).find('li').toArray()
this.state=getInitialState(this.questionsList,this.questionsListItems)
this.show=$el=>$($el).removeClass('d-none')
this.hide=$el=>$($el).addClass('d-none')
this.onNextQuestion=(step,onNext)=>{const $currentQuestion=$(this.questionsList[step-1])
$currentQuestion.show()
$currentQuestion.find('.next-question').click(onNext)
this.questionsList.forEach((q,i)=>{if(i!==step-1){$(q).hide()}})}
this.render=(state=this.state)=>{const{started,finished,currentStep,totalAnswersCount}=state
const{show,hide,quizPreview,quizBody,quizResult}=this
if(!started){show(quizPreview)}
if(currentStep>0&&currentStep<=totalAnswersCount){hide(quizPreview)
show(quizBody)
this.onNextQuestion(currentStep,()=>{if(currentStep===totalAnswersCount){this.setState({finished:true})}else{this.setState({currentStep:currentStep+1})}})}else{hide(quizBody)}
if(finished){show(quizResult)
hide(quizBody)
this.onFinish()}else{hide(quizResult)}}
this.setState=newState=>{const updatedState={...this.state,...newState}
this.state=updatedState
this.render(updatedState)}
this.onStart=()=>{this.setState({started:true,currentStep:1})}
this.onFinish=()=>{const{state,quizResultCurrent,quizResultTotal}=this
const{correctAnswersCount,totalAnswersCount}=state
quizResultCurrent.html(correctAnswersCount)
quizResultTotal.html(totalAnswersCount)}
this.onReset=()=>{const $inputs=$(this.questionsList).find('input[type="radio"]')
$inputs.prop('disabled',false)
$inputs.prop('checked',false)
$inputs.parents('.field-group').removeClass('valid invalid');this.setState(getInitialState(this.questionsList,this.questionsListItems))}
this.onDisable=($list,status=true)=>{$list.forEach(a=>$(a.node).prop('disabled',status))}
this.onAnswer=(questions,answer)=>{this.onDisable(questions.answers)
const correct=questions.answers.find(a=>a.isCorrect)
$(correct.node).parents('.field-group').addClass('valid')
if(!answer.isCorrect){$(answer.node).parents('.field-group').addClass('invalid')}else{this.setState({correctAnswersCount:this.state.correctAnswersCount+1})}}
this.init=()=>{this.state.questions.forEach(q=>{q.answers.forEach(a=>{$(a.node).change(evt=>{this.onAnswer(q,a)})})})
$(this.quizStartBtn).click(()=>{this.onStart()});$(this.resetQuizBtn).click(this.onReset)
this.render()}}}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"tabs",function(){return tabs;});const tabs=()=>{$('.tab-btn').click(function(){const otherBtns=$(this).parent().siblings().find('.tab-btn')
const target=$($(this).data('target'));const otherContent=$(target).siblings()
$(this).addClass("tab-btn-active")
$(otherBtns).removeClass("tab-btn-active")
$(target).addClass('tabs-content--item--active')
$(otherContent).removeClass('tabs-content--item--active')})}}),(function(module,__webpack_exports__,__webpack_require__){"use strict";__webpack_require__.r(__webpack_exports__);__webpack_require__.d(__webpack_exports__,"Modal",function(){return Modal;});var _utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(2);class Modal{constructor(id){this.id=id
this.$node=$(id)
this.state={isHidden:true}
this.render=(state=this.state)=>{const{$node}=this
if(state.isHidden){$node.addClass('modal-hidden')}else{$node.removeClass('modal-hidden')}}
this.setState=callback=>{const{state,render}=this
const newState=callback(state)
this.state=newState
render(newState)}
this.show=()=>{this.setState(prev=>{return{...prev,...{isHidden:false}}})}
this.hide=()=>{this.setState(prev=>{return{...prev,...{isHidden:true}}})}}}
class Modals{constructor(modals){this.$node=$('.modal')
this.modals=modals
this.state={showedModal:null}
this.hideAll=()=>{for(let _modal in this.modals){if(this.modals.hasOwnProperty(_modal)){this.modals[_modal].window.hide()}}}
this.render=(state=this.state)=>{const{hideAll,$node,modals}=this
if(!state.showedModal){hideAll()
$node.addClass('closed')}else{if(modals.hasOwnProperty(state.showedModal)){modals[state.showedModal].window.show()
$node.removeClass('closed')}}}
this.setState=callback=>{const{state,render}=this
const newState=callback(state)
this.state=newState
render(newState)}
this.show=id=>{this.setState(prev=>({...prev,showedModal:id}))}
this.hide=()=>this.setState(prev=>({...prev,showedModal:null}))}}
const modalsInit=()=>{const modals={}
const $modalOverlay=$('.modal')
const $modals=$('.modal-window')
$modals.toArray().forEach(m=>{const id=$(m).attr('id');modals[`#${id}`]={isHidden:true,window:new Modal(`#${id}`)}})
window.modals=modals
const gModal=new Modals(modals)
window.gModal=gModal
$($modalOverlay).on('click',undefined,evt=>{if(Object(_utilles_onClickOutsideElement__WEBPACK_IMPORTED_MODULE_0__["detectClickOutside"])($modals,evt)){if(gModal.state.showedModal){gModal.hide()}}});$(document).on('keydown',function(event){if(event.key==="Escape"){gModal.hide()}});$('.modal-trigger').click(function(){const target=$(this).data("target");if($(target).length){gModal.show(target)}})}
__webpack_exports__["default"]=(modalsInit);})]);