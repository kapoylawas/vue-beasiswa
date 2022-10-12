<template>
    <nav
        class="navbar navbar-expand-lg navbar-dark navbar-theme-primary mb-4 shadow"
    >
        <div class="container">
            <!-- Navbar brand -->
            <Link href="/">
                <a class="navbar-brand me-2">
                    <img
                        class="navbar-brand-dark"
                        src="/assets/images/education.png"
                        height="16"
                        loading="lazy"
                        style="margin-top: -1px"
                    />
                </a>
            </Link>

            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample"
                aria-controls="navbarButtonsExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <form class="d-flex">
                        
                    </form>
                    
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0"></ul>
                        <form class="d-flex" v-if="$page.props.auth.student">
                            <Link
                                href="/logout"
                                method="POST"
                                class="btn btn-secondary shadow"
                                as="button"
                                >LOGOUT</Link
                            >
                        </form>
                    </div>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
    </nav>
    <div class="container">
        <slot />
    </div>
</template>

<script>
//import Link
import { Link } from "@inertiajs/inertia-vue3";

export default {
    //register components
    components: {
        Link,
    },
};
</script>

<style></style>
