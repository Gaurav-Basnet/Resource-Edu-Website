document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[method="POST"]');
    const inputs = form.querySelectorAll('input, select, textarea');
    
    // Validation patterns
    const patterns = {
        name: /^[a-zA-Z\s]{3,}$/,
        email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        phone: /^\d{7,15}$/, // Any phone number between 7-15 digits
        service: /.+/, // At least one service selected
        mode: /.+/, // At least one mode selected
        date: /^\d{4}-\d{2}-\d{2}$/, // YYYY-MM-DD format
        time: /.+/, // At least one time selected
        message: /^[\s\S]*$/ // Any text (optional field)
    };
    
    // Error messages
    const errorMessages = {
        name: 'Please enter a valid name (at least 3 letters)',
        email: 'Please enter a valid email address',
        phone: 'Please enter a valid phone number (7-15 digits)',
        service: 'Please select a service',
        mode: 'Please select a preferred mode',
        date: 'Please select a valid future date',
        time: 'Please select a preferred time',
        message: '' // No error needed for optional field
    };
    
    // Validate field in real-time
    function validateField(field) {
        const fieldName = field.name;
        let value;
        
        if (field.type === 'checkbox' || field.type === 'radio') {
            value = field.checked ? field.value : '';
        } else {
            value = field.value;
        }
        
        const isValid = patterns[fieldName].test(value);
        
        // Remove any existing error messages
        const existingError = field.closest('div').querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Update field styling (skip for radio buttons handled separately)
        if (fieldName !== 'mode' && fieldName !== 'consent') {
            if (isValid) {
                field.classList.remove('border-red-500');
                field.classList.add('border-green-500');
            } else {
                field.classList.remove('border-green-500');
                field.classList.add('border-red-500');
            }
        }
        
        // Show error message if invalid
        if (!isValid && value.trim() !== '' && errorMessages[fieldName]) {
            const errorElement = document.createElement('p');
            errorElement.textContent = errorMessages[fieldName];
            errorElement.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
            
            // For radio buttons, add error below the group
            if (fieldName === 'mode') {
                const radioGroup = document.querySelector('[name="mode"]').closest('div');
                radioGroup.parentNode.appendChild(errorElement);
            } else {
                field.closest('div').appendChild(errorElement);
            }
        }
        
        return isValid;
    }
    
    // Special date validation (must be today or future)
    function validateDate() {
        const dateField = document.getElementById('date');
        const selectedDate = new Date(dateField.value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        const isValid = selectedDate >= today && patterns.date.test(dateField.value);
        
        // Update styling
        if (isValid) {
            dateField.classList.remove('border-red-500');
            dateField.classList.add('border-green-500');
        } else {
            dateField.classList.remove('border-green-500');
            dateField.classList.add('border-red-500');
        }
        
        // Remove any existing error message
        const existingError = dateField.closest('div').querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Show error if invalid
        if (!isValid && dateField.value !== '') {
            const errorElement = document.createElement('p');
            errorElement.textContent = errorMessages.date;
            errorElement.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
            dateField.closest('div').appendChild(errorElement);
        }
        
        return isValid;
    }
    
    // Phone number validation
    function validatePhone() {
        const phoneField = document.getElementById('phone');
        const value = phoneField.value.trim();
        
        // Remove any non-digit characters
        const cleanedValue = value.replace(/\D/g, '');
        
        // Update the field value (in case user entered non-digits)
        phoneField.value = cleanedValue;
        
        // Validate phone number
        const isValid = patterns.phone.test(cleanedValue);
        
        // Update styling
        if (isValid) {
            phoneField.classList.remove('border-red-500');
            phoneField.classList.add('border-green-500');
        } else {
            phoneField.classList.remove('border-green-500');
            phoneField.classList.add('border-red-500');
        }
        
        // Remove any existing error message
        const existingError = phoneField.closest('div').querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Show error if invalid and not empty
        if (!isValid && value !== '') {
            const errorElement = document.createElement('p');
            errorElement.textContent = errorMessages.phone;
            errorElement.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
            phoneField.closest('div').appendChild(errorElement);
        }
        
        return isValid;
    }
    
    // Radio button validation (mode selection)
    function validateMode() {
        const selectedMode = document.querySelector('input[name="mode"]:checked');
        const isValid = selectedMode !== null;
        
        // Get all mode option containers
        const modeOptions = document.querySelectorAll('[name="mode"]').closest('label');
        
        // Update styling for all options
        modeOptions.forEach(option => {
            if (isValid) {
                option.classList.remove('border-red-500');
                option.classList.add('border-green-500');
            } else {
                option.classList.remove('border-green-500');
                option.classList.add('border-red-500');
            }
        });
        
        // Remove any existing error message
        const existingError = document.querySelector('[name="mode"]').closest('div').querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        
        // Show error if invalid
        if (!isValid) {
            const errorElement = document.createElement('p');
            errorElement.textContent = errorMessages.mode;
            errorElement.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
            document.querySelector('[name="mode"]').closest('div').parentNode.appendChild(errorElement);
        }
        
        return isValid;
    }
    
    // Validate all fields before submission
    function validateForm() {
        let isValid = true;
        
        inputs.forEach(input => {
            if (input.name === 'phone') {
                if (!validatePhone()) isValid = false;
            } else if (input.name === 'date') {
                if (!validateDate()) isValid = false;
            } else if (input.name === 'mode') {
                if (!validateMode()) isValid = false;
            } else if (input.required && !validateField(input)) {
                isValid = false;
            }
        });
        
        return isValid;
    }
    
    // Set up event listeners
    inputs.forEach(input => {
        if (input.name === 'phone') {
            input.addEventListener('input', validatePhone);
            input.addEventListener('blur', validatePhone);
        } else if (input.name === 'date') {
            input.addEventListener('change', validateDate);
            input.addEventListener('blur', validateDate);
        } else if (input.name === 'mode') {
            input.addEventListener('change', validateMode);
        } else {
            input.addEventListener('input', () => validateField(input));
            input.addEventListener('blur', () => validateField(input));
        }
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
        if (!validateForm()) {
            e.preventDefault();
            // Scroll to the first error
            const firstError = document.querySelector('.border-red-500, .error-message');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
    
    // Initialize validation on page load for any pre-filled fields
    inputs.forEach(input => {
        if (input.value.trim() !== '') {
            if (input.name === 'phone') {
                validatePhone();
            } else if (input.name === 'date') {
                validateDate();
            } else {
                validateField(input);
            }
        }
    });
});