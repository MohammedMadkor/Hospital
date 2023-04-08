function menuToggle(){
    const toggleMenu=document.querySelector('.menu');
    toggleMenu.classList.toggle('active')

        }
        let profile=document.getElementById("departImg");
        let input=document.getElementById("exampleInputPassword1");
        input.onchange=function(){
            profile.src=URL.createObjectURL(input.files[0]);
        }
