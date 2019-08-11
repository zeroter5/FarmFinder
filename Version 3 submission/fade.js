window.addEventListener("load", function () {
   
    var btn = document.getElementById("testButton");
    
    btn.addEventListener("click", function (e) {
        var content = document.getElementById("content");
        
        if (btn.innerHTML == "Hide") {
            btn.innerHTML = "Show";
            content.className = "makeItDisappear";
            
            setTimeout(function () {
                content.style.display = "none";
            }, 1000);
        }
        else {
            btn.innerHTML = "Hide";
            content.style.display = "block";
            
            setTimeout(function (){
                content.className = "makeItNormal";
            }, 500);
        }
    });
});