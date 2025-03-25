



/*_______________________EXTRA_START_______________________________________________*/

document.querySelectorAll(".extr_gst_yes").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_gst_wrp").classList.add("show_al_fld");
   });
});

document.querySelectorAll(".extr_gst_no").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_gst_wrp").classList.remove("show_al_fld");
   });
});

/*_______________________EXTRA_END_______________________________________________*/



/*_______________________EARLY_START_______________________________________________*/

document.querySelectorAll(".erly_check_yes").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_erly_wrp").classList.add("show_al_fld");
   });
});

document.querySelectorAll(".erly_check_no").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_erly_wrp").classList.remove("show_al_fld");
   });
});

/*_______________________EARLY_END_______________________________________________*/






/*_______________________EARLY_START_______________________________________________*/

document.querySelectorAll(".extr_night_yes").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_night_wrp").classList.add("show_al_fld");
   });
});

document.querySelectorAll(".extr_night_no").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_night_wrp").classList.remove("show_al_fld");
   });
});

/*_______________________EARLY_END_______________________________________________*/







/*_______________________EARLY_START_______________________________________________*/

document.querySelectorAll(".erly_check_out_yes").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".erly_check_out_wrp").classList.add("show_al_fld");
   });
});

document.querySelectorAll(".erly_check_out_no").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".erly_check_out_wrp").classList.remove("show_al_fld");
   });
});

/*_______________________EARLY_END_______________________________________________*/








/*_______________________EARLY_START_______________________________________________*/

document.querySelectorAll(".extr_night_yes_2").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_night_wrp_2").classList.add("show_al_fld");
   });
});

document.querySelectorAll(".extr_night_no_2").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_night_wrp_2").classList.remove("show_al_fld");
   });
});

/*_______________________EARLY_END_______________________________________________*/










/*_______________________EXTRA_START_______________________________________________*/

/*document.querySelectorAll(".visa_ch_yes").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_visa_chk").classList.add("show_visa");
   });
});

document.querySelectorAll(".visa_ch_no").forEach(radio => {
   radio.addEventListener("click", function () {
      document.querySelector(".extra_visa_chk").classList.remove("show_visa");
   });
});*/

/*_______________________EXTRA_END_______________________________________________*/




function changeValue(amount) {
            let input = document.getElementById("counterInput");
            let value = parseInt(input.value) || 0;
            input.value = value + amount;
        }



/*_____________________________SCRIPT_1________________________________________*/

let currentTab = 0;

function showTab(n) {
   let tabs = document.querySelectorAll('.tab');
   let steps = document.querySelectorAll('.step');
   tabs.forEach(tab => tab.style.display = 'none');
   steps.forEach(step => step.classList.remove('active'));
   tabs[n].style.display = 'block';
   steps[n].classList.add('active');
}

function nextStep(n) {
   currentTab = n;
   showTab(currentTab);
}

function prevStep(n) {
   currentTab = n;
   showTab(currentTab);
}
showTab(currentTab);


document.getElementById("radio1").addEventListener("change", function () {
   document.getElementById("targetDiv").classList.add("highlight");
});

document.getElementById("radio2").addEventListener("change", function () {
   document.getElementById("targetDiv").classList.remove("highlight");
});

document.getElementById("radio1_after").addEventListener("change", function () {
   document.getElementById("targetDiv_after").classList.add("highlight");
});

document.getElementById("radio2_after").addEventListener("change", function () {
   document.getElementById("targetDiv_after").classList.remove("highlight");
});


document.getElementById("extr_gst").addEventListener("change", function () {
   document.getElementById("extr_main").classList.add("show_extra");
});

document.getElementById("extr_gst_remv").addEventListener("change", function () {
   document.getElementById("extr_main").classList.remove("show_extra");
});


document.getElementById("extr_check_ad").addEventListener("change", function () {
   document.getElementById("extr_check_mn").classList.add("show_extra");
});

document.getElementById("extr_check").addEventListener("change", function () {
   document.getElementById("extr_check_mn").classList.remove("show_extra");
});



