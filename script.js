document.addEventListener('DOMContentLoaded', function() {
      const navToggle = document.getElementById('nav-toggle');
      const navMenu = document.querySelector('.nav');

      navToggle.addEventListener('change', function() {
        if (this.checked) {
          navMenu.style.display = 'block';
        } else {
          navMenu.style.display = 'none';
        }
      });
    });