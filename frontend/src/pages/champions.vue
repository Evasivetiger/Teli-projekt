<template>
    <BaseLayout>
        <div class="overflow-auto rounded shadow my-10">
    <table class="w-full">
      <thead class="bg-gray-500 border-b-2">
        <tr>
          <th class="p-3 text-sm font-semibold text-left">Név</th>
          <th class="p-3 text-sm font-semibold text-left">Elsődleges szerep</th>
          <th class="p-3 text-sm font-semibold text-left">Másodlagos szerep</th>
          <th class="p-3 text-sm font-semibold text-left">Kezdő HP</th>
          <th class="p-3 text-sm font-semibold text-left">Kezdő mana</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <tr class="odd:bg-white even:bg-gray-50" v-for="champ in this.data">

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ champ.name }}</td>
          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ champ.primary_role }}</td>
          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ champ.secondary_role }}</td>
          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ champ.base_hp }}</td>
          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">{{ champ.base_mana }}</td>
        
        </tr>
      </tbody>
    </table>
  </div>
    </BaseLayout>
  </template>
  
  <script>
  import BaseLayout from '@layouts/BaseLayout.vue'
  import { http } from '@utils/http.mjs'
  
  export default {
    data() {
      return {
        data: [],
      }
    },
    components: {
      BaseLayout
    },
    methods: {
      async getData() {
        const response = await http.get('/champions')
        this.data = response.data.data
      }
    },
    async mounted() {
      await this.getData()
    }
  }
  
  </script>
  
  <route lang="json">
    {
      "name": "hosok",
      "meta":{
        "title": "Hősök"
      }
    }
  </route>
  