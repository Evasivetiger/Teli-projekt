<template>
    <BaseHeader/>
    <div class="mt-3 min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white flex items-center justify-center">
    <div class="w-full max-w-lg p-8 bg-white text-gray-900 rounded-lg shadow-lg">
      <h1 class="text-2xl font-semibold text-center mb-4 text-blue-600">Hős hozzáadása</h1>
      <p class="text-sm text-center text-gray-500 mb-6">
        Adj hozzá egy új hőst az adatbázishoz a lentiek kitöltésével.
      </p>
      <FormKit
        type="form"
        id="hero-add-form"
        @submit="submit"
        class="space-y-6"
      >
        
        <FormKit
          type="text"
          name="name"
          label="Hős neve"
          placeholder="Pl.: Ashe"
          validation="required"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="text"
          name="primary_role"
          label="Elsődleges szerep"
          placeholder="Pl.: ADC"
          validation="required"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="text"
          name="secondary_role"
          label="Másodlagos szerep"
          placeholder="Pl.: Top"
          validation="required"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="text"
          name="base_hp"
          label="Kezdő HP"
          placeholder="Pl.: 700"
          validation="required"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="text"
          name="base_mana"
          label="Kezdő Mana"
          placeholder="Pl.: 240"
          validation="required"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="submit"
          label="Hozzáadás"
          input-class="mt-4 w-full py-3 text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-md hover:from-blue-600 hover:to-blue-700 transition duration-300"
        />
      </FormKit>
    </div>
  </div>
</template>

<script>
import { FormKit } from '@formkit/vue';
import { http } from '@utils/http.mjs';
import BaseHeader from '../components/layout/BaseHeader.vue';


export default {
  components: {
    FormKit,
    BaseHeader
  },
  methods: {
    async submit(data) {
      try {
        const response = await http.post('champions', data);
        console.log('Sikeres hozzáadás:', response.data);
        this.$router.push('/champions');
      } catch (error) {
        console.error('Hiba történt a hozzáadás során:', error);
        alert('Hiba történt, próbáld újra!');
      }
    },
  },
};
</script>