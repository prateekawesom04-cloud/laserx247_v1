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

</script>