<template>
    <div class="chat-composer">

        <input type="text" placeholder="type your message" class="form-control"
              @keyup.enter="sendMessage" v-model="messageText">
        <button class="btn btn-primary" @click="sendMessage">send</button>

    </div>
</template>

<script>
    export default {
        data(){
            return{
                messageText:'',
            }
        },
        methods:{
            sendMessage(){
                this.$emit('messagesend',{
                    body: this.messageText,
                    user: {
                        name: $('#navbarDropdown').text()
                    }
                })
                this.messageText = ''
            },
        },
    }
</script>

<style scoped lang="css">
    .chat-composer{
        display: flex;
    }

    .chat-composer input{
        flex: 1 auto;
    }

    .chat-composer button{
        border-radius: 0;
    }
</style>