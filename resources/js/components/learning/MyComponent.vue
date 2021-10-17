<template>
    <div>
        <div>Message type: {{ message.type }}</div>
        <div>Message text: {{ message.text }}</div>
        <div>
            <button @click="sayHello">Click me</button>
        </div>
<!--        <div>{{reserveMessage}}</div>-->
        <div>
            <button @click="changeMessage">Click me to change Message</button>
        </div>
        <div class="conditional-rendering">
            <div class="block-1" v-if="currentBlock == 1">
                This is block 1
            </div>
            <div class="block-2" v-else-if="currentBlock == 2">
                This is block 2
            </div>
            <div class="block-3" v-else>
                This is block 3
            </div>
            <div>
                <button @click="showBlock(1)">Button 1</button>
            </div>
            <div>
                <button @click="showBlock(2)">Button 2</button>
            </div>
            <div>
                <button @click="showBlock(3)">Button 3</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "my-component",
        data() {
            return {
                message: {
                    type: 'greeting',
                    text: 'How are you?'
                },
                currentBlock: 1
            }
        },
        methods: {
            sayHello() {
                this.message = 'You clicked button'
            },
            changeMessage() {
                this.message.text = 'this is new message'
            },
            showBlock(number) {
                this.currentBlock = number
            }
        },
        // computed:{
        //     reserveMessage(){
        //         return this.message.split('').reverse().join('')
        //     },
        // },
        watch: {
            message: {
                handler: function () {
                    console.log('message changed!')
                },
                deep: true
            },
            // reverseMessage() {
            //     console.log('Computed changed')
            // }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
</style>
