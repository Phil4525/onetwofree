<template>
  <b-container fluid>
    <b-container>
      <h1 class="text-center text-white">
        <span>{</span> Développement et Code Sur-Mesure
        <span>}</span>
      </h1>
      <h2 class="text-center">by R. TOMIC et P. MARIOU</h2>

      <b-row>
        <b-col class="text-white">
          <h3 class="text-center">
            Réalisation et mise en ligne du site web (en responsive design :
            adapté à tous les supports de navigation)
          </h3>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sunt in
            est placeat, atque ullam molestiae impedit dignissimos minima quia
            blanditiis beatae. Beatae odio quisquam recusandae earum error minus
            distinctio!
          </p>
        </b-col>
      </b-row>

      <b-row class="mb-5">
        <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible1 = true"
              class="creation2"
              src="../../public/assets/image/hightechResponsive.png"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible1" @close="isModalVisible1 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Refonte site, Création Charte graphique</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Responsive Site Web</p>
        </b-col>
        <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
          <button type="button" class="btn">
            <img
              @click="isModalVisible2 = true"
              class="creation2"
              src="../../public/assets/image/RefonteSite.png"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible2" @close="isModalVisible2 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Ici les infos de contact</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Refonte Site Web</p>
        </b-col>
      </b-row>
      <b-row>
        <b-col class="clients" data-aos="fade-right" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible3 = true"
              class="creation2"
              src="../../public/assets/image/ResponsiveWeb.png"
              alt="photo production pour client"
            />
          </button>
          <Modal v-show="isModalVisible3" @close="isModalVisible3 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Création supports visuels</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>CMS - Framework</p>
        </b-col>
        <b-col class="clients" data-aos="fade-left" aos-init aos-animate>
          <button type="button" class="btn" @click="showModal">
            <img
              @click="isModalVisible4 = true"
              class="creation2"
              src="../../public/assets/image/web-design.jpg"
              alt="photo production pour le client"
            />
          </button>
          <Modal v-show="isModalVisible4" @close="isModalVisible4 = false">
            <template v-slot:header>
              <h1>Le titre de ma page</h1>
            </template>
            <template v-slot:body>
              <p>Création contenus pour la radio</p>
            </template>
            <template v-slot:footer>
              <p>Ici les infos de contact</p>
            </template>
          </Modal>
          <p>Design Web : UX/UI</p>
        </b-col>
      </b-row>
    </b-container>
  </b-container>
</template>

<script>
import Modal from "../components/Modal";
import AOS from "aos";
import "aos/dist/aos.css";
// import SlideClient from "../components/SlideClient.vue";

export default {
  components: {
    Modal,
    // SlideClient,
  },
  created() {
    AOS.init();
  },
  data() {
    return {
      isModalVisible1: false,
      isModalVisible2: false,
      isModalVisible3: false,
      isModalVisible4: false,
      isModalVisible5: false,
      isModalVisible6: false,
      isModalVisible7: false,
      isModalVisible8: false,
    };
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },
};
</script>


<style scoped>
.creation {
  width: 350px;
}
.creation2 {
  width: 250px;
}
</style>