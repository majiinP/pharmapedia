function pageSwap() {
    const tab_switchers = document.querySelectorAll('[data-switcher]');

    for (let input of tab_switchers) {
        const page_id = input.dataset.id;
        input.addEventListener('click', function () {
            
            if(document.querySelector('.tabs .tab.is-active')){
                document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
                console.log('removed'); 
            }
            if(input.parentNode.classList.contains('tab')){
                input.parentNode.classList.add('is-active');
            }
            SwitchPage(page_id);
        });
    }
}

function SwitchPage(page_id) {
    const currentPage = document.querySelector('.pages .page');
    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    if(document.querySelector('.pages .page.is-active')){
        document.querySelector('.pages .page.is-active').classList.remove('is-active');
    }
    next_page.classList.add('is-active');
}