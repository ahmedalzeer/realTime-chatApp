<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Nothing here yet
        </div>
    </div>
</template>

<script>
    export default {
        props:['messages'],
        computed:{

            },
    }
</script>

<style scoped>
    .chat-log .chat-message:nth-child(even){
        background-color: #ccc;
        border-radius: 20px;
    }

    .empty{
        padding: 1rem;
        text-align: center;
    }
</style>