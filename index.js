//Code for Popup

$(document).ready(function(){

    function showModal(){
        $('#modal-container').show();
        $('html body').css('overflow', 'hidden');
    }

    function closeModal(){
        $('#modal-container').hide();
    }

    setTimeout(showModal, 3000);

    $('#close').click(function(){
        closeModal();
    })
})

//End of Code


//Code For toggle

$(documet).ready(function(){
    $('.memu-toggle').click(function(){
        $('.menu-toggle').toggleClass('active')
        $('nav').toggleClass('active')
    })
})




const itemList = document.querySelector('.item-list');
const gridViewBtn = document.getElementById('grid-active-btn');
const detailsViewBtn = document.getElementById('details-active-btn');

gridViewBtn.classList.add('active-btn');

gridViewBtn.addEventListener('click', () => {
    gridViewBtn.classList.add('active-btn');
    detailsViewBtn.classList.remove('active-btn');
    itemList.classList.remove('details-active');
})

detailsViewBtn.addEventListener('click', () => {
    detailsViewBtn.classList.add('active-btn');
    gridViewBtn.classList.remove('active-btn');
    itemList.classList.add('details-active');
})


