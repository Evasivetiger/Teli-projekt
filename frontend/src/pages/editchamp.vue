<template>
      <h1 class="text-4xl text-center text-[#006ab1] mb-6">Hős módosítása</h1>
      <div class="max-w-lg mx-auto mt-12 p-8 bg-gray-900 rounded-md">
        <FormKit 
          type="form" 
          @submit="handleSubmit" 
          :initial-value="champ"
          class="space-y-6"
        >
          <FormKit 
            name="name" 
            type="text" 
            label="Hős neve" 
            validation="required|text" 
            input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
            label-class="block text-gray-700 dark:text-gray-300 font-medium"
          />
          
          <FormKit 
            name="primary_role" 
            type="text" 
            label="Elsődleges szerepe" 
            validation="required|text" 
            input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
            label-class="block text-gray-700 dark:text-gray-300 font-medium"
          />
          
          <FormKit 
            name="secondary_role" 
            type="text" 
            label="Másodlagos szerepe" 
            validation="required|text" 
            input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
            label-class="block text-gray-700 dark:text-gray-300 font-medium"
          />
          <FormKit 
            name="base_hp" 
            type="text" 
            label="Kezdő HP-ja" 
            validation="required|text" 
            input-class="w-full px-3 py-2 border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
            label-class="block text-gray-700 dark:text-gray-300 font-medium"
          />
          
          <FormKit 
            name="base_mana" 
            type="text" 
            label="Kezdő manája" 
            validation="required|text" 
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
    const route = useRoute();
    await this.fetchChamp(route.params.id);
  },
  methods: {
    async fetchChamp(id) {
      try {
        const response = await http.get(`/champions/${id}`);
        this.champ = response.data.data;
      } catch (error) {
        console.error('Hiba történt a karakter betöltésekor:', error);
      }
    },
    async handleSubmit(data) {
      try {
        const route = useRoute();
        const response = await http.put(`/champions/${route.params.id}`, {
                name: data.name,
                primary_role: data.primary_role,
                secondary_role: data.secondary_role,
                base_hp: data.base_hp,
                base_mana: data.base_mana,
        });
        console.log('Sikeres módosítás:', response.data);
        this.$router.push({ name: 'showchamp', params: { id: route.params.id } });
      } catch (error) {
        console.error('Hiba történt a módosítás során:', error);
        alert('Hiba történt a módosítás során!');
      }
    },
  },
};
</script>