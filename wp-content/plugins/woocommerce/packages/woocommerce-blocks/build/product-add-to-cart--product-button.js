(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[4],{385:function(t,e,c){"use strict";c.d(e,"a",(function(){return u}));var r=c(0),n=c(9),a=c(17),s=c(14),i=c(38);const o=(t,e)=>{const c=t.find(t=>{let{id:c}=t;return c===e});return c?c.quantity:0},u=t=>{const{addItemToCart:e}=Object(n.useDispatch)(a.CART_STORE_KEY),{cartItems:c,cartIsLoading:u}=Object(i.a)(),{createErrorNotice:d,removeNotice:b}=Object(n.useDispatch)("core/notices"),[l,f]=Object(r.useState)(!1),p=Object(r.useRef)(o(c,t));return Object(r.useEffect)(()=>{const e=o(c,t);e!==p.current&&(p.current=e)},[c,t]),{cartQuantity:Number.isFinite(p.current)?p.current:0,addingToCart:l,cartIsLoading:u,addToCart:function(){let c=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1;return f(!0),e(t,c).then(()=>{b("add-to-cart")}).catch(t=>{d(Object(s.decodeEntities)(t.message),{id:"add-to-cart",context:"wc/all-products",isDismissible:!0})}).finally(()=>{f(!1)})}}}}}]);