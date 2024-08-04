function initFormValidation () {

    const formular = document.getElementById('contact-form')
    const inputValues = document.querySelectorAll('.form__input')

    inputValues.forEach((input, index) => {
        
        input.addEventListener('keyup', (event) => {

            if (input.value = '') {
                console.log('escribe algo');
                
            }
        })
    });
}

export {initFormValidation};