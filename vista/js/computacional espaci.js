
window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.container').style.opacity = 0;
    document.querySelector('.container').style.transition = 'opacity 2s ease-in-out';
    setTimeout(() => {
      document.querySelector('.container').style.opacity = 1;
    }, 100);
  });
  
