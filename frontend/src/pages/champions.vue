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
          
          <td><RouterLink class="bg-blue-600 text-white p-4 rounded w-2/12" :to='{name:"edit",params: {id:champ.id}}'>Módosítás</RouterLink></td>
          <td><button type="button" class="bg-red-500 text-white p-4 rounded w-2/12" @click="deleteChamp(champ.id)">Törlés</button></td>
        </tr>
      </tbody>
    </table>
  </div>
    </BaseLayout>
  </template>
  
  <script>
  import BaseLayout from '@layouts/BaseLayout.vue'
  import { http } from '@utils/http.mjs'
import { RouterLink } from 'vue-router';
  
  export default {
    data() {
      return {
        data:[],
        champs:{
                name: '',
                primary_role: '',
                secondary_role: '',
                base_hp: '',
                base_mana: '',
        }
      }
    },
    components: {
      BaseLayout
    },
    methods: {
      async getData() {
        const response = await http.get('/champions')
        this.data = response.data.data
      },
      async getChamp() {
            const response = await http.get(`/champions/${this.$route.params.id}`)
            this.champs.name = response.data.data.name
            this.champs.primary_role = response.data.data.primary_role
            this.champs.secondary_role = response.data.data.secondary_role
            this.champs.base_hp = response.data.data.base_hp
            this.champs.base_mana = response.data.data.base_mana
            console.log(response.data.data)
            console.log(this.champs.name)

        },
        async deleteChamp(id){
            const response = await http.delete(`champions/${id}`)
            window.location.replace('champions')
        },
        Redirect(){
          window.location.replace('edit')
        }
    },
    async mounted() {
      await this.getData()
    }
  }
  
  </script>