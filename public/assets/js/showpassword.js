
   const click = document.querySelector('#click');
   const input = document.getElementById('password');
   const showPassword = document.querySelector('a');

   
   click.addEventListener('click', (e)=> {
    e.preventDefault();
    

   if( input.getAttribute('type') == 'text') {
       input.setAttribute('type', 'password');
       showPassword.innerText = 'Mostrar senha';

    } else{
      input.setAttribute('type', 'text');
      input.style.height = '35px';
      input.style.borderRadius = '6px';
      input.style.marginBottom = '20px';
      input.style.padding = '5px';
      showPassword.innerText = 'Ocultar senha';

    }
    

   });