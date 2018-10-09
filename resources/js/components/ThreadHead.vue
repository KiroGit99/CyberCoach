<template>
    <div class="card mt-3">
        <div class="card-body">
            <h1>{{title}}</h1>
            <p class="lead">{{message}}</p>
            <div class="button-group">
                <button class="btn btn-secondary" data-toggle="modal" data-target="#commentModal">Comment</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default
    {
        data(){
            return {
                title: 'Thread Title',
                message: 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod in animi tempora totam aperiam veritatis nostrum laboriosam, eum ducimus delectus.'
            }
        }
    }
</script>