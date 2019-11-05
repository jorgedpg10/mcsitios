<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Url.Vue</div>

                    <div class="card-body">
                        Urls.vue cargando correctamente
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "urls",
        mounted(){

            var currentUrl = window.location.pathname;
            console.log(currentUrl);


            axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then( response => {
                var res = response.data;
                console.log(res);

                for(let item  of res){
                    console.log(item);
                }

            });

        }
    }
</script>

<style scoped>

</style>
