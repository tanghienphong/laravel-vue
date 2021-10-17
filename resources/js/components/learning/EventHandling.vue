<template>
    <div class="event-handling">
        <div>Current Number: {{ counter }}</div>
        <button @click="counter++">CLick</button>
        <div @click="alertHello">
            <button @click.stop="alertWelcome">CLick</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "event-handling",
        data() {
            return {
                counter: 0
            }
        },
        methods: {
            alertHello() {
                alert('Hello')
            },
            alertWelcome() {
                alert('Welcome')
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>
