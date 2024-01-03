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

