<template>
    <div class="list-rendering">
        <ul>
            <li v-for="(food, index) in foods">
                {{food.name}} - at index {{index}}
            </li>
            <li v-for="item of myInfo">
                {{ item }}
            </li>
            <li v-for="todo in todos" v-if="!todo.isComplete">
                {{todo.name}}
            </li>
            <li v-for="todo in listCompleteTodo">
                {{todo.name}}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "list-rendering",
        data() {
            return {
                foods: [
                    {name: 'Hamburger'},
                    {name: 'Sandwich'},
                    {name: 'Chicken chop'},
                ],
                myInfo: {
                    name: 'Mai Trung Duc',
                    age: '2x',
                    country: 'vietnam'
                },
                todos: [
                    {
                        name: 'go shopping',
                        isComplete: true
                    },
                    {
                        name: 'go school',
                        isComplete: false
                    }
                ]
            }
        },
        computed: {
            listCompleteTodo(){
                return this.todos.filter(item => item.isComplete)
            }
        }
    }
</script>
