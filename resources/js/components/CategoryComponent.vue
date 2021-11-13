<template>
    <div>
        <section class="section-content padding-y">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="card">
                            <article class="filter-group">
                                <header class="card-header">
                                    <a
                                        href="#"
                                        data-toggle="collapse"
                                        data-target="#collapse_1"
                                        aria-expanded="true"
                                        class=""
                                    >
                                        <i
                                            class="icon-control fa fa-chevron-down"
                                        ></i>
                                        <h6 class="title">Product type</h6>
                                    </a>
                                </header>
                                <div
                                    class="filter-content collapse show"
                                    id="collapse_1"
                                    style=""
                                >
                                    <div class="card-body">
                                        <form class="pb-3">
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Search"
                                                />
                                                <div class="input-group-append">
                                                    <button
                                                        class="btn btn-light"
                                                        type="button"
                                                    >
                                                        <i
                                                            class="fa fa-search"
                                                        ></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                        <ul class="list-menu">
                                            <li><a href="#">People </a></li>
                                            <li><a href="#">Watches </a></li>
                                            <li><a href="#">Cinema </a></li>
                                            <li><a href="#">Clothes </a></li>
                                            <li><a href="#">Home items </a></li>
                                            <li><a href="#">Animals</a></li>
                                            <li><a href="#">Peoples </a></li>
                                        </ul>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                            <!-- filter-group  .// -->
                            <article class="filter-group">
                                <filter-brand
                                    @filterBrandSelected="filterBrandSelected"
                                ></filter-brand>
                            </article>
                            <!-- filter-group .// -->
                            <article class="filter-group">
                                <header class="card-header">
                                    <a
                                        href="#"
                                        data-toggle="collapse"
                                        data-target="#collapse_3"
                                        aria-expanded="true"
                                        class=""
                                    >
                                        <i
                                            class="icon-control fa fa-chevron-down"
                                        ></i>
                                        <h6 class="title">Price range</h6>
                                    </a>
                                </header>
                                <div
                                    class="filter-content collapse show"
                                    id="collapse_3"
                                    style=""
                                >
                                    <div class="card-body">
                                        <input
                                            type="range"
                                            class="custom-range"
                                            min="0"
                                            max="100"
                                            name=""
                                        />
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Min</label>
                                                <input
                                                    class="form-control"
                                                    placeholder="$0"
                                                    type="number"
                                                />
                                            </div>
                                            <div
                                                class="form-group text-right col-md-6"
                                            >
                                                <label>Max</label>
                                                <input
                                                    class="form-control"
                                                    placeholder="$1,0000"
                                                    type="number"
                                                />
                                            </div>
                                        </div>
                                        <!-- form-row.// -->
                                        <button
                                            class="btn btn-block btn-primary"
                                        >
                                            Apply
                                        </button>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                            <!-- filter-group .// -->
                            <article class="filter-group">
                                <header class="card-header">
                                    <a
                                        href="#"
                                        data-toggle="collapse"
                                        data-target="#collapse_4"
                                        aria-expanded="true"
                                        class=""
                                    >
                                        <i
                                            class="icon-control fa fa-chevron-down"
                                        ></i>
                                        <h6 class="title">Sizes</h6>
                                    </a>
                                </header>
                                <div
                                    class="filter-content collapse show"
                                    id="collapse_4"
                                    style=""
                                >
                                    <div class="card-body">
                                        <label class="checkbox-btn">
                                            <input type="checkbox" />
                                            <span class="btn btn-light">
                                                XS
                                            </span>
                                        </label>

                                        <label class="checkbox-btn">
                                            <input type="checkbox" />
                                            <span class="btn btn-light">
                                                SM
                                            </span>
                                        </label>

                                        <label class="checkbox-btn">
                                            <input type="checkbox" />
                                            <span class="btn btn-light">
                                                LG
                                            </span>
                                        </label>

                                        <label class="checkbox-btn">
                                            <input type="checkbox" />
                                            <span class="btn btn-light">
                                                XXL
                                            </span>
                                        </label>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                            <!-- filter-group .// -->
                            <article class="filter-group">
                                <header class="card-header">
                                    <a
                                        href="#"
                                        data-toggle="collapse"
                                        data-target="#collapse_5"
                                        aria-expanded="false"
                                        class=""
                                    >
                                        <i
                                            class="icon-control fa fa-chevron-down"
                                        ></i>
                                        <h6 class="title">More filter</h6>
                                    </a>
                                </header>
                                <div
                                    class="filter-content collapse in"
                                    id="collapse_5"
                                    style=""
                                >
                                    <div class="card-body">
                                        <label
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                type="radio"
                                                name="myfilter_radio"
                                                checked=""
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Any condition
                                            </div>
                                        </label>

                                        <label
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                type="radio"
                                                name="myfilter_radio"
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Brand new
                                            </div>
                                        </label>

                                        <label
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                type="radio"
                                                name="myfilter_radio"
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Used items
                                            </div>
                                        </label>

                                        <label
                                            class="custom-control custom-radio"
                                        >
                                            <input
                                                type="radio"
                                                name="myfilter_radio"
                                                class="custom-control-input"
                                            />
                                            <div class="custom-control-label">
                                                Very old
                                            </div>
                                        </label>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                            <!-- filter-group .// -->
                        </div>
                        <!-- card.// -->
                    </aside>
                    <!-- col.// -->
                    <main class="col-md-9">
                        <header class="border-bottom mb-4 pb-3">
                            <div class="form-inline">
                                <span class="mr-md-auto"
                                    >{{ listProducts.from }} -
                                    {{ listProducts.to }} of
                                    {{ listProducts.total }} Item(s) found
                                </span>
                                <select
                                    class="mr-2 form-control"
                                    @change="sortBy($event)"
                                >
                                    <option value="0">Latest items</option>
                                    <option value="1"
                                        >Price: Low -> High</option
                                    >
                                    <option value="2"
                                        >Price: High -> Low</option
                                    >
                                </select>
                                <div class="btn-group">
                                    <a
                                        href="#"
                                        class="btn btn-outline-secondary"
                                        :class="{ active: !isGrid }"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="List view"
                                        @click.prevent="changeView()"
                                    >
                                        <i class="fa fa-bars"></i
                                    ></a>
                                    <a
                                        href="#"
                                        class="btn btn-outline-secondary"
                                        :class="{ active: isGrid }"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Grid view"
                                        @click.prevent="changeView()"
                                    >
                                        <i class="fa fa-th"></i
                                    ></a>
                                </div>
                            </div>
                        </header>
                        <!-- sect-heading -->

                        <product-list
                            v-if="!isGrid"
                            :productList="listProducts.data"
                        ></product-list>
                        <product-gird
                            v-else
                            :productGirds="listProducts.data"
                            :col="4"
                        ></product-gird>

                        <nav aria-label="Page navigation sample">
                            <ul class="pagination">
                                <li
                                    class="page-item"
                                    :class="{
                                        disabled:
                                            listProducts.prev_page_url === null
                                    }"
                                    @click.prevent="
                                        listProducts.prev_page_url &&
                                            getListProducts(
                                                listProducts.current_page - 1
                                            )
                                    "
                                >
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li
                                    class="page-item"
                                    v-if="listProducts.prev_page_url"
                                    @click.prevent="
                                        getListProducts(
                                            listProducts.current_page - 1
                                        )
                                    "
                                >
                                    <a class="page-link" href="#">{{
                                        listProducts.current_page - 1
                                    }}</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{
                                        listProducts.current_page
                                    }}</a>
                                </li>
                                <li
                                    class="page-item"
                                    v-if="listProducts.next_page_url"
                                    @click.prevent="
                                        getListProducts(
                                            listProducts.current_page + 1
                                        )
                                    "
                                >
                                    <a class="page-link" href="#">{{
                                        listProducts.current_page + 1
                                    }}</a>
                                </li>
                                <li
                                    class="page-item"
                                    :class="{
                                        disabled:
                                            listProducts.next_page_url === null
                                    }"
                                    @click.prevent="
                                        listProducts.next_page_url &&
                                            getListProducts(
                                                listProducts.current_page + 1
                                            )
                                    "
                                >
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </main>
                    <!-- col.// -->
                </div>
            </div>
            <!-- container .//  -->
        </section>
    </div>
</template>

<script>
import ProductGird from "./ProductGirdComponent";
import ProductListComponent from "./ProductListComponent";
import FilterBrand from "./filter/BrandComponent";

export default {
    name: "category",
    components: {
        ProductGird,
        FilterBrand
    },
    data: function() {
        return {
            listProducts: {},
            totalProducts: 0,
            isGrid: false,
            cachedListProducts: {}
        };
    },
    mounted() {
        console.log("Component Category mounted.");
    },
    methods: {
        async getListProducts(page = 1, brand_id = "") {
            try {
                const response = await axios.get(
                    "/api/products-by-cate?page=" +
                        page +
                        "&filter_brand=" +
                        brand_id
                );
                this.listProducts = response.data;
                // this.cachedListProducts = response.data;
                // this.totalProducts = response.data.length;
                // console.log(response.data);
            } catch (error) {
                this.error = error.response.data;
            }
        },

        changeView() {
            return (this.isGrid = !this.isGrid);
        },

        sortBy(event) {
            var val = event.target.value;
            if (val === "1") {
                return this.listProducts.data.sort((a, b) => {
                    return a.price - b.price;
                });
            } else if (val === "2") {
                return this.listProducts.data.sort((a, b) => {
                    return b.price - a.price;
                });
            } else {
                return this.listProducts.data.sort((a, b) => {
                    return b.id - a.id;
                });
            }
        },

        // Fetch products with filter Brand
        filterBrandSelected(filterBrandVal) {
            return this.getListProducts(
                0,
                filterBrandVal
            );
        }
    },
    created() {
        this.getListProducts();
    }
};
</script>
