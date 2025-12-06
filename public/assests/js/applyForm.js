document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('applicationForm');
    const inputs = form.querySelectorAll('input, select, textarea');
        const submitBtn = document.getElementById("submitBtn");
    
    // Validation patterns
    const patterns = {
        name: /^[a-zA-Z\s]{3,}$/,
        email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        phone: /^\d{7,15}$/,
        dob: /^\d{4}-\d{2}-\d{2}$/,
        country: /.+/,
        course: /.+/,
        level: /.+/,
        intake_year: /.+/,
        intake_season: /.+/,
        current_education: /.+/,
        institution: /^.{3,}$/,
        gpa: /^(\d{1,2}(\.\d{1,2})?%?|\d{1,2}\.\d{1,2})$/,
        grad_year: /.+/,
        budget: /.+/,
        english_level: /.+/,
        passport: /.+/,
        message: /^[\s\S]*$/,
        newsletter: /^[\s\S]*$/
    };
    
    // Error messages
    const errorMessages = {
        name: 'Please enter a valid name (at least 3 letters)',
        email: 'Please enter a valid email address',
        phone: 'Please enter a valid phone number (7-15 digits)',
        dob: 'Please select a valid date of birth',
        country: 'Please select a country',
        course: 'Please select a course',
        level: 'Please select a study level',
        intake_year: 'Please select an intake year',
        intake_season: 'Please select an intake season',
        current_education: 'Please select your current education level',
        institution: 'Please enter your institution name (at least 3 characters)',
        gpa: 'Please enter a valid GPA/Percentage (e.g. 3.5 or 85%)',
        grad_year: 'Please select your graduation year',
        budget: 'Please select your budget range',
        english_level: 'Please select your English proficiency level',
        passport: 'Please select your passport status',
        message: '',
        newsletter: ''
    };
    
    // Validate field in real-time
    function validateField(field) {
        const fieldName = field.name;
        let value;
        
        if (field.type === 'checkbox') {
            value = field.checked ? 'checked' : '';
        } else {
            value = field.value;
        }
        
        const isValid = patterns[fieldName].test(value);
        const errorElement = document.getElementById(`${fieldName}-error`);
        
        // Update field styling
        if (fieldName !== 'newsletter') {
            if (isValid) {
                field.classList.remove('border-red-500');
                field.classList.add('border-green-500');
            } else {
                field.classList.remove('border-green-500');
                field.classList.add('border-red-500');
            }
        }
        
        // Update error message
        if (errorElement) {
            if (!isValid && value.trim() !== '' && errorMessages[fieldName]) {
                errorElement.textContent = errorMessages[fieldName];
                errorElement.classList.remove('hidden');
            } else {
                errorElement.classList.add('hidden');
            }
        }
        
        return isValid;
    }
    
    // Special date validation for date of birth
    function validateDOB() {
        const dobField = document.getElementById('dob');
        const dobValue = dobField.value;
        const dobDate = new Date(dobValue);
        const today = new Date();
        const minAgeDate = new Date();
        minAgeDate.setFullYear(today.getFullYear() - 16); // Minimum age 16 years
        
        let isValid = patterns.dob.test(dobValue);
        
        // Check if date is in the past and minimum age requirement
        if (isValid) {
            isValid = dobDate <= minAgeDate;
        }
        
        // Update styling
        if (isValid) {
            dobField.classList.remove('border-red-500');
            dobField.classList.add('border-green-500');
        } else {
            dobField.classList.remove('border-green-500');
            dobField.classList.add('border-red-500');
        }
        
        // Update error message
        const errorElement = document.getElementById('dob-error');
        if (errorElement) {
            if (!isValid && dobValue !== '') {
                errorElement.textContent = 'You must be at least 16 years old';
                errorElement.classList.remove('hidden');
            } else {
                errorElement.classList.add('hidden');
            }
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
        
        // Update error message
        const errorElement = document.getElementById('phone-error');
        if (errorElement) {
            if (!isValid && value !== '') {
                errorElement.textContent = errorMessages.phone;
                errorElement.classList.remove('hidden');
            } else {
                errorElement.classList.add('hidden');
            }
        }
        
        return isValid;
    }
    
    // GPA validation
    function validateGPA() {
        const gpaField = document.getElementById('gpa');
        const value = gpaField.value.trim();
        const isValid = patterns.gpa.test(value);
        
        // Update styling
        if (isValid) {
            gpaField.classList.remove('border-red-500');
            gpaField.classList.add('border-green-500');
        } else {
            gpaField.classList.remove('border-green-500');
            gpaField.classList.add('border-red-500');
        }
        
        // Update error message
        const errorElement = document.getElementById('gpa-error');
        if (errorElement) {
            if (!isValid && value !== '') {
                errorElement.textContent = errorMessages.gpa;
                errorElement.classList.remove('hidden');
            } else {
                errorElement.classList.add('hidden');
            }
        }
        
        return isValid;
    }
    
    // Intake validation (both year and season)
    function validateIntake() {
        const yearField = document.getElementById('intake_year');
        const seasonField = document.getElementById('intake_season');
        const yearValid = patterns.intake_year.test(yearField.value);
        const seasonValid = patterns.intake_season.test(seasonField.value);
        const isValid = yearValid && seasonValid;
        
        // Update styling
        if (yearValid) {
            yearField.classList.remove('border-red-500');
            yearField.classList.add('border-green-500');
        } else {
            yearField.classList.remove('border-green-500');
            yearField.classList.add('border-red-500');
        }
        
        if (seasonValid) {
            seasonField.classList.remove('border-red-500');
            seasonField.classList.add('border-green-500');
        } else {
            seasonField.classList.remove('border-green-500');
            seasonField.classList.add('border-red-500');
        }
        
        // Update error message
        const errorElement = document.getElementById('intake-error');
        if (errorElement) {
            if (!isValid && (yearField.value !== '' || seasonField.value !== '')) {
                errorElement.textContent = 'Please select both intake year and season';
                errorElement.classList.remove('hidden');
            } else {
                errorElement.classList.add('hidden');
            }
        }
        
        return isValid;
    }
    
    // Validate all fields before submission
    function validateForm() {
                submitBtn.disabled = true;
        submitBtn.classList.add("opacity-75", "cursor-not-allowed");
        submitBtn.innerHTML = "Sending...";

        // Optionally re-enable after 3 seconds (3000 ms)
        setTimeout(() => {
            submitBtn.disabled = false;
            submitBtn.classList.remove("opacity-75", "cursor-not-allowed");
            submitBtn.innerHTML = "Submit";
        }, 30000);
     
        let isValid = true;
        
        inputs.forEach(input => {
            if (input.name === 'phone') {
                if (!validatePhone()) isValid = false;
            } else if (input.name === 'dob') {
                if (!validateDOB()) isValid = false;
            } else if (input.name === 'gpa') {
                if (!validateGPA()) isValid = false;
            } else if (input.name === 'intake_year' || input.name === 'intake_season') {
                if (!validateIntake()) isValid = false;
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
        } else if (input.name === 'dob') {
            input.addEventListener('change', validateDOB);
            input.addEventListener('blur', validateDOB);
        } else if (input.name === 'gpa') {
            input.addEventListener('input', validateGPA);
            input.addEventListener('blur', validateGPA);
        } else if (input.name === 'intake_year' || input.name === 'intake_season') {
            input.addEventListener('change', validateIntake);
            input.addEventListener('blur', validateIntake);
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
            const firstErrorField = document.querySelector('.border-red-500');
            if (firstErrorField) {
                firstErrorField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstErrorField.focus();
            }
        }
    });
    
    // Initialize validation on page load for any pre-filled fields
    inputs.forEach(input => {
        if (input.value.trim() !== '') {
            if (input.name === 'phone') {
                validatePhone();
            } else if (input.name === 'dob') {
                validateDOB();
            } else if (input.name === 'gpa') {
                validateGPA();
            } else if (input.name === 'intake_year' || input.name === 'intake_season') {
                validateIntake();
            } else {
                validateField(input);
            }
        }
    });
});