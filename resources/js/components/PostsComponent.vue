<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="post in posts">
                    <div class="card-header"><h2>{{ post.title }}</h2></div>

                    <div class="card-body">
                        {{ post.body }}
                    </div>
                    <div class="card-footer">
                        <span>Cerated at: {{ new Date(post.created_at).toLocaleString('it') }}</span>
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
                this.posts = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 10px 0;

    }
</style>
