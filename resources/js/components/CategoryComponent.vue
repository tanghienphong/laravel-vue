<template>
<div>
<!--        <product-gird></product-gird>-->
    {{message}}
</div>
</template>

<script>
    import ProductGird from "./ProductGirdComponent";
    import ProductListComponent from "./ProductListComponent";

    export default {
        name: "category",
        components:{
            ProductGird,
        },
        data: function(){
            return {
                message: 'this is category component',
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
