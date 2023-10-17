


// mobile navigation references
const hamburger = document.querySelector('#onclick');
let nav_items = document.querySelector('.navbar');

hamburger.onclick = ()=>{
  hamburger.classList.toggle('is-active');
  nav_items.classList.toggle('active');
}



//header actions onscroll
window.addEventListener('scroll', ()=>{
 // references
 let page_header = document.querySelector('.header');
 let element_body = document.body;

  if (scrollY > 20) {
    page_header.classList.add('active');
    element_body.classList.add('toggle_background');
  }else{                                           
    page_header.classList.remove('active');
    element_body.classList.remove('toggle_background');
  }
})


// setting cookie on user's machine //
const cookieBox = document.querySelector(".wrapper");
const acceptBtn = document.querySelector(".buttons button");
const cancel_modal = document.querySelector(".cancel");


acceptBtn.addEventListener("click", ()=>{
   document.cookie = "CookieBy=Goo; max-age="+60*60*24*30; // cookie set for 1 month
   if (document.cookie) {
      cookieBox.classList.add("hide");
   }
   else{
      alert("cookie can't be set");
   }
})
let checkcookie = document.cookie.indexOf("CookieBy=Goo");
checkcookie != -1 ? cookieBox.classList.add("hide"): cookieBox.classList.remove("hide"); 

// remove cookie modal 
cancel_modal.addEventListener("click", ()=>{
cookieBox.classList.add("hide");
})