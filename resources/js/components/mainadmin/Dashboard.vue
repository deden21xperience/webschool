<template>
  <div>
    <h1>Halaman Dashboard</h1>
    <p>{{ welcome }}</p>
    <!-- {{ cek[0] }} -->
    <table>
      <thead>
        <tr>
          <!-- <th v-for="cek1 in cek" :key="cek1">{{ cek1 }}</th> -->
          <th>#id</th>
          <th>Name</th>
          <th>Photo</th>
          <th>Tgl Lahir</th>
          <th>JK</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="dt in info" :key="dt.id">
          <td>{{ dt.id }}</td>
          <td>{{ dt.nama }}</td>
          <td>
            <img :src="baseUrl + '/' +dt.photo" alt />
          </td>
          <td>{{ dt.tgl_lahir }}</td>
          <td>{{ dt.jenis_kel }}</td>
        </tr>
      </tbody>
    </table>
    <!-- {{cek}} -->
  </div>
</template>

<script>
// import M from "materialize-css";
import axios from "axios";
export default {
  name: "dashboard",
  data() {
    return {
      info: null,
      cek: [],
      baseUrl: this.$route.config
    };
  },
  computed: {
    welcome() {
      return this.$store.state.welcomeMessage;
    }
  },
  mounted() {
    // let tes = localStorage.getItem("key");
    // const url = "http://dummy.restapiexample.com/api/v1/employees";
    const url = "http://school.test/api/wargasekolah";
    // if (tes == null) {
    axios
      .get(url)
      .then(response => {
        console.log(response);
        // this.baseUrl = response.config.url;
        this.info = response.data;
        // this.photo = this.info.photo;
        // var tes1 = this.info;
        // tes1 = JSON.stringify(this.info);
        // localStorage.setItem("key", tes1);
      })
      .catch(error => {
        console.log(error);
      });
    // } else {
    //   this.info = JSON.parse(tes);
    //   this.cek = this.isiKolom(this.info);
    // }
  },
  methods: {
    isiKolom: tes => {
      // tes.forEach(element => {
      //   console.log(element);
      // });
      // console.log(tes[0]);
      var tes = Object.keys(tes[0]);
      // console.log(tes);
      let obj = [];
      tes.forEach(element => {
        obj.push(element);
        // console.log(element);
      });
      return obj;
    }
  }
};
</script>

<style>
</style>