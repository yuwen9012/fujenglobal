document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');

        if (link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor click behavior
                
                // Remove 'active' class from all nav items
                navItems.forEach(item => item.classList.remove('active'));
                
                // Add 'active' class to the clicked nav item
                item.classList.add('active');
            });
        }
    });
});