<template>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>
                            &nbsp; All category</strong></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Foods and Drink</a>
                            <a class="dropdown-item" href="#">Home interior</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Category 1</a>
                            <a class="dropdown-item" href="#">Category 2</a>
                            <a class="dropdown-item" href="#">Category 3</a>
                        </div>
                    </li>
                    <li class="nav-item" v-for="menuItm in menus" :key="menuItm.id">
                        <a v-if="menuItm.id == 1" class="nav-link active" aria-current="page" :href="menuItm.slug">
                            <i class="bi bi-phone"></i> {{ menuItm.title }}
                        </a>
                        <a v-else class="nav-link" aria-current="page" :href="menuItm.slug">
                            <i class="bi bi-laptop"></i> {{ menuItm.title }}
                        </a>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

</template>

<script>
    export default {
        name: "main-menu",
        data() {
            return {
                menus: [],
            }
        },
        mounted() {
            this.getMenus();
        },
        created() {
            console.log(this.menus)
        },
        methods: {
            async getMenus() {
                try {
                    const ressponse = await fetch("http://laravel-vue.local/api/categories");
                    const data = await ressponse.json();
                    this.menus = data;
                } catch (e) {
                    console.error(e)
                }
            }
        }
    }
</script>
