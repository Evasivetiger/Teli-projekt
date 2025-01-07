<template>
  <h1 class="text-4xl text-center text-[#006ab1] mb-6">Hős módosítása</h1>
  <div class="max-w-lg mx-auto mt-12 p-8 bg-gray-900 rounded-md">
    <FormKit 
      type="form" 
      @submit="handleSubmit" 
      class="space-y-6"
    >
      <FormKit 
        name="name" 
        type="text" 
        label="Hős neve" 
        validation="required|text" 
        v-model="champ.name"
        input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        label-class="block text-gray-700 dark:text-gray-300 font-medium"
      />
      
      <FormKit 
        name="primary_role" 
        type="text" 
        label="Elsődleges szerepe" 
        validation="required|text" 
        v-model="champ.primary_role"
        input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        label-class="block text-gray-700 dark:text-gray-300 font-medium"
      />
      
      <FormKit 
        name="secondary_role" 
        type="text" 
        label="Másodlagos szerepe" 
        validation="required|text" 
        v-model="champ.secondary_role"
        input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        label-class="block text-gray-700 dark:text-gray-300 font-medium"
      />
      <FormKit 
        name="base_hp" 
        type="text" 
        label="Kezdő HP-ja" 
        validation="required|text" 
        v-model="champ.base_hp"
        input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        label-class="block text-gray-700 dark:text-gray-300 font-medium"
      />
      
      <FormKit 
        name="base_mana" 
        type="text" 
        label="Kezdő manája" 
        validation="required|text" 
        v-model="champ.base_mana"
        input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        label-class="block text-gray-700 dark:text-gray-300 font-medium"
      />
      
      <FormKit 
        type="submit" 
        label="Módosítás mentése" 
        input-class="w-full py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold rounded-md shadow-md hover:bg-gradient-to-r hover:from-blue-600 hover:to-blue-700 transition-all duration-300"
      />
    </FormKit>
  </div>
</template>
<script>
import { http } from '@utils/http.mjs';
import { useRoute, useRouter } from 'vue-router';

export default {
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
        this.$router.push("/champions");
        //this.$router.push({ name: 'showchamp', params: { id: this.champ.id } });
      } catch (error) {
        console.error('Hiba történt a módosítás során:', error);
        alert('Hiba történt a módosítás során!');
      }
    },
  },
};
</script>