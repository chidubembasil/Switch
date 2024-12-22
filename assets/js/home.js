const filterToggle = function(){
    const filterBtn = document.getElementById('filterBtn')
    const filter = document.getElementById('filter')

    filterBtn.addEventListener('click', function(){
        filter.classList.toggle('active')
    
    })
    
}
filterToggle()