document.addEventListener('DOMContentLoaded', () => {
    // Select all buttons and feature containers
    const buttons = document.querySelectorAll('.feature-btn');
    const containers = document.querySelectorAll('.feature-container');
    const returnToTopButton = document.getElementById('returnToTop');

    // Add event listeners to all buttons
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove 'active' class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            // Add 'active' class to the clicked button
            button.classList.add('active');

            // Hide all containers
            containers.forEach(container => {
                container.classList.remove('active');
                container.classList.add('hidden'); // Ensure hidden is added back
            });

            // Show the corresponding container
            const targetId = button.getAttribute('data-target');
            const targetContainer = document.getElementById(targetId);
            if (targetContainer) {
                targetContainer.classList.add('active');
                targetContainer.classList.remove('hidden'); // Remove hidden
            }
        });
    });
    
    // Show or hide the button based on scroll position
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            // User has scrolled down
            returnToTopButton.classList.add('show');
            returnToTopButton.classList.remove('hide');
        } else {
            // User is at the top
            returnToTopButton.classList.add('hide');
            returnToTopButton.classList.remove('show');
        }
    });

    // Scroll back to the top when the button is clicked
    returnToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scroll to the top
        });
    });
});


