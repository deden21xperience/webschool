<template>
  <div>
    <nav>
      <a href="#" class="brand-logo">Pendaftaran Online</a>
      <div class="nav-wrapper">
        <ul class="right hide-on-med-and-down">
          <li>
            <a href="http://school.test">Home</a>
          </li>
          <li>
            <router-link :to="{name: 'beranda'}">Beranda</router-link>
          </li>
          <li>
            <router-link to="#">Tim Register</router-link>
          </li>
          <li>
            <router-link :to="{name: 'formulirPendaftaran'}">Daftar Online</router-link>
          </li>
          <li>
            <router-link :to="{name: 'login'}">Login</router-link>
          </li>
          <li>
            <router-link :to="{name: 'register'}">Register</router-link>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  name: "main-ppdb"
};
</script>

<style>
</style>