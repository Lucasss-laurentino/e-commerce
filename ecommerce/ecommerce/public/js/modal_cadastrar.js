/* modal cadastrar */
$(document).on('click', '#btn_cadastrar', function(e) {

    e.preventDefault();

    let modal = $('#exampleModalCenter');
    let minha_modal = new bootstrap.Modal(modal);
    minha_modal.show();


});

/* modal login */
$(document).on('click', '#btn_login', function(e) {

    e.preventDefault();

    let modal = $('#exampleModalCenter2');
    let minha_modal = new bootstrap.Modal(modal);
    minha_modal.show();


});