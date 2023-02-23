import{S as h,i as v,s as x,e as _,c as k,b as y,d as b,f as G,g as m,j,k as C,m as D,t as N,n as S,o as V}from"./index.92d3769b.js";import{G as p,d as u,c as f,e as g,a as o}from"./l10n.module.6684bd7a.js";function q(l){let t,a,d;return a=new p({props:{columns:l[2],data:l[1],sort:!0,search:!0,pagination:{enabled:!0,limit:10},language:{ar:u,cn:f,en:{},es:g}[l[0]]}}),{c(){t=_("div"),k(a.$$.fragment),this.h()},l(e){t=y(e,"DIV",{class:!0});var s=b(t);G(a.$$.fragment,s),s.forEach(m),this.h()},h(){j(t,"class","flex flex-row")},m(e,s){C(e,t,s),D(a,t,null),d=!0},p(e,[s]){const i={};s&4&&(i.columns=e[2]),s&2&&(i.data=e[1]),s&1&&(i.language={ar:u,cn:f,en:{},es:g}[e[0]]),a.$set(i)},i(e){d||(N(a.$$.fragment,e),d=!0)},o(e){S(a.$$.fragment,e),d=!1},d(e){e&&m(t),V(a)}}}function E(l,t,a){let d,e,{t:s={}}=t,{data:i}=t,{locale:c}=t;return l.$$set=r=>{"t"in r&&a(3,s=r.t),"data"in r&&a(4,i=r.data),"locale"in r&&a(0,c=r.locale)},l.$$.update=()=>{l.$$.dirty&1&&a(2,d=[{id:"tt",name:"Name",formatter:(r,n)=>o(`<a class="hover:underline" href="${n.cells[6].data}">
				<div class="font-medium text-gray-900 dark:text-stone-200">${n.cells[0].data}</div>
				<div class="text-gray-500 dark:text-stone-300">${n.cells[1].data??""}
				</div>
			</a>`)},{id:"tv",name:"Vernacular Name",hidden:!0},{id:"ln",name:"Language",formatter:(r,n)=>o(`<a class="hover:underline" href="/${c}/languages/${n.cells[3].data}"><div class="font-medium text-gray-900 dark:text-stone-200">${n.cells[2].data}</div><div class="text-gray-500 dark:text-stone-300">${n.cells[3].data??""}</div></a>`)},{id:"iso",name:"iso",hidden:!0},{id:"cn",name:"Country",formatter:(r,n)=>o(`
	  <a class="hover:underline flex flex-row items-center" href="/countries/${n.cells[5].data}">
		  <svg class="h-5 w-5 drop-shadow-md inline-block mr-1">
			  <use href="/images/flags.svg#${n.cells[5].data}" xlink:href="#${n.cells[5].data}"></use>
		  </svg>
		  <div class="text-gray-900 dark:text-stone-200">${n.cells[4].data}</div>
	  </a>
	`)},{id:"ci",name:"ci",hidden:!0},{id:"url",name:"url",hidden:!0}]),l.$$.dirty&16&&a(1,e=i)},[c,e,d,s,i]}class R extends h{constructor(t){super(),v(this,t,E,q,x,{t:3,data:4,locale:0})}}export{R as default};
