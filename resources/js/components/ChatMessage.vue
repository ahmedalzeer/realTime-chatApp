<template>
    <div class="chat-message">
        <p class="ml-5"> {{ message.body }} </p>
        <small class="ml-5"> {{ message.user.name }} </small>
    </div>
</template>

<script>
    export default {
        props: ['message'],
        data(){
            return{

            }
        },
    }
</script>

<style scoped>

</style>