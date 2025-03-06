const AddOpen = document.getElementById('AddOpen')
const AddClose = document.getElementById('AddClose')
const AddVisit = document.getElementById('AddVisit')





AddOpen.addEventListener('click', () => {
    AddVisit.showModal();

});

AddClose.addEventListener('click', () => {
    AddVisit.close();
});
