const phoneInput = document.getElementById('phone');
const cpfInput = document.getElementById('cpf');

const maskInputValue = (input) => {
    const patterns = {
        "phone": "(##)#####-####",
        "cpf": "###.###.###-##"
    }

    return () => {
        const pattern = patterns[input.id];
        const digits = input.value.replace(/\D/g, '');
        let digitIndex = 0;

        let maskedValue = pattern.replace(/#/g, () => digits[digitIndex++] || '');
        input.value = maskedValue;
    }
}

phoneInput.addEventListener('input', maskInputValue(phoneInput));
cpfInput.addEventListener('input', maskInputValue(cpfInput));