document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        var backToTopButton = document.querySelector('.back-to-top');
        
        if (window.scrollY > 200) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    document.querySelector('.back-to-top').addEventListener('click', function(e) {
        e.preventDefault();
        
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
})