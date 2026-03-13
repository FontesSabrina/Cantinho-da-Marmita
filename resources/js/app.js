import './bootstrap';

import Swal from 'sweetalert2';

// Função global para alertas de sucesso
window.showSuccess = (message) => {
    Swal.fire({
        title: 'Sucesso!',
        text: message,
        icon: 'success',
        confirmButtonColor: '#198754', // Verde do seu sistema
    });
}

import IMask from 'imask';

document.addEventListener('DOMContentLoaded', () => {
    const element = document.getElementById('telefone');
    if (element) {
        IMask(element, {
            mask: '(00) 00000-0000'
        });
    }
});

import IMask from 'imask';

document.addEventListener('DOMContentLoaded', () => {
    const inputTelefone = document.getElementById('telefone');

    if (inputTelefone) {
        IMask(inputTelefone, {
            mask: '(00) 00000-0000'
        });
    }
});
