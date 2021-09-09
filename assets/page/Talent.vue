<template>
  <b-container fluid>
    <SlideAlgerie />
    <!-- <div class="parallax mx-0 d-none d-md-block"></div> -->
    <b-container class="talent">
      <h1 class="text-center">
        <span class="point">.</span><span class="accolade">{</span>OneTwoSkills
        <span class="accolade">}</span>
      </h1>

      <div class="text-center pt-5">
        <h2>{ Rejoindre la team OTF }</h2>
        <p>Want to be Free ?</p>
        <p>Tu es Free-lance, rejoins la famille Free</p>
        <p>Merlin l'enchanteur t'attend !</p>
      </div>
      <b-row class="py-2">
        <b-col>
          <img
            class="des mt-3 ml-3"
            src="../../public/assets/image/3dés.png"
            alt="illustration talent onetwofree agence"
          />
        </b-col>
        <b-col>
          <img
            class="form1"
            src="../../public/assets/image/capturecandidats.png"
            alt="capture formulaire candidat"
          />
        </b-col>
      </b-row>
    </b-container>
  </b-container>
</template>

<script>
import SlideAlgerie from "../components/SlideAlgerie.vue";

export default {
  components: {
    SlideAlgerie,
  },
};
</script>

<style scoped>
.parallax {
  /* The image used */
  background-image: url("../../public/assets/image/slideone-algerie.png");
  /* Set a specific height */
  min-height: 300px;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
h1,
h2 {
  color: #2f8b97;
}
h3 {
  color: #fbd200;
}
/* img {
  width: 300px;
} */
.talent {
  background-color: #ffffff;
}
.accolade {
  color: #fbd100;
}
.point {
  color: #308c99;
}
.form1 {
  width: 100%;
}
.des {
  width: 200px;
}
</style>