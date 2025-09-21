<script>
    
// search function
//  document.getElementById("search").addEventListener("input", function () {
//         let val = this.value.toLowerCase();
//         console.log(val);
        
//         document.querySelectorAll("table tbody tr").forEach(tr => {
//             if (tr.cells.length === 1) return;
//             tr.style.display = tr.textContent.toLowerCase().includes(val) ? "" : "none";
//         });
//     });


$('.submitForm').click(function(){
    submitForm('formParntClassname');
});

function adminForms(response){
    alert(response);
    window.href.location = response.redirect;
}
</script>