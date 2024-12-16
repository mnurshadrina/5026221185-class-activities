function showSection(sectionId) {
    const sections = document.querySelectorAll('.content');
    sections.forEach(section => {
        if (section.id === sectionId) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    });
}

function toggleNav() {
    const navButtons = document.querySelectorAll('.nav-button');
    navButtons.forEach(button => {
        if (button.style.display === 'none' || button.style.display === '') {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
}

// Form validation
document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Form submitted successfully!');
});
