<template>
    <div class="binding-html">
        <div class="text-title" :class="{active: isActive, hide: isHide, bold: isBold}">
            This is text
        </div>
        <div class="text-title" :class="classObject">
            This is text
        </div>
        <div>
            <button @click="isActive = true">Active text</button>
        </div>
        <div>
            <button @click="isHide = true">Hide text</button>
        </div>
        <div>
            <button @click="isBold = true">Bold text</button>
        </div>
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <select v-model="message">
                <option disabled="">Choose one</option>
                <option :value="values.one">One</option>
                <option :value="values.two">Two</option>
            </select>
        </div>
        <input type="number" v-model.number="message" name="">
    </div>
</template>

<script>
    export default {
        name: "binding-html",
        data() {
            return {
                isActive: false,
                isHide: false,
                isBold: false,
                classObject: {
                    active: true,
                    bold: true
                },
                message: '',
                values: {
                    one: 'This is One',
                    two: 'This is Two'
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .active {
        color: red;
    }

    .hide {
        display: none;
    }

    .bold {
        font-weight: bold;
    }
</style>
