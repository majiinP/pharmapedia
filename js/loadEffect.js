function loadScreen() {
    
    const loadingScreen = document.getElementById("loader");

    loadingScreen.innerHTML = `
        <div class="circular">
            <div class="inner">
            </div>
            <div class="outer">
            </div>
            <img class="numb" src="./img/pharmapendium_png_logo.png" alt="logo-image">
            <div class="circle">
              <div class="dot">
                <span></span>
                </div>
                <div class="bar left">
                    <div class="progress">
                    </div>
                </div>
                <div class="bar right">
                    <div class="progress">
                    </div>
                </div>
            </div>
        </div>
    `
    
    window.addEventListener("load", function(){
        const loader = document.querySelector(".loader");
        loader.className += " hidden";
        if(document.querySelector(".loader.hidden")){
            setTimeout(
                function() {
                    loadingScreen.parentNode.removeChild(loadingScreen);
            }, 3000);
        }
    });

}

window.onload = loadScreen();
