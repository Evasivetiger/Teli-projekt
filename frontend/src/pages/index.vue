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
  components: {
    BaseHeader,
  },
}

</script>