<template>
    <Head>
        <title>Register - Aplikasi Beasiswa</title>
    </Head>
    <div class="container-fluid mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <Link
                    href="/"
                    class="btn btn-md btn-primary border-0 shadow mb-3"
                    type="button"
                    ><i class="fa fa-long-arrow-alt-left me-2"></i>
                    Kembali Ke Dashboard Siswa</Link
                >
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5><i class="fa fa-file-pdf"></i> Data Register Beasiswa</h5>
                        <br>
                        <div v-if="user">{{ user.student.name }} </div>
                        <div v-if="user">
                            {{ user.berkas }}
                            
                        </div>
                    </div>
                </div>
                <div v-if="!user">
                    <Link
                        href="/student/forms/create"
                        class="btn btn-md btn-primary border-0 shadow mt-3"
                        type="button"
                        ><i class="fa fa-long-arrow-alt-right me-2"></i>
                        Isi Form
                    </Link>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
//import layout
import LayoutStudent from "../../../Layouts/Student.vue";

//import Heade and Link from Inertia
import { Head, Link } from "@inertiajs/inertia-vue3";

//import reactive from vue
import { reactive } from "vue";

//import inerita adapter
import { Inertia } from "@inertiajs/inertia";

//import sweet alert2
import Swal from "sweetalert2";


export default {
    //layout
    layout: LayoutStudent,

    //register component
    components: {
        Head,
        Link,
    },

    //props
    props: {
        errors: Object,
        classrooms: Array,
        user: Object
    },

    data() {
        return {
            isActive: false,
        };
    },    
};
</script>

<style></style>
