let currentSection = 0;
const sections = document.querySelectorAll('.form-section');
const navLinks = document.querySelectorAll('.nav-link');

// Function to show the current section and update navigation links
function showSection(index) {
    sections.forEach((section, i) => {
        section.classList.toggle('active', i === index);
        navLinks[i].classList.toggle('active', i === index);
    });
    currentSection = index; // Update the current section index
}

// Function to move to the next section
function nextSection() {
    if (currentSection < sections.length - 1) {
        currentSection++;
        showSection(currentSection);
    } else {
        console.log("Form completed! Submit functionality can be added here.");
    }
}

// Function to move to the previous section
function prevSection() {
    if (currentSection > 0) {
        currentSection--;
        showSection(currentSection);
    }
}

// Reset a question's radio buttons, select dropdown, or date field
function resetQuestion(questionName) {
    const radios = document.querySelectorAll(`input[name="${questionName}"]`);
    const select = document.querySelector(`#${questionName}`);
    const dateInput = document.querySelector(`input[name="${questionName}"]`);

    if (radios.length > 0) {
        radios.forEach(radio => (radio.checked = false));
    } else if (select) {
        select.selectedIndex = 0;
    } else if (dateInput) {
        dateInput.value = '';
    }
}

// Function to set default values for inputs
function setDefaultValues() {
    // Set default values for numeric radio buttons (default: 3)
    const numericRadioGroups = document.querySelectorAll('input[type="radio"][value="3"]');
    numericRadioGroups.forEach((radio) => {
        radio.checked = true;
    });

    // Set default values for "DA" or "NU" radio buttons (default: "DA")
    const yesNoRadioGroups = document.querySelectorAll('input[type="radio"][value="Da"]');
    yesNoRadioGroups.forEach((radio) => {
        radio.checked = true;
    });

    // Set default values for "DA" or "NU" radio buttons (default: "DA")
    const studyType = document.querySelectorAll('input[type="radio"][value="Licență"]');
    studyType.forEach((radio) => {
        radio.checked = true;
    });

    // Set default values for the organization/company  (default: "SRL")
    const companyRadioGroups = document.querySelectorAll('input[type="radio"][value="SRL"]');
    companyRadioGroups.forEach((radio) => {
        radio.checked = true;
    });

    // Set default values for date inputs
    const dateInputs = document.querySelectorAll('input[type="date"]');
    const today = new Date().toISOString().split('T')[0];
    dateInputs.forEach((input) => {
        input.value = today; //today
    });

    const textInputs = document.querySelectorAll('input[type="text"], textarea');
    textInputs.forEach((input) => {
        input.value = ''; // Leave blank or provide a default text
    });

    const selectInputs = document.querySelectorAll('select');
    selectInputs.forEach((select) => {
        if (select.options.length > 0) {
            select.value = select.options[1].value; // Set to the first valid option
        }
    });
}

// Initializes the form and displays the first section
document.addEventListener('DOMContentLoaded', () => {
    showSection(currentSection);

    setDefaultValues();

    // Add click event listeners to section navigation buttons
    navLinks.forEach((navLink, index) => {
        navLink.addEventListener('click', () => {
            showSection(index);
        });
    });
});

// Handles the Success message 
function showSuccessMessage() {
    window.scrollTo({
        bottom: 0,
        behavior: 'smooth'
    });

    // Show the success message
    const successMessage = document.getElementById('successMessage');
    successMessage.style.display = 'block';

    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 12000);
}
