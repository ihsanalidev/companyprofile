document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('responsible');
    const submitBtn = document.getElementById('book-demo-btn-cta');
    const requiredInputs = document.querySelectorAll('.form-input-cta input[required], .form-input-cta select[required]');

    checkbox.addEventListener('change', function() {
        let allFilled = true;

        requiredInputs.forEach(input => {
            if (input.value.trim() === "") {
                input.classList.add('invalid');
                allFilled = false;
            } else {
                input.classList.remove('invalid');
            }
        });

        submitBtn.disabled = !(this.checked && allFilled);
    });

    requiredInputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim() !== "") {
                this.classList.remove('invalid');
            }
        });
    });
});