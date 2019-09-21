var btn = document.querySelector('button'), 
    modal = document.querySelector('.modal'),
    closeBtn = document.querySelector('.closeBtn'); 

btn.addEventListener('click', function() {
    document.body.className +=" modal-open"
    modal.style.display = 'flex'; 
})
closeBtn.addEventListener('click', function () {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
})
window.addEventListener('click', function (e) {
    if(e.target == modal) {
        modal.style.display = "none";
        document.body.classList.remove("modal-open");
    }   
})


