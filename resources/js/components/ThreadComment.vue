<template>
    <div class="card ml-3 mt-3">
        <div class="card-body">
            <p><strong>{{comment.user}}</strong></p>
            <p class="lead">{{comment.message}}</p>
        </div>
    </div>
</template>

<script>
    export default
    {
        props:['comment']
    }
</script>