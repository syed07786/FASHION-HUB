const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

// Toggle navigation menu visibility
const toggleNav = () => {
    if (nav.classList.contains('active')) {
        nav.classList.remove('active');
    } else {
        nav.classList.add('active');
    }
};

// Add event listeners for bar and close buttons
if (bar) {
    bar.addEventListener('click', toggleNav);
}

if (close) {
    close.addEventListener('click', toggleNav);
}

// Close navigation menu on window resize if screen width is greater than 768px (or adjust as needed)
const handleResize = () => {
    if (window.innerWidth > 768 && nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
};

// Add event listener for window resize
window.addEventListener('resize', handleResize);

// Initial check in case window is already wide on page load
handleResize();
