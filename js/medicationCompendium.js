const medication = {
a: [

    {
        name: "A WOMAN'S FORMULA",
        link: 1,
        //Price Section
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
    {
        name: "A. C. and C. 8 - 325+8+15mg",
        link: 2,
        //Price Section
        common: "This medication is a narcotic pain reliever. Typically, it is used for pain. Its effects can be felt within 1 hour.",
        price:"This medication varies between 30$ and 40$.",
        additionnal: `It is not recommended to combine this drug with another antiinflammatory. Carefully check for the presence of ibuprofen (Advil, Motrin), naproxen (Aleve) or diclofenac (Voltaren Emulgel) on drug labels.
        <br>
        <br>
        This medication may interact with other medications or supplements, sometimes significantly. Many interactions, however, may be dealt with by a dosage adjustment or a change in medication schedule. Check with your pharmacist before using this medication in combination with any other medications (including non-prescription products), vitamins or natural products.
        <br>
        <br>
        Do not use this medication for longer than necessary. If you have difficulty stopping the medication when the treatment is finished, talk to your doctor or pharmacist.
        <br>
        <br>
        Rarely, this product causes potentially severe reactions, mostly if taken at high doses or with some other drugs. If you experience agitation, confusion, diarrhea, fever, tremor and muscular rigidity or contractions you should contact your doctor.`,
        //Instruction section
        instructions: `This medication is typically used every 4 to 6 hours. However, your doctor or pharmacist may have suggested a different schedule that is more appropriate for you. Generally, it is used only as needed.
        <br>
        <br>
        Important: Follow the instructions on the label. Do not use more of this product, or more often, than prescribed. This medication may irritate the stomach, and should be taken with food. It is best to avoid coffee, spicy food or alcohol.
        <br>
        <br>
        Consuming alcohol may intensify the effect of this product. It is therefore advisable to avoid consuming alcohol or alcohol-containing products while taking this medication.`,
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
        • it may cause drowsiness or dizziness -- use caution if driving;
        <br>
        <br>
        • it may cause nausea or, rarely, vomiting;
        <br>
        <br>
        • it may cause heartburn.
        <br>
        <br>
        Each person may react differently to a treatment. If you think this medication may be causing side effects (including those described here, or others), talk to your doctor or pharmacist. He or she can help you to determine whether or not the medication is the source of the problem.`,
        storage: "As with most medications, this product should be stored at room temperature. Store it in a secure location where it will not be exposed to excessive heat, moisture or direct sunlight. Make sure that any leftover portion is disposed of safely. This drug is occasionally sought out by teenagers for non-medical purposes. Please store in a safe place."
    }
],

b: [

    {
        name: "B +C 600 Stress tablet",
        link: "1",
    },
    {
        name: "B 100 Complex la-tablet",
        link: "2" 
    }
],

c: [

    {
        name: "C Formula oral powder 4g",
        link: "1",
    },
    {
        name: "C.E.S. tablet 0.625mg",
        link: "2" 
    }
]};

let activeButton = {
    a: false,
    b: false,
    C: false,
}

let items = []

function handleClick(btnId) {
    document.getElementById("myNav1").style.width = "100%";
    items = [...medication[btnId] ]
    
    activeButton[btnId] = !activeButton[btnId]

    renderItems();

}

function erase(btnId){
    document.getElementById("myNav1").style.width = "0%";
    const medication_items = document.getElementById('myNav1')
    medication_items.innerHTML = 
    `
        <a href="javascript:void(0)" class="closebtn" onclick="erase()">&times;</a>
    `
}

function renderItems() {
    const medication_items = document.getElementById('myNav1');
    medication_items.innerHTML = 
    `
        <a href="javascript:void(0)" class="closebtn" onclick="erase()">&times;</a>
        <div class="overlay-content">
            <ul class="tabs">
                ${items.map(item => `
                    <li class="tab">
                        <a data-switcher data-id="${item.link}" onclick="renderPages()">${item.name}</a>
                    </li>
                `).join('<br>')}
            </ul>
        </div>
    `
}

function renderPages(){
    const medication_pages = document.getElementById('main');
    document.getElementById('alphabetButtons').style.display = "none";
    document.querySelector('.title').style.display = "none";
    medication_pages.innerHTML = 
    `
        <section class="pages">
            ${items.map(item => `
                <div class="page" data-page="${item.link}">
                    <h1>${item.name}</h1>
                    <div class="grid">
                        <div class="card">
                            <h3>Description</h3>
                            <p>${item.common}</p>
                            <br>
                            <h3>Price</h3>
                            <p>${item.price}</p>
                            <br>
                            <h3>Additionnal Information</h3>
                            <p>${item.additionnal}</p>
                        </div>
                        <div class="card">
                            <h3>Instructions</h3>
                            <p>${item.instructions}</p>
                            <br>
                            <h3>General Notes</h3>
                            <p>${item.general}</p>
                        </div>
                        <div class="card">
                            <h3>Side effects</h3>
                            <p>${item.side_effects}</p>
                            <br>
                            <h3>Storage</h3>
                            <p>${item.storage}</p>
                        </div>
                    </div>
                </div>
            `).join('')}
        </section>
    `
    console.log(medication_pages);
};