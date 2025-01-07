<template>
  <div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white flex flex-col">
    <BaseHeader />

    <div class="flex flex-1 items-center justify-center">
      <div class="w-full max-w-4xl p-8 bg-white text-gray-900 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-center mb-4 text-blue-600">
          Üdvözlünk a ChampionApp-ban!
        </h1>
        <p class="text-center text-gray-500 mb-6">
          A ChampionApp egy egyszerű és hatékony eszköz, amely lehetővé teszi a hősök megtekintését és új hősök létrehozását. 
          Fedezd fel az összes elérhető karaktert, tanulmányozd az erősségeiket és gyengeségeiket, vagy alkoss egyedi hősöket!
        </p>

        <div class="mb-8">
          <h2 class="text-xl font-semibold text-blue-600 mb-4">Miért válaszd a ChampionApp-ot?</h2>
          <ul class="list-disc list-inside text-gray-700">
            <li class="mb-2">Bajnokok teljes listája, részletes adatokkal és képességekkel.</li>
            <li class="mb-2">Egyedi bajnokok létrehozása egyszerűen, néhány kattintással.</li>
            <li class="mb-2">Felhasználóbarát felület, amely kezdők és haladók számára is tökéletes.</li>
            <li>Könnyű integráció csapatod játékstratégiájába.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BaseHeader from '../components/layout/BaseHeader.vue';

export default {
  components: {
    BaseHeader,
  },
}

</script>