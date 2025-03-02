/*! For license information please see dashboard.js.LICENSE.txt */
(globalThis.itsecWebpackJsonP=globalThis.itsecWebpackJsonP||[]).push([[7309],{42552:(e,t,n)=>{"use strict";n.r(t);var r=n(6293),s=n(3571),o=n(95122),i=n(12614),c=n(65202),a=n(71930),u=n(10906),l=n(1528),d=n(34450),p=n(65813),m=n(52117),h=n(64893),f=n(60976);const w=(0,m.Z)("aside",{target:"e1lkp3186"})("display:flex;flex-direction:column;position:relative;overflow:hidden;margin:1.25rem 1.25rem 0;padding:0 2.5rem 0 2.5rem;background:linear-gradient(90deg, #00010C 0%, #8533FF 100%);@media screen and (min-width: ",(({theme:e})=>e.breaks.small),"px){flex-direction:row;justify-content:space-between;gap:60px;}"),g=(0,m.Z)("div",{target:"e1lkp3185"})("display:flex;flex-direction:column;align-items:flex-start;justify-content:center;gap:0.5rem;margin-top:2.5rem;@media screen and (min-width: ",(({theme:e})=>e.breaks.small),"px){margin-top:0;}"),v=(0,m.Z)(a.X6,{target:"e1lkp3184"})({name:"dvodxn",styles:"font-size:1.625rem;font-family:'PolySans',sans-serif"}),E=(0,m.Z)(a.xv,{target:"e1lkp3183"})({name:"1fmf7g3",styles:"font-size:1.375rem;line-height:1.5rem;font-family:'PolySans',sans-serif"}),y=(0,m.Z)(h.Button,{target:"e1lkp3182"})({name:"jfp1m3",styles:"height:47px;width:200px;margin-top:1.25rem;padding:15px 20px;justify-content:center;font-size:1rem;border-radius:50px;background:#F9FAF9;color:#8533FF"}),b=(0,m.Z)(f.fX,{target:"e1lkp3181"})("max-width:245px;margin-top:2rem;margin-right:-1rem;align-self:flex-end;@media screen and (min-width: ",(({theme:e})=>e.breaks.medium),"px){margin-top:2rem;}@media screen and (min-width: ",(({theme:e})=>e.breaks.xlarge),"px){margin-top:1.25rem;margin-right:90px;}"),x=(0,m.Z)(h.Button,{target:"e1lkp3180"})({name:"1owrvd2",styles:"position:absolute;top:2px;right:2px;&:hover,&:active,&:focus{color:#6817c5;}& svg{background:white;border-radius:25px;}"});function k(){const{installType:e}=(0,l.useConfigContext)();return(0,r.createElement)(React.Fragment,null,(0,r.createElement)(u.BelowToolbarFill,null,(({page:t,dashboardId:n})=>n>0&&"view-dashboard"===t&&(0,r.createElement)(React.Fragment,null,(0,r.createElement)(d.StellarSale,{installType:e}),(0,r.createElement)(L,{installType:e})))),"free"===e&&(0,r.createElement)(u.EditCardsFill,null,(0,r.createElement)(l.PromoCard,{title:(0,o.__)("Trusted Devices","better-wp-security")}),(0,r.createElement)(l.PromoCard,{title:(0,o.__)("Updates Summary","better-wp-security")}),(0,r.createElement)(l.PromoCard,{title:(0,o.__)("User Security Profiles","better-wp-security")})))}const C=Date.UTC(2024,10,26,0,0,0),S=Date.UTC(2024,11,9,9,59,59);function L({installType:e}){const[t,n]=(0,p._)("solidSecurityBFCM2024"),s=(0,i.u)(),u=(0,r.useMemo)((()=>({...s,colors:{...s.colors,text:{...s.colors.text,white:"#F9FAF9"}}})),[s]);return C>Date.now()||S<Date.now()||t?null:(0,r.createElement)(i.a,{theme:u},(0,r.createElement)(w,null,(0,r.createElement)(g,null,(0,r.createElement)(v,{level:2,variant:a.rK.WHITE,weight:a.fs.HEAVY,text:(0,o.__)("Save 40% on SolidWP","better-wp-security")}),(0,r.createElement)(E,{variant:a.rK.WHITE,text:(0,o.__)("Purchase new products during the Black Friday Sale.")}),(0,r.createElement)(y,{href:"free"===e?"https://go.solidwp.com/bfcm24-go-pro":"https://go.solidwp.com/bfcm24-solid-security-pro-get-solid-suite",weight:500},(0,o.__)("Get Solid Suite","better-wp-security"))),(0,r.createElement)(x,{label:(0,o.__)("Dismiss","better-wp-security"),icon:c.Z,onClick:()=>n(!0)}),(0,r.createElement)(b,null)))}n.p=window.itsecWebpackPublicPath,(0,o.setLocaleData)({"":{}},"ithemes-security-pro"),(0,s.registerPlugin)("itsec-promos-dashboard",{render:()=>(0,r.createElement)(k,null)})},65813:(e,t,n)=>{"use strict";n.d(t,{r5:()=>f,OR:()=>w,Zk:()=>v,_:()=>E,qq:()=>y,eH:()=>h,gU:()=>a,nP:()=>u,Sj:()=>p,lo:()=>d,vl:()=>i});var r=n(87462),s=n(6293),o=n(9576);function i(e){return(0,o.createHigherOrderComponent)((t=>class extends s.Component{render(){return(0,s.createElement)(t,(0,r.Z)({},this.props,e))}}),"withProps")}var c=n(92819);function a(e,t,n={}){return(0,o.createHigherOrderComponent)((r=>class extends s.Component{constructor(){super(...arguments),this.debouncedPropInvoke=(0,c.debounce)(((...t)=>this.props[e](...t)),"function"==typeof t?t(this.props):t,n),this.handler=(e,...t)=>(e&&"function"==typeof e.persist&&e.persist(),this.debouncedPropInvoke(e,...t))}componentWillUnmount(){this.debouncedPropInvoke.cancel()}render(){const t={...this.props,[e]:this.handler};return(0,s.createElement)(r,t)}}),"withDebounceHandler")}function u(e,t){let n;return n=(0,c.isFunction)(t)?[{delay:e,cb:t}]:e,(0,o.createHigherOrderComponent)((e=>class extends s.Component{constructor(){super(...arguments),this.intervalIds=[]}componentDidMount(){for(const e of n)(t=>{this.intervalIds.push(setInterval((()=>t(this.props)),e.delay))})(e.cb)}componentWillUnmount(){this.intervalIds.forEach(clearInterval)}render(){return(0,s.createElement)(e,this.props)}}),"withInterval")}var l=n(4942);(0,o.createHigherOrderComponent)((e=>{var t;return t=class extends s.Component{constructor(...e){super(...e),(0,l.Z)(this,"state",{width:1280}),(0,l.Z)(this,"mounted",!1),(0,l.Z)(this,"ref",null),(0,l.Z)(this,"onWindowResize",(()=>{if(!this.mounted)return;const e=(0,s.findDOMNode)(this);if(e instanceof window.HTMLElement){const t=e.offsetWidth;this.setState({width:t})}}))}componentDidMount(){this.mounted=!0,window.addEventListener("resize",this.onWindowResize),document.getElementById("collapse-button").addEventListener("click",this.onWindowResize),this.onWindowResize()}componentWillUnmount(){this.mounted=!1,window.removeEventListener("resize",this.onWindowResize),document.getElementById("collapse-button").removeEventListener("click",this.onWindowResize)}render(){const{measureBeforeMount:t,...n}=this.props;return t&&!this.mounted?(0,s.createElement)("div",{className:this.props.className,style:this.props.style}):(0,s.createElement)(e,(0,r.Z)({},n,{width:this.state.width+20}))}},(0,l.Z)(t,"defaultProps",{measureBeforeMount:!1}),t}),"withWidth");const d=(0,o.createHigherOrderComponent)((e=>class extends s.Component{constructor(){super(...arguments),(0,l.Z)(this,"state",{pressed:{shift:!1,ctrl:!1,meta:!1,alt:!1}}),(0,l.Z)(this,"mounted",!1),this.listener=this.listener.bind(this),this.onBlur=this.onBlur.bind(this)}componentDidMount(){this.mounted=!0,window.addEventListener("keydown",this.listener),window.addEventListener("keyup",this.listener),window.addEventListener("click",this.listener),window.addEventListener("blur",this.onBlur)}componentWillUnmount(){this.mounted=!1,window.removeEventListener("keydown",this.listener),window.removeEventListener("keyup",this.listener),window.removeEventListener("click",this.listener),window.removeEventListener("blur",this.onBlur)}listener(e){this.mounted&&this.setState({pressed:{shift:e.shiftKey,ctrl:e.ctrlKey,meta:e.metaKey,alt:e.altKey}})}onBlur(){this.setState({pressed:{shift:!1,ctrl:!1,meta:!1,alt:!1}})}render(){return(0,s.createElement)(e,(0,r.Z)({pressedModifierKeys:this.state.pressed},this.props))}}),"withPressedModifierKeys"),p=(0,o.createHigherOrderComponent)((e=>function({navigate:t,...n}){return(0,s.createElement)(e,(0,r.Z)({},n,{onClick:e=>{try{n.onClick&&n.onClick(e)}catch(t){throw e.preventDefault(),t}e.defaultPrevented||0!==e.button||n.target&&"_self"!==n.target||function(e){return!!(e.metaKey||e.altKey||e.ctrlKey||e.shiftKey)}(e)||(e.preventDefault(),t())}}))}),"withNavigate"),m=new WeakMap;function h(e,t){(0,s.useLayoutEffect)((()=>{m.has(e)||(t(),m.set(e,!0))}),[])}function f(e,t=!0){const[n,r]=(0,s.useState)("idle"),[o,i]=(0,s.useState)(null),[c,a]=(0,s.useState)(null),u=(0,s.useCallback)(((...t)=>(r("pending"),a(null),e(...t).then((e=>{i(e),r("success")})).catch((e=>{a(e),i(null),r("error")})))),[e]);return(0,s.useEffect)((()=>{t&&u()}),[u,t]),{execute:u,status:n,value:o,error:c}}function w(e,t,n=window){const r=(0,s.useRef)();(0,s.useEffect)((()=>{r.current=t}),[t]),(0,s.useEffect)((()=>{if(!n||!n.addEventListener)return;const t=e=>r.current(e);return n.addEventListener(e,t),()=>n.removeEventListener(e,t)}),[e,n])}const g=["button","submit"];function v(e){const t=(0,s.useRef)(e);(0,s.useEffect)((()=>{t.current=e}),[e]);const n=(0,s.useRef)(!1),r=(0,s.useRef)(),o=(0,s.useCallback)((()=>{clearTimeout(r.current)}),[]);(0,s.useEffect)((()=>()=>o()),[]),(0,s.useEffect)((()=>{e||o()}),[e,o]);const i=(0,s.useCallback)((e=>{const{type:t,target:r}=e;(0,c.includes)(["mouseup","touchend"],t)?n.current=!1:function(e){if(!(e instanceof window.HTMLElement))return!1;switch(e.nodeName){case"A":case"BUTTON":return!0;case"INPUT":return(0,c.includes)(g,e.type)}return!1}(r)&&(n.current=!0)}),[]),a=(0,s.useCallback)((e=>{e.persist(),n.current||(r.current=setTimeout((()=>{document.hasFocus()?"function"==typeof t.current&&t.current(e):e.preventDefault()}),0))}),[]);return{onFocus:o,onMouseDown:i,onMouseUp:i,onTouchStart:i,onTouchEnd:i,onBlur:a}}function E(e,t){const[n,r]=(0,s.useState)((()=>{try{const n=window.localStorage.getItem(e);return n?JSON.parse(n):t}catch(e){return console.error(e),t}}));return[n,t=>{try{const s=t instanceof Function?t(n):t;r(s),window.localStorage.setItem(e,JSON.stringify(s))}catch(e){console.error(e)}}]}function y(e){const t=(0,s.useRef)(null),n=(0,s.useRef)(!1),r=(0,s.useRef)(e),o=(0,s.useRef)(e);return o.current=e,(0,s.useLayoutEffect)((()=>{e.forEach(((e,s)=>{const o=r.current[s];"function"==typeof e&&e!==o&&!1===n.current&&(o(null),e(t.current))})),r.current=e}),e),(0,s.useLayoutEffect)((()=>{n.current=!1})),(0,s.useCallback)((e=>{t.current=e,n.current=!0,(e?o.current:r.current).forEach((t=>{"function"==typeof t?t(e):t&&t.hasOwnProperty("current")&&(t.current=e)}))}),[])}n(48015),n(31600)},65202:(e,t,n)=>{"use strict";n.d(t,{Z:()=>o});var r=n(6293),s=n(14776);const o=(0,r.createElement)(s.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,r.createElement)(s.Path,{d:"M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"}))},10906:e=>{e.exports=function(){return this.itsec.dashboard.api}()},1528:e=>{e.exports=function(){return this.itsec.dashboard.dashboard}()},31600:e=>{e.exports=function(){return this.itsec.packages.data}()},34450:e=>{e.exports=function(){return this.itsec.promos.components}()},64893:e=>{e.exports=function(){return this.wp.components}()},9576:e=>{e.exports=function(){return this.wp.compose}()},48015:e=>{e.exports=function(){return this.wp.data}()},82521:e=>{e.exports=function(){return this.wp.date}()},6293:e=>{e.exports=function(){return this.wp.element}()},95122:e=>{e.exports=function(){return this.wp.i18n}()},81019:e=>{e.exports=function(){return this.wp.keycodes}()},3571:e=>{e.exports=function(){return this.wp.plugins}()},14776:e=>{e.exports=function(){return this.wp.primitives}()},73470:e=>{e.exports=function(){return this.wp.url}()},99196:e=>{"use strict";e.exports=window.React},92819:e=>{"use strict";e.exports=window.lodash},4942:(e,t,n)=>{"use strict";n.d(t,{Z:()=>s});var r=n(49142);function s(e,t,n){return(t=(0,r.Z)(t))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},49142:(e,t,n)=>{"use strict";n.d(t,{Z:()=>s});var r=n(71002);function s(e){var t=function(e,t){if("object"!==(0,r.Z)(e)||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var s=n.call(e,"string");if("object"!==(0,r.Z)(s))return s;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"===(0,r.Z)(t)?t:String(t)}}},e=>{e.O(0,[1930,976],(()=>(42552,e(e.s=42552))));var t=e.O();((window.itsec=window.itsec||{}).promos=window.itsec.promos||{}).dashboard=t}]);