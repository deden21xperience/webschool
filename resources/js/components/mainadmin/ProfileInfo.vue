<template>
  <div>
    <h1>halaman Profile Info</h1>
    <div class="card-panel">
      <h4 class="header2">Identitas Sekolah</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12" v-for="(val, key) in namaLabel" :key="val">
              <input :id="key" type="text" />
              <label :for="key">{{val}}</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select>
                <option value disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Materialize Select</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input type="file" id="logo" />
              <label for="logo"></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type="file" id="favicon" />
              <label for="favicon"></label>
            </div>
          </div>
          <div class="row">
            <div class="row">
              <div class="input-field col s12">
                <button class="btn waves-effect waves-light right" type="submit" name="action">
                  Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "profileinfo",
  data() {
    return {
      namaLabel: {
        kode: "Kode",
        judul: "Judul",
        nama: "Nama",
        telepon: "Telepon",
        email: "Email",
        website: "Website",
        kepalasekolah: "Kepala sekolah"
        // "logo",
        // "favicon"
      }
    };
  }
};
</script>

<style>
</style>