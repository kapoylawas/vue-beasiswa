<template>
    <Head>
        <title>Dashboard Siswa - Aplikasi Form</title>
    </Head>

    <div class="col-md-12">
        <div class="alert alert-success border-0 shadow">
            Selamat Datang <strong> {{ auth.student.id }} </strong>
        </div>
    </div>

    <div class="card border-0 shadow">
        <div class="card-body">
            <h5><i class="fa fa-user"></i> Register Siswa</h5>
            <hr />
            <form @submit.prevent="submit">
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="fw-bold">Id </label>
                            <input class="form-control" v-model="form.student_id" :class="{ 'is-invalid': errors.student_id }" type="text" placeholder="Category Name">
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label>Upload Berkas</label>
                            <input
                                class="form-control"
                                @input="form.berkas = $event.target.files[0]"
                                :class="{ 'is-invalid': errors.berkas }"
                                type="file"
                            />
                            <div v-if="errors.berkas" class="alert alert-danger mt-2">
                                {{ errors.berkas }}
                            </div>
                        </div>
                    </div>
                </div>

                <button
                    type="submit"
                    class="btn btn-md btn-primary border-0 shadow me-2"
                >
                    Simpan
                </button>
                <button
                    type="reset"
                    class="btn btn-md btn-warning border-0 shadow"
                >
                    Reset
                </button>
            </form>
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
        auth: Object,
    },

    //inisialisasi composition API
    setup() {
        //define form with reactive
        const form = reactive({
            berkas: "",
            // student_id: ""
        });

        //method "submit"
        const submit = () => {

        //send data to server
        Inertia.post('/student/forms', {
            //data
            berkas: form.berkas,
            // student_id: form.student_id
        }, {
            onSuccess: () => {
                //show success alert
                Swal.fire({
                    title: 'Success!',
                    text: 'berkas Berhasil Disimpan!.',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                });
            },
        });
        }

        //return
        return {
            form,
            submit,
        };
    },
};
</script>
