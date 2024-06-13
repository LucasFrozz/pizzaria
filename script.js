const darkModeBtn = document.getElementById('dark-mode-btn');
const lightModeBtn = document.getElementById('light-mode-btn');

darkModeBtn.addEventListener('click', () => {
    document.body.classList.add('dark-mode');
});

lightModeBtn.addEventListener('click', () => {
    document.body.classList.remove('dark-mode');
});