<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post title</div>

                    <div class="card-body">
                        Post content here
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: ""
            } 
        },

        mounted() {
            console.log('Component mounted.');
            axios.get('api/posts').then(response => {
                console.log(response.data.data);
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
