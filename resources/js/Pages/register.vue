<template>
<v-app>
<v-main>
    <div class="d-flex justify-center">
    <v-card elevation="2" width="400" height="600" class="mt-15">
       <div class="text-center">
        <span> LOGIN </span>
       </div>
        <v-card-text>
            <v-form>
            <v-text-field :error-messages="errors.nama" label="Nama Lengkap" v-model="form.nama"></v-text-field>
            <v-text-field :error-messages="errors.nik" label="NIK" v-model="form.nik"></v-text-field>
            <v-text-field :error-messages="errors.tlp" label="Nomor Handphone" v-model="form.tlp"></v-text-field>
            <v-text-field :error-messages="errors.username" label="Username" v-model="form.username"></v-text-field>
            <v-text-field :error-messages="errors.password"
            label="Password"
            type="password"
            v-model="form.password"
            ></v-text-field>
            <v-btn block color="primary" @click="register">register</v-btn>
        <div class="mt-5">
            <v-btn elevation="2" small x-small @click="login">login</v-btn>
        </div>
            </v-form>
        </v-card-text>
        </v-card>
        </div>
</v-main>
</v-app>
</template>

<script>
import {router} from '@inertiajs/vue3'
export default {
    props:{
        errors:Object
    },
data(){
    return{
        form:{
            nama:"",
            nik:"",
            hp:"",
            username:"",
            password:"",
        }
    }

},
methods:{
        login(){
            router.get('/')
        },
        register(){
            router.post('/register', this.form)
        }
    }
}
</script>

<style>

</style>
