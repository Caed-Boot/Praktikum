function initFormValidation () {

    const formular = document.getElementById('contact-form')
    const inputValues = document.querySelectorAll('.form__input')

    inputValues.forEach((element, index) => {
        
        console.log(element);
    });
}

export {initFormValidation};