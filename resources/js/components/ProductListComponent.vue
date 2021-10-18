<template>
    <section>
            <div class="mb-3" v-for="(product, index) in productList" :key="product.id">
                <article class="card card-product-list">
                    <div class="row no-gutters">
                        <aside class="col-md-3">
                            <a href="#" class="img-wrap">
                                <span class="badge badge-danger"> NEW </span>
                                <img :src="product.image">
                            </a>
                        </aside> <!-- col.// -->
                        <div class="col-md-6">
                            <div class="info-main">
                                <a href="#" class="h5 title">{{product.name}}</a>
                                <div class="rating-wrap mb-3">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="label-rating">7/10</div>
                                </div> <!-- rating-wrap.// -->

                                <p v-if="product.teaser"> {{product.teaser}}</p>
                            </div> <!-- info-main.// -->
                        </div> <!-- col.// -->
                        <aside class="col-sm-3">
                            <div class="info-aside">
                                <div class="price-wrap">
                                    <span class="price h5"> {{actualPrice(product)}} </span>
                                    <br v-show="discountPrice(product)"/>
                                    <del class="price-old" v-show="discountPrice(product)"> {{discountPrice(product)}}
                                    </del>
                                </div> <!-- info-price-detail // -->
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p>
                                    <a href="#" class="btn btn-primary btn-block"> Details </a>
                                    <a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i>
                                        <span class="text">Add to wishlist</span>
                                    </a>
                                </p>
                            </div> <!-- info-aside.// -->
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                </article> <!-- card-product .// -->
            </div>
    </section>
</template>

<script>
    export default {
        name: "product-list",
        props: {
            productList: {},
            // formatPrice: Intl.NumberFormat(),
        },
        methods: {
            formatPrice(x) {
                var nf = Intl.NumberFormat();
                return nf.format(x) + ' VND';
            },
            actualPrice(product) {
                return this.formatPrice(parseInt(product.price - product.discount));
            },
            discountPrice(product) {
                if (parseInt(product.discount) > 0) {
                    return this.formatPrice(parseInt(product.price));
                } else {
                    return "";
                }
            }
        },
        watch: {
            productList() {
                console.log('productList imported!')
            }
        },
        mounted() {
            console.log('Component product-list mounted.')
        }
    }
</script>
<style lang="scss" scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

    // ------ THÊM VÀO ĐOẠN BÊN DƯỚI
    .slide-fade-enter-active {
        transition: all .3s ease;
    }

    .slide-fade-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
