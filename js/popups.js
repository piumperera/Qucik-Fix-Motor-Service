document.addEventListener("DOMContentLoaded", function() {
    const openPopupBtn = document.getElementById("accept");
    const popup = document.getElementById("mechanicpopup");
    const closePopupBtn = document.getElementById("closePopup");

    openPopupBtn.addEventListener("click", function() {
        popup.style.display = "block"; // Display the popup when the button is clicked
    });

    closePopupBtn.addEventListener("click", function() {
        popup.style.display = "none"; // Hide the popup when the close button is clicked
    });
});


// recovery vehicle owner pop up
document.addEventListener("DOMContentLoaded", function() {
    const rvopenPopupbtn = document.getElementById("rv-accept");
    const rvPopup = document.getElementById("recovery-vh-popup");
    const closePopup = document.getElementById("Finish");

    rvopenPopupbtn.addEventListener("click", function() {
        rvPopup.style.display = "block";
    });

    closePopup.addEventListener("click", function() {
        rvPopup.style.display = "none";
    });
});

// Emergency help popup
document.addEventListener("DOMContentLoaded", function(){
    const openPopupBtns = document.querySelectorAll(".index-sub-container2-content-main-section2, .index-sub-container2-content-main-section3");
    const emergencypopup = document.getElementById("service-popup");
    const closePopup = document.getElementById("closePopup");
    const emepopupclose = document.getElementById("emepopupclose");

    openPopupBtns.forEach(function(btn) {
        btn.addEventListener("click", function(){
            emergencypopup.style.display = "block";
        });
    });

    closePopup.addEventListener("click", function(){
        emergencypopup.style.display = "none";
    });

    emepopupclose.addEventListener("click", function(){
        emergencypopup.style.display = "none";
    });
});

