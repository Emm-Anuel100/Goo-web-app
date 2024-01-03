
// scripting of auto-complete searchbar
let available_words = new Array(
   'Nyanya Abuja to Biyan sokoto',
   'Wuse Abuja to Waru Adamawa',
   'Ajah Lagos to Garriki Enugu',
   'Mbano Imo to Ikoyi Lagos',
   'Nyanya Abuja to Biyan sokoto',
   'Arochukwu Imo to Ikeja Lagos',
   'Wuye Abuja to Benin-city Edo',
   'Nike Enugu to Aba Abia',
   'Garriki Enugu to Owerri Imo',
   'Makurdi Benue to Lekki Lagos',
   'Adamawa Yola to Kano Kano',
   'Biku Yola to Kaduna Kaduna',
   'Lokoja Kogi to Ikoyi Lagos',
   'Lekki Lagos to Osogbo Osun',
   'Awka Anambra to Kubwa Abuja',
   'Awka Anambra to Suleja Niger'
 );
 
 const results_box = document.querySelector('.result-box');
 const input_box = document.querySelector('#input-box');
 
 input_box.oninput = ()=> {
 
   let result = new Array();
   let input = input_box.value;
   if (input.length) {
      result = available_words.filter((keyword)=>{
       return keyword.toLowerCase().includes(input.toLowerCase());
      });
      console.log(result);
   }
   display_outputs(result);
 
   if (!result.length) {
      results_box.innerHTML = "";
   }
 }
 
 function display_outputs(result) {
   const content = result.map((list)=>{
      return "<li onclick=selectinput(this)>" + list + "</li>";
   });
 
   results_box.innerHTML = "<ul>" + content.join('') + "</ul>";
 }
 
 function selectinput(list) {
   input_box.value = list.innerHTML;
   results_box.innerHTML = ""; // hide all elements when clicked on one
 }
 