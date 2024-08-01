import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './styles/navbar.css';
import './controllers/hello_controller.js';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
let status=false;

function menustart(){

 
    
 var menuBurger=document.getElementById('menuBurger');
    var menuHidden=document.getElementById('hiden_menu');
 menuBurger.addEventListener("click", enableOrnot);

  console.log(menuBurger);
  console.log(menuHidden);

  function enableOrnot() {
    if (status==false)
    {
        menuHidden.style.visibility="visible";
        menuHidden.style.left="55vw";
        menuHidden.style.top="8rem";
        menuHidden.style.backgroundColor="#D21034";
        menuHidden.style.maxWidth="50vw";
        menuHidden.style.minHeight="250px";
        menuHidden.style.transitionDuration="1s";
        menuHidden.style.padding="30px";
        menuHidden.style.gap="3rem";
        menuHidden.style.borderRadius="10px";
        menuHidden.style.backgroundColor="#0A328C";
    
        console.log("it's visible");
        status=true;
    }
        
        else {
        menuHidden.style.visibility = "hidden";
        menuHidden.style.left="-1000px";
        menuHidden.style.top="-10000rem";
        menuHidden.style.backgroundColor="none";
        menuHidden.style.minWidth="0px";
        menuHidden.style.minHeight="0px";
       
        
        console.log("it's hidden");
        status=false;
    }

};
}



menustart();