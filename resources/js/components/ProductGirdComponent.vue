<template>
    <div class="row">
        <div :class="itemPerRow(col)" v-for="product in productGirds">
            <figure class="card card-product-grid card-lg">
                <a href="#" class="img-wrap"><img class="img-fluid" :src="product.image"></a>
                <figcaption class="info-wrap">
                    <a href="#" class="title">{{product.name}}</a>
                    <div class="rating-wrap">
                        <ul class="rating-stars">
                            <li style="width:80%" class="stars-active">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div> <!-- rating-wrap.// -->
                </figcaption>
                <div class="bottom-wrap">
                    <a href="#" class="btn  btn-primary float-right"> Buy now </a>
                    <div class="price-wrap">
                        <span class="price h5"> {{actualPrice(product)}} </span>
                        <br v-show="discountPrice(product)" />
                        <del class="price-old" v-show="discountPrice(product)"> {{discountPrice(product)}}</del>
                        <br> <small class="text-success">Free shipping</small>
                    </div> <!-- price-wrap.// -->
                </div> <!-- bottom-wrap.// -->
            </figure>
        </div>
    </div> <!-- row.// -->
</template>

<script>
    export default {
        name: "product-gird",
        props: {
            productGirds: {},
            col: '',
        },
        methods: {
            itemPerRow(cols) {
                return 'col-md-' + cols
            },
            formatPrice(x){
                var nf = Intl.NumberFormat();
                return nf.format(x) + ' VND';
            },
            actualPrice(product) {
                return this.formatPrice(parseInt(product.price - product.discount));
            },
            discountPrice(product) {
                if(parseInt(product.discount) > 0){
                    return this.formatPrice(parseInt(product.price));
                }else{
                    return "";
                }
            }
        },
        mounted() {
            console.log('Component product-gird mounted.')
        }
    }
</script>
