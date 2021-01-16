const navbarItem = [
    {
        navitem : "About",
        link: 1,
        about_text: ""
    },
    {
        navitem : "Legal",
        link: 2,
        legal_text: ""
    },
    {
        navitem : "Contact",
        link: 3,
        contact_text: ""
    }
];

window.onload = function navLoad() {
    
    const navbar = document.getElementById('navbar');
    navbar.innerHTML = 
    `
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <ul class="nav-list">
            <li class="tab is-active">
                <a onclick="renderButtons()">Home</a>
            </li>
            ${navbarItem.map(loadNavitems).join(" ")}
        </ul>
    `
}

function loadNavitems(navItems) {
    return `
            <li class="tab">
                <a data-switcher data-id="${navItems.link}" onclick="renderNav(); navSwap();">${navItems.navitem}</a>
            </li>
        `
}

function renderNav(){
    const pages = document.getElementById('main');
    document.getElementById('alphabetButtons').style.display = "none";
    document.querySelector('.title').style.display = "none";
    pages.innerHTML = 
    `
        <section class="pages">
             ${navbarItem.map(item => `
                <div id="navPage" class="page" data-page="${item.link}">
                    <h1>${item.navitem}</h1>
                    ${renderTabPages()}
                </div>
             `).join('')}
        </section>
    `
};

function renderTabPages() {
    const el = document.getElementById('navPage');
    const about_text = `
        <div class="nav-cards">
            <p>
                Pharmacy (from the Greek φάρμακον 'pharmakon' = drug) is the health profession that links the health sciences with the chemical sciences, and it is charged with ensuring the safe and effective use of medication.
                <br/>
                <br/>
            </p>
        </div>
    `;
    const legal_text = `
        <div class="nav-cards">
        </div>
        <div class="nav-cards">
        </div>
    `
    const contact_Page = `
        <form class="contact-form" action="contact.php" method="post">
            <input type="text" name="name" class="contact-form-text" placeholder="Your name" required>
            <input type="email" name="mail" class="contact-form-text" placeholder="Your email" required>
            <input type="text" name="phone" class="contact-form-text" placeholder="Your phone" required>
            <textarea name="message" class="contact-form-text" placeholder="Your message" required></textarea>
            <input type="Submit" name="submit" class="contact-form-button" value="Send">
        </form>
    `

    if  (document.querySelector('.page.is-active[data-page="1"]')) {
        return about_text;
        console.log(about_text);
    }
    if  (document.querySelector('.page.is-active[data-page="2"]')) {
        return legal_text;
        console.log(legal_text);
    }
    if  (document.querySelector('.page.is-active[data-page="3"]')) {
        return contact_Page;
        console.log(contact_Page);
    }
}

function navSwap() {
    const tab_switchers = document.querySelectorAll('[data-switcher]');

    for (let i = 0; i < tab_switchers.length; i++) {
        const tab_switcher = tab_switchers[i];
        const page_id = tab_switcher.dataset.id;
        tab_switcher.addEventListener('click', function(){
            document.querySelector('.nav-list .tab.is-active').classList.remove('is-active');
            tab_switcher.parentNode.classList.add('is-active');
            SwitchNav(page_id);
        });
    }
};

function SwitchNav(page_id) {
    const currentPage = document.querySelector('.pages .page');
    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    if(document.querySelector('.pages .page.is-active')){
       currentPage.classList.remove('is-active');
    }
    if(document.querySelector('.pages .page')){
       next_page.classList.add('is-active');
    }
};

function renderButtons(){
    document.getElementById('alphabetButtons').style.display = "block";
    document.querySelector('.title').style.display = "block";
    const pages = document.getElementById('main');
    pages.innerHTML = 
    `

    `
};