<script>

    function callApi(type=null, url=null, data=null, brforetry=null, try=null, catch=null){
        if(type.tpLowerCase() != 'get'){
            $.ajax({
                type: type,
                url: `{{ url('/') }}/${url}`,
                data: data,
                beforeSend: ()=>{
                    brforetry();
                },
                success: (response)=>{
                    try(response);
                },
                error: (error)=>{
                    catch(error);
                }
            });
        }
    }
// Front-end part 

// Loader function
function showLoader() {
        const loader = document.querySelector('.loader');
        if (loader) loader.style.display = 'block';
    }

    function hideLoader() {
        const loader = document.querySelector('.loader');
        if (loader) loader.style.display = 'none';
    }
// Header panel
$(document).ready(function() {
    $('#myAccountBtn').on('click', function(e) {
        e.preventDefault();
        console.log("My Account clicked!");
        try {
            new bootstrap.Offcanvas(document.getElementById('accountPanel')).show();
        } catch (error) {
            console.log("Error:", error);
        }
    });
});
</script>