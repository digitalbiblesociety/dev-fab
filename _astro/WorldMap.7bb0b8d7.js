import{S,i as z,s as M,e as L,C as g,a as A,b as W,d as w,D as x,g as p,h as q,j as o,k as j,l as $,A as E,p as y,J as B,q as O,E as R,$ as D}from"./index.92d3769b.js";import{L as k}from"./leaflet-src.6ca29db6.js";/* empty css                       */function I(t){let e,n,r,l,d,a,u,c,h,i;return{c(){e=L("button"),n=g("svg"),r=g("path"),l=g("path"),d=A(),a=L("button"),u=g("svg"),c=g("path"),this.h()},l(f){e=W(f,"BUTTON",{class:!0});var v=w(e);n=x(v,"svg",{xmlns:!0,fill:!0,viewBox:!0,"stroke-width":!0,stroke:!0,class:!0});var C=w(n);r=x(C,"path",{"stroke-linecap":!0,"stroke-linejoin":!0,d:!0}),w(r).forEach(p),l=x(C,"path",{"stroke-linecap":!0,"stroke-linejoin":!0,d:!0}),w(l).forEach(p),C.forEach(p),v.forEach(p),d=q(f),a=W(f,"BUTTON",{class:!0});var m=w(a);u=x(m,"svg",{xmlns:!0,fill:!0,viewBox:!0,"stroke-width":!0,stroke:!0,class:!0});var b=w(u);c=x(b,"path",{"stroke-linecap":!0,"stroke-linejoin":!0,d:!0}),w(c).forEach(p),b.forEach(p),m.forEach(p),this.h()},h(){o(r,"stroke-linecap","round"),o(r,"stroke-linejoin","round"),o(r,"d","M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"),o(l,"stroke-linecap","round"),o(l,"stroke-linejoin","round"),o(l,"d","M15 12a3 3 0 11-6 0 3 3 0 016 0z"),o(n,"xmlns","http://www.w3.org/2000/svg"),o(n,"fill","none"),o(n,"viewBox","0 0 24 24"),o(n,"stroke-width","1.5"),o(n,"stroke","currentColor"),o(n,"class","w-6 h-6"),o(e,"class","bg-stone-500 text-stone-100 opacity-80 w-8 h-8 p-1 rounded-md"),o(c,"stroke-linecap","round"),o(c,"stroke-linejoin","round"),o(c,"d","M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"),o(u,"xmlns","http://www.w3.org/2000/svg"),o(u,"fill","none"),o(u,"viewBox","0 0 24 24"),o(u,"stroke-width","1.5"),o(u,"stroke","currentColor"),o(u,"class","w-6 h-6"),o(a,"class","bg-stone-500 text-stone-100 opacity-80 0 w-8 h-8 p-1 rounded-md")},m(f,v){j(f,e,v),$(e,n),$(n,r),$(n,l),j(f,d,v),j(f,a,v),$(a,u),$(u,c),h||(i=[E(e,"click",t[1]),E(a,"click",t[2])],h=!0)},p:y,i:y,o:y,d(f){f&&p(e),f&&p(d),f&&p(a),h=!1,B(i)}}}function U(t){const e=O();return[e,()=>e("click-reset"),()=>e("click-lines")]}class V extends S{constructor(e){super(),z(this,e,U,I,M,{})}}function F(t){let e,n,r;return{c(){e=L("div"),this.h()},l(l){e=W(l,"DIV",{class:!0,style:!0}),w(e).forEach(p),this.h()},h(){o(e,"class","w-full relative z-10"),R(e,"height","400px")},m(l,d){j(l,e,d),n||(r=D(t[0].call(null,e)),n=!0)},p:y,i:y,o:y,d(l){l&&p(e),n=!1,r()}}}function N(t){return t==0?"#aaa":t<101&&t>90?"#fee0d2":t<91&&t>80?"#fcbba1":t<81&&t>70?"#fc9272":t<71&&t>50?"#fb6a4a":t<51&&t>20?"#ef3b2c":t<21&&t>10?"#cb181d":t<11&&t>5?"#a50f15":t<5?"#67000d":"#000"}function H(t){return t>1e9?"#14532d":t>9e7?"#166534":t>3e7?"#15803d":t>15e6?"#16a34a":t>75e5?"#22c55e":t>5e5?"#4ade80":t>1e5?"#86efac":"#bbf7d0"}function T(t){return{fillColor:N(t?.properties?.wwl_status),weight:2,opacity:1,color:"white",dashArray:"3",fillOpacity:.8,zIndex:10}}function J(t){return{fillColor:H(t?.properties.pop_est),weight:2,opacity:1,color:"white",dashArray:"3",fillOpacity:.7,zIndex:10}}function P(t,e,n){let{locale:r}=e;const l=new Intl.NumberFormat(r);let d=k.control({position:"topright"}),a;d.onAdd=c=>{let h=k.DomUtil.create("div");return a=new V({target:h,props:{}}),a.$on("click-eye",({detail:i})=>eye=i),a.$on("click-lines",()=>{c.eachLayer(function(i){i.setStyle(T(i.feature))})}),a.$on("click-reset",()=>{c.eachLayer(function(i){i.setStyle(J(i.feature))})}),h},d.onRemove=()=>{a&&(a.$destroy(),a=null)};async function u(c){let h=k.map(c);h.setView([10,0],2);const i=k.control({position:"bottomleft"});i.onAdd=function(s){return this._div=k.DomUtil.create("div","info"),this.update(),this._div},i.update=function(s){const _=s?`<b>${s.name}</b><br />${l.format(s.pop_est)} people,<br /> ${s.wwl_status!=0?s.wwl_status+" World Watch List Rank":""}`:"Hover over a country";this._div.innerHTML=`<div class="p-2 bg-white/80 shadow rounded">${_}</div>`},i.addTo(h);const v=await(await fetch("/data/country_persecution.json")).json();let m=await(await fetch("/data/countries.geojson")).json();for(let s=0;s<m.features.length;s++)m.features[s].properties.wwl_status=v.filter(_=>m.features[s].properties.iso_a2===_.country_id)[0]?.score??0;const b=k.geoJson(m,{style:T});return b.eachLayer(s=>{s.on("mouseover",function(_){s.setStyle({fillOpacity:1}),s.bringToFront(),i.update(s.feature.properties)}),s.on("mouseout",function(_){s.setStyle({fillOpacity:.7}),i.update()}),s.on("click",function(_){window.location.href=`/${r}/countries/${s.feature.properties.iso_a2}`},this)}),b.addTo(h),d.addTo(h),{destroy:()=>{d.remove(),h.remove()}}}return t.$$set=c=>{"locale"in c&&n(1,r=c.locale)},[u,r]}class X extends S{constructor(e){super(),z(this,e,P,F,M,{locale:1})}}export{X as default};