window.addEventListener('scroll', ()=>{
   // reference
   let page_header = document.querySelector('.header');
  
    if (scrollY > 20) {
      page_header.style.background = "#eaeaea";
      document.querySelector(".title").style.color = "black";
    }else{                                           
     page_header.style.background = "rgba(95, 94, 94, 0.192)";
     document.querySelector(".title").style.color = "white";
    }
  })