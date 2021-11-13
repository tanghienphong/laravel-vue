<template>
    <section class="mt-3 mb-3">
        <div class="container">
            <div class="card">
                <div class="row no-gutters">
                    <aside class="col-md-6">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <a href="#"
                                    ><img :src="productDetail.image"
                                /></a>
                            </div>
                            <!-- img-big-wrap.// -->
                            <div class="thumbs-wrap">
                                <a href="#" class="item-thumb">
                                    <img
                                        src="bootstrap-ecommerce-html/images/items/12-1.jpg"
                                /></a>
                                <a href="#" class="item-thumb">
                                    <img
                                        src="bootstrap-ecommerce-html/images/items/12-2.jpg"
                                /></a>
                                <a href="#" class="item-thumb">
                                    <img
                                        src="bootstrap-ecommerce-html/images/items/12.jpg"
                                /></a>
                                <a href="#" class="item-thumb">
                                    <img
                                        src="bootstrap-ecommerce-html/images/items/4.jpg"
                                /></a>
                            </div>
                            <!-- thumbs-wrap.// -->
                        </article>
                        <!-- gallery-wrap .end// -->
                    </aside>
                    <main class="col-md-6 border-left">
                        <article class="content-body">
                            <h2 class="title">
                                {{ productDetail.name }}
                            </h2>

                            <div class="rating-wrap my-3">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <img
                                            src="bootstrap-ecommerce-html/images/icons/stars-active.svg"
                                            alt=""
                                        />
                                    </li>
                                    <li>
                                        <img
                                            src="bootstrap-ecommerce-html/images/icons/starts-disable.svg"
                                            alt=""
                                        />
                                    </li>
                                </ul>
                                <small class="label-rating text-muted"
                                    >132 reviews</small
                                >
                                <small class="label-rating text-success">
                                    <i class="fa fa-clipboard-check"></i> 154
                                    orders
                                </small>
                            </div>
                            <!-- rating-wrap.// -->

                            <div class="mb-3">
                                <!-- <var class="price h4">$815.00</var> 
                                <span class="text-muted">/per kg</span>-->
                                <div class="price-wrap">
                                    <span class="price h5">
                                        {{ actualPrice(productDetail) }}
                                    </span>
                                    <br v-show="discountPrice(productDetail)" />
                                    <del
                                        class="price-old"
                                        v-show="discountPrice(productDetail)"
                                    >
                                        {{ discountPrice(productDetail) }}</del
                                    >
                                    <br />
                                    <small class="text-success"
                                        >Free shipping</small
                                    >
                                </div>
                                <!-- price-wrap.// -->
                            </div>

                            <p v-show="productDetail.teaser != ''">
                                {{ productDetail.teaser }}
                            </p>

                            <dl class="row">
                                <dt class="col-sm-3">Model#</dt>
                                <dd class="col-sm-9">
                                    {{ productDetail.sku }}
                                </dd>

                                <!--<dt class="col-sm-3">Color</dt>
                                <dd class="col-sm-9">Brown</dd> -->

                                <dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">
                                    Russia, USA, and Europe
                                </dd>
                            </dl>

                            <hr />
                            <div class="row">
                                <div class="form-group col-md flex-grow-0">
                                    <label>Quantity</label>
                                    <div class="input-group mb-3 input-spinner">
                                        <div class="input-group-prepend">
                                            <button
                                                class="btn btn-light"
                                                type="button"
                                                id="button-plus"
                                            >
                                                +
                                            </button>
                                        </div>
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="1"
                                        />
                                        <div class="input-group-append">
                                            <button
                                                class="btn btn-light"
                                                type="button"
                                                id="button-minus"
                                            >
                                                −
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- col.// -->
                                <div class="form-group col-md">
                                    <label>Select size</label>
                                    <div class="mt-2">
                                        <label
                                            class="custom-control custom-radio custom-control-inline"
                                        >
                                            <input
                                                type="radio"
                                                name="select_size"
                                                checked=""
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Small
                                            </div>
                                        </label>

                                        <label
                                            class="custom-control custom-radio custom-control-inline"
                                        >
                                            <input
                                                type="radio"
                                                name="select_size"
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Medium
                                            </div>
                                        </label>

                                        <label
                                            class="custom-control custom-radio custom-control-inline"
                                        >
                                            <input
                                                type="radio"
                                                name="select_size"
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Large
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <a href="#" class="btn  btn-primary"> Buy now </a>
                            <a href="#" class="btn  btn-outline-primary">
                                <span class="text">Add to cart</span>
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </article>
                        <!-- product-info-aside .// -->
                    </main>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>

            <!-- Description -->
            <article class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="row">
                        <!--<aside class="col-md-6">
                            <h5>Parameters</h5>
                            <dl class="row">
                                <dt class="col-sm-3">Display</dt>
                                <dd class="col-sm-9">
                                    13.3-inch LED-backlit display with IPS
                                </dd>

                                <dt class="col-sm-3">Processor</dt>
                                <dd class="col-sm-9">
                                    2.3GHz dual-core Intel Core i5
                                </dd>

                                <dt class="col-sm-3">Camera</dt>
                                <dd class="col-sm-9">
                                    720p FaceTime HD camera
                                </dd>

                                <dt class="col-sm-3">Memory</dt>
                                <dd class="col-sm-9">8 GB RAM or 16 GB RAM</dd>

                                <dt class="col-sm-3">Graphics</dt>
                                <dd class="col-sm-9">
                                    Intel Iris Plus Graphics 640
                                </dd>
                            </dl>
                        </aside>
                        <aside class="col-md-6">
                            <h5>Features</h5>
                            <ul class="list-check">
                                <li>Best performance of battery</li>
                                <li>5 years warranty for this product</li>
                                <li>Amazing features and high quality</li>
                                <li>Best performance of battery</li>
                                <li>5 years warranty for this product</li>
                            </ul>
                        </aside>-->
                    </div>
                    <!-- row.// -->
                    <h5>Description</h5>
                    <hr />
                    {{productDetail.description}}
                </div>
                <!-- card-body.// -->
            </article>
        </div>
    </section>
</template>

<script>
export default {
    name: "product-detail",
    data: function() {
        return {
            productDetail: {}
        };
    },
    mounted() {
        console.log("Component product detail mounted.");
    },
    methods: {
        async getProductDetail(alias = "") {
            try {
                const response = await axios.get(
                    "/api/product-by-slug?slug=" + alias
                );
                this.productDetail = response.data;
                console.log(response.data);
            } catch (error) {
                this.error = error.response.data;
            }
        },

        formatPrice(x) {
            var nf = Intl.NumberFormat();
            return nf.format(x) + " VND";
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
    created() {
        this.getProductDetail("dell-vostro-3500-i5-7g3983");
    }
};
</script>
<style lang="scss" scoped></style>
