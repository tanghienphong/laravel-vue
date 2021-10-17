<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>List User</h4>
            <ListUser @userSelected="childrenSelectUser"></ListUser>
        </div>
        <hr>
        <div class="user-detail-comp">
            <h4>User Detail</h4>
            <UserDetail :userDetailInfo="userSelectedFormChild"></UserDetail>
        </div>
        <hr>
        <binding-html></binding-html>
        <hr>
        <h4>Event Handling</h4>
        <event-handling></event-handling>
        <hr>
    </div>
</template>

<script>
    import ListUser from "./ListUser";
    import UserDetail from "./UserDetail";


    export default {
        name: "user-dashboard",
        components: {
            ListUser,
            UserDetail,
        },
        data() {
            return {
                userSelectedFormChild: {}
            }
        },
        methods: {
            childrenSelectUser(user, number, string) {
                console.log(user)
                console.log(number)
                console.log(string)
                this.userSelectedFormChild = user
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>
