const email = document.getElementById('email');
const password = document.getElementById('password');
const form = document.getElementById('form');
const errorElement = document.getElementById('error')
form.addEventListener('submit',(e) =>{
    let messagees =[]
    if(password.value.length >=4){
        messagees.push('Paswword length must be above 6')
    }
    if(messagees.length >0){
        e.preventDefault();
        errorElement.innerText = messagees.join(', ')

    }
    
})

