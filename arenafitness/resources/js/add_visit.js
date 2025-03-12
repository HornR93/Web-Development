document.addEventListener('DOMContentLoaded', function() {
    
    document.getElementById('toggleButton').addEventListener('click', function() {
        var popup = document.getElementById('popupForm');
        popup.style.display = "flex";
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        var popup = document.getElementById('popupForm');
        popup.style.display = "none";
    });
});
