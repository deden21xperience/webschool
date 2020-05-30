<template>
  <nav>
    <ul>
      <li>
        <a href="http://school.test">Home</a>
        <!-- <a href="/">Home</a> -->
      </li>
      <li>
        <router-link :to="{name: 'login'}">Login</router-link>
      </li>
      <li>
        <router-link :to="{name: 'register'}">Register</router-link>
      </li>
      <li>
        <router-link :to="{name: 'formulirPendaftaran'}">Formulir</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "app-header"
};
</script>

<style>
</style>