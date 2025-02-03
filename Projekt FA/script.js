const LogInOpen = document.getElementById('LogInOpen')
const LogInClose = document.getElementById('LogInClose')
const LogIn = document.getElementById('LogIn')





LogInOpen.addEventListener('click', () => {
    LogIn.showModal();

});

LogInClose.addEventListener('click', () => {
    LogIn.close();
});


// Získání aktuálního data a času
const dnes = new Date();

// Formátování data (DD.MM.YYYY)
const den = dnes.getDate().toString().padStart(2, '0');
const mesic = (dnes.getMonth() + 1).toString().padStart(2, '0');
const rok = dnes.getFullYear();

// Formátování času (HH:MM:SS)
const hodiny = dnes.getHours().toString().padStart(2, '0');
const minuty = dnes.getMinutes().toString().padStart(2, '0');
const sekundy = dnes.getSeconds().toString().padStart(2, '0');

// Výpis do HTML
document.getElementById("datumCas").textContent = `${den}.${mesic}.${rok} ${hodiny}:${minuty}:${sekundy}`;
