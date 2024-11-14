// Sistema Mandar Email

const form = document.querySelector('#form');

function emailSend(e) {
    e.preventDefault();
    const serviceID = 'service_evbq9r8';
    const templateID = 'template_zi0ekxx';

    const valor = {
        from_title: document.querySelector('#titulo').value,
        data: document.querySelector('#data').value,
        message: document.querySelector('#message').value
    };

    emailjs.send(serviceID, templateID, valor)
    .then(() => {
        console.log('SUCCESS!');
        form.reset();
    })
    .catch(err => console.log('FAILED...', err));
};

form.addEventListener('submit', emailSend);

