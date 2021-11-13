<template>
    <div>
        <header class="card-header">
            <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_2"
                aria-expanded="true"
                class=""
            >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="title">Brands</h6>
            </a>
        </header>
        <div class="filter-content collapse show" id="collapse_2" style="">
            <div class="card-body">
                <label
                    class="custom-control custom-checkbox"
                    v-for="(brand, index) in listBrands"
                >
                    <input
                        type="checkbox"
                        :value="index"
                        name="filter_brand_nm"
                        class="custom-control-input"
                        @click="filterBrandAction($event)"
                    />
                    <div class="custom-control-label">
                        {{ brand }}
                        <b class="badge badge-pill badge-light float-right"
                            >120</b
                        >
                    </div>
                </label>
            </div>
            <!-- card-body.// -->
        </div>
    </div>
</template>

<script>
import $ from "jquery";

export default {
    name: "filter-brand",
    data: function() {
        return {
            listBrands: {},
            filterBrandVal: []
        };
    },
    methods: {
        async getFilterBrands() {
            try {
                const response = await axios.get("/api/filter-brand");
                this.listBrands = response.data;
                // this.totalProducts = response.data.length;
                console.log(response.data);
            } catch (error) {
                this.error = error.response.data;
            }
        },

        // get filter Brand
        filterBrandAction(event) {            
            const arr = [];

            $("input[name=filter_brand_nm]").each(function() {
                if ($(this).prop("checked") == true) {
                    // console.log("Checkbox (" + $(this).val()+") is checked.");
                    arr.push($(this).val());
                }
            });

            this.filterBrandVal = arr;
            // event.target.name;
            // if (event.target.checked == true) {
            //     this.filterBrandVal = event.target.value;
            // } else {
            //     this.filterBrandVal = 0;
            // }
            this.$emit("filterBrandSelected", this.filterBrandVal);
        }
    },
    created() {
        this.getFilterBrands();
    },
    mounted() {
        console.log("Component filter-brand mounted.");
    }
};
</script>
