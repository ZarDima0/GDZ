let imgButtom = document.querySelector('.block-success__button-delete');

imgButtom.addEventListener('click',() => {
    if(document.querySelector('.block-success')) {
        let blockPopap = document.querySelector('.block-success');
        blockPopap.style.display = 'none';
    }if (document.querySelector('.block-error')) {
        let blockError = document.querySelector('.block-error');
        blockError.style.display = 'none';
    }
})