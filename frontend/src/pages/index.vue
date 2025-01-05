<template>
  <div>
    <BaseHeader></BaseHeader>
  </div>
</template>

<script>
import {RouterLink} from 'vue-router'
import { http } from '@utils/http.mjs'
import BaseHeader from '../components/layout/BaseHeader.vue';

export default {
  data() {
    return {
      data: [],
    }
  },
  components: {
    BaseHeader,
    RouterLink,
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
    "name": "fooldal",
    "meta":{
      "title": "Főoldal"
    }
  }
</route>
