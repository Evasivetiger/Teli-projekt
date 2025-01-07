<template>
  <BaseHeader/>
  <div class="mt-4 min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white flex items-center justify-center">
    <div class="w-full max-w-lg p-8 bg-white text-gray-900 rounded-lg shadow-lg">
      <h1 class="text-2xl font-semibold text-center mb-4 text-blue-600">
        Hős módosítása
      </h1>
      <FormKit
        type="form"
        @submit="handleSubmit"
        class="space-y-6"
      >
        
        <FormKit
          name="name"
          type="text"
          label="Hős neve"
          v-model="champ.name"
          validation="required|text"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          name="primary_role"
          type="text"
          label="Elsődleges szerepe"
          v-model="champ.primary_role"
          validation="required|text"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          name="secondary_role"
          type="text"
          label="Másodlagos szerepe"
          v-model="champ.secondary_role"
          validation="required|text"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          name="base_hp"
          type="text"
          label="Kezdő HP-ja"
          v-model="champ.base_hp"
          validation="required|text"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          name="base_mana"
          type="text"
          label="Kezdő manája"
          v-model="champ.base_mana"
          validation="required|text"
          class="block"
          input-class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
          label-class="block text-gray-700 font-medium mt-2"
        />
        
        <FormKit
          type="submit"
          label="Módosítás mentése"
          input-class="mt-4 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-blue-700 transition-all duration-300"
        />
      </FormKit>
    </div>
  </div>
</template>

<script>
import { FormKit } from '@formkit/vue';
import { http } from '@utils/http.mjs';
import { useRoute, useRouter } from 'vue-router';
import BaseHeader from '../components/layout/BaseHeader.vue';

export default {
  components:{
    BaseHeader
  },
  data() {
    return {
      champ: {
        name: '',
        primary_role: '',
        secondary_role: '',
        base_hp: '',
        base_mana: '',
      },
    };
  },
  async mounted() {
    await this.fetchChamp();
  },
  methods: {
    async fetchChamp() {
      const route = useRoute();
      try {
        const response = await http.get(`/champions/${route.params.id}`);
        this.champ = response.data.data;
      } catch (error) {
        console.error('Hiba történt a karakter betöltésekor:', error);
      }
    },
    async handleSubmit() {
      const route = useRoute();
      try {
        const response = await http.patch(`/champions/${this.champ.id}`, this.champ);
        console.log('Sikeres módosítás:', response.data);
        this.$router.push('/champions');
      } catch (error) {
        console.error('Hiba történt a módosítás során:', error);
        alert('Hiba történt a módosítás során!');
      }
    },
  },
};
</script>