// When the "Offers" link is clicked, scroll to the Offers section
document.querySelector('.nav-link[href="#offers"]').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior

    // Scroll to the Offers section
    document.querySelector('#offers').scrollIntoView({
        behavior: 'smooth'
    });
});
