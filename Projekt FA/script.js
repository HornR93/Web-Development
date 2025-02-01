const LogInOpen = document.getElementById('LogInOpen')
const LogInClose = document.getElementById('LogInClose')
const LogIn = document.getElementById('LogIn')

LogInOpen.addEventListener('click', () => {
    LogIn.showModal();

});

LogInClose.addEventListener('click', () => {
    LogIn.close();
});
