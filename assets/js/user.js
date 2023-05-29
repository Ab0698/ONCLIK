//declaration des variables
const usernameInput = document.querySelector("#nom");
const password2Input = document.querySelector("#confirm_pwd");

//verification du username
    var small1 = document.querySelector('#error_name');
    usernameInput.addEventListener('input' , () =>{
        if(usernameInput.value.length >= 4) {
            small1.textContent = '';
        }else{
            small1.textContent = ' Le nom doit contenir au moins 4 caractères.';
        }
    })

    // la fonction pour verifier l'adresse email
    const email2Input= document.querySelector("#email");
    var small2 = document.querySelector('#error_email');
            
    var ma = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        email2Input.addEventListener('input' , () =>{
            if(ma.test(email2Input.value)){
                small2.textContent = ' ';
            
            
            }else{
                small2.textContent= ' L adresse email n est pas valide' ;
            }   
        })
          
  //Au moins 1  majuscule
            //Au moins 1 caractere
            // Au moins 1 c minuscule
            //Au moins 1 chiffre
            //Minimum 8 caractères
            const password1Input = document.querySelector("#pwd");
            var small3 = document.querySelector('#error_pwd');
            var str = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    
            password1Input.addEventListener('input' , () =>{
            if( str.test(password1Input.value)){
                small3.textContent = ' ';
            }else{
                small3.textContent= 'Le mot de passe n est pas valide' ;
            }
            })

