<template>
  <div id="app">
    <Navbar />
    <Footer />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "App",
  components: {
    Navbar,
    Footer,
  },
};
</script>

<style>
@font-face {
  font-family: "FuturaCondensedExtraBold";
  src: url(./../public/assets/font/FuturaCondensedExtraBold.otf);
}

@font-face {
  font-family: "FuturaBold";
  src: url(./../public/assets/font/unicode.futurab.ttf);
}

@font-face {
  font-family: "FuturaExtraBold";
  src: url(./../public/assets/font/futura-extra-bold.ttf);
}

body,
nav.navbar,
html {
  background-color: #2f8b97 !important;
  overflow-x: hidden;
}
h1,
h2,
h3,
h4 {
  font-family: "FuturaCondensedExtraBold";
}
</style>