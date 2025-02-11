const LogInOpen = document.getElementById('LogInOpen')
const LogInClose = document.getElementById('LogInClose')
const LogIn = document.getElementById('LogIn')

LogInOpen.addEventListener('click', () => {
    LogIn.showModal();

});

LogInClose.addEventListener('click', () => {
    LogIn.close();
});


const otevrit = document.getElementById('otevrit');
const zavrit = document.getElementById('zavrit');const dialog = document.getElementById('dialog');

// přidáme posluchače na kliknutí - v callbacku otevřeme dialog
otevrit.addEventListener('click', () => {
       dialog.showModal();
    });
    
// zde v callbacku zavřeme dialog
/zavrit.addEventListener('click', () => {
        dialog.close();
    });
