<template>
    <div class="comment-section">
        <thread-comment v-for="(comment, index) in comments" v-bind:key="index" :comment="comment"></thread-comment>
    </div>
</template>

<script>
    export default
    {
        data(){
            return {
                comments: 
                [
                    {
                        user: 'Juan Dela Cruz',
                        message: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eum, officia suscipit molestiae reprehenderit architecto eos enim cumque commodi, velit cupiditate neque aliquam at et ex dolorum dolores facere fuga.'
                    },
                    {
                        user: 'Juan Dela Cruz',
                        message: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis eum, officia suscipit molestiae reprehenderit architecto eos enim cumque commodi, velit cupiditate neque aliquam at et ex dolorum dolores facere fuga.'
                    }
                ]
            }
        }
    }
</script>