<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-yellow">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Web Demo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item" v-for="menuItm in menus" :key="menuItm.id">
                        <a v-if="menuItm.id == 1" class="nav-link active" aria-current="page" :href="menuItm.slug">
                            <i class="bi bi-phone"></i> {{ menuItm.title }}
                        </a>
                        <a v-else class="nav-link" aria-current="page" :href="menuItm.slug">
                            <i class="bi bi-laptop"></i> {{ menuItm.title }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
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
        created(){
            console.log(this.menus)
        },
        methods: {
            async getMenus() {
                try {
                    const ressponse = await fetch("http://laravel-vue.local/api/category");
                    const data = await ressponse.json();
                    this.menus = data;
                } catch (e) {
                    console.error(e)
                }
            }
        }
    }
</script>
