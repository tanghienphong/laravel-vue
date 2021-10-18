<template>
    <section class="section-content">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Popular products</h3>
            </header><!-- sect-heading -->


                <product-gird :productGirds="listProducts" :col="3"></product-gird>


        </div> <!-- container .//  -->
    </section>
</template>

<script>
    import ProductGird from "./ProductGirdComponent";

    export default {
        name: "popular-product",
        data() {
            return {
                listProducts: {}
            }
        },
        components: {
            ProductGird,
        },
        methods: {
            async getListProducts() {
                try {
                    const response = await axios.get('/api/popular-products')
                    this.listProducts = response.data
                } catch (error) {
                    this.error = error.response.data
                }

            }
        },
        created() {
            this.getListProducts();
            console.log(this.listProducts);
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
