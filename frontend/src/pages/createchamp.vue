<template>
    <div>
      <BaseHeader></BaseHeader>
      <FormKit
    type="form"
    id="registration-example"
    :form-class="submitted ? 'hide' : 'show'"
    submit-label="Register"
    @submit="submit"
    :actions="false"
    #default="{ value }"
  >
 <div class="container mx-auto bg-gray-700">
    <h1 class="text-2xl font-bold mb-2">Hős hozzáadása</h1>
    <p class="text-sm mb-4">
      Adj az adatbázishoz bármilyen hőst!
    </p>
    <FormKit
      type="text"
      name="name"
      label="A hős neve"
      placeholder="Ashe"
      validation="required"
    />
    <FormKit
      type="text"
      name="primary_role"
      label="A hős elsődleges szerepe"
      placeholder="adc"
      validation="required"
    />
    <FormKit
      type="text"
      name="secondary_role"
      label="A hős másodlagos szerepe"
      placeholder="top vagy tank"
      validation="required"
    />
    <FormKit
      type="text"
      name="base_hp"
      label="A hős kezdő HP-ja"
      placeholder="700"
      validation="required"
    />
    <FormKit
      type="text"
      name="base_mana"
      label="A hős kezdő manája"
      placeholder="240"
      validation="required"
    />

    <FormKit type="submit" label="hozzáad" />
</div>
  </FormKit>
    </div>

  </template>
  
  <script>
  import {RouterLink} from 'vue-router'
  import BaseHeader from '../components/layout/BaseHeader.vue';
 import { FormKit } from '@formkit/vue';
 import { http } from '@utils/http.mjs';

  
  export default {
    data() {
      return {
        data: [],
      }
    },
    components: {
      BaseHeader,
      FormKit,
    },
    methods: {
        async submit(data){
            try {
                const response = await http.post("champions", data);
                console.log("sikerült");
                this.$router.push("/champions");

            } catch (error) {
                console.error(error);
            }
        }
    },
    async mounted() {
    }
  }
  
  </script> 