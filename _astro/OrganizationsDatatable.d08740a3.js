import{S as g,i as h,s as v,e as _,c as x,b as k,d as y,f as b,g as c,j as D,k as G,m as j,t as z,n as C,o as N}from"./index.92d3769b.js";import{G as S,d as o,c as m,e as u,a as f}from"./l10n.module.6684bd7a.js";function V(i){let a,t,r;return t=new S({props:{columns:i[2],data:i[0],sort:!0,search:!0,pagination:{enabled:!0,limit:10},language:{ar:o,cn:m,en:{},es:u}[i[1]]}}),{c(){a=_("div"),x(t.$$.fragment),this.h()},l(e){a=k(e,"DIV",{class:!0});var n=y(a);b(t.$$.fragment,n),n.forEach(c),this.h()},h(){D(a,"class","flex flex-row")},m(e,n){G(e,a,n),j(t,a,null),r=!0},p(e,[n]){const s={};n&4&&(s.columns=e[2]),n&1&&(s.data=e[0]),n&2&&(s.language={ar:o,cn:m,en:{},es:u}[e[1]]),t.$set(s)},i(e){r||(z(t.$$.fragment,e),r=!0)},o(e){C(t.$$.fragment,e),r=!1},d(e){e&&c(a),N(t)}}}function p(i,a,t){let r,{t:e={}}=a,{data:n}=a,{locale:s}=a;return i.$$set=l=>{"t"in l&&t(3,e=l.t),"data"in l&&t(0,n=l.data),"locale"in l&&t(1,s=l.locale)},i.$$.update=()=>{i.$$.dirty&2&&t(2,r=[{id:"tt",name:"Name",formatter:(l,d)=>f(`<a class="hover:underline" href="/${s}/organizations/${d.cells[2].data}">
        <div class="font-medium text-gray-900 dark:text-stone-200">${d.cells[0].data}</div>
        <div class="text-gray-500 dark:text-stone-300">${d.cells[1].data??""}</div>
    </a>
    `)},{id:"tv",name:"Vernacular Name",hidden:!0},{id:"id",name:"id",hidden:!0},{id:"ci",name:"ci",hidden:!0},{id:"cn",name:"Country",formatter:(l,d)=>f(`
    <a class="hover:underline flex flex-row items-center" href="/${s}/countries/${d.cells[3].data}">
        <svg class="h-5 w-5 drop-shadow-md inline-block mr-1">
            <use href="/img/flags.svg#${d.cells[3].data}" xlink:href="#AD"></use>
        </svg>
        <div class="text-gray-900 dark:text-stone-200">${d.cells[4].data??""}</div>
    </a>
  `)}])},[n,s,r,e]}class A extends g{constructor(a){super(),h(this,a,p,V,v,{t:3,data:0,locale:1})}}export{A as default};
