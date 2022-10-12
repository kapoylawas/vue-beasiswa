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
                    Kembali Ke Login Siswa</Link
                >
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h5><i class="fa fa-file-pdf"></i> Alur Register Beasiswa</h5>
                        <hr />
                        1. <i>Registrasi Akun</i>
                            <br>
                        2. <i>Login Masuk Sistem</i>
                            <br>
                        3. <i>Pilih Jenis Beasiswa</i>
                            <br>
                        4. <i>Isi Form Yang Udah di Sesuaikan</i>
                            <br>
                        5. <i>Tunggu Info selanjuatnya</i>
                    </div>
                </div>
                <Link
                    href="/register/create"
                    class="btn btn-md btn-primary border-0 shadow mt-3"
                    type="button"
                    ><i class="fa fa-long-arrow-alt-right me-2"></i>
                    Lanjut Registrasi</Link
                >
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
    },

    data() {
        return {
            isActive: false,
        };
    },    
};
</script>

<style></style>
