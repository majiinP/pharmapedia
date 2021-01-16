const drugMedication = [
    { 
        name: 'a woman\'s formula',
        common: "This medication is typically used as a vitamin and mineral supplement.",
        price:"This medication's price varies between 10$ & 30$.",
        additionnal: "This medication may interact with other medications or supplements, sometimes significantly. Many interactions, however, may be dealt with by a dosage adjustment or a change in medication schedule. Check with your pharmacist before using this medication in combination with any other medications (including non-prescription products), vitamins or natural products.",
        //Instruction section
        instructions: "This medication should be taken with a meal and a large glass of water.",
        general: `When meeting with any health professional, it is important for you to share the following information:
        <br>
        <br>
        • Your medical history and allergies (medication, food, or other);
        <br>
        <br>
        • If you smoke, are pregnant, are planning a pregnancy, or are breastfeeding;
        <br>
        <br>
        • The names of all the medications you take, whether you take them regularly or once in a while, including over-the-counter medications, vitamins, and natural health products.
        <br>
        <br>
        It is also strongly recommended that you keep an up-to-date list of all the medications you take and carry it with you at all times. This could be useful if you have to see a health professional or need emergency care.`,
        //Side effects section
        side_effects: `In addition to its desired action, this medication may cause some side effects, notably:
        <br>
        <br>
        • it may cause constipation -- to prevent this, drink plenty of water or juice, and eat more dietary fibre.
        <br>
        <br>
        Each person may react differently to a treatment. If you think this medication may be causing side effects (including those described here, or others), talk to your doctor or pharmacist. He or she can help you to determine whether or not the medication is the source of the problem.`,
        storage: "As with most medications, this product should be stored at room temperature. Store it in a secure location where it will not be exposed to excessive heat, moisture or direct sunlight. Make sure that any leftover portion is disposed of safely."
    },
    { name: 'a\. c\. and c\. 8 - 325+8+15mg' },
    { name: `b + c 600 stress tablet` },
    { name: `b 100 complex la-tablet` },
    { name: `c formula oral powder 4g` },
    { name: `c.e.s. tablet 0.625mg` },
]

const searchInput = document.getElementById('search');
const list = document.getElementById('list');

function setNoResults() {
    const item = document.createElement('li');
    const text = document.createTextNode('No results found');
    item.classList.add('list-group-item');
    item.appendChild(text);
    list.appendChild(item);
}

function setList(drug) {
    clearList();

    for(let drugs of drug){
        const item = document.createElement('li');
        const text = document.createTextNode(drugs.name);
        
        item.setAttribute("data-switcher", "");
        item.setAttribute("data-id", `${drug}`);
        item.addEventListener('click', function() {
            const medication_pages = document.getElementById('main');
            medication_pages.innerHTML = `
                <section class="pages">
                    <div class="page" data-page="${drug}">
                        <h1>${drugs.name}</h1>
                        <div class="grid">
                            <div class="card">
                                <h3>Description</h3>
                                <p>${drugs.common}</p>
                                <br>
                                <h3>Price</h3>
                                <p>${drugs.price}</p>
                                <br>
                                <h3>Additionnal Information</h3>
                                <p>${drugs.additionnal}</p>
                            </div>
                            <div class="card">
                                <h3>Instructions</h3>
                                <p>${drugs.instructions}</p>
                                <br>
                                <h3>General Notes</h3>
                                <p>${drugs.general}</p>
                            </div>
                            <div class="card">
                                <h3>Side effects</h3>
                                <p>${drugs.side_effects}</p>
                                <br>
                                <h3>Storage</h3>
                                <p>${drugs.storage}</p>
                            </div>
                        </div>
                    </div>
                </section>
            `;
            ulSwap();
            //clearList();
        });
        item.classList.add('list-group-item');
        item.appendChild(text);
        list.appendChild(item);
    }
    if(drug.length == 0){
        setNoResults();
    }
}

function clearList() {
    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }
}

function getRelevancy(value, searchTerm) {
    if(value === searchTerm){
        return 2;
    }else if(value.startsWith(searchTerm)){
        return 1;
    }else if(value.includes(searchTerm)){
        return 0;
    }else{
        return -1;
    }
}

searchInput.addEventListener('input', function(event) {
    let value = event.target.value;
    
    if (value && value.trim().length > 0) {

        value = value.trim().toLowerCase();

        setList(drugMedication.filter((drugs) => {
            return drugs.name.includes(value);
        }).sort((drugA, drugB) => {
            return getRelevancy(drugB.name, value) - getRelevancy(drugA.name, value);
        }));
    }else{
        clearList();
    }
    
});

function ulSwap() {
    const tab_switchers = document.querySelectorAll('[data-switcher]');
    
    for (let input of tab_switchers) {
        const page_id = input.dataset.id;

        input.addEventListener('click', function () {
            
            if(document.querySelector('.list-group .list-group-item.is-active')){
                document.querySelector('.list-group .list-group-item.is-active').classList.remove('is-active'); 
            }
            if(input.classList.contains('list-group-item')){
                input.classList.add('is-active');
            }
            SwitchUl(page_id);
        });
    }
}

function SwitchUl(page_id) {
    const currentPage = document.querySelector('.pages .page');
    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    if(document.querySelector('.pages .page.is-active')){
        document.querySelector('.pages .page.is-active').classList.remove('is-active');
    }
    next_page.classList.add('is-active');
}